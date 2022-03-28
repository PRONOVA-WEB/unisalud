<?php

namespace App\Http\Controllers\MedicalProgrammer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Charts\HoursBySpecialtyChart;
use App\Models\MedicalProgrammer\Specialty;
use Chartisan\PHP\Chartisan;

class ChartsController extends Controller
{
    public function HoursBySpecialty()
    {
        $specialty = Specialty::find(7);
        $horas = [];
        $porcentajes = [];
        $total_hours_for_subactivity = 0;
        foreach ($specialty->programming_proposals as $proposals) {
            // dd($proposals);
            foreach ($proposals->details as $proposal_detail) {
                //dd($proposal_detail->subactivity);
                if (!is_null($proposal_detail->subactivity->performance)) //subactividades con performance definido
                {
                    $start  = new \Carbon\Carbon($proposal_detail->start_hour);
                    $end    = new \Carbon\Carbon($proposal_detail->end_hour);
                    $hours_for_proposal_detail =  $start->diffInHours($end);
                    $labels[] = $proposal_detail->subactivity->sub_activity_name;
                    $horas[] = $hours_for_proposal_detail;
                    $total_hours_for_subactivity = $total_hours_for_subactivity + $hours_for_proposal_detail;
                }

            }
        }
        foreach ($horas as $hora) {
            $porcentaje_hora = $hora * 100 / $total_hours_for_subactivity;
            $porcentajes[] = $porcentaje_hora;
        }
        // dd($labels,$horas,$porcentajes);
        return Chartisan::build()
        ->labels(['First', 'Second', 'Third'])
        ->dataset('Sample', [1, 2, 3])
        ->dataset('Sample 2', [3, 2, 1]);
    }
}
