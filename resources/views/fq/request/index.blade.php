@extends('fq.app')

@section('title', 'FQ - Mis Solicitudes')

@section('content')

{{-- @include('fq.partials.nav')--}}

<br>

<h5>Solicitudes Pendientes</h5>

<div class="table-responsive">
    <table class="table table-sm table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th></th>
                <th style="width: 10%">Fecha</th>
                <th style="width: 8%">Estado</th>
                <th>Motivo de Solicitud</th>
                <th>Especialidad</th>
                <th>observación</th>
                <th></th>
            </tr>
        </thead>
        @canany(['Fq: Answer request','Fq: admin'])
        <tbody>
            @foreach($pending_reqs as $fqRequest)
            <tr>
                <td class="text-center">
                    @if($fqRequest->status == 'pending')
                      <i class="fas fa-clock fa-lg"></i>
                    @endif
                    @if($fqRequest->status == 'complete')
                      <i class="fas fa-check-circle fa-lg" style="color: green"></i>
                    @endif
                </td>
                <td>{{ $fqRequest->created_at->format('d-m-Y H:i:s') }}</td>
                <td>{{ $fqRequest->StatusValue }}</td>
                <td>{{ $fqRequest->NameValue }}</td>
                <td>{{ $fqRequest->SpecialtiesValue }}</td>
                <td>{{ $fqRequest->observation_patient }}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#exampleModal-{{ $fqRequest->id }}">
                        <i class="fas fa-edit"></i>
                    </button>

                    @include('fq.request.modals.view_request')
                </td>
            </tr>
            @endforeach
        </tbody>
        @endcanany
        @canany(['Fq: Answer request','Fq: admin'])
        <tbody>
            @foreach($pending_reqs_medicines as $fqRequest)
            <tr>
                <td>{{ $fqRequest->created_at->format('d-m-Y H:i:s') }}</td>
                <td>{{ $fqRequest->StatusValue }}</td>
                <td>{{ $fqRequest->NameValue }}</td>
                <td>{{ $fqRequest->observation_patient }}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#exampleModal-{{ $fqRequest->id }}">
                        <i class="fas fa-edit"></i>
                    </button>

                    @include('fq.request.modals.view_request')
                </td>
            </tr>
            @endforeach
        </tbody>
        @endcanany
    </table>
</div>

<hr>
<h5>Solicitudes Atendidas</h5>

<div class="table-responsive">
    <table class="table table-sm table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th></th>
                <th style="width: 10%">Fecha</th>
                <th style="width: 8%">Estado</th>
                <th>Motivo de Solicitud</th>
                <th>Especialidad</th>
                <th>observación</th>
                <th></th>
            </tr>
        </thead>
        @canany(['Fq: Answer request', 'Fq: admin'])
        <tbody>
            @foreach($reqs as $fqRequest)
            <tr>
                <td class="text-center">
                    @if($fqRequest->status == 'pending')
                      <i class="fas fa-clock fa-lg"></i>
                    @endif
                    @if($fqRequest->status == 'complete')
                      <i class="fas fa-check-circle fa-lg" style="color: green"></i>
                    @endif
                </td>
                <td>{{ $fqRequest->created_at->format('d-m-Y H:i:s') }}</td>
                <td>{{ $fqRequest->StatusValue }}</td>
                <td>{{ $fqRequest->NameValue }}</td>
                <td>{{ $fqRequest->SpecialtiesValue }}</td>
                <td>{{ $fqRequest->observation_patient }}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#exampleModal-{{ $fqRequest->id }}">
                        <i class="fas fa-edit"></i>
                    </button>

                    @include('fq.request.modals.view_request')
                </td>
            </tr>
            @endforeach
        </tbody>
        @endcan
        @can('Fq: Answer request medicines')
        <tbody>
            @foreach($reqs_medicines as $fqRequest)
            <tr>
                <td>{{ $fqRequest->created_at->format('d-m-Y H:i:s') }}</td>
                <td>{{ $fqRequest->StatusValue }}</td>
                <td>{{ $fqRequest->NameValue }}</td>
                <td>{{ $fqRequest->observation_patient }}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $fqRequest->id }}">
                        <i class="fas fa-edit"></i>
                    </button>

                    @include('fq.request.modals.view_request')
                </td>
            </tr>
            @endforeach
        </tbody>
        @endcan
    </table>
</div>

@endsection

@section('custom_js')

@endsection
