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
        $solicitantes = Solicitante::get();
        return view("trabajadores", compact("$solicitantes"));
    }

    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto($id)
    {
        return $solicitantes = Solicitante::find($id);
    }

    /*Inserta un elemento en la tabla. (Los atributos se envían mediante POST)*/
    public function insertar()
    {

        //Tratar los dates.

        $trabajador  = new Trabajador(
            [
                "DNI" => request("dni"),
                "PASSWORD" => request("password"),
                "NOMBRE" => request("nombre"),
                "APELLIDO" => request("apellido"),
                "FECHANAC" => request("fechaNac"),
                "LUGARNAC" => request("lugarNac"),
                "EMAIL" => request("email"),
                "TELEFONO" => request("telefono"),
            ]
        );

        $trabajador->save();
    }

    /*Abre el formulario crear*/
    public function formCrear()
    {
        return view("register");

        $this->listarTodos();
    }
}
