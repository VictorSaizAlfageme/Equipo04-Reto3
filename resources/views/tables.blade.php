@extends("layoutCoordinadores")
@section("content")

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Disponibilidad</th>
                    <th>Cargo</th>
                </tr>
                </thead>

                <tbody>
                @foreach($listaTrabajadores as $trabajador)
                    <tr>
                        <td>{{$trabajador->DNI}}</td>
                        <td>{{$trabajador->NOMBRE}}</td>
                        <td>{{$trabajador->APELLIDOS}}</td>
                        <td>{{$trabajador->EMAIL}}</td>
                        <td>{{$trabajador->TELEFONO}}</td>
                        @if($trabajador->DISPONIBILIDAD == 1)
                            <td>Disponible</td>
                        @else
                            <td>Ocupado</td>
                        @endif

                        @if($trabajador->IDTIPO == 1)
                            <td>Coordinador</td>
                        @else
                            <td>Técnico</td>
                        @endif
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
