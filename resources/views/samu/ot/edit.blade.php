@extends('layouts.app')

@section('content')
@include('nav')

<style>
 .button1{
     margin-top:30px;
     }
</style>

<div class="card mb-3">
    <div class="card-body">



        <!-- seguimiento-->
        <h3 class="text-primary"><b> Orientación Telefónica<b></h3>
            
       
        <!-- inicio detalle OT-->
            <h4>Descipción de la Evaluación</h4>
            <form method="post" action="{{ route('samu.ot.otstore') }}">
                @csrf
                @method('POST')
                <div class="form-row">
                        <div class=" col-md-12">
                        <label for="for_run">Detalle de Orientacion Telefonica </label>
                            <textarea class="form-control" name="description"  required>{{ ( $call &&  $call->description)? $call->description : '' }}</textarea>
                            <div class="invalid-feedback">
                            Ingrese descripción
                            </div>
                        </div>
                    
                    </div>
                    <div class="form-row">
                            <fieldset class="form-group col-md-2 mt-3">
                                <label for="for_save"></label>
                                <input hidden name="qtc_id" value="{{$qtc->id}}"> 
                                <button type="submit" class="btn btn-primary button mb-3" >Guardar</button>
                            </fieldset>
                    </div>
                </div>
            </form>
        <!-- fin detalle OT-->
</div>
    </div>



@endsection
