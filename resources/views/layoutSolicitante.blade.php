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
          content="Página web pública creada y organizada por la empresa Nuve "/>
    <link rel="icon" type="image/png" href="img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Custom fonts for this template-->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet/1/leaflet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/dark.css" rel="stylesheet">
</head><!-- Content Wrapper -->
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <div class="left-column">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('inicio')}}">
                <div class="sidebar-brand-icon">
                    <img class="logo" src="img/logo.png">
                </div>
                <div class="sidebar-brand-text mx-3">NUVE</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../../Equipo04-Reto3%20-%20copia/resources/views/index.blade.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ESTADÍSTICAS
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                   aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Estadísticas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Ordenadas:</h6>
                        <a class="collapse-item" href="../../../Equipo04-Reto3%20-%20copia/resources/views/utilities-color.blade.php">Semanalmente</a>
                        <a class="collapse-item" href="../../../Equipo04-Reto3%20-%20copia/resources/views/utilities-border.blade.php">Mensualmente</a>
                        <a class="collapse-item" href="utilities-animation.blade.php">Anualmente</a>
                        <a class="collapse-item" href="../../../Equipo04-Reto3%20-%20copia/resources/views/utilities-other.blade.php">Historicamente</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="../../../Equipo04-Reto3%20-%20copia/resources/views/charts.blade.php">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Alertas</span>
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../../../Equipo04-Reto3%20-%20copia/resources/views/tables.blade.php">
                    <i class="fas fa-fw fa-user-shield"></i>
                    <span>Coordinadores</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </div>
    </ul>
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content" class="bg-white-content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Buscador" aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="dark-mode nav-item dropdown">
                        <label class="mb-0" for="darkSwitch"><i class="fas fa-fw fa-sun m-2"></i></label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="darkSwitch" checked/>
                            <label class="custom-control-label" for="darkSwitch"><i class="fas fa-fw fa-moon"></i></label>
                        </div>
                    </li>
                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header notificacion">
                                NOTIFICACIONES
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todas.</a>
                        </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            <img class="img-profile rounded-circle"
                                 src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Ajustes
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('paginaPrincipal')}}" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Cerrar Sesión
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Seleccione "Cerrar Sesión" a continuación si está listo para finalizar
                            su sesión actual.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a id="cerrarSesion" class="btn btn-primary" href="{{route('inicioSesion')}}">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Topbar -->
        @yield('content')

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="footer-class copyright text-center my-auto">
                    <img class="footer-img vitoria1" src="img/footer01.jpg">
                    <span>Copyright &copy; NUVE 2020</span>
                    <img class="footer-img vitoria2" src="img/footer02.png">
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <!--CERRAR LA SESION-->
<script src="js/cerrarSesion.js"></script>
<!-- Core plugin JavaScript-->
<script src="jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="components/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="js/chart.js/Chart.min.js"></script>
<script src="js/dark-mode-switch.min.js"></script>
<!-- Page level custom scripts -->
<script src="bootstrap/js/demo/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/leaflet/1/leaflet.js"></script>

<script src="js/validaciones.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="../node_modules/leaflet/src/Leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
<script src="js/obra.js"></script>
<!-- Make sure you put this AFTER Leaflet's CSS -->

<script src="js/map.js"></script>

<!--CERRAR SESION SI NO EXISTE EL COOKIE-->
@if(!isset($_COOKIE["usuarioConectado"]))
    <script>
        document.location.href="{!! route('inicioSesion'); !!}";
    </script>
@endif

</body>

</html>
