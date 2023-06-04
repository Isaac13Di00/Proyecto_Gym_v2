@extends('layouts.base')
@section('content')
    @vite(['resources/sass/home.scss', 'resources/js/app.js'])
    <title>Registrar socio</title>
    <div class="container" style="width: 50%">
        <div class="row items-center text-center mt-3">
            <form action="{{route('users.registerNew')}}" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Ingrese todos los datos</h1>
                <div class="form-floating mb-2">
                    <input type="name" class="form-control" id="floatingInput" name="name" placeholder="Phone" required>
                    <label for="name">Name(s)</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingInput" name="email"
                        placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-2">
                    <select class="form-select" id="floatingSelectGender" aria-label="Floating label select example" name="sexo"
                        required>
                        <option selected value="">Select gender</option>
                        <option value="Masculino" name="sexo">Masculino</option>
                        <option value="Femenino" name="sexo">Femenino</option>
                        <option value="Otro" name="sexo">Otro</option>
                    </select>
                    <label for="floatingSelect">Gender</label>
                </div>
                <div class="form-floating mb-2">
                    <input for="birthday" type="date" class="form-control" name="birth" required>
                    <label for="floatingInput">Birth date</label>
                </div>
                <div class="form-floating mb-2">
                    <select class="form-select" id="floatingSelectBLood" name="sangre" required>
                        <option selected value="">Select blood type</option>
                        <option value="A+" name="sangre">A+</option>
                        <option value="A-" name="sangre">A-</option>
                        <option value="B+" name="sangre">B+</option>
                        <option value="B-" name="sangre">B-</option>
                        <option value="AB+" name="sangre">AB+</option>
                        <option value="AB-" name="sangre">AB-</option>
                        <option value="O+" name="sangre">O+</option>
                        <option value="O-" name="sangre">O-</option>
                    </select>
                    <label for="floatingSelect">Blood type</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" name="phone" placeholder="Phone"
                        required>
                    <label for="phone">Phone</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" name="street" placeholder="Street">
                    <label for="street">Street</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" name="col" placeholder="Col">
                    <label for="col">Col</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" name="cp" placeholder="Cp">
                    <label for="cp">Cp</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                        required>
                    <label for="floatingPassword">Password</label>
                </div>
                <label class="form-label">Selecciona el tipo de usuario</label>
                <div class="form-floating mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" name="isAdmin" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Socio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="1" type="radio" name="isAdmin" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Administrador
                        </label>
                    </div>
                </div>
                <button class="w-100 btn btn-lg btn-dark" type="submit">Registrar</button>
            </form>
        </div>
    </div>
@endsection
