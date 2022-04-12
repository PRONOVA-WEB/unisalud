<?php

namespace App\Http\Livewire\SurgicalSchedule;

use App\Models\Location;
use App\Models\Device;
use App\Models\MedicalProgrammer\Specialty;
use App\Models\Practitioner;
use App\Models\User;
use App\Models\SurgicalSchedule\SurgicalSchedule;
use App\Models\SurgicalSchedule\SurgicalScheduleDevice;
use Carbon\Carbon;
use Livewire\Component;

class AsignPavilion extends Component
{
    public $run;
    public $name;
    public $user;
    public $appointments;
    public $appointmentsHistory;
    public $selectedAppointments = [];
    public $selectedOverbookingAppointments = [];
    public $profession_id;
    public $type;
    public $specialty_id;
    public $professions;
    public $specialties;
    public $practitioners;
    public $practitioner_id;
    public $appointments_from;
    public $appointments_to;
    public $dv;
    public $locations;
    public $selectedLocationId;
    public $patientInstruction;
    public $interconsultationId;
    public $showList;
    public $showListDevice;
    public $list = [];
    public $listDevice = [];
    public $devices;
    public $device_id;
    public $date;
    public $hour;

    protected $listeners = [
        'userSelected' => 'setUser',
    ];

    public function mount()
    {
        $this->showList = 'd-none';
        $this->showListDevice = 'd-none';
        $this->devices  = Device::active()->get();
        $this->specialties = Specialty::orderBy('specialty_name', 'ASC')->get();

    }

    public function add()
    {
        $this->validate([
            'specialty_id' => 'required',
            'practitioner_id' => 'required',
        ],[
            'specialty_id.required' => 'Seleccione una especialidad / profesión',
            'practitioner_id.required' => 'Seleccione un especialista',
        ]);

        if(array_search($this->practitioner_id, array_column($this->list, 'practitioners')) === false)
        {
            $current  = [
                'specialties' => $this->specialty_id ,
                'practitioners' => $this->practitioner_id,
            ];
            array_push($this->list, $current);

        }
        else
        {
            $this->addError('practitioner_id', 'El especialista ya está en el staff.');
        }
        $this->reset(['profession_id','specialty_id','practitioner_id']);

    }

    public function addDevice()
    {
        $this->validate([
            'device_id' => 'required',
        ],[
            'device_id.required' => 'Seleccione un equipo de la lista',
        ]);

        //valido que el equipo esté disponible
        $date = $this->date;
        $hour = $this->hour;
        $surgicalScheduleDevice = SurgicalScheduleDevice::whereHas('surgical_schedule', function($q) use($date, $hour){
                                    $q->where('date',$date)
                                    ->where('from','<=',$hour)
                                    ->where('to','>=',$hour);
                                })
                                ->first();
        if ($surgicalScheduleDevice && $surgicalScheduleDevice->count() > 0)
        {
            session()->flash('message', 'El equipo se encuentra asignado para el '.$surgicalScheduleDevice->surgical_schedule->location->name.' de '.$surgicalScheduleDevice->surgical_schedule->from.' a '.$surgicalScheduleDevice->surgical_schedule->to);
        }

        if(array_search($this->device_id, array_column($this->listDevice, 'device')) === false)
        {
            $current  = [
                'device' => $this->device_id
            ];

            array_push($this->listDevice, $current);

        }
        else
        {
            $this->addError('device_id', 'El equipo ya se encuentra en la lista.');

        }
        $this->reset(['device_id']);

    }

    public function remove($i)
    {
        unset($this->list[$i]);

    }

    public function removeDevice($i)
    {
        unset($this->listDevice[$i]);

    }

    /**
     * @var Location[]|\Illuminate\Database\Eloquent\Collection|mixed
     */

    public function searchUser()
    {
        if ($this->run) {
            $this->user = User::getUserByRun($this->run);
        } elseif ($this->name) {
            $this->user = User::getUsersByName($this->name)->first();
        }

        if ($this->user) {
            $this->appointmentsHistory = $this->user->appointments()->withTrashed()->get();
        }


        $this->validate(
            [
                'user' => 'required'
            ],
            [
                'user.required' => 'No existe paciente. Intente utilizar la búsqueda avanzada o cree un nuevo paciente.'
            ]
        );
    }

    public function setDv()
    {
        $run = intval($this->run);
        $s = 1;
        for ($m = 0; $run != 0; $run /= 10)
            $s = ($s + $run % 10 * (9 - $m++ % 6)) % 11;
        $this->dv = chr($s ? $s + 47 : 75);
    }

    public function setUser($userId)
    {
        $this->user = User::find($userId);
    }


    public function getPractitioners()
    {
        // $this->specialties = null;
        // $this->professions = null;
        // $this->specialties = Specialty::orderBy('specialty_name', 'ASC')->get();

        $this->practitioners = null;
        if ($this->specialty_id != null) {

            $this->practitioners = Practitioner::where('specialty_id', $this->specialty_id)
                ->get();
        }

        if ($this->profession_id != null) {

            $this->practitioners = Practitioner::whereHas('user', function ($query) {
                return $query->whereHas('userProfessions', function ($query) {
                    return $query->where('profession_id', $this->profession_id);
                });
            })->get();
        }

    }

    public function createPatient($interconsultationId){
        return redirect()->route('patient.create_from_sic', compact('interconsultationId'));
    }

    public function render()
    {
        $this->showList = (!empty($this->list)) ? '' : 'd-none';
        $this->showListDevice = (!empty($this->listDevice)) ? '' : 'd-none';
        return view('livewire.surgical-schedule.asign-pavilion', [
            'personal' => $this->list,
            'equipos' => $this->listDevice,
        ]);
    }
}
