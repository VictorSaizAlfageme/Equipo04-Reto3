var camposError = []; //array para guardar aquellos campos que no pasen validación
var mensajesError = []; //array donde se guarda el mensaje de error de cada campo erróneo
var idsCampos = [];
$(document).ready(function () {
    //Asignamos la función correspondiente al formulario.
    try {
        $("#botonRegistroSolicitante").click(validarDatosRegistroSolicitante);
    }
    catch (error) { }
    try {
        $("#botonRegistroObra").click(validarDatosObra);
    }
    catch (error) { }
    try {
        $("#botonRegistroTrabajador").click(validarDatosTrabajador);
    }
    catch (error) { }
    try {
        $("#botonActualizarPerfil").click(validarDatosUsuario);
    }
    catch (error) { }
    try {
        $("#botonActualizarContrasena").click(validarContrasenaUsuario);
    }
    catch (error) { }
    try {
        $("#botonRecuperarContrasena").click(validarCorreoUsuario);
    }
    catch (error) { }
    try {
        $("#botonAnadirComentario").click(anadirComentario);
    }
    catch (error) { }
});
//Al presionar enter
$(document).on('keypress', function (e) {
    if (e.which == 13) {
        try {
            validarDatosRegistroSolicitante();
            validarDatosObra();
            validarDatosTrabajador();
            validarDatosUsuario();
            validarContrasenaUsuario();
            validarCorreoUsuario();
            anadirComentario();
        }
        catch (error) { }
    }
});
function iniciarSesion() {
    $("#formulario").submit();
}
function validarDatosRegistroSolicitante() {
    idsCampos = ["#nombre", "#apellido", "#email", "#pass", "#pass2", "#fechaNac", "#telefono", "#dni", "#lugarNac"];
    camposError = [];
    mensajesError = [];
    idsCampos.forEach(function (c) { return $(c).removeClass("buzz"); });
    idsCampos.forEach(function (c) { return establecerEstiloNormal(c); });
    validarNombre();
    validarApellido();
    validarEmail();
    validarPass();
    validarTelefono();
    validarDNI();
    validarFechaNac();
    validarLugarNac();
    comprobarYEstablecerEstilos();
    if (mensajesError.length == 0) {
        $("#formulario").submit();
    }
}
/*
$.ajax({
    type: "POST",
    url: "prueba.php",
    data:{usuario:$("#usuario").val(), email:$("#email").val()},
    success: function (encontrado) {
        //el servidor nos devolverá un string con algo del estilo: "true,false"

        campos = encontrado.split(",");


        //revisamos email:
        if (campos[1] == "false") {
            mensajesError.push("Este email ya está en uso");
            camposError.push("#email");
        }
        else{
            validarEmail();
        }

        let enviar = comprobarYEstablecerEstilos();

        if(enviar){
            enviarFormulario();
        }else{
            quitarEstiloError();
            hallarYEstablecerFocus();
        }
    },
    error: function (xhr, status, err){
        console.log("Problemas :" + status + err.toString());
    }
})



}


function quitarEstiloError(){
for (let x =0;x<idsCampos.length;x++){
    let id :string= idsCampos[x];
    // @ts-ignore
    let encontrado = camposError.find(c => c == id);
    if (encontrado == undefined){
        establecerEstiloNormal(id);
    }
}

}

function enviarFormulario(){
$("#formularioRegistro").first().submit();
}
*/
function validarDatosObra() {
    idsCampos = ["#tipoEdificio", "#tipoObra", "#descripcion", "#form-address", "#form-city", "#form-zip", "#portal", "#numero", "#municipio", "#provincias", "#customFile", "#mano"];
    camposError = [];
    mensajesError = [];
    idsCampos.forEach(function (c) { return $(c).removeClass("buzz"); });
    idsCampos.forEach(function (c) { return establecerEstiloNormal(c); });
    validarTipoEdificio();
    validarTipoObra();
    validarDescripcion();
    validarDireccion();
    validarCiudad();
    validarCodigoPostal();
    validarPortal();
    validarNumero();
    validarMano();
    validarMunicipio();
    validarProvincias();
    validarFichero();
    //Obtener latitud y longitud.
    comprobarYEstablecerEstilos();
    if (mensajesError.length == 0) {
        $("#formulario").submit();
    }
}
function validarDatosTrabajador() {
    idsCampos = ["#nombre", "#apellido", "#email", "#pass", "#dni", "#telefono"];
    camposError = [];
    mensajesError = [];
    idsCampos.forEach(function (c) { return $(c).removeClass("buzz"); });
    idsCampos.forEach(function (c) { return establecerEstiloNormal(c); });
    validarTipoTrabajador();
    validarNombre();
    validarApellido();
    validarEmail();
    //validarPass();
    validarDNI();
    validarTelefono();
    comprobarYEstablecerEstilos();
    if (mensajesError.length == 0) {
        $("#formulario").submit();
    }
}
function validarDatosUsuario() {
    idsCampos = ["#dni", "#nombre", "#apellidos", "#email", "#telefono"];
    camposError = [];
    mensajesError = [];
    idsCampos.forEach(function (c) { return $(c).removeClass("buzz"); });
    idsCampos.forEach(function (c) { return establecerEstiloNormal(c); });
    validarNombre();
    validarApellido();
    validarEmail();
    validarTelefono();
    comprobarYEstablecerEstilos();
    if (mensajesError.length == 0) {
        $("#formulario").submit();
    }
}
function validarContrasenaUsuario() {
    idsCampos = ["#pass", "#pass2"];
    camposError = [];
    mensajesError = [];
    idsCampos.forEach(function (c) { return $(c).removeClass("buzz"); });
    idsCampos.forEach(function (c) { return establecerEstiloNormal(c); });
    validarPass();
    comprobarYEstablecerEstilos();
    if (mensajesError.length == 0) {
        $("#formulario2").submit();
    }
}
function validarCorreoUsuario() {
    idsCampos = ["#email"];
    camposError = [];
    mensajesError = [];
    idsCampos.forEach(function (c) { return $(c).removeClass("buzz"); });
    idsCampos.forEach(function (c) { return establecerEstiloNormal(c); });
    validarEmail();
    var pass = generarContrasena();
    // @ts-ignore
    $("#pass").val(pass);
    comprobarYEstablecerEstilos();
    if (mensajesError.length == 0) {
        $("#formulario").submit();
    }
}
function generarContrasena() {
    var caracteres = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    var numeroAleatorio = 3;
    var pass = "";
    // paso 2 - escribir x caracteres
    for (var i = 0; i < 8; i++) {
        numeroAleatorio = parseInt(String(Math.random() * caracteres.length));
        pass += caracteres[numeroAleatorio];
    }
    return pass;
}
function anadirComentario() {
    idsCampos = ["#comentario", "#file"];
    camposError = [];
    mensajesError = [];
    idsCampos.forEach(function (c) { return $(c).removeClass("buzz"); });
    idsCampos.forEach(function (c) { return establecerEstiloNormal(c); });
    validarComentario();
    validarFoto();
    comprobarYEstablecerEstilos();
    if (mensajesError.length == 0) {
        $("#formulario").submit();
    }
}
function comprobarYEstablecerEstilos() {
    if (camposError.length > 0) {
        aplicarEstiloError();
    }
}
function validarNombre() {
    var campo = "#nombre";
    // @ts-ignore
    var nombre = $(campo).val();
    var patron = RegExp("^[A-zÀ-ÿ]+([ ]+[A-zÀ-ÿ]+)*$");
    try {
        if (!validarVacio(nombre)) {
            throw "Debes insertar tu nombre.";
        }
        if (!patron.test(nombre)) {
            throw "El nombre no es válido.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarApellido() {
    var campo = "#apellido";
    // @ts-ignore
    var apellidos = $(campo).val();
    var patron = RegExp("^[A-zÀ-ÿ]+([ ]+[A-zÀ-ÿ]+)*$");
    try {
        if (!validarVacio(apellidos)) {
            throw "Debes insertar tu apellido.";
        }
        if (!patron.test(apellidos)) {
            throw "El apellido no es válido.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarPass() {
    var campo = "#pass";
    // @ts-ignore
    var pass = $(campo).val();
    var patron = RegExp("^(a-zA-Z0-9){5,30}$");
    try {
        if (!validarVacio(pass)) {
            throw "Debes añadir una contraseña.";
        }
        else {
            if (!patron.test(pass)) {
                throw "la contraseña debe tener 6 caracteres: mayúscula, minúscula y número.";
            }
            else {
                validarPass2();
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarPass2() {
    var campo = "#pass2";
    // @ts-ignore
    var pass = $("#pass").val();
    // @ts-ignore
    var pass2 = $(campo).val();
    try {
        if (!validarVacio(pass)) {
            throw "Debes repetir la contraseña.";
        }
        if (pass2 != pass) {
            throw "Las contraseñas no coinciden.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarEmail() {
    var campo = "#email";
    // @ts-ignore
    var email = $(campo).val();
    var patron = RegExp("^([A-z0-9]+[._]?)+[A-z0-9]+@([a-z]+.)+.[a-z]{2,4}$");
    try {
        if (!validarVacio(email)) {
            throw "Debes insertar tu email.";
        }
        if (!patron.test(email)) {
            throw "Email no válido.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarTelefono() {
    var campo = "#telefono";
    // @ts-ignore
    var tel = $(campo).val();
    var patron = RegExp("^[9|6]{1}[0-9]{8}$");
    try {
        if (!validarVacio(tel)) {
            throw "Debes insertar tu número de teléfono.";
        }
        else {
            if (!patron.test(tel)) {
                throw "El télefono debe empezar por 6 o 9 y debe tener 9 números.";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarDNI() {
    var campo = "#dni";
    // @ts-ignore
    var dni = $(campo).val();
    var patron = RegExp("^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$");
    try {
        if (!validarVacio(dni)) {
            throw "Debes insertar tu Dni o Nif.";
        }
        else {
            if (!patron.test(dni)) {
                throw "El Dni no es correcto";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarFechaNac() {
    var campo = "#fechaNac";
    // @ts-ignore
    var fechaNac = $(campo).val();
    try {
        if (!validarVacio(fechaNac)) {
            throw "Debes insertar tu fecha de nacimiento.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarLugarNac() {
    var campo = "#lugarNac";
    // @ts-ignore
    var lugarNac = $(campo).val();
    try {
        if (lugarNac == null) {
            throw "Debes seleccionar tu lugar de nacimiento.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarTipoEdificio() {
    var campo = "#tipoEdificio";
    // @ts-ignore
    var tipoEdificio = $(campo).val();
    try {
        if (tipoEdificio == null) {
            throw "Debes seleccionar un tipo de edificio.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarTipoTrabajador() {
    var campo = "#tipoTrabajador";
    // @ts-ignore
    var tipoTrabajador = $(campo).val();
    try {
        if (tipoTrabajador == null) {
            throw "Debes seleccionar un tipo de trabajador.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarTipoObra() {
    var campo = "#tipoObra";
    // @ts-ignore
    var tipoObra = $(campo).val();
    try {
        if (tipoObra == null) {
            throw "Debes seleccionar un tipo de obra.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarDescripcion() {
    var campo = "#descripcion";
    // @ts-ignore
    var descripcion = $(campo).val();
    try {
        if (!validarVacio(descripcion)) {
            throw "Debes añadir una breve descripción de la obra.";
        }
        else {
            if (descripcion.length > 500) {
                throw "La descripcion debe ser mas breve.";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarDireccion() {
    var campo = "#form-address";
    // @ts-ignore
    var direccion = $(campo).val();
    try {
        if (!validarVacio(direccion)) {
            throw "Debes añadir una dirección.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarCiudad() {
    var campo = "#form-city";
    // @ts-ignore
    var ciudad = $(campo).val();
    var patron = RegExp("^[A-zÀ-ÿ\-]+([ ]+[A-zÀ-ÿ\-]+)*$");
    try {
        if (!validarVacio(ciudad)) {
            throw "Debes añadir una ciudad.";
        }
        else {
            if (!patron.test(ciudad)) {
                throw "La ciudad no está disposible.";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarCodigoPostal() {
    var campo = "#form-zip";
    // @ts-ignore
    var zip = $(campo).val();
    var patron = RegExp("^([0-9]{5})$");
    try {
        if (!validarVacio(zip)) {
            throw "Debes añadir un código postal.";
        }
        else {
            if (!patron.test(zip)) {
                throw "El código postal debe tener 5 números.";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarPortal() {
    var campo = "#portal";
    // @ts-ignore
    var portal = $(campo).val();
    var patron = RegExp("^[0-9]+$");
    try {
        if (!validarVacio(portal)) {
            throw "Debes añadir el portal de destino.";
        }
        else {
            if (!patron.test(portal)) {
                throw "El número del portal solo puede contener números.";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarNumero() {
    var campo = "#numero";
    // @ts-ignore
    var numero = $(campo).val();
    var patron = RegExp("^[0-9/-]{0,2}$");
    try {
        if (!patron.test(numero)) {
            throw "Solo puede incluir carácteres numéricos.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarMano() {
    var campo = "#mano";
    // @ts-ignore
    var zip = $(campo).val();
    var patron = RegExp("^([0-9a-zA-Z]{0,50})$");
    try {
        if (!patron.test(zip)) {
            throw "Solo puede incluir carácteres alfanuméricos.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarMunicipio() {
    var campo = "#municipio";
    // @ts-ignore
    var municipio = $(campo).val();
    var patron = RegExp("^[A-zÀ-ÿ\\-]+([ ]+[A-zÀ-ÿ\\-]+)*$");
    try {
        if (!validarVacio(municipio)) {
            throw "Debes añadir un código postal.";
        }
        else {
            if (!patron.test(municipio)) {
                throw "El código postal debe tener 5 números.";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarProvincias() {
    var campo = "#provincias";
    // @ts-ignore
    var provincias = $(campo).val();
    try {
        if (provincias == null) {
            throw "Debes seleccionar una provincia.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
$(".custom-file-input").on("change", function () {
    // @ts-ignore
    var fileName = $(this).val().split("\\").pop();
    if (fileName != "") {
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }
    else {
        $(this).siblings(".custom-file-label").addClass("selected").html("Selecciona tu plano");
    }
});
function validarFichero() {
    var campo = "#customFile";
    // @ts-ignore
    var nombreArchivo = $(campo).val();
    try {
        if (nombreArchivo != "") {
            var extension = nombreArchivo.substring(nombreArchivo.lastIndexOf('.'), nombreArchivo.length);
            extension = extension.substring(1, extension.length);
            if (extension == "jpg" || extension == "jpeg" || extension == "png") {
                // @ts-ignore
                if (document.querySelector("#customFile").files[0].size <= 1024 * 1024) {
                }
                else {
                    throw "El archivo ha excedido el peso máximo";
                }
            }
            else {
                throw "Solo puedes subir archivos .jpg .jpeg .png.";
            }
        }
        else {
            throw "Debes subir un plano para poder enviar la solicitud.";
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarFoto() {
    var campo = "#customFile";
    // @ts-ignore
    var nombreArchivo = $(campo).val();
    try {
        if (nombreArchivo != "") {
            var extension = nombreArchivo.substring(nombreArchivo.lastIndexOf('.'), nombreArchivo.length);
            extension = extension.substring(1, extension.length);
            if (extension == "jpg" || extension == "jpeg" || extension == "png") {
                // @ts-ignore
                if (document.querySelector("#customFile").files[0].size <= 1024 * 1024) {
                }
                else {
                    throw "El archivo ha excedido el peso máximo";
                }
            }
            else {
                throw "Solo puedes subir archivos .jpg .jpeg .png.";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarComentario() {
    var campo = "#comentario";
    // @ts-ignore
    var comentario = $(campo).val();
    try {
        if (!validarVacio(comentario)) {
            throw "No puedes dejar vacío el campo de comentario.";
        }
        else {
            if (comentario.length > 255) {
                throw "El cometario debe ser más breve.";
            }
        }
    }
    catch (err) {
        mensajesError.push(err);
        camposError.push(campo);
    }
}
function validarVacio(valorCampo) {
    if (valorCampo == "")
        return false;
    return true;
}
function aplicarEstiloError() {
    camposError.forEach(function (c) { return $(c).css("border", " red solid 1px"); });
    camposError.forEach(function (c) { return $(c).css("color", " red"); });
    camposError.forEach(function (c) { return $(c).addClass("buzz"); });
    // @ts-ignore
    if (camposError.find(function (c) { return c == "#customFile"; })) {
        $(".custom-file").addClass("buzz");
        $(".custom-file").css("border", " 1px solid red");
        $(".custom-file-label").css("color", " red");
    }
}
function establecerEstiloNormal(parametro) {
    $(parametro).css("color", " black");
    $(parametro).css("border", " 1px solid #d1d3e2");
    $(".custom-file").css("border", " none");
    $(".custom-file-label").css("color", " black");
}
function hallarYEstablecerFocus() {
    var focus = "";
    var _loop_1 = function (x) {
        var campo = idsCampos[x];
        // @ts-ignore
        var encontrado = camposError.find(function (c) { return c == campo; });
        if (encontrado != undefined) {
            focus = encontrado;
            return "break";
        }
    };
    for (var x = 0; x < idsCampos.length; x++) {
        var state_1 = _loop_1(x);
        if (state_1 === "break")
            break;
    }
    $(focus).focus();
}
$('input').focus(function (event) {
    //buscar id del campo en el array de los camposError y obtener poisición
    var id = "#" + event.target.id;
    // @ts-ignore
    var index = camposError.findIndex(function (c) { return c == id; });
    if (index == -1) {
        $("#mensajeError").css("display", "none");
    }
    else {
        $("#mensajeErrorSpan").text(mensajesError[index]);
        $("#mensajeError").css("display", "flex");
    }
    if (index == -1) {
        $("#mensajeError2").css("display", "none");
    }
    else {
        $("#mensajeErrorSpan2").text(mensajesError[index]);
        $("#mensajeError2").css("display", "flex");
    }
});
$('textarea').focus(function (event) {
    //buscar id del campo en el array de los camposError y obtener poisición
    var id = "#" + event.target.id;
    // @ts-ignore
    var index = camposError.findIndex(function (c) { return c == id; });
    if (index == -1) {
        $("#mensajeError").css("display", "none");
    }
    else {
        $("#mensajeErrorSpan").text(mensajesError[index]);
        $("#mensajeError").css("display", "flex");
    }
    if (index == -1) {
        $("#mensajeError2").css("display", "none");
    }
    else {
        $("#mensajeErrorSpan2").text(mensajesError[index]);
        $("#mensajeError2").css("display", "flex");
    }
});
