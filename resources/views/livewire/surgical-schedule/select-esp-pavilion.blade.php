<form action="{{ route('surgical_schedule.open_pavilions') }}" method="POST">
    @csrf
    <div class="form-row">
        <fieldset class="form-group col-12 col-md-12">
            <label for="for_specialty_id">Especialidad</label>
            <select id="for_specialty_id" name="specialty_id" class="form-control" wire:model="specialty_id"
                required>
                <option>--Seleccione--</option>
                <option value="0">Todas las especialidades</option>
                @foreach ($specialties as $specialty)
                    <option value="{{ $specialty->id }}">
                        {{ $specialty->specialty_name }}</option>
                @endforeach
            </select>
        </fieldset>
    </div>
    @if (count($pavilions))
    Leyenda:
    <span class="badge badge-success">Aperturado</span>
    <span class="badge badge-info">No Aperturado</span>
    <div class="row">
        <fieldset class="form-group col-12 col-md-12">
            <div class="row">
            @foreach ($pavilions as $location)
            @php
                $location_specialty = DB::table('location_specialty')
                                        ->select('id')
                                        ->where('location_id',$location->id);
                if($specialty_id != 0)
                {
                $location_specialty = $location_specialty->where('specialty_id',$specialty_id);
                }
                $location_specialty = $location_specialty->first();
                $LocationSpecialtySchedule = ($specialty_id == 0) ? 0 : \App\Models\SurgicalSchedule\LocationSpecialtySchedule::where('location_specialty_id',$location_specialty->id)->first();
            @endphp
                <div class="col-lg-4 card {{ ($LocationSpecialtySchedule) ? 'bg-success' : 'bg-info' }}  text-white shadow">
                    <div class="card-body">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="locations[]"
                                    id="{{ $location->id }}" value="{{ $location->id }}">
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
            <button type="submit" class="btn btn-success form-control">
                <i class="fa fa-folder-open"></i> Aperturar
            </button>
        </div>
    </div>
    @else
    <div class="form-group col-md-12">
        @if (session()->has('message'))
            <div class="alert alert-info">
                {{ session('message') }} <a href="{{ route('medical_programmer.specialties.locations') }}">Asignar</a>
            </div>
        @endif
    </div>
    @endif
</form>
