@extends('layouts.app')

@section('content')

@include('samu.nav')

<h3 class="mb-3"><i class="fas fa-ambulance"></i> Asinga un móvil a un turno</h3>

<form method="POST" action="{{ route('samu.mobileinservice.store') }}">
    @csrf
    @method('POST')

    <div class="form-row">

        <fieldset class="form-group col-md-2">
            <label for="for_position">Posición salida</label>
            <input type="number" value="1" class="form-control" name="position">
        </fieldset>

        <fieldset class="form-group col-md-2">
            <label for="for_run">Móvil*</label>
            <select class="form-control" name="mobile_id">
            <option></option>
                @foreach($mobiles as $mobile)
                @if ($mobile->managed == true)
                    <option value="{{ $mobile->id }}">{{ $mobile->code }} - {{ $mobile->name }} </option>
                @endif
                @endforeach
            </select>
        </fieldset>

        <fieldset class="form-group col-12 col-md-2">
            <label for="empresa">Tipo de  móvil*</label>
            <select class="form-control" name="type">
                <option value=""></option>
                <option value="M1">M1</option>
                <option value="M2">M2</option>
                <option value="M3">M3</option>
                <option value="Hibrido">Hibrido</option>
                <option value="RU1">RU1</option>
                <option value="RU2" >RU2</option>
            </select>
        </fieldset>

        <fieldset class="form-group col-md-3">
            <label for="for_o2">Oxígeno Central</label>
            <input type="text" class="form-control" name="o2">
        </fieldset>

    </div>
    <div class="form-row">

        <fieldset class="form-group col-12 col-md-8">
            <label for="observation">Observación</label>
            <textarea class="form-control" id="observation" name="observation"></textarea>
        </fieldset>

    </div>

    <button type="submit" class="btn btn-primary button" >Guardar</button>
    <a href="{{ route('samu.mobileinservice.index') }}" class="btn btn-outline-secondary">Cancelar</a>

</form>


@endsection

@section('custom_js')

@endsection
