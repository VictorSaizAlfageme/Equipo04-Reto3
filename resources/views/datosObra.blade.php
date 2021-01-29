@extends('layoutSolicitante')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 offsset-md-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="comentarios-tab" data-bs-toggle="tab" href="#comentarios" role="tab" aria-controls="comentarios" aria-selected="true">Comentarios</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contacto-tab" data-bs-toggle="tab" href="#contacto" role="tab" aria-controls="contacto" aria-selected="false">Solicitante</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tecnico-tab" data-bs-toggle="tab" href="#tecnico" role="tab" aria-controls="tecnico" aria-selected="false">Técnico</a>
                    </li>
                    <li class="nav-item" role="presentation"  onclick="mostrarMarcadorMapa({{$ubicacion -> LATITUD}}, {{$ubicacion -> LONGITUD}})">
                        <a class="nav-link" id="mapa-tab" data-bs-toggle="tab" href="#mapa" role="tab" aria-controls="mapa" aria-selected="false">Mapa</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <br>
                    <div class="tab-pane fade show active" id="comentarios" role="tabpanel" aria-labelledby="comentarios-tab">
                        <div class="row">
                            <div class="form-group row">
                                <label for="nobra" class="col-6">Nº Obra</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$obra -> ID}}" id="nobra" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Tipo de obra</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$obra -> ID}}" id="tobra" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tedificio" class="col-6">Tipo de edificio</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$obra -> ID}}" id="tedificio" disabled>
                                </div>
                            </div>

                            <form class="fecha" method="GET" action="{{route("cambiarFecha")}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="tobra" class="col-4 col-md-6">Fecha inicio</label>
                                    <div class="col-6 col-md-4">
                                        <input type="date" class="form-control" id="fiobra" name="fechaIni" value="{{$obra -> FECHAINI}}">

                                    </div>
                                </div>
                                <input type="hidden" class="form-control" id="idobra" name="id" value="{{$obra -> ID}}">
                                <div class="form-group row">

                                    <label for="tobra" class="col-4 col-md-6">Fecha fin</label>
                                    <div class="col-6 col-md-4">
                                        <input type="date" class="form-control" id="ffobra" name="fechaFin" value="{{$obra -> FECHAFIN ?? ""}}">

                                    </div>
                                    <button class="btn btn-primary  col-1" type="submit"><i class="fas fa-check"></i></button>
                                </div>
                            </form>
                            <div class="form-group row">
                                <label for="descripcion" class="col-4">Descripcion</label>
                                <div class="col-8">
                                    <textarea style="resize: none" type="text" class="form-control"  id="descripcion" disabled>{{$obra -> DESCRIPCION}}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p>Comentarios anteriores</p>
                                <input class="form-control" type="text" placeholder="Tuberia rota" aria-label="readonly input example" readonly> <br>
                            </div>

                            <form class="comentario" enctype="multipart/form-data" method="POST" id="formulario" action="{{route("agregarComentario")}}">
                                {{ csrf_field() }}

                                    <label for="comentario" class="form-label">Comentario sobre la obra</label>
                                    <textarea class="form-control comentario" id="comentario" rows="3" name="comentario"></textarea>

                                <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Introducir documento</label>
                                        <input class="form-control form-control-sm" id="customFile" type="file" name="file">
                                </div>
                                <input type="hidden" class="form-control" id="idobra2" name="id2" value="{{$obra -> ID}}">
                                <div id="mensajeError2">
                                    <span class="mt-3" id="mensajeErrorSpan2"></span>
                                </div>
                                <a class="btn btn-primary d-flex justify-content-center mb-4" id="botonAnadirComentario">Añadir comentario</a>

                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="contactos-tab">
                        <div class="row">
                            <div class="form-group row">
                                <label for="nsolicitante" class="col-6">Nº Solicitante</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$solicitante -> ID}}" id="nsolicitante" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dniSolicitante" class="col-6">Nombre</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$solicitante -> DNI}}" id="dniSolicitante" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nombreSolicitante" class="col-6">Nombre</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$solicitante -> NOMBRE}}" id="nombreSolicitante" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apeSolicitante" class="col-6">Apellidos</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$solicitante -> APELLIDOS}}" id="apeSolicitante" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telSolicitante" class="col-6">Teléfono</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$solicitante -> TELEFONO}}" id="telSolicitante" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailSolicitante" class="col-6">Email</label>
                                <div class="col-6">
                                    <input type="yexy" class="form-control" value="{{$solicitante -> EMAIL}}" id="emailSolicitante" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tecnico" role="tabpanel" aria-labelledby="tecnico-tab">
                        <div class="row">
                            <div class="form-group row">
                                <label for="nobra" class="col-6">Técnico asignado:</label>
                                <div class="col-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Asignar un técnico</option>
                                        <option value="1">Técnico 1</option>
                                        <option value="2">Técnico 2</option>
                                        <option value="3">Técnico 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary">Asignar</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active" id="mapa" role="tabpanel" aria-labelledby="mapa-tab">
                        <div>
                            <div id="mapid"></div>
                        </div>

                        <div class="row mt-5">
                            <div class="form-group row">
                                <label for="calle" class="col-6">Calle</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$ubicacion -> CALLE}}" id="calle" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="poblacion" class="col-6">Población</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$ubicacion -> POBLACION}}" id="poblacion" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cpos" class="col-6">Código postal</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$ubicacion -> CODPOSTAL}}" id="cpos" disabled>
                                </div>
                            </div>

                            <div class="form-group row d-flex justify-content-center">
                                <div class="form-group col-4 row">
                                    <label for="numero" class="col-4">Número</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="{{$ubicacion -> NUMERO}}" id="numero" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-4 row">
                                    <label for="piso" class="col-4">Piso</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="{{$ubicacion -> PISO}}" id="piso" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-4 row">
                                    <label for="mano" class="col-4">Mano</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="{{$ubicacion -> MANO}}" id="mano" disabled>
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
