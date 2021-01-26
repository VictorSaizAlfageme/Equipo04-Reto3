<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Obra;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class registroObraController extends Controller
{
    function registrarObra(){


        //CREAMOS UNA UBICACION
        $ubicacion = new Ubicacion(
            [
                "LATITUD" => request("latitud"),
                "LONGITUD" => request("longitud"),
                "CALLE" => request("calle"),
                "NUMERO" => request("portal"),
                "CODPOSTAL" => request("codigopostal"),
                "PISO" => request("piso"),
                "MANO" => request("mano"),
                "POBLACION" => request("población"),
                "MUNICIPIO" => request("municipio"),
                "PROVINCIA" => request("provincia"),
            ]
        );

        if ($ubicacion->save()) {
            response()->json(array('success' => true, 'last_insert_id' => $ubicacion->id), 200);
            $idUbicacion = $ubicacion->id;
        }

        //console.log("ID: " + $idUbicacion);


        

        //CREAMOS LA OBRA AÑADIENDO LA FK DE LA UBICACIÓ
        $idTipoedificio = 0;
        switch (request("tipoEdificio")){
            case "piso":
                $idTipoedificio = 1;
                break;

            case "casa":
                $idTipoedificio = 11;
                break;

            case "local":
                $idTipoedificio = 21;
                break;

            case "garaje":
                $idTipoedificio = 31;
                break;

            case "trastero":
                $idTipoedificio = 41;
                break;

            case "edificio":
                $idTipoedificio = 51;
                break;

            case "otro":
                $idTipoedificio = 61;
                break;
        }

        //Por defecto el valor es "En espera".
        $idEstado = 1;

        $idObra = 0;
        switch (request("tipoObra")){
            case "nuevaconstruccion":
                $idObra = 1;
                break;

            case "reforma":
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
                "IDUBICACION" => $idUbicacion,
                "IDSOLICITANTE" => $_COOKIE['usuarioConectado'],
                "IDTRABAJADOR" => null,
            ]
        );

        $obra->save();
        return view("index");
    }
}
