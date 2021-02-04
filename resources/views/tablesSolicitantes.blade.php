@section('content')

    @if ($_COOKIE["tipoTrabajador"] === "1")
        @extends('layoutCoordinadores')
    @else
        <script>
            document.location.href="{!! route('inicio'); !!}";
        </script>
    @endif

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr class="tr">
                    <th class="hidden">DNI</th>
                    <th>Nombre</th>
                    <th class="hidden">Apellidos</th>
                    <th class="hidden">Email</th>
                    <th class="hidden">Telefono</th>
                    <th>Más detalles</th>
                    <th>Borrar</th>
                </tr>
                </thead>

                <tbody>
                @foreach($listaSolicitantes as $solicitante)
                        @csrf
                            <tr class="tr">

                                <td class="hidden">{{$solicitante["DNI"]}}</td>
                                <td>{{$solicitante["NOMBRE"]}}</td>
                                <td class="hidden">{{$solicitante["APELLIDOS"]}}</td>
                                <td class="hidden">{{$solicitante["EMAIL"]}}</td>
                                <td class="hidden">{{$solicitante["TELEFONO"]}}</td>
                                <form method="POST" action="{{route("datosSolicitante")}}" id="formMasInformacion">
                                    @csrf
                                    <input name="id" type="hidden" value="{{$solicitante["ID"]}}">
                                    <td colspan="1" style="text-align: center"><input type="submit" value="Más detalles" class="btn btn-primary"></td>
                                </form>

                                <form method="POST" action="{{route("borrarSolicitante")}}" id="formularioBorrar">
                                    @csrf
                                    <input name="id" type="hidden" value="{{$solicitante["ID"]}}">
                                    <td colspan="1" style="text-align: center"><input type="submit" value="Borrar" class="btn btn-danger"></td>
                                </form>
                            </tr>

                @endforeach
                </tbody>
            </table>


        </div>
        <spans>
            {{$listaSolicitantes->links()}}
        </spans>
    </div>

@endsection
