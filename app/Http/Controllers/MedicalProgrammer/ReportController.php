<?php

namespace App\Http\Controllers\MedicalProgrammer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\MedicalProgrammer\ProgrammingProposal;
use App\Models\MedicalProgrammer\Specialty;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pendingPractitionersReport(Request $request)
    {
      // if ($request->date != null) {
      //   dd($request);
      // }
      $programmedPractitioners = User::whereHas('practitioners')
                                  ->whereHas('programmingProposals')
                                  ->get();

      $pendingPractitioners = User::whereHas('practitioners')
                                  ->doesntHave('programmingProposals')->get();

      // dd($programmedPractitioners,$pendingPractitioners);

      return view('medical_programmer.management.reports.pending_practitioners',compact('programmedPractitioners','pendingPractitioners'));
    }

    public function avaliableySpecialtyLocations()
    {
        $array_specialties_alarm = [];
        //recorro las especialidades con propuesta de programación
        foreach (Specialty::has('programming_proposals')->get() as $specialty) {
            //calculo el total de horas de los box asignado a la especialidad
            // dd($specialty->locations);
            $total_hours_for_location = 0;
            foreach ($specialty->locations as $location) {
                foreach($location->hours_of_operation as $hours) {
                    $start  = new \Carbon\Carbon($hours->openingTime);
                    $end    = new \Carbon\Carbon($hours->closingTime);
                    $hours_for_location =  $start->diffInHours($end);
                    $total_hours_for_location = $total_hours_for_location + $hours_for_location; //total horas de todos los box de una especialidad
                }
            }
            //calculo total de horas programadas para la especialidad
            $total_hours_for_proposal_specialty = 0;
            foreach ($specialty->programming_proposals as $proposals) {
                // dd($proposals);
                foreach ($proposals->details as $proposal_detail) {
                    $start  = new \Carbon\Carbon($proposal_detail->start_hour);
                    $end    = new \Carbon\Carbon($proposal_detail->end_hour);
                    $hours_for_proposal_detail =  $start->diffInHours($end);
                    $total_hours_for_proposal_specialty = $total_hours_for_proposal_specialty + $hours_for_proposal_detail; //total horas de todas las propuestas de la especialidad
                }
            }

            //selecciono las especialidades on alarma
            if($total_hours_for_proposal_specialty > $total_hours_for_location)
            {
                $item = ['specialty'=>$specialty->specialty_name,'total_hours_for_location'=>$total_hours_for_location, 'total_hours_for_proposal_specialty'=>$total_hours_for_proposal_specialty];
                $array_specialties_alarm[] = $item;
            }
        }
       // dd($array_specialties_alarm);
        return view('medical_programmer.management.reports.avaliabley_specialty_locations', compact('array_specialties_alarm'));
    }
}
