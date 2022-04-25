<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\SurgicalSchedule\LocationSchedule;
use App\Models\SurgicalSchedule\SurgicalSchedule;
use App\Models\SurgicalSchedule\SurgicalScheduleEvent;
use App\Models\SurgicalSchedule\SurgicalScheduleTeam;
use App\Models\SurgicalSchedule\SurgicalScheduleDevice;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SurgicalScheduleController extends Controller
{
    private $hours = [
        '01:00',
        '02:00',
        '03:00',
        '04:00',
        '05:00',
        '06:00',
        '07:00',
        '08:00',
        '09:00',
        '10:00',
        '11:00',
        '12:00',
        '13:00',
        '14:00',
        '15:00',
        '16:00',
        '17:00',
        '18:00',
        '19:00',
        '20:00',
        '21:00',
        '22:00',
        '23:00',
        '24:00',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date = $request->date ?? date('Y-m-d');
        $locationScheduleArray = [];

        $day = Carbon::parse(date($date))->format('l');
        $locationSchedule = LocationSchedule::where('status',true)
                                ->where('to','>=',date('Y-m-d'))
                                ->with('location')
                                ->get();
        foreach ($locationSchedule as $schedule) {
            foreach ($schedule->location->hours_of_operation as $hours) {
                if($hours->daysOfWeek == strtolower(substr($day,0,3))) {
                    $locationScheduleArray[] = $schedule->location;
                }
            }
        }
        $hours = $this->hours;

        //cancelaciones
        $canceled = SurgicalSchedule::where('status','cancelado')
                                ->where('date',$date)
                                ->with('location')
                                ->get();

        return view('surgical_schedule.index',compact('locationScheduleArray','hours','date','canceled'));
    }

    public function edit(SurgicalSchedule $location){
        $schedule = $location;
        $scheduleDayHours = [];
        $day = Carbon::parse(date($schedule->date))->format('l');

        foreach ($schedule->location->hours_of_operation as $hours) {
            if($hours->daysOfWeek == strtolower(substr($day,0,3))) {
                $scheduleDayHours[] = $hours;
            }
        }
        $arr = [];
        for ($i=intval($hours->openingTime); $i <= intval($hours->closingTime); $i++) {
            $arr[] = $i;
        }
        foreach ($arr as $key => $hora) {
            if ($schedule->from == $hora)
            {
                unset($arr[$key]);
            }
            if ($schedule->to == $hora)
            {
                unset($arr[$key]);
            }
        }
        //dd($arr);
        return view('surgical_schedule.show',compact('schedule','scheduleDayHours'));
    }

    public function update(Request $request){
        SurgicalScheduleEvent::create([
            'observations' => $request->event_observations,
            'surgical_schedule_id' => $request->schedule,
            'user_id' => Auth()->user()->id
        ]);
        $schedule = SurgicalSchedule::find($request->schedule);
        $schedule->status = $request->status;
        $schedule->save();
        return view('surgical_schedule.show',compact('schedule'));
    }

    public function listPavilions()
    {
        $pavilions = Location::pavilion()
        ->active()
        ->get();
        return view('surgical_schedule.open_pavilion', compact('pavilions'));

    }
    public function openPavilion(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'locations' => 'required',
            'from' => 'required|date_format:Y-m-d',
            'to' => 'required|date_format:Y-m-d|after:from',
        ],[
            'locations.required' => 'Seleccione un pabellon',
            'to.after'    => 'La fecha final debe ser mayor a la de inicio',
        ]);

        foreach ($request->locations as $location_id) {
            $location = Location::find($location_id);
            if($location)
            {
                if ($location->pavilion_schedule->where('status',0)->count() > 0)
                {
                    foreach ($location->pavilion_schedule as $pavilion_schedule) {
                        $pavilion_schedule->status = 0;
                        $pavilion_schedule->save();
                    }
                }
                LocationSchedule::Create(
                    [
                        'location_id' => $location->id,
                        'from' => $request->from,
                        'to' => $request->to,
                    ]
                );

            }
        }

        return redirect()->route('surgical_schedule.pavilions')->with('success','Pabellón aperturado exitosamente');
    }

    public function asignPavilions(Request $request)
    {
        $location = Location::find($request->location);
        $date = $request->date;
        $hour = $request->hour;
        $day = Carbon::parse(date($date))->format('l');
        $maxEndTime = $location->hours_of_operation->where('daysOfWeek',strtolower(substr($day,0,3)))->first()->closingTime;
        $maxEndTime = (intval($maxEndTime) == intval($hour) ? $hour : $maxEndTime) ;
        return view('surgical_schedule.create',compact('location','date','hour','maxEndTime'));
    }

    public function storeAsignPavilions(Request $request)
    {
        $request->validate([
            'pacient' => 'required',
            'start' => 'required',
            'end' => 'required|gt:start',
        ],[
            'pacient.required' => 'Seleccione un paciente(previa búsqueda)',
            'end.after'    => 'La hora de finalización debe ser mayor a la de inicio',
        ]);
        $surgicalschedule = SurgicalSchedule::create([
        'location_id' => $request->location_id,
        'date'=>$request->date,
        'from'=>$request->start,
        'to'=>$request->end,
        'pacient_id'=>$request->pacient,
        'observations'=>$request->observations,
        'surgery'=>$request->surgery,
        'preoperative_diagnosis'=>$request->preoperative_diagnosis
        ]);

        if(!empty($request->practitioner_id))
        {
            SurgicalScheduleTeam::create([
                'surgical_schedule_id'=>$surgicalschedule->id,
                'practitioner_id'=>$request->practitioner_id,
                'specialty_id'=>$request->specialty_id,
                'type'=>'Medico'
            ]);
        }
        if($request->personal)
        {
            foreach($request->personal as $items)
            {
                foreach (json_decode($items) as $item) {

                    SurgicalScheduleTeam::create([
                        'surgical_schedule_id'=>$surgicalschedule->id,
                        'practitioner_id'=>$item->practitioners,
                        'specialty_id'=>$item->specialties,
                        'type'=>'Medico'
                    ]);
                }
            }
        }
    //equipamiento
        if(!empty($request->device_id))
        {
            SurgicalScheduleDevice::create([
                'surgical_schedule_id'=>$surgicalschedule->id,
                'device_id'=>$request->device_id,
            ]);
        }
        if($request->devices)
        {
            foreach($request->devices as $items)
            {
                foreach (json_decode($items) as $item) {

                    SurgicalScheduleDevice::create([
                        'surgical_schedule_id'=>$surgicalschedule->id,
                        'device_id'=>$item->device,
                    ]);
                }
            }
        }

        return redirect()->route('surgical_schedule.schedule')->with('success','Pabellón agendado exitosamente');
    }
}
