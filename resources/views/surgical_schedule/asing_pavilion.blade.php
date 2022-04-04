@extends('layouts.app')

@section('title', 'Apertura de Pabellones')
@section('content')

    <h3 class="mb-3">Agendar {{ $location->name }} - Fecha: {{ \Carbon\Carbon::parse($date)->format('l, d-m-Y') }}</h3>
    @if ($errors->any())
        <div class="alert alert-danger col-md-12">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>
    <form method="post" action="{{ route('surgical_schedule.asign_pavilions_store') }}">
        @csrf
        <input type="hidden" name="location_id" value="{{ $location->id }}">
        <input type="hidden" name="date" value="{{ $date }}">
        @livewire('surgical-schedule.asign-pavilion')
        <div class="form-row ">
            <div class="form-group col-md-12">
                <label for="for_observations">Cirugía</label>
                <select class="form-control" name="surgery">
                    <option>Cirugía mayor</option>
                    <option>Cirugía menor</option>
                    <option>Cirugía electiva</option>
                    <option>Cirugía de emergencia o de urgencia</option>
                </select>
            </div>
        </div>
        <div class="form-row ">
            <div class="form-group col-md-12">
                <label for="for_observations">Observaciones</label>
                <textarea class="form-control" name="observations" id="for_observations" cols="10" rows="3"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                <label for="start">Hora de Inicio</label>
                <input type="number" name="start" min="{{ $hour }}" value="{{ intval($hour) }}" class="datetime form-control" readonly>
            </div>
            <div class="col-md-3">
                <label for="end">Hora de Finalización</label>
                <input type="number" name="end" max="{{ intval($maxEndTime) }}" min="{{ (intval($maxEndTime) == intval($hour)) ? intval($hour) : intval($hour) + 1 }}" value="{{ (intval($maxEndTime) == intval($hour)) ? intval($hour) : intval($hour) + 1 }}" class="datetime form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAsignar">&nbsp;</label>
                <button type="submit" class="btn btn-primary form-control""> <i class="fas fa-save"></i> Asignar</button>
            </div>
        </div>
    </form>

@endsection

@section('custom_js')
@endsection
