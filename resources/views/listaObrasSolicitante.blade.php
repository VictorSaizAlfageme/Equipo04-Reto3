@section('content')

    @if ($_COOKIE["tipoUsuario"] === "0")
        @extends('layoutSolicitante')
    @else
        <script>
            document.location.href="{!! route('paginaPrincipal'); !!}";
        </script>
    @endif
    <h3 id="titulo-3">OBRAS ASIGNADAS</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Tabla obras -->
                <table class="table">
                    <thead>
                    <tr class="tr">
                        <th class="hidden">Nº</th>
                        <th class="hidden">COD. OBRA</th>
                        <th>TIPO DE OBRA</th>
                        <th>ESTADO</th>
                        <th class="hidden">FECHA INICIO</th>
                        <th class="hidden">FECHA FIN</th>
                    </tr>
                    </thead>
                    <tbody class="table-body">

                    @foreach($listaSolicitantes as $obra)

                        <!--TUPLAS-->
                        <tr class="cell-1 tr" data-target="#id{{$obra->ID}}">
                            <td class="text-center hidden">1</td>

                            <td class="hidden"><b>{{ $obra->ID }}</b></td>

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
                                <td class="hidden">Sin definir</td>
                            @else
                                <td class="hidden">{{ $obra->FECHAINI }}</td>
                            @endif

                            @if($obra->FECHAFIN == "")
                                <td class="hidden">Sin definir</td>
                            @else
                                <td class="hidden">{{ $obra->FECHAINI }}</td>
                            @endif
                        </tr>




                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
