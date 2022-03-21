<?php

namespace App\Http\Controllers\MedicalProgrammer;

use App\Models\Location;
use App\Models\Organization;
use App\Models\CodConPhysicalType;
use App\Models\HourOfOperation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();

        return view('medical_programmer.locations.index', compact('locations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        $organization = Organization::all();
        $cod_con_physical_types = CodConPhysicalType::all();
        $hours_of_operation = HourOfOperation::all();

        return view('medical_programmer.locations.create', compact('organization', 'locations', 'cod_con_physical_types', 'hours_of_operation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->hours_of_operation);
        $location = new Location($request->All());
        $location->save();
        if(!empty($request->hours_of_operation))
        {
            foreach ($request->hours_of_operation as $list) {
                foreach (json_decode($list) as $hours) {
                    $hour_of_operation = HourOfOperation::create(
                        [
                            'daysOfWeek'  => $hours->daysOfWeek,
                            'openingTime' => $hours->openingTime,
                            'closingTime' => $hours->closingTime,
                        ]
                    );
                    $location->hours_of_operation()->attach($hour_of_operation->id);
                }
            }
        }

        session()->flash('info', 'La locación ia sido creada.');
        return redirect()->route('medical_programmer.locations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $organization = Organization::all();
        $cod_con_physical_types = CodConPhysicalType::all();
        return view('medical_programmer.locations.edit', compact('organization', 'location','cod_con_physical_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $location->fill($request->all());
        $location->save();
        if(!empty($request->hours_of_operation))
        {
            $hourSToDestroy = $location->hours_of_operation;
            $location->hours_of_operation()->detach();
            HourOfOperation::destroy($hourSToDestroy);
            foreach ($request->hours_of_operation as $list) {
                foreach (json_decode($list) as $hours) {
                    $hour_of_operation = HourOfOperation::create(
                        [
                            'daysOfWeek'  => $hours->daysOfWeek,
                            'openingTime' => $hours->openingTime,
                            'closingTime' => $hours->closingTime,
                        ]
                    );
                    $location->hours_of_operation()->attach($hour_of_operation->id);
                }
            }
        }

        session()->flash('info', 'La locación ia sido editada.');
        return redirect()->route('medical_programmer.locations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Location $location)
    {
        $location->hours_of_operation()->detach();
        $location->delete();
        session()->flash('success', 'La locación ha sido eliminada');
        return redirect()->route('medical_programmer.locations.index');
    }
}
