@extends('layoutSolicitante')

@section('content')
    @if(Cookie::get('tipoUsuario') == "0")
        <h1>Solicitante</h1>
    @else
        @if(Cookie::get('tipoTrabajador') == "11")
            <h1 class="d-flex justify-content-center">Tecnico</h1>
        @else
            <h1 class="d-flex justify-content-center">Coordinador</h1>
        @endif
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
                        <!--<div class="col-4">
                            <img class="img-thumbnail" src="img/undraw_profile.svg" alt="">
                        </div>-->
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="dniMostrar" class="col-4"> DNI:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="dniMostrar" value="{{$trabajador -> DNI}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nombreMostrar" class="col-4"> Nombre:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="nombreMostrar" value="{{$trabajador -> NOMBRE}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellidosMostrar" class="col-4"> Apellidos:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="apellidosMostrar" value="{{$trabajador -> APELLIDOS}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailMostrar" class="col-4"> Dirección de correo:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="emailMostrar" value="{{$trabajador -> EMAIL}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefonoMostrar" class="col-4"> Telefono:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="telefonoMostrar" value="{{$trabajador -> TELEFONO}}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefonoMostrar" class="col-4"> Cargo:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control text-muted" id="telefonoMostrar" value="@if($trabajador["IDTIPO"] == 1) Coordinador @else Técnico @endif" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                </div>
                <div class="tab-pane fade" id="epass" role="tabpanel" aria-labelledby="epass-tab">
                    <div class="col-md-7 offset-md-3">
                        <h3 class="text-center">Cambio de Clave</h3>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
