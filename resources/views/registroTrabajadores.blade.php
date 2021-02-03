
@section('content')

    @if ($_COOKIE["tipoTrabajador"] === "1")
        @extends('layoutCoordinadores')
    @else
        <script>
            document.location.href="{!! route('inicio'); !!}";
        </script>
    @endif

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registro de trabajadores</h1>
                            </div>
                            <form class="user" method="POST" id="formulario" action="{{route("trabajadorRegistrar")}}">
                                @csrf
                                <div class="select form-group row">
                                    <select class="form-select" id="tipoTrabajador" name="tipoTrabajador">
                                        <option selected disabled>Tipo de trabajador</option>
                                        <option value="11" data-icon="fa-tools">Técnico</option>
                                        <option value="1" data-icon="fa-user-shield">Coordinador</option>

                                    </select>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="nombre form-control form-control-user" id="nombre"
                                               placeholder="Nombre" name="nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="apellido form-control form-control-user" id="apellido"
                                               placeholder="Apellidos" name="apellido">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input type="email" class="email form-control form-control-user" id="email"
                                           placeholder="Dirección de correo" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input type="password" class="pass form-control form-control-user"
                                               id="pass" placeholder="Contraseña" name="pass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                               id="dni" placeholder="Dni" name="dni">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user"
                                               id="telefono" placeholder="Telefono" name="telefono">
                                    </div>
                                </div>

                            </form>
                            <div id="mensajeError">
                                <span class="mt-3" id="mensajeErrorSpan">{!! session()->get('error') !!}</span>
                            </div>
                            <hr>

                            <a id="botonRegistroTrabajador" class="btn btn-primary btn-user btn-block registro-obra">
                                <!-- AQUÍ AÑADIR LAS VALIDACIONES -->
                                ENVIAR
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery.min.js"></script>
    <!--<script src="../vendor/bootstrap/bootstrap.bundle.min.js"></script>-->
    <!-- Core plugin JavaScript-->
    <script src="jquery-easing/jquery.easing.min.js"></script>

    <!--FAKER-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>

    <script> //SCRIPT QUE AUTOCOMPLETA LOS CAMPOS
/*
        $(document).ready(function (){
            faker.locale = "es";
            var randomCard = faker.helpers.createCard();

            $("#nombre").val(faker.name.firstName());
            $("#apellido").val(faker.name.lastName());
            $("#email").val(faker.internet.email());
            $("#pass").val("12345Abcde");
            $("#dni").val(rand_dni());
            $("#telefono").val(faker.phone.phoneNumber());

        });

        function randomDate() {
            start = new Date(1950, 1, 1);
            end = new Date(1995, 12, 31);
            return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()))
        }

        //Funciones para generar DNI https://gist.github.com/vitoo/7e5360c66a68a2836f67ff41ac892f4b#file-dni_spain-js-L3
        function formatNumberLength(num, length) {
            var r = "" + num;
            while ( r.length < length ) {
                r = "0" + r;
            }
            return r;
        }

        function charDNI(dni) {
            var chain = "TRWAGMYFPDXBNJZSQVHLCKET";
            var pos = dni % 23;
            var letter = chain.substring( pos, pos + 1 );
            return letter;
        }

        function rand_dni() {
            num = Math.floor( ( Math.random() * 100000000 ) );
            sNum = formatNumberLength( num, 8 );
            return sNum + charDNI( sNum );
        }
*/
    </script>

@endsection
