@extends('layouts.app')

@section('content')

<h3 class="mb-3">Asignar Locaciones a Especialidades</h3>

<table class="table table-sm table-borderer table-responsive-xl">
    <thead>
        <tr>
            <th>Id</th>
            <th>Especialidad</th>
            <th>Asignar Locación</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $specialties as $specialty )
        <tr>
            <td>{{ $specialty->id }}</td>
            <td>{{ $specialty->specialty_name }}</td>
            <td>
                <a href="{{ route('medical_programmer.specialties.asign_location', $specialty) }}" class="btn btn-sm btn-outline-secondary">
                    <span class="fas fa-hospital" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('custom_js')

@endsection
