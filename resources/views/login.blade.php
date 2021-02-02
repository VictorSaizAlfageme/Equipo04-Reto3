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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6 formulario-div">
                            <div class="p-5 login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Bienvenid@!</h1>
                                </div>
                                <form class="user" id="formulario" method="POST" action="{{route("solicitanteIniciarSesion")}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="dni" aria-describedby="emailHelp"
                                               placeholder="DNI" name="dni">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Contraseña" name="pass">
                                    </div>
                                    <a id="botonIniciarSesion" class="btn btn-primary btn-user btn-block">
                                        INICIAR SESIÓN
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{route('solicitarContrasena')}}">¿Se te ha olvidado la contraseña?</a>
                                </div>
                                <div class="text-center">
                                    <small>¿No tienes cuenta? </small><a class="small" href="{{route("solicitanteRegistro")}}">Registrate aquí.</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="circulo"><a href="{{route('loginTrabajadores')}}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>            </svg></a></div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="boostrap/js/sb-admin-2.min.js"></script>
<script src="js/loginEnter.js"></script>

</body>
