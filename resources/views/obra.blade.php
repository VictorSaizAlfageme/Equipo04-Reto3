@extends('layoutSolicitante')
@section('content')

<div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h2 text-gray-900 mb-4">Formulario de obra</h1>
                        </div>
                        <form class="user" enctype="multipart/form-data" method="POST" id="formulario" action="{{route("obraRegistrar")}}">
                            @csrf

                            <input type="hidden" name="longitud" id="longitud" value="">
                            <input type="hidden" name="latitud" id="latitud" value="">

                            <div class="form-group row">
                                <div class="col-6">
                                    <select name="tipoEdificio" id="tipoEdificio" class="form-control form-control-user form-select w-100">
                                        <option class="select-title" disabled selected>Tipo de edificio</option>
                                        <option value="piso">Piso</option>
                                        <option value="casa">Casa</option>
                                        <option value="local">Local</option>
                                        <option value="garaje">Garaje</option>
                                        <option value="trastero">Trastero</option>
                                        <option value="edificio">Edificio</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select name="tipoObra" id="tipoObra" class="form-control form-control-user form-select w-100">
                                        <option class="select-title" disabled selected>Tipo de obra</option>
                                        <option value="nuevaconstruccion">Nueva construcción</option>
                                        <option value="reforma">Reforma</option>
                                    </select>
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <textarea class="descripcion form-control form-control-user" id="descripcion" name="descripcion"></textarea>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <input type="search" name="calle" class="form-control form-control-user"
                                           id="form-address" placeholder="Dirección"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="población" class="form-control form-control-user"
                                           id="form-city" placeholder="Ciudad">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="codigopostal" class="form-control form-control-user"
                                           id="form-zip" placeholder="Codigo Postal">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                               id="portal" placeholder="Portal" name="portal">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control form-control-user"
                                               id="numero" placeholder="Piso" name="piso">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-user"
                                               id="mano" placeholder="Mano" name="mano">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                               id="municipio" placeholder="Municipio" name="municipio">
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="provincia" id="provincias"
                                                class="form-control form-control-user form-select">
                                            <option class="select-title" disabled selected>Selecciona tu provincia
                                            </option>
                                            <option value="Alava">Álava</option>
                                            <option value="Vizcaya">Vizcaya</option>
                                            <option value="Guipuzcoa">Guipúzcoa</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="custom-file form-control">
                                    {{csrf_field()}}
                                    <input type="file" class="custom-file-input" id="customFile" name="plano">
                                    <label class="custom-file-label" for="customFile">Selecciona tu plano</label>
                                </div>
                            </form>
                            <div class="mt-3" id="mensajeError">
                                <span class="" id="mensajeErrorSpan"></span>
                            </div>
                            <hr>

                            <a id="botonRegistroObra" class="btn btn-primary btn-user btn-block registro-obra"> <!-- AQUÍ AÑADIR LAS VALIDACIONES -->
                                ENVIAR
                            </a>
                        </div>
                    </div>
                </div>

    </div>

@endsection
