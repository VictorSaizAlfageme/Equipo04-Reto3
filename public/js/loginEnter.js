$("#botonIniciarSesion").click(function (){
    $("#formulario").submit();
});

$(document).on('keypress', function (e) {
    if (e.which == 13) {
        $("#formulario").submit();
    }
});
