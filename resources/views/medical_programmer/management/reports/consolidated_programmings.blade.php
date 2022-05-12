@extends('layouts.app')

@section('content')

<h3 class="mb-3">Consolidado de programaciones</h3>
<hr>
<form method="GET" id="form" class="form-horizontal" action="{{ route('medical_programmer.programming_proposal.consolidated_programmings') }}">
    <div class="form-row">
      <fieldset class="form-group col col-md-4">
          <label for="for_id_deis">Fecha</label>
          <input type="date" class="form-control" name="date">
      </fieldset>

      <div class="form-group col-md-2">
        <label for="inputEmail4">&nbsp;</label>
        <button type="submit" class="btn btn-primary form-control">Buscar</button>
      </div>
    </div>
</form>


<table class="table table-sm table-bordered text-center table-striped small">
  <thead>
    <tr class="text-center">
      <th>Especialista</th>
      <th>RUN</th>
      <th>Contrato</th>
      <th>Especialidad</th>
      <th>Actividad</th>
      <th>Hrs. Asignadas</th>
      <th>Producción</th>
      <th>Rdto/Hr</th>
      <th>Rdto/Diario</th>
      <th>Rdto/Semanal</th>
      <th>Rdto/Mensual</th>
      <th>Rdto/Anual</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($array_medic_programmings as $key1 => $array_medic_programming)
        @foreach ($array_medic_programming as $key2 => $contracts)
          @foreach ($contracts as $key3 => $specialties)
            @foreach ($specialties as $key4 => $activities)
            @php
                $user = App\Models\User::find($key1);
            @endphp
              <tr>
                  <td>{{$user->OfficialFullName}}</td>
                  <td>{{ $user->IdentifierRun->value.'-'.$user->IdentifierRun->dv }}</td>
                  <td>{{$key2}}</td>
                  <td>{{$key3}}</td>
                  <td>{{$key4}}</td>
                  <td>{{$activities['hours']}}</td>
                  <td></td>
                  <td>{{$activities['performance']}}</td>

                  @if($activities['performance'] != null)
                    <td>{{($activities['hours'] * $activities['performance']) }}</td>
                    <td>{{($activities['hours'] * $activities['performance']) * 7}}</td>
                    <td>{{($activities['hours'] * $activities['performance']) * 7 * 4}}</td>
                    <td>{{($activities['hours'] * $activities['performance']) * 7 * 4 * 52}}</td>
                  @else

                  @endif
              </tr>
            @endforeach
          @endforeach
        @endforeach
      @endforeach
  </tbody>
</table>

@endsection

@section('custom_js')

@endsection
