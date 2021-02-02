@extends('layoutCoordinadores')
@section('content')
        <!-- Begin Page Content -->
            <div class="container-fluid">

                <!--Campos ocultos para las estadísticas-->
                <input type="hidden" id="alava" value="{{$alava}}">                <input type="hidden" id="valor" value="AAA">
                <input type="hidden" id="vizcaya" value={{$vizcaya}}>
                <input type="hidden" id="guipuzcoa" value={{$guipuzcoa}}>
                    <!--FECHAS-->
                <input type="hidden" id="ene" value={{$ene}}>
                <input type="hidden" id="feb" value={{$feb}}>
                <input type="hidden" id="mar" value={{$mar}}>
                <input type="hidden" id="abr" value={{$abr}}>
                <input type="hidden" id="may" value={{$may}}>
                <input type="hidden" id="jun" value={{$jun}}>
                <input type="hidden" id="jul" value={{$jul}}>
                <input type="hidden" id="ago" value={{$ago}}>
                <input type="hidden" id="sep" value={{$sep}}>
                <input type="hidden" id="oct" value={{$oct}}>
                <input type="hidden" id="nov" value={{$nov}}>
                <input type="hidden" id="dic" value={{$dic}}>



                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Construcciones
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$obrasNuevasConstrucciones}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-truck-pickup fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Reformas
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$obrasReformas}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hammer fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Número de solicitantes
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$numSolicitantes}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Número de trabajadores
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$numTrabajadores}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4 offset-xl-3">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Obras acabadas
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$ratioObras}}%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                         style="width: {{$ratioObras}}%" aria-valuenow="50" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Obras activas
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$obrasActivas}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hard-hat fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Obras el último año</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>

                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myAreaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Provincias</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="myPieChart"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Álava
                                        </span>
                                    <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Vizcaya
                                        </span>
                                    <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Guipuzcoa
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>


@endsection
