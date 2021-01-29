@extends('layoutCoordinadores')
@section('content')
    <h3 id="titulo-3">OBRAS ASIGNADAS</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Tabla obras -->
                <table class="table">
                    <thead>
                    <tr class="tr">
                        <th class="text-center">Nº</th>
                        <th>COD. OBRA</th>
                        <th>TIPO DE OBRA</th>
                        <th>ESTADO</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="table-body">


                    @foreach($listaObras as $obra)

                        <!--TUPLAS-->
                        <tr class="cell-1 tr" data-toggle="collapse" data-target="#id{{$obra->ID}}">
                            <td class="text-center">1</td>

                            <td><b>{{ $obra->ID }}</b></td>

                            @switch($obra->IDOBRA)
                                @case("1")
                                <td>Construcción</td>
                                @break
                                @case("11")
                                <td>Reforma</td>
                                @break
                            @endswitch

                            @switch($obra->IDESTADO)
                                @case("1")
                                <td><span class="badge badge-dark">En espera</span></td>
                                @break

                                @case("11")
                                <td><span class="badge badge-secondary">Aceptado</span></td>

                                @break

                                @case("21")
                                <td><span class="badge badge-info">Denegado</span></td>
                                @break

                                @case("31")
                                <td><span class="badge badge-light">En proceso</span></td>
                                @break

                                @case("41")
                                <td><span class="badge badge-light">En proceso</span></td>
                                @break

                                @case("51")
                                <td><span class="badge badge-success">Finalizado</span></td>
                                @break
                            @endswitch

                            @if($obra->FECHAINI == "")
                                <td>Sin definir</td>
                            @else
                                <td>{{ $obra->FECHAINI }}</td>
                            @endif

                            @if($obra->FECHAFIN == "")
                                <td>Sin definir</td>
                            @else
                                <td>{{ $obra->FECHAINI }}</td>
                            @endif

                            <td class="table-elipse" data-toggle="collapse" data-target="#id{{$obra->ID}}"><i class="fas fa-angle-down"></i></td>
                        </tr>

                        <!--DESPLEGABLE-->

                        <tr id="id{{$obra->ID}}" class="collapse cell-1 row-child tr">
                            @foreach($listaUbicaciones as $ubi)
                                @if($ubi->ID == $obra->ID)
                                    <td colspan="2"><b>C/ {{$ubi->CALLE}}</b></td>
                                @endif
                            @endforeach
                            <td colspan="1"><button type="button" class="btn btn-warning">Más información</button></td>
                                <td colspan="2"><button type="button" class="btn btn-secondary"><a href="{{route('icomentariostecnicos')}}">Añadir comentarios</a></button></td>
                                <td colspan="2"><button type="button" class="btn btn-primary"><a href="{{route('icomentariostecnicos')}}">Contactar</a></button></td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
