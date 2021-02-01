$("#cerrarSesion").click(function (){
    document.cookie = 'usuarioConectado=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    document.cookie = 'tipoUsuario=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
});
