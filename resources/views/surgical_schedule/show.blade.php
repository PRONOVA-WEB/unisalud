@extends('layouts.app')

@section('title', 'Ver Agenda')
@section('content')

    <h3 class="mb-3">{{ $schedule->location->name }} - Fecha: {{ \Carbon\Carbon::parse($schedule->date)->format('l, d-m-Y') }}</h3>
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
        <div class="form-row ">
            <h6 class="mb-3">Datos de Paciente</h6>
            <hr/>
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead class="table-info">
                    <tr>
                        <th scope="col">Nombre:</th>
                        <th scope="col">{{ $schedule->patient->official_full_name }}</th>

                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Identificación</th>
                        <td>{{ $schedule->patient->identifier_run->value.'-'.$schedule->patient->identifier_run->dv }}</td>

                    </tr>

                    <tr>
                        <th scope="row">Edad</th>
                        <td>{{ \Carbon\Carbon::parse($schedule->patient->birthday)->age .' años'}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Sexo</th>
                        <td colspan="2"> {{ $schedule->patient->sex}} </td>
                    </tr>

                    <tr>
                        <th scope="row">Dirección</th>
                        <td colspan="2"> {{ $schedule->patient->officialFullAddress }}  </td>
                    </tr>

                    <tr>
                        <th scope="row">Teléfono</th>
                        <td colspan="2">{{$schedule->patient->officialPhone}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Correo</th>
                        <td colspan="2">{{ $schedule->patient->officialEmail}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>

            @if (count($schedule->surgical_schedule) > 0)
            <h6 class="mb-3">Datos Personal Médico</h6>
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead class="table-info">
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Especialidad / Profesión</th>
                        <th scope="col">Nombre y Apellido</th>
                    </thead>
                    <tbody>
                    @foreach ($schedule->surgical_schedule as $personal)
                    <tr>
                        <td scope="row">{{ $personal->type }}</td>
                        <td scope="row">{{ App\Models\MedicalProgrammer\Specialty::find($personal->specialty_id)->specialty_name }}</td>
                        <td scope="row">{{ App\Models\Practitioner::find($personal->practitioner_id)->user->OfficialFullName }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            @endif
            <h6 class="mb-3">Datos Cirguia</h6>
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <tbody>
                    <tr>
                        <th scope="row">Cirugía</th>
                        <td>{{ $schedule->surgery }}</td>
                    </tr>

                    <tr>
                        <th scope="row">Observaciones</th>
                        <td>{{ $schedule->observations }}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

@endsection

@section('custom_js')
@endsection
