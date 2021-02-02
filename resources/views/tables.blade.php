@section('content')

    @if ($_COOKIE["tipoTrabajador"] === "1")
        @extends('layoutCoordinador')
    @else
        <script>
            document.location.href="{!! route('index'); !!}";
        </script>
    @endif

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr class="tr">
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Disponibilidad</th>
                    <th>Cargo</th>
                    <th>Mas detalles</th>
                </tr>
                </thead>

                <tbody>
                @foreach($listaTrabajadores as $trabajador)
                    <form method="POST" action="{{route("datosTrabajador")}}" id="formMasInformacion">
                        @csrf
                            <tr class="tr">
                                <td>{{$trabajador["DNI"]}}</td>
                                <td>{{$trabajador["NOMBRE"]}}</td>
                                <td>{{$trabajador["APELLIDOS"]}}</td>
                                <td>{{$trabajador["EMAIL"]}}</td>
                                @if($trabajador["DISPONIBILIDAD"] == 1)
                                    <td>Disponible</td>
                                @else
                                    <td>Ocupado</td>
                                @endif

                                @if($trabajador["IDTIPO"] == 1)
                                    <td>Coordinador</td>
                                @else
                                    <td>Técnico</td>
                                @endif
                                <input name="id" type="hidden" value="{{$trabajador["ID"]}}">
                                <td colspan="1"><input type="submit" value="Mas detalles" class="btn btn-primary"></td>
                            </tr>
                    </form>
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
