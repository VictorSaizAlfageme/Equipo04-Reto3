<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nuve</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Equipo4"/>
    <meta name="copyright" content="Todos los derechos reservados a Nuve"/>
    <meta name="description"
          content="Pagina web pública creada y organizada por la empresa Nuve "/>
    <link rel="icon" type="image/png" href="img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Custom fonts for this template-->
    <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 card-registro">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Formulario de Registro</h1>
                        </div>
                        <form  class="user" method="POST" id="formulario" action="{{route("solicitanteRegistrar")}}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="nombre form-control form-control-user" id="nombre"
                                           placeholder="Nombre" name="nombre">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="apellido form-control form-control-user" id="apellido"
                                           placeholder="Apellido" name="apellido">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="email form-control form-control-user" id="email"
                                       placeholder="Dirección de correo" name="email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="pass form-control form-control-user"
                                           id="pass" placeholder="Contraseña" name="pass">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           id="pass2" placeholder="Repite la contraseña">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="date" class="form-control form-control-user"
                                           id="fechaNac" placeholder="Fecha de nacimiento" name="fechaNac">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control form-control-user"
                                           id="telefono" placeholder="Telefono" name="telefono">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                           id="dni" placeholder="Dni" name="dni">
                                </div>
                                <div class="col-sm-6">
                                    <select name="provincias" id="lugarNac" class="form-control form-control-user form-select">
                                        <option class="select-title" disabled selected>Lugar de nacimiento</option>
                                        <option value="Alava">Álava</option>
                                        <option value="Vizcaya">Vizcaya</option>
                                        <option value="Guipuzcoa">Guipúzcoa</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <a id="botonRegistroSolicitante" class="btn btn-primary btn-user btn-block"> <!-- AQUÍ AÑADIR LAS VALIDACIONES -->
                                REGISTRATE
                            </a>
                        </form>
                        <div class="mt-3" id="mensajeError">
                            <span  id="mensajeErrorSpan">{!! session()->get('error') !!}</span>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{route('solicitarContrasena')}}">¿Se te ha olvidado la contraseña?</a>
                        </div>
                        <div class="text-center">
                            <small>¿Ya tienes cuenta? </small><a class="small" href="{{route('inicioSesion')}}">Inicia sesión.</a>
                        </div>
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
<!-- Custom scripts for all pages-->
<script src="boostrap/js/sb-admin-2.min.js"></script>
<script src="js/validaciones.js"></script>

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
        $("#pass2").val("12345Abcde");

        fecha  = randomDate();
        var today = fecha.toISOString().split('T')[0];
        $("#fechaNac").val(today);

        $("#telefono").val(faker.phone.phoneNumber());
        $("#dni").val(rand_dni());



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

</body>
</html>
