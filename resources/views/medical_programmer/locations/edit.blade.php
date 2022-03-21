@extends('layouts.app')

@section('content')

<h3 class="mb-3">Editar Locación</h3>

<form method="POST" class="form-horizontal" action="{{ route('medical_programmer.locations.update', $location) }}">
    @csrf
    @method('PUT')

    <div class="form-row">
        <fieldset class="form-group col-6 col-md-6">
        <label for="for_status">Estado*</label>
        <select id="for_status" name="status" class="form-control" required>
                <option value="active" {{$location->status === 'active' ? 'selected' : '' }}>Activo</option>
                <option value="suspended" {{$location->status === 'suspender' ? 'selected' : '' }}>Suspendido</option>
                <option value="inactive" {{$location->status === 'inactive' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </fieldset>

        <fieldset class="form-group col-6 col-md-6">
            <label for="for_alias">Tipo*</label>
            <select class="form-control" name="cod_con_physical_type_id">
                @foreach ($cod_con_physical_types as $cod_con_physical_type)
                    <option value="{{ $cod_con_physical_type->id }}" {{ ($cod_con_physical_type->id === $location->cod_con_physical_type_id ) ? 'selected' : '' }}>{{ $cod_con_physical_type->text }}</option>
                @endforeach
            </select>
        </fieldset>

        <fieldset class="form-group col-6 col-md-6">
            <label for="for_description">Nombre Locación*</label>
            <input type="text" class="form-control" id="for_description" placeholder="" name="name" required value="{{$location->name}}">
        </fieldset>

        <fieldset class="form-group col-6 col-md-6">
            <label for="for_description">Alias*</label>
            <input type="text" class="form-control" id="for_description" placeholder="" name="alias" required value="{{$location->alias}}">
        </fieldset>
    </div>

    <div class="form-row">
        <fieldset class="form-group col-6 col-md-6">
        <label for="for_description">Descripción*</label>
            <input type="text" class="form-control" id="for_description" placeholder="" name="description" required value="{{$location->description}}">
        </fieldset>

        <fieldset class="form-group col-6 col-md-6">
            <label for="for_cod_con_organization_id">Organización*</label>
            <select name="organization_id" id="for_cod_con_organization_id" class="form-control selectpicker" required>
            <option value=""></option>
            @foreach($organization as $organization)
                <option value="{{ $organization->id }}" {{ $organization->id === $location->organization_id ? 'selected' : '' }}>{{ $organization->name }}</option>
            @endforeach
            </select>
        </fieldset>
    </div>
    @livewire('medical_programmer.add-hour-of-operation',['list' => $location->hours_of_operation->toArray() ])
    <button type="submit" class="btn btn-primary mb-5">Guardar</button>
</form>

@canany(['administrador'])
    <br /><hr />
    <div style="height: 300px; overflow-y: scroll;">
        @include('partials.audit', ['audits' => $location->audits] )
    </div>
@endcanany

@endsection

@section('custom_js')

@endsection
