@extends('layouts.base')
@section('content')
    @vite(['resources/sass/userTable.scss', 'resources/js/app.js'])
    <div class="container" style="height: 100%;">
            <title>Lista de socios</title>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mb-2">
                            <h4 class="card-title">Socios</h4>
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 mt-4">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Sexo</th>
                                        <th>Tipo sanguíneo</th>
                                        <th>Teléfono</th>
                                        <th>Vigencia</th>
                                        <th>Activo</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->sexo}}</td>
                                            <td>{{$user->tipo_sangre}}</td>
                                            <td>{{$user->telefono}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->name}}</td>
                                            <td><a href="{{route('user.showUser', $user->id)}}"><button>Ver usuario</button></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
       
        <script src="assets/libs/jquery/jquery.min.js"></script>
        {{-- <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    </div>
@endsection
