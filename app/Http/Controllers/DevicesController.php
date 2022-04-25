<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Organization;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::active()->get();
        return view('devices.index',compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organization = Organization::all();
        return view('devices.create', compact('organization'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'identifier' => 'required|unique:devices',
            'device_name' => 'required',
        ], [
            'identifier.unique' => 'El código ingresado está en uso por otro equipo',
            'device_name.required' => 'Ingrese un nombre'
        ]);
        $device = new Device($request->all());
        $device->save();
        return redirect()->route('devices.index');
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
    public function edit(Device $device)
    {
        $organization = Organization::all();
        return view('devices.edit', compact('organization', 'device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Device $device)
    {
        $request->validate([
            'identifier' => 'required|unique:devices,identifier,' . $device->id,
            'device_name' => 'required',
            [
                'identifier.unique' => 'El código ingresado está en uso por otro equipo',
                'device_name.required' => 'Ingrese un nombre'
            ]
        ]);
        $device->fill($request->all());
        $device->save();
        return redirect()->route('devices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
        session()->flash('success', 'El equipo ha sido eliminado');
        return redirect()->route('devices.index');
    }
}
