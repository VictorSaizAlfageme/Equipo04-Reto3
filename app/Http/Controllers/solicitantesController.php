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

    public function iniciarSesion(){
        //FALTA LA ENCRIPTACIÓN
        $dni = request("dni");
        $pass = request("pass");

        $solicitantes = Solicitante::get();

        foreach ($solicitantes as $solicitante){
            if($dni == $solicitante->DNI && $pass == $solicitante->PASSWORD){
                return view("index");
            }
        }

        return view("login");
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
