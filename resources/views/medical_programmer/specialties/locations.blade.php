@extends('layouts.app')

@section('title', 'Asignar box a especialidades')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush

@section('content')

<h3 class="mb-3">Gestión de especialidades</h3>
<hr>
<table class="table table-sm table-bordered datatable">
    <thead>
        <tr>
            <th>Id</th>
            <th>Especialidad</th>
            <th>Asignar Box</th>
            <th>Asignar local para agenda (PM)</th>
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
            <td>
                <a href="{{ route('medical_programmer.specialties.asign_local', $specialty) }}" class="btn btn-sm btn-outline-secondary">
                    <span class="fas fa-book-medical" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('custom_js')
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script>
$(document).ready(function() {
        $('.datatable').DataTable({
        "order": [ 1, "asc" ],
        "pageLength": 10,
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
            "infoEmpty": "Mostrando 0 to 0 of 0 Registros",
            "infoFiltered": "(Filtrado de _MAX_ total Registros)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });

});
</script>
@endsection
