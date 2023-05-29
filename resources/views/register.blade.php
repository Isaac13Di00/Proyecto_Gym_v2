@extends('layouts.base')
@section('content')
    @vite(['resources/sass/home.scss', 'resources/js/app.js'])
    <title>Registrar socio</title>
    <div class="container" style="width: 50%">
        <div class="row items-center text-center mt-3">
            <form action="" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Ingrese todos los datos</h1>
                <div class="form-floating">
                    <input type="name" class="form-control" id="floatingInput" name="name" placeholder="Phone">
                    <label for="name">Name(s)</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectGender" aria-label="Floating label select example">
                        <option selected>Select gender</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                        <option value="3">Otro</option>
                    </select>
                    <label for="floatingSelect">Gender</label>
                </div>
                <div class="form-floating">
                    <input for="birthday" type="date" class="form-control">
                    <label for="floatingInput">Birthday</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectBLood">
                        <option selected>Select blood type</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">AB+</option>
                        <option value="6">AB-</option>
                        <option value="7">O+</option>
                        <option value="8">O-</option>
                    </select>
                    <label for="floatingSelect">Blood type</label>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInput" name="phone" placeholder="Phone">
                  <label for="phone">Phone</label>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInput" name="street" placeholder="Street">
                  <label for="street">Street</label>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInput" name="col" placeholder="Col">
                  <label for="col">Col</label>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInput" name="cp" placeholder="Cp">
                  <label for="cp">Cp</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-dark mt-2" type="submit">Sign in</button>
            </form>
        </div>
    </div>
@endsection
{{-- 
'calle' => $this->faker->word(),
'colonia' => $this->faker->word(),
'cp' => '12345',
'isAdmin' => false,
'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
'remember_token' => Str::random(10),  
--}}
