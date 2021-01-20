<h1>Lista de trabajadores</h1>

@foreach($trabajadores as $trabajador)
    <ul>
        <li>ID: {{ $trabajador->ID }}</li>
        <li>Nombre: {{ $trabajador->NOMBRE }}</li>
        <li>DNI: {{ $trabajador->DNI }}</li>
    </ul>
@endforeach
