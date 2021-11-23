@extends('layouts.app')

@section('content')

@include('samu.nav')

<h3 class="mb-3"><i class="fas fa-blender-phone"></i> Crear Turno</h3>

<form action="{{route('samu.shift.store')}}" method="post" autocomplete="off">
    @csrf
    @method('POST')

    <div class="form-row">

        <fieldset class="form-group col-md-2">
            <label for="for_date"><b>Fecha de registro</b> </label>
            <input type="date" class="form-control" name="date" id="for_date" value="">
        </fieldset>

        <fieldset class="form-group col-md-2">
            <label for="for_type"><b>Tipo de Turno</b> </label>
            <select class="form-control" name="type" id="for_type">
                <option value="Largo">Largo</option>
                <option value="Noche">Noche</option>
            </select>
        </fieldset>

        <fieldset class="form-group col-md-2">
            <label for="for_opening_time"><i class="fas fa-clock"></i><b> Hora Apertura de turno</b> </label>
            <input type="time" class="form-control" name="opening_time" id="for_opening_time" value="">
        </fieldset>
    
    </div>

    <button type="submit" class="btn btn-primary button" >Crear</button>

    <a class="btn btn-outline-secondary" href="{{ route('samu.shift.index') }}">Cancelar</a>

</form>

@endsection

@section('custom_js')

@endsection 