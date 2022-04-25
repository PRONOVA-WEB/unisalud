@extends('layouts.app')

@section('title','Editar Equipo')

@section('content')
    <h3 class="mb-3">Editar Equipo</h3>
    @if ($errors->any())
    <div class="alert alert-danger col-md-12">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" class="form-horizontal" action="{{ route('devices.update', $device) }}">
        @csrf
        @method('PUT')

        <div class="form-row">
            <fieldset class="form-group col-md-3">
                <label for="for_status">Estado*</label>
                <select id="for_status" name="status" class="form-control" required>
                    <option>--Seleccione--</option>
                    <option value="active" {{ $device->status === 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="inactive" {{ $device->status === 'inactive' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </fieldset>

            <fieldset class="form-group col-md-6">
                <label for="for_name">Nombre*</label>
                <input type="text" class="form-control" id="device_name" placeholder="" name="device_name" value="{{ $device->device_name }}" required>
            </fieldset>

            <fieldset class="form-group col-md-3">
                <label for="for_alias">Código*</label>
                <input type="text" class="form-control" id="identifier" placeholder="" name="identifier" value="{{ $device->identifier }}" required>
            </fieldset>

            <fieldset class="form-group col-md-3">
                <label for="for_alias">Fabricante</label>
                <input type="text" class="form-control" id="manufacturer" placeholder="" name="manufacturer" value="{{ $device->manufacturer }}">
            </fieldset>

            <fieldset class="form-group col-md-3">
                <label for="for_alias">Serial</label>
                <input type="text" class="form-control" id="serial_number" placeholder="" name="serial_number" value="{{ $device->serial_number }}">
            </fieldset>
            <fieldset class="form-group col-md-6">
                <label for="for_organization_id">Organización</label>
                <select name="organization_id" id="for_organization_id" class="form-control selectpicker"
                    title="Seleccione" required>
                    <option value=""></option>
                    @foreach ($organization as $organization)
                        <option value="{{ $organization->id }}"
                            {{ $device->organization_id == $organization->id ? 'selected' : '' }}>
                            {{ $organization->name }}</option>
                    @endforeach
                </select>
            </fieldset>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
@endsection

@section('custom_js')
@endsection
