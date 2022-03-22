@extends('layouts.app')

@section('content')
    <h3 class="mb-3">Crear Box</h3>

    <form method="POST" class="form-horizontal" action="{{ route('medical_programmer.locations.store') }}">
        @csrf
        @method('POST')

        <div class="form-row">
            <fieldset class="form-group col-6 col-md-6">
                <label for="for_status">Estado*</label>
                <select id="for_status" name="status" class="form-control" required>
                    <option>--Seleccione--</option>
                    <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="suspended" {{ old('status') === 'suspended' ? 'selected' : '' }}>Suspendido</option>
                    <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </fieldset>

            <fieldset class="form-group col-6 col-md-6">
                <label for="for_alias">Tipo*</label>
                <select class="form-control" name="cod_con_physical_type_id">
                    @foreach ($cod_con_physical_types as $cod_con_physical_type)
                        <option value="{{ $cod_con_physical_type->id }}">{{ $cod_con_physical_type->text }}</option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset class="form-group col-6 col-md-6">
                <label for="for_name">Nombre Locación*</label>
                <input type="text" class="form-control" id="for_description" placeholder="" name="name" required>
            </fieldset>

            <fieldset class="form-group col-6 col-md-6">
                <label for="for_alias">Alias*</label>
                <input type="text" class="form-control" id="for_description" placeholder="" name="alias" required>
            </fieldset>
        </div>
        <div class="form-row">
            <fieldset class="form-group col-6 col-md-6">
                <label for="for_description">Descripción</label>
                <input type="text" class="form-control" id="for_description" placeholder="" name="description" required>
            </fieldset>

            <fieldset class="form-group col-6 col-md-6">
                <label for="for_cod_con_organization_id">Organización</label>
                <select name="organization_id" id="for_cod_con_organization_id" class="form-control selectpicker"
                    title="Seleccione" required>
                    <option value=""></option>
                    @foreach ($organization as $organization)
                        <option value="{{ $organization->id }}"
                            {{ old('cod_con_organization_id') == $organization->id ? 'selected' : '' }}>
                            {{ $organization->name }}</option>
                    @endforeach
                </select>
            </fieldset>

        </div>
        @livewire('medical_programmer.add-hour-of-operation')

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
@endsection

@section('custom_js')
@endsection
