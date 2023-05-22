<h4 class="card-title text-center">{{ $user->name }}</h4>
                        <h4 class="card-title">Membresia:</h4>
                        <h5 class="card-text">Individual</h5>
                        <h4 class="card-title">Miembro desde:</h4>
                        <h5 class="card-text">{{$user->created_at }}</h5>
                        <br>
                        <h4 class="card-title">Vigencia:</h4>
                        <h5 class="card-text">01-May-2022 hasta 01-Jun-2022</h5>
                        <br>
                        <h4 class="card-title">Sexo:</h4>
                        <h5 class="card-text">{{ $user->sexo }}</h5>
                        <h4 class="card-title">Fecha de nacimiento:</h4>
                        <h5 class="card-text">{{ $user->fecha_nac }}</h5>
                        <h4 class="card-title">Tipo de sangre:</h4>
                        <h5 class="card-text">{{ $user->tipo_sangre }}</h5>
                        <br>
                        <h4 class="card-title">Telefono:</h4>
                        <h5 class="card-text">{{ $user->telefono }}</h5>
                        <h4 class="card-title">Email:</h4>
                        <h5 class="card-text">{{ $user->email }}</h5>
                        <br>
                        <h4 class="card-title">Dirrecion</h4>
                        <h4 class="card-title">Calle:</h4>
                        <h5 class="card-text">{{ $user->calle }}</h5>
                        <h4 class="card-title">Colonia:</h4>
                        <h5 class="card-text">{{ $user->colonia }}</h5>
                        <h4 class="card-title">Codigo postal:</h4>
                        <h5 class="card-text">{{ $user->cp }}</h5>