@extends('layouts.app')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crear nuevo usuario</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    @canany(['Administrator', 'SAMU administrador'])
    <form method="POST" class="form-horizontal" action="{{ route('user.store') }}">
        @csrf
        @method('POST')
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Datos de usuario</h5>

            <input type="hidden" name='human_name_use' value='official'>
            <div class="form-row">

                <fieldset class="form-group col-md-1">
                    <label for="for_given">Run*</label>
                    <input type="text" class="form-control" name="run" id="for_run" required value="{{ old('run')}}"
                >
                </fieldset>
                <fieldset class="form-group col-md-1">
                    <label for="for_given">DV*</label>
                    <input type="text" class="form-control" name="dv" id="for_dv" required value="{{ old('dv')}}"
                >
                </fieldset>

                <fieldset class="form-group col-md-4">
                    <label for="for_given">Nombres *</label>
                    <input type="text" class="form-control" name="given" id="for_given" required value="{{ old('given')}}"
                >
                </fieldset>

                <fieldset class="form-group col-md-3">
                    <label for="for_fathers_family">Apellido Paterno *</label>
                    <input type="text" class="form-control" name="fathers_family" id="for_fathers_family" required
                        value="{{ old('fathers_family')}}" 
                >
                </fieldset>

                <fieldset class="form-group col-md-3">
                    <label for="for_mothers_family">Apellido Materno</label>
                    <input type="text" class="form-control" name="mothers_family" id="for_mothers_family"
                        value="{{ old('mothers_family')}}" 
                >
                </fieldset>

                <fieldset class="form-group col-md-3">
                    <label for="for_social_name">Email laboral</label>
                    <input type="text" class="form-control" name="email" id="for_email"
                        value="{{old('email')}}"
                >
                </fieldset>

                <fieldset class="form-group col-md-2">
                    <label for="for_social_name">Teléfono laboral</label>
                    <input type="text" class="form-control" name="phone" id="for_phone"
                        value="{{old('phone')}}"
                >
                </fieldset>

                <fieldset class="form-group col-md-2">
                    <label for="for_social_name">Clave</label>
                    <input type="password" class="form-control" name="password" id="for_password"
                        value="{{old('password')}}"
                >
                </fieldset>

            </div>

        </div>
    </div>

    <div class="form-row">
			<div class="col">
				<h4>Permisos</h4>
                @can('be god')
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permissions[]"
                            value="be god" id="be god">
                        <label class="form-check-label" for="be god"><b>be god</b></label>
                    </div>
                @endcan

				@php $anterior = null; @endphp
				@foreach($permissions as $permission)
                    @if(Gate::check('Administrator'))


                        @if($permission->name != 'be god')
                            @if( current(explode(':', $permission->name)) != current(explode(':', $anterior)))
                                <hr>
                                @php $anterior = $permission->name; @endphp
                            @endif
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permissions[]"
                                    value="{{ $permission->name }}" id="{{$permission->name}}"
                                    {{ !Gate::check('Administrator') && $permission->name == 'SAMU' ? 'checked' : '' }}
                                    >
                                <label class="form-check-label" for="{{$permission->name}}"
                                    > <b>{{$permission->name}}</b> {{$permission->description}}</label>
                            </div>
                        @endif

                        @elseif(Gate::check('SAMU administrador') && Str::contains($permission->name, 'SAMU'))
                            @if( current(explode(':', $permission->name)) != current(explode(':', $anterior)))
                                <hr>
                                @php $anterior = $permission->name; @endphp
                            @endif
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permissions[]"
                                    value="{{ $permission->name }}" id="{{$permission->name}}"
                                    {{ !Gate::check('Administrator') && $permission->name == 'SAMU' ? 'checked' : '' }}
                                    >
                                <label class="form-check-label" for="{{$permission->name}}"
                                    > <b>{{$permission->name}}</b> {{$permission->description}}</label>
                            </div>
                        @endif

				@endforeach
				<hr>
                <button type="submit" class="btn btn-primary mb-3"> <i class="fas fa-save"></i> Guardar</button>
			</div>

		</div>
    </form>
    @endcanany
@endsection

@section('custom_js')
    <script src='{{asset("js/jquery.rut.chileno.js")}}'></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        //obtiene digito verificador
        $('input[name=run]').keyup(function(e) {
            var str = $("#for_run").val();
            $('#for_dv').val($.rut.dv(str));
        });
    });
    </script>
@endsection