<?php

namespace App\Http\Controllers\MedicalProgrammer;

use App\Models\MedicalProgrammer\Specialty;
use App\Models\MedicalProgrammer\SpecialtyActivity;
use App\Models\MedicalProgrammer\Activity;
use App\Models\Location;
use App\Models\CodConPhysicalType;
use App\Models\MedicalProgrammer\OrganizationLocal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $specialties = Specialty::whereHas('userSpecialties', function ($query)  {
                                      return $query->where('user_id',Auth::id());
                                  })->orderBy('specialty_name','ASC')->get();
      // $specialties = Specialty::orderBy('specialty_name','ASC')->get();
      return view('medical_programmer.specialties.index', compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity:://where('mother_activity_id',2)
                                where('activity_type_id',1)->orderBy('activity_name','ASC')->get(); //obtiene medicas
        return view('medical_programmer.specialties.create',compact('activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $specialty = new Specialty($request->All());
      //$specialty->user_id = Auth::id();
      $specialty->save();

      foreach ($request->activity_id as $key => $id) {
          $specialty_activity = new SpecialtyActivity();
          $specialty_activity->specialty_id = $specialty->id;
          $specialty_activity->activity_id = $id;
          $specialty_activity->performance = $request->input('performance_activity_'.$id);
          $specialty_activity->save();
      }

      session()->flash('info', 'La especialidad ha sido creada.');
      return redirect()->route('medical_programmer.specialties.index');
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
    public function edit(Specialty $specialty)
    {
        $activities = Activity:://where('mother_activity_id',2)
                                where('activity_type_id',1)->orderBy('activity_name','ASC')->get(); //obtiene medicas
        return view('medical_programmer.specialties.edit', compact('specialty','activities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialty $specialty)
    {
      $specialty->fill($request->all());
      //$specialty->user_id = Auth::id();
      $specialty->save();

      SpecialtyActivity::where('specialty_id',$specialty->id)->delete();
      if ($request->activity_id != null) {
          foreach ($request->activity_id as $key => $id) {
              $specialty_activity = new SpecialtyActivity();
              $specialty_activity->specialty_id = $specialty->id;
              $specialty_activity->activity_id = $id;
              $specialty_activity->performance = $request->input('performance_activity_'.$id);
              $specialty_activity->save();
          }
      }

      session()->flash('info', 'La especialidad ha sido editada.');
      return redirect()->route('medical_programmer.specialties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialty $specialty)
    {
        SpecialtyActivity::where('specialty_id',$specialty->id)->delete();

        $specialty->delete();
        session()->flash('success', 'La especialidad ha sido eliminada');
        return redirect()->route('medical_programmer.specialties.index');
    }

    public function locations()
    {
        $specialties = Specialty::all();

        return view('medical_programmer.specialties.locations', compact('specialties'));

    }

    public function asign_location(Specialty $specialty)
    {
        $locations_groupby_types = Location::query()
                        ->where('status','active')
                        ->whereNotNull('cod_con_physical_type_id')
                        ->get()
                        ->groupBy(function ($type) {
                            return CodConPhysicalType::find($type->cod_con_physical_type_id)->text;
                        });
        //dd($locations_groupby_types);
        return view('medical_programmer.specialties.locationsSpecialty', compact('specialty','locations_groupby_types'));
    }

    public function asign_location_store(Specialty $specialty, Request $request)
    {
        //dd($specialty, $request->all());
        $specialty->locations()->sync($request->locations);
        session()->flash('success', 'La(s) locaciones han sido asignadas exitosamente');
        return redirect()->route('medical_programmer.specialties.locations');
    }

    public function asign_local(Specialty $specialty)
    {
        $locales = OrganizationLocal::all();
        return view('medical_programmer.specialties.localSpecialty', compact('specialty','locales'));
    }

    public function asign_local_store(Specialty $specialty, Request $request)
    {
        $specialty->organization_local()->sync($request->locales);
        session()->flash('success', 'Los locales han sido asignadas exitosamente');
        return redirect()->route('medical_programmer.specialties.locations');
    }
}
