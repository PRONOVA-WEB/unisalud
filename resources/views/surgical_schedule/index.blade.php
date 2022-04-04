@extends('layouts.app')

@section('title', 'Agendamiento de Pabellones')

@section('content')

    <h3 class="mb-3">Agendamiento de Pabellones</h3>
    @if ($errors->any())
        <div class="alert alert-danger col-md-12">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr />
    <form method="post" action="{{ route('surgical_schedule.schedule') }}">
        @csrf
        <div class="form-row">
            <div class="col-md-3">
                <label for="date">Fecha</label>
                <input type="date" name="date" value="{{ $date }}" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="">&nbsp;</label>
                <button type="submit" class="btn btn-success form-control">
                    <i class="fa fa-folder-open"></i> Buscar
                </button>
            </div>
        </div>
    </form>
    <hr>
    @if ($locationScheduleArray)
        Leyenda:
        <span class="badge badge-warning">Disponible</span>
        <span class="badge bg-info">Agendado</span>
        <div class="row pt-4" style="overflow: overlay;">
            <fieldset class="form-group col-12 col-md-12">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <span class="mt-3">
                                        <strong>Horarios</strong>
                                    </span>
                                </th>
                                @foreach ($locationScheduleArray as $pavilion)
                                    <th>
                                        <div class="card mb-4 py-3 border-bottom-primary">
                                            <div class="card-body">
                                                <span class="mt-3">
                                                    <strong>{{ $pavilion->name }}</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hours as $hour)
                                <tr>
                                    <td class="text-center">{{ $hour }}</td>
                                    @for ($i = 0; $i < count($locationScheduleArray); $i++)
                                        @php

                                            $dayOfWeek = $locationScheduleArray[$i]->hours_of_operation->first(function ($value, $key) use ($date) {
                                                return $value->daysOfWeek == strtolower(substr(\Carbon\Carbon::parse(date($date))->format('l'), 0, 3));
                                            });
                                            $RangeHour = \Carbon\Carbon::parse($dayOfWeek->openingTime)->format('H:i:s') <= \Carbon\Carbon::parse($hour)->format('H:i:s') && \Carbon\Carbon::parse($dayOfWeek->closingTime)->format('H:i:s') >= \Carbon\Carbon::parse($hour)->format('H:i:s');
                                            $styleTh = $RangeHour ? 'cursor:pointer; background-color: #f6c23e !important;' : '';
                                            //\Carbon\Carbon::create()->hour(10)->format('H:i:s')
                                            // $agendado = $locationScheduleArray[$i]->surgical_schedule
                                            //     ->where('date', $date)
                                            //     ->where('from', '<=', \Carbon\Carbon::parse($hour)->format('H'))
                                            //     ->where('to', '>=', \Carbon\Carbon::parse($hour)->format('H'))
                                            //     ->all();

                                            $agendado = $locationScheduleArray[$i]->surgical_schedule->filter(function ($value, $key) use ($date, $hour) {
                                                return $value->date == $date && $value->from <= \Carbon\Carbon::parse($hour)->format('H') && $value->to >= \Carbon\Carbon::parse($hour)->format('H');
                                            });

                                            $styleTh = count($agendado) > 0 ? 'cursor:pointer; background-color: #36b9cc !important;' : $styleTh;

                                            $textTh =
                                                count($agendado) > 0
                                                    ? '<span style:"color:black">
                                                        <i class="fas fa-user"></i> '.
                                                        $agendado->first()->patient->official_full_name .
                                                        '<br>RUN: '.
                                                        $agendado->first()->patient->identifier_run->value .
                                                        '-' .
                                                        $agendado->first()->patient->identifier_run->dv .
                                                        '<br><i class="fa fa-plus-square"></i> ' .
                                                        $agendado->first()->surgery.
                                                        '<br><i class="fa fa-history"></i> '.
                                                        strtoupper($agendado->first()->status).
                                                        '</span>'
                                                    : '--';

                                            $routeTh = count($agendado) ? 'surgical_schedule.edit_schedule' : 'surgical_schedule.asign_pavilions';

                                            $routeLocationValur = count($agendado) ? $agendado->first()->id : $locationScheduleArray[$i];

                                            $titleTh = count($agendado) ? 'Ver Detalles' : 'Agendar ' . $locationScheduleArray[$i]->name . ' a las ' . $hour;

                                            //Rowspan
                                            $rowSpan = count($agendado) ?
                                                        ($agendado->first()->from == \Carbon\Carbon::parse($hour)->format('H') ?
                                                            'rowspan=' . $agendado->first()->to - $agendado->first()->from + 1 : 'hide')
                                                        : '';
                                        @endphp
                                        @if ($rowSpan != 'hide')
                                            <td title="{{ $titleTh }}" {{ $rowSpan }}
                                                style="{{ $styleTh }} color:#333"
                                                @if ($RangeHour) onclick="location.href='{{ route($routeTh, ['location' => $routeLocationValur, 'hour' => intval($hour), 'date' => $date]) }}'" @endif
                                                class="bg-gray-200 text-center">
                                                {!! $textTh !!}
                                            </td>
                                        @endif
                                    @endfor
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    @endif
@endsection
@section('custom_js')

@endsection
