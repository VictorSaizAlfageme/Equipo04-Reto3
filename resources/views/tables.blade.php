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
                    <th class="hidden">Disponibilidad</th>
                    <th class="hidden">Cargo</th>
                    <th>Detalles</th>
                    <th>Borrar</th>
                </tr>
                </thead>

                <tbody>
                @foreach($listaTrabajadores as $trabajador)
                    <form method="POST" action="{{route("datosTrabajador")}}" id="formMasInformacion">
                        @csrf
                            <tr class="tr">
                                <td class="hidden">{{$trabajador["DNI"]}}</td>
                                <td>{{$trabajador["NOMBRE"]}}</td>
                                <td class="hidden">{{$trabajador["APELLIDOS"]}}</td>
                                <td class="hidden">{{$trabajador["EMAIL"]}}</td>
                                @if($trabajador["DISPONIBILIDAD"] == 1)
                                    <td class="hidden">Disponible</td>
                                @else
                                    <td class="hidden">Ocupado</td>
                                @endif

                                @if($trabajador["IDTIPO"] == 1)
                                    <td class="hidden">Coordinador</td>
                                @else
                                    <td class="hidden">Técnico</td>
                                @endif
                                <form method="POST" action="{{route("datosTrabajador")}}" id="formMasInformacion">
                                    @csrf
                                    <input name="id" type="hidden" value="{{$trabajador["ID"]}}">
                                    <td colspan="1"><input type="submit" value="Detalles" class="btn btn-primary"></td>
                                </form>
                                <form method="POST" action="{{route("borrarTrabajador")}}" id="formularioBorrar">
                                    @csrf
                                    <input name="id" type="hidden" value="{{$trabajador["ID"]}}">
                                    <td colspan="1" style="text-align: center"><input type="submit" value="Borrar" class="btn btn-danger"></td>
                                </form>
                            </tr>
                @endforeach
                </tbody>
            </table>


        </div>
        <spans>
            {{$listaTrabajadores->links()}}
        </spans>
    </div>

<style>
    .w-5{
        display: none;
    }
</style>
@endsection
