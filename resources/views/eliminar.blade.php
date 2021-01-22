<h1>Eliminar solicitante</h1>

<form method="POST" action="{{route("eliminar")}}">

    @csrf
    @method('DELETE')

    <label>ID: </label>
    <input type="text" name="id" value="99999999L">
    <br>

    <input type="submit">
</form>
