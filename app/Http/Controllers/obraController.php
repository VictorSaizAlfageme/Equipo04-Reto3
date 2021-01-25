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

        $idTipoedificio = 0;
        switch (request("tipoEdifio")){
            case("piso"):
                $idTipoedificio = 1;
                break;

            case("casa"):
                $idTipoedificio = 11;
                break;

            case("local"):
                $idTipoedificio = 21;
                break;

            case("garaje"):
                $idTipoedificio = 31;
                break;

            case("trastero"):
                $idTipoedificio = 41;
                break;

            case("edificio"):
                $idTipoedificio = 51;
                break;

            case("otro"):
                $idTipoedificio = 61;
                break;
        }

        //Por defecto el valor es "En espera".
        $idEstado = 1;

        $idObra = 0;
        switch (request("tipoObra")){
            case ("nuevaconstruccion"):
                $idObra = 1;
                break;

            case (""):
                $idObra = 11;
                break;
        }

        //Tratar los dates.
        $obra  = new Obra(
            [
                "FECHAINI" => request(""),
                "FECHAFIN" => request(""),
                "DESCRIPCION" => request("descripcion"),
                "PLANO" => request("plano"),
                "IDESTADO" => $idEstado,
                "IDEDIFICIO" => $idTipoedificio,
                "IDOBRA" => $idObra,
                "IDUBICACION" => request(""),
                "IDSOLICITANTE" => request(""),
                "IDTRABAJADOR" => $_COOKIE['usuarioConectado'],
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
