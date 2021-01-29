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
                                    <input type="text" class="form-control" value="{{$tipoObra -> NOMBRE}}" id="tobra" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tedificio" class="col-6">Tipo de edificio</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="{{$tipoEdificio -> NOMBRE}}" id="tedificio" disabled>
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
                                <input type="hidden" class="form-control" name="id" value="{{$obra -> ID}}">
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


                            <form class="fecha" method="GET" action="{{route("cambiarEstado")}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="estadoObra" class="col-4 col-md-6">Estado</label>
                                    <div class="col-6 col-md-4">
                                        <select style="width: 100%;" name="estadoObra" class="form-control form-select form-estado" id="estadoObra">
                                            <option value="{{$estadoObra -> ID}}">{{$estadoObra -> NOMBRE}}</option>
                                            @foreach($listaEstados as $estado)
                                                @if($estadoObra -> NOMBRE != $estado -> NOMBRE)
                                                    <option value="{{$estado -> ID}}">{{$estado -> NOMBRE}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" class="form-control" name="id2" value="{{$obra -> ID}}">
                                    <button class="btn btn-primary col-1" type="submit"><i class="fas fa-check"></i></button>

                                </div>
                            </form>

                                <div class="mb-3">
                                <p>Comentarios anteriores</p>
                                    @foreach($comentarios as $comentario)
                                        <small class="d-flex justify-content-end">{{$comentario->FECHA}}</small>
                                        <input style="color: black" class="form-control" type="text" value="{{$comentario->TEXTO}}" aria-label="readonly input example" readonly> <br>
                                        <img class="img-fluid d-flex justify-content-center" src="{{$comentario->MULTIMEDIA}}">
                                    @endforeach
                            </div>

                            <form class="comentario" enctype="multipart/form-data" method="POST" id="formulario" action="{{route("agregarComentario")}}">
                                {{ csrf_field() }}

                                    <h3 class="form-label">Comentario sobre la obra</h3>
                                    <textarea style="resize: none" class="form-control comentario" id="comentario" rows="3" name="comentario"></textarea>

                                <div class="mb-3 mt-4">
                                        <h3 class="form-label">Introducir foto</h3>
                                        <input class="form-control form-control-sm" id="customFile" type="file" name="file">
                                </div>
                                <input type="hidden" class="form-control"  name="id3" value="{{$obra -> ID}}">
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
                                <label for="dniSolicitante" class="col-6">DNI</label>
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

                        @if($obra -> IDTRABAJADOR == NULL)
                        <form class="fecha" method="GET" action="{{route("asignarTecnico")}}">
                            @csrf
                            <div class="form-group row">
                                <label for="tecnico" class="col-4 col-md-6">Técnico:</label>
                                <div class="col-6 col-md-4">
                                    <select style="width: 100%;" name="tecnico" class="form-control form-select form-estado" id="tecnico">
                                        @foreach($listaTecnicos as $tecnico)
                                            @if($tecnico -> DISPONIBILIDAD == 1)
                                                <option value="{{$tecnico -> ID}}">{{$tecnico -> NOMBRE}}</option>
                                            @endif
                                            @endforeach
                                    </select>
                                </div>
                                <input type="hidden" class="form-control" name="id4" value="{{$obra -> ID}}">

                            </div>
                            <button class="btn btn-primary col-12" type="submit">Asignar tecnico</button>

                        </form>
                        @else
                            <div class="row">
                                <div class="form-group row">
                                    <label for="dniTecnico" class="col-6">DNI</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" value="{{$tecnicoAsignado -> DNI}}" id="dniTecnico" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nombreTecnico" class="col-6">Nombre</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" value="{{$tecnicoAsignado -> NOMBRE}}" id="nombreTecnico" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="apellidosTecnico" class="col-6">Apellidos</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" value="{{$tecnicoAsignado -> APELLIDOS}}" id="apellidosTecnico" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="emailTecnico" class="col-6">Email</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" value="{{$tecnicoAsignado -> EMAIL}}" id="emailTecnico" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telTecnico" class="col-6">Teléfono</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" value="{{$tecnicoAsignado -> TELEFONO}}" id="telTecnico" disabled>
                                    </div>
                                </div>
                            </div>
                            <form class="comentario" enctype="multipart/form-data" method="GET" id="formulario" action="{{route("eliminarTecnico")}}">
                                {{ csrf_field() }}

                                <button type="submit" class="btn btn-primary d-flex justify-content-center col-12" id="botonDesignarTecnico">Eliminar técnico</button>
                                <input type="hidden" class="form-control"  name="id5" value="{{$obra -> ID}}">

                            </form>
                        @endif

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
