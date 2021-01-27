@extends('layoutCoordinadores')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 offsset-md-2">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos del Usuario</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Modificar Datos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="epass-tab" data-bs-toggle="tab" href="#epass" role="tab" aria-controls="epass" aria-selected="false">Cambiar Contraseña</a>
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
                                    <input type="text" class="form-control" id="dniMostrar" value="72844606H" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nombreMostrar" class="col-4"> Nombre:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="nombreMostrar" value="Urko" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellidosMostrar" class="col-4"> Apellidos:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="apellidosMostrar" value="Ruiz de Gordejuela" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailMostrar" class="col-4"> Dirección de correo:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="emailMostrar" value="urko.ruizdegordejuela@ikasle.egibide.org" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefonoMostrar" class="col-4"> Telefono:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="telefonoMostrar" value="622898920" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form class="user" method="POST" id="formulario" action="{{route("usuarioEditar")}}">
                    <div class="row">
                        <!--<div class="col-4">
                            <img class="img-thumbnail" src="img/undraw_profile.svg" alt="">
                            <div>
                                <br>
                                <input class="form-control-sm hidden" id="newImage" type="file"/>
                            </div>
                        </div>-->
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="nombre" class="col-4"> Nombre:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="nombre" value="Urko">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellido" class="col-4"> Apellidos:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="apellido" value="Ruiz de Gordejuela">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-4"> Dirección de correo:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="email" value="urko.ruizdegordejuela@ikasle.egibide.org">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefono" class="col-4"> Telefono:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="telefono" value="622898920">
                                </div>
                            </div>
                            <div id="mensajeError">
                                <span class="mt-3" id="mensajeErrorSpan">{!! session()->get('error') !!}</span>
                            </div>

                            <div class="form-group text-center">
                                <a class="btn btn-primary" id="botonActualizarPerfil">Actualizar</a>
                                <button class="btn btn-secondary">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="epass" role="tabpanel" aria-labelledby="epass-tab">
                    <div class="col-md-7 offset-md-3">
                        <h3 class="text-center">Cambio de Clave</h3>
                        <br>
                        <div class="form-group row">
                            <label for="contraseña" class="col-6">Nueva contraseña:</label>
                            <div class="col-6">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="recontraseña" class="col-6">Repite la contraseña:</label>
                            <div class="col-6">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary">Actualizar</button>
                            <button class="btn btn-secondary">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection