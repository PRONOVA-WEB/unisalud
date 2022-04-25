@extends('layouts.app')

@section('title','Equipamiento')

@section('content')

<h3 class="mb-3">Listado de Equipos</h3>
<hr/>
<a class="btn btn-primary mb-3" href="{{ route('devices.create') }}">
    <i class="fas fa-plus"></i> Agregar Nuevo Equipo
</a>

<table class="table table-sm table-borderer table-responsive-xl mb-5">
    <thead>
        <tr>
            <th>Id</th>
            <th>Estado</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Fabricante</th>
            <th>Serial</th>
            <th>Organización</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $devices as $device )
        <tr>
            <td>{{ $device->id ?? ''}}</td>
            <td>{{ $device->estatus ?? ''}}</td>
            <td>{{ $device->identifier ?? ''}}</td>
            <td>{{ $device->device_name ?? ''}}</td>
            <td>{{ $device->manufacturer ?? ''}}</td>
            <td>{{ $device->serial_number ?? ''}}</td>
            <td>{{ $device->organization->name ?? ''}}</td>
            <td>
      				<a href="{{ route('devices.edit', $device) }}"
      					class="btn btn-sm btn-outline-secondary">
      					<span class="fas fa-edit" aria-hidden="true"></span>
      				</a>
      				<form method="POST" action="{{ route('devices.destroy', $device) }}" class="d-inline">
      					@csrf
      					@method('DELETE')
      					<button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('¿Está seguro de eliminar la información?');">
      						<span class="fas fa-trash-alt" aria-hidden="true"></span>
      					</button>
      				</form>
      			</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@section('custom_js')

@endsection
