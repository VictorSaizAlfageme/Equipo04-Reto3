<h1>Lista de trabajadores</h1>

@foreach($trabajadores as $trabajador)
    <li>{{ $trabajador->NOMBRE }}</li>
@endforeach
