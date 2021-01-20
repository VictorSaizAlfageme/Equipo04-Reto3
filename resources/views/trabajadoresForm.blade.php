<h1>Formulario de trabajadores</h1>

<form method="POST" action="{{route("trabajadores.insertar")}}">

    @csrf

    <label>DNI: </label>
    <input type="text" name="dni" value="99999999L">
    <br>

    <label>Password: </label>
    <input type="text" name="password" value="12345">
    <br>

    <label>Nombre: </label>
    <input type="text" name="nombre" value="Iñaki">
    <br>

    <label>Apellido 1: </label>
    <input type="text" name="apellido1" value="Maestu">
    <br>

    <label>Apellido 2: </label>
    <input type="text" name="apellido2" value="Federico">
    <br>

    <label>Imagen: </label>
    <input type="text" name="imagen" value="http://MiImagen.com">
    <br>

    <label>Email: </label>
    <input type="text" name="email" value="email@hotmail.com">
    <br>

    <label>Telefono: </label>
    <input type="text" name="telefono" value="945827395">
    <br>

    <label>Disponibilidad: </label>
    <input type="number" name="disponibilidad" value="0">
    <br>

    <label>Tipo: </label>
    <input type="number" name="tipo" value="1">

    <input type="submit">
</form>
