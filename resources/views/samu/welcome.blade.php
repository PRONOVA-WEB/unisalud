@extends('layouts.app')

@section('content')

@include('samu.nav')


<div class="jumbotron mt-3">
    <div class="container">
        <h1 class="display-4 text-center">Portal de Salud</h1>
        <p class="lead text-center">Bienvenido al portal SAMU.</p>
            <div class="card-body text-center">
                    <ul class="list-unstyled mt-3 mb-4">



                        <img class="mb-2" src="{{ asset('images/logo_samu.png') }}" alt="Logo SAMU">

                    </ul>


                    <div class="row justify-content-center">

                    </div>
                </div>
    </div>
</div>

@endsection

