@extends('layouts.base')
@section('content')
    @vite(['resources/sass/home.scss', 'resources/js/app.js'])
    <div class="container">
        {{-- @if ((Auth::user()->isAdmin) == 0) --}}
        @if (false)
            <title>Home</title>
            <div class="row justify-content-center align-items-center">
                <div class="col card mb-3 mt-3 me-3" style="max-width: 95%;">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ Auth::user()->name }}</h4>
                        <h4 class="card-title">Membresia:</h4>
                        <h5 class="card-text">Individual</h5>
                        <h4 class="card-title">Miembro desde:</h4>
                        <h5 class="card-text">{{ Auth::user()->created_at }}</h5>
                        <br>
                        <h4 class="card-title">Vigencia:</h4>
                        <h5 class="card-text">01-May-2022 hasta 01-Jun-2022</h5>
                        <br>
                        <h4 class="card-title">Sexo:</h4>
                        <h5 class="card-text">{{ Auth::user()->sexo }}</h5>
                        <h4 class="card-title">Fecha de nacimiento:</h4>
                        <h5 class="card-text">{{ Auth::user()->fecha_nac }}</h5>
                        <h4 class="card-title">Tipo de sangre:</h4>
                        <h5 class="card-text">{{ Auth::user()->tipo_sangre }}</h5>
                        <br>
                        <h4 class="card-title">Telefono:</h4>
                        <h5 class="card-text">{{ Auth::user()->telefono }}</h5>
                        <h4 class="card-title">Email:</h4>
                        <h5 class="card-text">{{ Auth::user()->email }}</h5>
                        <br>
                        <h4 class="card-title">Dirrecion</h4>
                        <h4 class="card-title">Calle:</h4>
                        <h5 class="card-text">{{ Auth::user()->calle }}</h5>
                        <h4 class="card-title">Colonia:</h4>
                        <h5 class="card-text">{{ Auth::user()->colonia }}</h5>
                        <h4 class="card-title">Codigo postal:</h4>
                        <h5 class="card-text">{{ Auth::user()->cp }}</h5>
                    </div>
                </div>
                <div class="col card mb-3 mt-3" style="max-width: 30%;">
                    <img src="/images/user-alt.png" class="mt-2 mb-2 card-img-top" alt="Este se supone que eres tu.">
                </div>
            </div>
        @else
            <title>Home - Admin</title>
            <div class="row justify-content-center align-items-center" style="width : 100%; height : 100%;">
                <div class="card text-bg-light m-3" style="max-width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-2">Socios</h5>
                        <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
                        <p class="card-text fs-2">INSERTE CANTIDAD</p>
                    </div>
                </div>
                <div class="card text-bg-success m-3" style="max-width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-2">Socios activos</h5>
                        <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
                        <p class="card-text fs-2">INSERTE CANTIDAD</p>
                    </div>
                </div>
                <div class="card text-bg-danger m-3" style="max-width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-2">Socios vencidos</h5>
                        <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
                        <p class="card-text mt-4 fs-2">INSERTE CANTIDAD</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection