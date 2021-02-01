<h1>Lista de elementos</h1>

@foreach($lista as $elemento)
    <ul>
        <li>ID: {{ $elemento->ID }}</li>
        <li>Nombre: {{ $elemento->NOMBRE }}</li>
        <li>DNI: {{ $elemento->DNI }}</li>
        <li>Contraseña: {{ $elemento->PASSWORD }}</li>
    </ul>
@endforeach
