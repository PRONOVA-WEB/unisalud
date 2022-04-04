@extends('layouts.app')

@section('title', 'Apertura de Pabellones')

@section('content')

    <h3 class="mb-3">Apertura de Pabellones</h3>
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
    @if (count($pavilions))
        <form action="{{ route('surgical_schedule.open_pavilions') }}" method="POST">
            @csrf
            Leyenda:
            <span class="badge badge-success">Aperturado</span>
            <span class="badge badge-info">No Aperturado</span>
            <div class="row">
                <fieldset class="form-group col-12 col-md-12">
                    <div class="row">
                        @foreach ($pavilions as $location)
                            <div class="col-lg-4 card {{ ($location->pavilion_schedule->count()) ? 'bg-success' : 'bg-info' }} text-white shadow">
                                <div class="card-body">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="locations[]"
                                                id="{{ $location->id }}" value="{{ $location->id }}">
                                            <h6>{{ $location->name }}</h6>
                                        </label>
                                    </div>
                                    <br>
                                    {{ $location->description }}
                                    <a href="{{ route('medical_programmer.locations.edit', $location->id) }}">Configurar</a>
                                    <br>
                                    @if($location->pavilion_schedule->count())
                                    <h6> Apertura: {{ \Carbon\Carbon::parse($location->pavilion_schedule->first()->from)->format('d-m-Y').' a '.\Carbon\Carbon::parse($location->pavilion_schedule->first()->to)->format('d-m-Y')}}</h6>
                                    <br>
                                    @endif
                                    @foreach ($location->hours_of_operation as $hour)
                                        {{ $hour->spanish_day }}:
                                        {{ $hour->openingTime . ' - ' . $hour->closingTime }}
                                        @if (!$loop->last)
                                            <br>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </fieldset>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="inputEmail4">Desde</label>
                    <input type="date" name="from" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label for="inputEmail4">Hasta</label>
                    <input type="date" name="to" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label for="inputEmail4">&nbsp;</label>
                    <button type="submit" class="btn btn-primary form-control">
                        <i class="fa fa-folder-open"></i> Aperturar
                    </button>
                </div>
            </div>
        </form>
    @endif

@endsection

@section('custom_js')

@endsection
