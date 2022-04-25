@extends('layouts.app')

@section('title', 'Ver Agenda')
@section('content')
    <h3 class="mb-3">{{ $schedule->location->name }} - Fecha: {{ dayToSpanish(\Carbon\Carbon::parse($schedule->date)->format('l')) }}, {{ \Carbon\Carbon::parse($schedule->date)->format('d-m-Y') }}</h3>
    <h6>{!! $schedule->estatus !!} De {{  $schedule->from.':00' }} a {{ $schedule->to.':00' }} <i class="fas fa-clock"></i></h6>
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
            <h6 class="mb-3">Datos del Paciente</h6>
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

            @if (count($schedule->surgical_schedule_team) > 0)
            <h6 class="mb-3">Datos Staff</h6>
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead class="table-info">
                    <tr>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Nombre y Apellido</th>
                    </thead>
                    <tbody>
                    @foreach ($schedule->surgical_schedule_team as $personal)
                    <tr>
                        <td scope="row">{{ App\Models\MedicalProgrammer\Specialty::find($personal->specialty_id)->specialty_name }}</td>
                        <td scope="row">{{ App\Models\Practitioner::find($personal->practitioner_id)->user->OfficialFullName }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            @endif
            <hr>
            @if (count($schedule->surgical_schedule_device) > 0)
            <h6 class="mb-3">Datos Equipamiento</h6>
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead class="table-info">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fabricante</th>
                        <th scope="col">Serial</th>
                    </thead>
                    <tbody>
                    @foreach ($schedule->surgical_schedule_device as $item)
                    @php
                    $device = App\Models\Device::find($item->device_id);
                    @endphp
                    <tr>
                        <td scope="row">{{ $device->identifier }}</td>
                        <td scope="row">{{  $device->device_name  }}</td>
                        <td scope="row">{{ $device->manufacturer }}</td>
                        <td scope="row">{{ $device->serial_number }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            @endif
            <h6 class="mb-3">Datos Cirugía</h6>
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <tbody>
                    <tr>
                        <th scope="row">Diagnóstico Preoperatorio</th>
                        <td>{{ $schedule->preoperative_diagnosis }}</td>
                    </tr>
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
        @if(count($schedule->events) > 0)
        <hr>
        <h6 class="mb-3">Eventos</h6>
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead>
                        <th>Autor</th>
                        <th>Registrado el</th>
                        <th>Observación</th>
                    </thead>
                    <tbody>
                        @foreach ($schedule->events as $event)
                        <tr>
                            <td>{{ App\Models\User::find($event->user_id)->official_full_name }}</td>
                            <td>{{ \Carbon\Carbon::parse($event->created_at)->format('d-m-Y H:i:s') }}</td>
                            <td>{{ $event->observations }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        @if($schedule->status != 'cancelado')
        <form method="post" action="{{ route('surgical_schedule.update_schedule') }}">
        @csrf
        <div class="form-row">
            <input type="hidden" value="{{ $schedule->id }}" name="schedule">
            <div class="form-group col-md-4">
                <label for="for_status">Estado</label>
                <select class="form-control" name="status">
                    <option value="agendado" {{ ($schedule->status == 'agendado') ? 'selected' : '' }}>Agendado</option>
                    <option value="en proceso" {{ ($schedule->status == 'en proceso') ? 'selected' : '' }}>En proceso</option>
                    <option value="finalizado" {{ ($schedule->status == 'finalizado') ? 'selected' : '' }}>Finalizado</option>
                    <option value="cancelado" {{ ($schedule->status == 'cancelado') ? 'selected' : '' }}>Cancelado</option>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="for_observations">Observaciones</label>
                <textarea class="form-control" required name="event_observations" cols="10" rows="3"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
        </form>
        @endif
@endsection

@section('custom_js')
@endsection
