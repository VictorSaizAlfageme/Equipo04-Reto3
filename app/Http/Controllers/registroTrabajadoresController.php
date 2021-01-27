<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trabajador;

class registroTrabajadoresController extends Controller
{

    function registrarTrabajador()
    {

        //CREAMOS UN TRABAJADOR
        $trabajador = new Trabajador(
            [
                "DNI" => request("dni"),
                "PASSWORD" => request("password"),
                "NOMBRE" => request("nombre"),
                "APELLIDOS" => request("apellido"),
                "IMAGEN" => "FOTO",
                "EMAIL" => request("email"),
                "TELEFONO" => request("telefono"),
                "DISPONIBILIDAD" => 1,
                "IDTIPO" => (int)request("tipoTrabajador"),
            ]
        );

        $lista = Trabajador::get();
        foreach ($lista as $elemento){
            if($elemento->DNI == request("dni")){
                return back()->with('error', 'El DNI ya está en uso.');
            }
        }

        $trabajador->save();
        return view("registroTrabajadores");
    }



}
