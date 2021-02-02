@section('content')

    @if ($_COOKIE["tipoTrabajador"] === "1")
        @extends('layoutCoordinadores')
    @else
        <script>
            document.location.href="{!! route('paginaPrincipal'); !!}";
        </script>
    @endif

<div class="container">
    <div class="row">
        <div class="col-md-12 offsset-md-2">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos del Usuario</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <br>
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="dniMostrar" class="col-4"> DNI:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="dniMostrar" value="{{$solicitante -> DNI}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nombreMostrar" class="col-4"> Nombre:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="nombreMostrar" value="{{$solicitante -> NOMBRE}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellidosMostrar" class="col-4"> Apellidos:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="apellidosMostrar" value="{{$solicitante -> APELLIDOS}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailMostrar" class="col-4"> Dirección de correo:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="emailMostrar" value="{{$solicitante -> EMAIL}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefonoMostrar" class="col-4"> Telefono:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="telefonoMostrar" value="{{$solicitante -> TELEFONO}}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fechaNacMostrar" class="col-4"> Fecha Nacimiento:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="fechaNacMostrar" value="{{$solicitante -> FECHANAC}}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lugarNacMostrar" class="col-4"> Lugar Nacimiento:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="lugarNacMostrar" value="{{$solicitante -> LUGARNAC}}" disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
