@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 offsset-md-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="comentarios-tab" data-bs-toggle="tab" href="#comentarios" role="tab" aria-controls="comentarios" aria-selected="true">Comentarios</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contacto-tab" data-bs-toggle="tab" href="#contacto" role="tab" aria-controls="contacto" aria-selected="false">Contacto</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tecnico-tab" data-bs-toggle="tab" href="#tecnico" role="tab" aria-controls="tecnico" aria-selected="false">Técnico</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="mapa-tab" onclick="mostrarMapa()" data-bs-toggle="tab" href="#mapa" role="tab" aria-controls="mapa" aria-selected="false">Mapa</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <br>
                    <div class="tab-pane fade show active" id="comentarios" role="tabpanel" aria-labelledby="comentarios-tab">
                        <div class="row">
                            <div class="form-group row">
                                <label for="nobra" class="col-6">Nº Obra</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="96298" id="nobra" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Tipo de obra</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="Reparación" id="tobra" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Fecha inicio</label>
                                <div class="col-4">
                                    <input type="date" class="form-control" id="fiobra">
                                </div>
                                <button class="btn btn-primary  col-1" type="button"><i class="fas fa-check"></i></button>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Fecha fin</label>
                                <div class="col-4">
                                    <input type="date" class="form-control" id="ffobra">
                                </div>
                                <button class="btn btn-primary  col-1" type="button"><i class="fas fa-check"></i></button>
                            </div>

                            <div class="mb-3">
                                <p>Comentarios anteriores</p>
                                <input class="form-control" type="text" placeholder="Tuberia rota" aria-label="readonly input example" readonly> <br>
                                <input class="form-control" type="text" placeholder="Suelo hecho" aria-label="readonly input example" readonly> <br>
                                <input class="form-control" type="text" placeholder="Paredes demolidas" aria-label="readonly input example" readonly> <br>
                                <input class="form-control" type="text" placeholder="Jardín plantado" aria-label="readonly input example" readonly> <br>
                                <label for="exampleFormControlTextarea1" class="form-label">Comentario sobre la obra</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <form action="/media" enctype="multipart/form-data" method="post">
                                    {{ csrf_field() }}
                                    <label for="formFileSm" class="form-label">Introducir documento</label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                </form>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary">Añadir</button>
                                <button class="btn btn-secondary">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="contactos-tab">
                        <div class="row">
                            <div class="form-group row">
                                <label for="nobra" class="col-6">Nº Obra</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="96298" id="nobra-contacto" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Nº Solicitante</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="09823" id="nsobra-contacto" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Nombre</label>
                                <div class="col-4">
                                    <input type="text" class="form-control" value="Naia" id="nomobra-contacto" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Apellidos</label>
                                <div class="col-4">
                                    <input type="text" class="form-control" value="Ibañez de Garayo" id="apeobra-contacto" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Teléfono</label>
                                <div class="col-4">
                                    <input type="text" class="form-control" value="666666666" id="tobra-contacto" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tobra" class="col-6">Email</label>
                                <div class="col-4">
                                    <input type="yexy" class="form-control" value="naia.ibanezdegarayo@ikasle.egibide.org" id="emailobra-contacto" disabled>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-primary">Contactar</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
