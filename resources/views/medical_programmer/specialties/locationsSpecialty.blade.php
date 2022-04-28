@extends('layouts.app')

@section('content')
    <h3 class="mb-3">Asignar Locales a Especialidad: {{ $specialty->specialty_name }}</h3>
    <hr/>
    <form action="{{ route('medical_programmer.specialties.asign_location_store', $specialty->id) }}" method="POST">
        @csrf
        <div class="form-row">
            <fieldset class="form-group col-12 col-md-12">
                {{-- <table class="table">
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Organización</th>
                        <th>Horario de operación</th>
                    </tr>
                </table> --}}
                @foreach ($locations_groupby_types as $key => $locations)
                    <div class="form-check-inline pt-4">
                        <label class="form-check-label">
                            <h5>{{ $key }} </h5>
                            <input type="checkbox" data-type="{{ $locations->first()->cod_con_physical_type_id }}" class="form-check-input checkedAll" value="">
                            Seleccionar todos
                        </label>
                    </div>
                    <div class="row">
                    @foreach ($locations as $location)
                        <div class="col-lg-3 card bg-info text-white shadow">
                            <div class="card-body">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input {{ 'type'.$locations->first()->cod_con_physical_type_id }}" type="checkbox" name="locations[]" id="{{ $location->id }}" value="{{ $location->id }}" {{ in_array($location->id, $specialty->locations->pluck('id')->toArray()) ? 'checked' : '' }}>
                                        <strong>{{ $location->name }}</strong>
                                    </label>
                                </div>
                                <br>
                                {{ $location->description }}
                                <br>
                                <small> {{ $location->organization->name }}</small>
                                <br>
                                @foreach ($location->hours_of_operation as $hour)
                                {{ $hour->spanish_day }}:
                                {{ $hour->openingTime . ' - ' . $hour->closingTime }}
                                @if (!$loop->last)
                                    <br>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        {{-- <table class="table">
                            <tr>
                                <td>
                                    <input class="form-check" type="checkbox" name="locations[]"
                                        id="{{ $location->id }}" value="{{ $location->id }}"
                                        {{ in_array($location->id, $specialty->locations->pluck('id')->toArray()) ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <label class="form-check-label" for="{{ $location->id }}">
                                        {{ $location->name }}
                                    </label>
                                </td>
                                <td>
                                    <label class="form-check-label">
                                        {{ $location->description }}
                                    </label>
                                </td>
                                <td>
                                    <label class="form-check-label">
                                        {{ $location->organization->name }}
                                    </label>
                                </td>
                                <td>
                                    <label class="form-check-label">
                                        @foreach ($location->hours_of_operation as $hour)
                                            {{ $hour->allDay ? 'Toda la semana' : Str::ucfirst($hour->spanish_day) }} ->
                                            {{ $hour->openingTime . ' - ' . $hour->closingTime }}
                                            @if (!$loop->last)
                                                <br>
                                            @endif
                                        @endforeach
                                    </label>
                                </td>
                            </tr>
                        </table> --}}
                    @endforeach
                    </div>
                @endforeach
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Guardar</button>
    </form>
@endsection

@section('custom_js')
<script>
     $(".checkedAll").change(function() {
        var location_type = $(this).attr('data-type');
        if (this.checked) {
            $(".type"+location_type).each(function() {
                this.checked=true;
            });
        } else {
            $(".type"+location_type).each(function() {
                this.checked=false;
            });
        }
    });
</script>
@endsection
