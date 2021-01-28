<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Solicitante;
use Illuminate\Http\Request;

class solicitantesController extends Controller
{
    /*Retorna todas las filas de la tabla. (SELECT * FROM)*/
    public function listarTodos()
    {
        $lista = Solicitante::get();
        return view("listar", compact("lista"));
    }

    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto($id)
    {
        return $solicitantes = Solicitante::find($id);
    }

    /*Verifica los credenciales de inicio de sesión.*/
    public function iniciarSesion(){

        $dni = request("dni");
        $solicitantes = Solicitante::get();

        foreach ($solicitantes as $solicitante){

            if($dni == $solicitante->DNI && password_verify(request("pass"), $solicitante->PASSWORD)){
                setcookie("usuarioConectado", $solicitante->ID, strtotime("+1 year"));
                setcookie("tipoUsuario", "0", strtotime("+1 year"));

                return redirect()->route('paginaPrincipal');
            }
        }

        return redirect()->route('inicioSesion');
    }

    /*Inserta un elemento en la tabla. (Los atributos se envían mediante POST)*/
    public function insertar()
    {

        //ENCRIPTACIÓN
        $encriptada = password_hash(request("password"), PASSWORD_DEFAULT);


        $solicitante  = new Solicitante(
            [
                "DNI" => request("dni"),
                "PASSWORD" => $encriptada,
                "NOMBRE" => request("nombre"),
                "APELLIDOS" => request("apellido"),
                "FECHANAC" => request("fechaNac"),
                "LUGARNAC" => request("provincias"),
                "EMAIL" => request("email"),
                "TELEFONO" => request("telefono"),
            ]
        );

        //Verificamos si el DNI del usuario está siendo utilizado.
        $lista = Solicitante::get();
        foreach ($lista as $elemento){
            if($elemento->DNI == request("dni")){
                return back()->with('error', 'El DNI ya está en uso.');
            }
        }


        $solicitante->save();
        return redirect()->route('inicioSesion');
    }

    public function cambiarContrasena(){
        //La nueva contraseña de obtiene mediante POST
        $solicitante = Solicitante::find($_COOKIE['usuarioConectado']);

        $solicitante->update([
            "PASSWORD" => "123456789",
        ]);

    }

    /*Elimina al usuario recibido por POST*/
    public function eliminar(){
        Solicitante::where("ID", request("id"))->delete();

        //Mostrar de nuevo la tabla con los datos
        $lista = Solicitante::get();
        return view("listar", compact("lista"));
    }
}
