@extends('layouts.app')
@push('css')
<style>
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100% !important;
}
</style>
@endpush
@section('content')
    <h3 class="mb-3">Asignar Locales a Especialidad: {{ $specialty->specialty_name }}</h3>
    <hr/>
    <form action="{{ route('medical_programmer.specialties.asign_local_store', $specialty->id) }}" method="POST">
        @csrf
        <div class="form-row">
            <fieldset class="form-group col-12 col-md-12">
                <label>Locales</label>
                <select id="locales" class="selectpicker" title="Seleccione uno o varios locales" name="locales[]" multiple>
                    @foreach($locales as $local)
                        <option value="{{ $local->id }}" {{ ($specialty->organization_local->contains('id', $local->id))?'selected':'' }}>{{ $local->description }}</option>
                    @endforeach
                </select>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Guardar</button>
    </form>
@endsection

@section('custom_js')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
@endsection
