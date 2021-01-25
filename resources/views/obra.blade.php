@extends('index')
@section('content')

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Formulario de obra</h1>
                        </div>
                        <form class="user" method="POST" id="formulario" action="{{route("obraRegistrar")}}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select name="tipoEdificio" id="tipoEdifio" class="form-control form-control-user form-select">
                                        <option class="select-title" disabled selected>Tipo de edificio</option>
                                        <option value="piso">Piso</option>
                                        <option value="casa">Casa</option>
                                        <option value="local">Local</option>
                                        <option value="garaje">garaje</option>
                                        <option value="trastero">Trastero</option>
                                        <option value="edificio">Edificio</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select name="tipoObra" id="tipoObra" class="form-control form-control-user form-select">
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
                                    <input type="search" name="direccion" class="form-control form-control-user"
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
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user"
                                               id="numero" placeholder="Número" name="numero">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                               id="municipio" placeholder="Municipio" name="municipio">
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="provincias" id="provincias"
                                                class="form-control form-control-user form-select">
                                            <option class="select-title" disabled selected>Selecciona tu provincia
                                            </option>
                                            <option value="alava">Álava</option>
                                            <option value="vizcaya">Vizcaya</option>
                                            <option value="guipuzcoa">Guipúzcoa</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="custom-file form-control">
                                    <input type="file" class="custom-file-input" id="customFile" name="plano">
                                    <label class="custom-file-label" for="customFile">Selecciona tu plano</label>
                                </div>
                            </form>
                            <div id="mensajeError">
                                <span class="mt-3" id="mensajeErrorSpan"></span>
                            </div>
                            <hr>

                            <a id="botonRegistroObra" class="btn btn-primary btn-user btn-block registro-obra"> <!-- AQUÍ AÑADIR LAS VALIDACIONES -->
                                ENVIAR
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
