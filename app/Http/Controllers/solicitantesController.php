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
        $listaSolicitantes = Solicitante::simplePaginate(10);
        return view("tablesSolicitantes", ["listaSolicitantes"=>$listaSolicitantes]);

    }

    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto($id)
    {
        return $solicitantes = Solicitante::find($id);
    }
    public function datosSolicitante()
    {
        $solicitante = Solicitante::find(request("id"));

        return view('datosPerfilSolicitante', [
            'solicitante' => $solicitante
        ]);
    }


    /*Verifica los credenciales de inicio de sesión.*/
    public function iniciarSesion(){

        $dni = request("dni");
        $solicitantes = Solicitante::get();

        foreach ($solicitantes as $solicitante){

            if($dni == $solicitante->DNI && password_verify(request("pass"), $solicitante->PASSWORD)){
                setcookie("usuarioConectado", $solicitante->ID, strtotime("+1 year"));
                setcookie("tipoUsuario", "0", strtotime("+1 year"));
                setcookie("nombreUsuario", $solicitante->NOMBRE, strtotime("+1 year"));

                return redirect()->route('inicio');
            }
        }

        return redirect()->route('inicioSesion');
    }

    /*Inserta un elemento en la tabla. (Los atributos se envían mediante POST)*/
    public function insertar()
    {

        //ENCRIPTACIÓN
        $encriptada = password_hash(request("pass"), PASSWORD_DEFAULT);


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
            if($elemento->EMAIL == request("email")){
                return back()->with('error', 'El email ya está en uso.');
            }
            if($elemento->TELEFONO == request("telefono")){
                return back()->with('error', 'El número de telefono ya está en uso.');
            }
        }


        $solicitante->save();
        return redirect()->route('inicioSesion');
    }


    /*Elimina al usuario recibido por POST*/
    public function eliminar(){
        Solicitante::where("ID", request("id"))->delete();

        //Mostrar de nuevo la tabla con los datos
        $listaSolicitantes = Solicitante::simplePaginate(10);
        return view("tablesSolicitantes", ["listaSolicitantes"=>$listaSolicitantes]);

    }
}
