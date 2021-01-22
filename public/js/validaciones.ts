
var camposError:Array<string> = []; //array para guardar aquellos campos que no pasen validación
var mensajesError:Array<string> =[]; //array donde se guarda el mensaje de error de cada campo erróneo
var idsCampos:Array<string> = [];

$(document).ready(function (){
    //Asignamos la función correspondiente al formulario. El try
    try {
        $("#botonRegistro").click(validarDatosRegistroSolicitante);
    }catch (error){}

});

function validarDatosRegistroSolicitante():void{
    idsCampos = ["#nombre", "#apellido", "#email", "#pass", "#pass2", "#fechaNac", "#telefono", "#dni", "#lugarNac"];


    camposError = [];
    mensajesError =[];
    idsCampos.forEach(c =>  $(c).removeClass("buzz"));
    idsCampos.forEach(c => establecerEstiloNormal(c));

    validarNombre();
    validarApellido();
    validarEmail();
    validarPass();
    validarPass2();
    validarTelefono();
    validarDNI();
    validarFechaNac();
    validarLugarNac();

    comprobarYEstablecerEstilos();
    if(mensajesError.length == 0){
        $("#formulario").submit()
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

function comprobarYEstablecerEstilos(){
    console.log(camposError)
}
    if (camposError.length>0){
        aplicarEstiloError();
    }
}


function validarNombre(){
    let campo : string = "#nombre"
    // @ts-ignore
    let nombre : string  = $(campo).val();
    let patron = RegExp("^[A-zÀ-ÿ]+([ ]+[A-zÀ-ÿ]+)*$");
    try{
        if(!validarVacio(nombre)){
            throw "Debes insertar tu nombre.";
        }
        if (!patron.test(nombre)){
            throw "El nombre no es válido.";
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }
}

function validarApellido(){
    let campo = "#apellido";
    // @ts-ignore
    let apellidos:string = $(campo).val();
    let patron = RegExp("^[A-zÀ-ÿ]+([ ]+[A-zÀ-ÿ]+)*$");
    try{
        if(!validarVacio(apellidos)){
            throw "Debes insertar tu apellido.";
        }
        if (!patron.test(apellidos)){
            throw "El apellido no es válido.";
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }
}

function validarPass(){
    let campo : string = "#pass";
    // @ts-ignore
    let pass: string = $(campo).val();
    let patron = RegExp("^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{6,}$");
    try{
        if(!validarVacio(pass)){
            throw "Debes añadir una contraseña.";
        }
        if (!patron.test(pass)){
            throw "la contraseña debe tener 6 caracteres: mayúscula, minúscula y número.";
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }

}

function validarPass2(){
    let campo: string = "#pass2";
    // @ts-ignore
    let pass:string = $("#pass").val();
    // @ts-ignore
    let pass2 :string=$(campo).val();
    try{
        if(!validarVacio(pass)){
            throw "Debes repetir la contraseña.";
        }
        if (pass2!=pass) {
            throw "las contraseñas no coinciden.";
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }

}

function validarEmail(){
    let campo :string= "#email"
    // @ts-ignore
    let email:string = $(campo).val();
    let patron = RegExp("^([A-z0-9]+[._]?)+[A-z0-9]+@([a-z]+.)+.[a-z]{2,4}$");
    try {
        if (!validarVacio(email)) {
            throw "Debes insertar tu email.";
        }
        if (!patron.test(email)) {
            throw "Email no válido.";
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }
}

function validarTelefono(){
    let campo:string = "#telefono";
    // @ts-ignore
    let tel:string = $(campo).val();
    let patron = RegExp("^[9|6]{1}[0-9]{8}$");
    try{
        if (!validarVacio(tel)){
            throw "Debes insertar tu número de teléfono.";
        }
        else{
            if (!patron.test(tel)){
                throw "El télefono debe empezar por 6 o 9 y debe tener 9 números.";
            }
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }
}

function validarDNI(){
    let campo:string = "#dni";
    // @ts-ignore
    let dni:string = $(campo).val();
    let patron = RegExp("^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$");
    try{
        if (!validarVacio(dni)){
            throw "Debes insertar tu Dni o Nif.";
        }
        else{
            if (!patron.test(dni)){
                throw "El Dni no es correcto";
            }
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }
}

function validarFechaNac(){
    let campo:string = "#fechaNac";
    // @ts-ignore
    let dni:string = $(campo).val();
    try{
        if (!validarVacio(dni)){
            throw "Debes insertar tu fecha de nacimiento.";
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }
}

function validarLugarNac(){
    let campo:string = "#lugarNac";
    // @ts-ignore
    let dni:string = $(campo).val();
    try{
        if (dni == null){
            throw "Debes seleccionar tu lugar de nacimiento.";
        }
    }
    catch(err){
        mensajesError.push(err);
        camposError.push(campo);
    }
}

function validarVacio(valorCampo){
    if (valorCampo == "")
        return false;
    return true;
}

function aplicarEstiloError(){


    camposError.forEach(c => $(c).css("border"," red solid 1px"));
    camposError.forEach(c => $(c).css("color"," red"));
    camposError.forEach(c => $(c).addClass("buzz"));
}

function establecerEstiloNormal(parametro){

    $(parametro).css("color"," black");
    $(parametro).css("border"," 1px solid #d1d3e2");

}

function hallarYEstablecerFocus(){
    let focus ="";
    for (let x=0;x<idsCampos.length;x++){
        let campo = idsCampos[x];
        // @ts-ignore
        let encontrado = camposError.find(c => c == campo);
        if (encontrado != undefined){
            focus = encontrado;
            break;
        }
    }
    $(focus).focus();
}

$('input').focus(function (event){
    //buscar id del campo en el array de los camposError y obtener poisición
    let id = "#"+event.target.id;
    // @ts-ignore
    let index = camposError.findIndex(c => c == id);
    if (index == -1){
        $("#mensajeError").css("display","none");
    }else{
        $("#mensajeErrorSpan").text(mensajesError[index]);
        $("#mensajeError").css("display","flex");
    }
})
