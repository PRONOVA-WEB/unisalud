@extends('layouts.app')

@section('content')

@include('samu.nav')

<h3 class="mb-3"><i class="fas fa-blender-phone"></i> Crear Turno</h3>

<form action="{{route('samu.shift.store')}}" method="post" autocomplete="off">
    @csrf
    @method('POST')

    <div class="form-row">

        <fieldset class="form-group col-md-4">
            <label for="for_type"><b>Tipo de Turno*</b> </label>
            <select class="form-control" name="type" id="for_type" required>
                <option value=""></option>
                <option value="Largo">Largo</option>
                <option value="Noche">Noche</option>
            </select>
        </fieldset>

        <fieldset class="form-group col-md-4">
            <label for="for_opening_at"><b>Apertura*</b> </label>
            <input type="datetime-local" class="form-control" name="opening_at" id="for_opening_at" required>
        </fieldset>

        <fieldset class="form-group col-md-4">
            <label for="for_closing_at"><b> Cierre (opcional aproximado)</b> </label>
            <input type="datetime-local" class="form-control" name="closing_at" id="for_closing_at">
        </fieldset>

    </div>
    <div class="form-row">

        <fieldset class="form-group col-md-12">
            <label for="for_observation"><b> Observación</b> </label>
            <textarea class="form-control" name="observation" id="for_observation" rows="6"></textarea>
        </fieldset>
    </div>

    <button type="submit" class="btn btn-primary button">Crear</button>

    <a class="btn btn-outline-secondary" href="{{ route('samu.shift.index') }}">Cancelar</a>

</form>

@endsection

@section('custom_js')

@endsection
