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
    <link rel="icon" type="image/png" href="../../proyecto/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Custom fonts for this template-->
    <link href="../../proyecto/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../proyecto/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrate gratis!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="nombre form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="apellido form-control form-control-user" id="exampleLastName"
                                            placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="email form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Dirección de correo">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="pass form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Contraseña">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repite la contraseña">
                                    </div>
                                </div>
                                <a href="login.blade.php" class="btn btn-primary btn-user btn-block">
                                    REGISTRATE
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.blade.php">¿Se te ha olvidado la contraseña?</a>
                            </div>
                            <div class="text-center">
                                <small>¿Ya tienes cuenta? </small><a class="small" href="login.blade.php">Inicia sesión.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../proyecto/vendor/jquery/jquery.min.js"></script>
    <script src="../../proyecto/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../proyecto/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../proyecto/boostrap/js/sb-admin-2.min.js"></script>

</body>

</html>