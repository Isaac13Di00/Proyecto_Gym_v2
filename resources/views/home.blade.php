@extends('layouts.base')
@section('content')
    @vite(['resources/sass/home.scss', 'resources/js/app.js'])
    <div class="container" style="height: 100%;">
         @if ((Auth::user()->isAdmin) == 0)
        
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
                    <img src="{{Auth::user()->imagen}}" class="mt-2 mb-2 card-img-top" alt="Este se supone que eres tu.">
                    <form action="{{route('user.image')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="file" id="inputGroupFile02" required>
                            <button class="btn btn-outline-dark" type="submit" id="inputGroupFileAddon04">Cambiar imagen</button>
                          </div>                          
                        {{-- <input class="btn btn-dark" type="file" name="file">
                        <input type="submit" value="cambiar imagen"> --}}
                    </form>
                </div>
            </div>
        @else
            <title>Home - Admin</title>
            <div class="d-flex aligns-items-center justify-content-center" style="height:100%">
                <div class="card text-bg-light m-3" style="min-width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-2">Socios</h5>
                        <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
                        <p class="card-text fs-2">{{$count}}</p>
                    </div>
                </div>
                <div class="card text-bg-success m-3" style="min-width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-2">Socios activos</h5>
                        <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
                        <p class="card-text fs-2">INSERTE CANTIDAD</p>
                    </div>
                </div>
                <div class="card text-bg-danger m-3" style="min-width: 18rem;">
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