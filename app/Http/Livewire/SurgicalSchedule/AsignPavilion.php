<?php

namespace App\Http\Livewire\SurgicalSchedule;

use App\Models\Location;
use App\Models\MedicalProgrammer\Profession;
use App\Models\MedicalProgrammer\Specialty;
use App\Models\Practitioner;
use App\Models\Some\Appointment;
use App\Models\Some\Sic;
use App\Models\User;
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
    public $list = [];

    protected $listeners = [
        'userSelected' => 'setUser',
    ];

    public function mount($appointmentId = null, $pendingPractitionerId = null, $from = null, $to = null, $interconsultationId = null)
    {
        $this->showList = 'd-none';
    }

    public function add()
    {
        $this->validate([
            'type'  => 'required',
            'specialty_id' => 'required',
            'practitioner_id' => 'required',
        ],[
            'type.required'  => 'Seleccione un tipo',
            'specialty_id.required' => 'Seleccione una especialidad / profesión',
            'practitioner_id.required' => 'Seleccione un especialista',
        ]);
        $current  = [
            'type'  => $this->type,
            'specialties' => $this->specialty_id ?? $this->profession_id,
            'practitioners' => $this->practitioner_id,
        ];
        array_push($this->list, $current);
        $this->reset(['type','profession_id','specialty_id','practitioner_id']);

    }

    public function remove($i)
    {
        unset($this->list[$i]);

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
        $this->specialties = null;
        $this->professions = null;
        if ($this->type != null) {
            if ($this->type == "Médico") {
                $this->specialties = Specialty::orderBy('specialty_name', 'ASC')->get();
            } else {
                $this->professions = Profession::orderBy('profession_name', 'ASC')->get();
            }
        }

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
        return view('livewire.surgical-schedule.asign-pavilion', [
            'personal' => $this->list
        ]);
    }
}
