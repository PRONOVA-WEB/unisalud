@extends('layouts.app')

@section('title', 'Reporte box / especialidad')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush

@section('content')
    <h3 class="mb-3">Reporte box / especialidad</h3>
    <hr/>
    <table class="table table-sm table-bordered datatable">
        <thead>
            <tr>
                <th scope="col">Especialidad</th>
                <th scope="col">Horas Programadas</th>
                <th scope="col">Horas disponibles en locaciones</th>
                <th scope="col">Diferencia en Horas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($array_specialties_alarm as $value)
                <tr>
                    <td>{{ $value['specialty'] }}</td>
                    <td>{{ $value['total_hours_for_proposal_specialty'] }}</td>
                    <td>{{ $value['total_hours_for_location'] }}</td>
                    <td>{{ $value['total_hours_for_proposal_specialty'] - $value['total_hours_for_location'] }}</td>
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
        "order": [ 3, "desc" ],
        "pageLength": 20,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excel',
                text: 'Exportar a Excel',
                className: 'btn btn-info',
                //messageTop: 'Reporte de alarma de locaciones',
                init: function(api, node, config) {
                    $(node).removeClass('dt-button');
                }
            }
        ],
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
