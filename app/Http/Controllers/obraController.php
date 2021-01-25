<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Obra;
use Illuminate\Http\Request;

class obraController extends Controller
{
    /*Retorna todas las filas de la tabla. (SELECT * FROM)*/
    public function listarTodos()
    {
        $lista = Obra::get();
        return view("listar", compact("lista"));
    }

    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto($id)
    {
        return $obra = Obra::find($id);
    }

    /*Inserta un elemento en la tabla. (Los atributos se envían mediante POST)*/
    public function insertar()
    {

        //Tratar los dates.
        $obra  = new Obra(
            [
                "FECHAINI" => request("dni"),
                "FECHAFIN" => request("password"),
                "DESCRIPCION" => request("nombre"),
                "PLANO" => request("apellido"),
                "IDESTADO" => request("fechaNac"),
                "IDEDIFICIO" => request("provincias"),
                "IDOBRA" => request("email"),
                "IDUBICACION" => request("telefono"),
                "IDSOLICITANTE" => request("telefono"),
                "IDTRABAJADOR" => request("telefono"),
            ]
        );

        $obra->save();
        return view("index");
    }

    /*Elimina al usuario recibido por POST*/
    public function eliminar(){
        Solicitante::where("ID", request("id"))->delete();

        //Mostrar de nuevo la tabla con los datos
        $lista = Solicitante::get();
        return view("listar", compact("lista"));
    }
}
