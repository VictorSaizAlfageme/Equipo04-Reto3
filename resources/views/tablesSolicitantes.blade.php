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
                    <th></th>
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
                                    <td colspan="1"><input type="submit" value="Más detalles" class="btn btn-primary"></td>
                                </form>
                                <form method="POST" action="{{route("borrarSolicitante")}}" id="formularioBorrar">
                                    @csrf
                                    <input name="id" type="hidden" value="{{$solicitante["ID"]}}">
                                    <td style="text-align: center"><a onclick="document.getElementById('formularioBorrar').submit()"><svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 5px" width="30" height="30" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg></a> </td>
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
