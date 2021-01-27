<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solicitante;
use App\Models\Trabajador;
use Illuminate\Support\Facades\DB;

class perfilUsuarioController extends Controller
{

    function usuarioSelect()
    {

        $tipoUsuario = $_COOKIE['tipoUsuario'];

        if ($tipoUsuario == "0") {
            $usuario = Solicitante::find($_COOKIE['usuarioConectado']);
        } else {
            $usuario = Trabajador::find($_COOKIE['usuarioConectado']);
        }

        return view('perfil', [
            'usuario' => $usuario
        ]);


    }


    function usuarioEditar()
    {
        $tipoUsuario = "";

        if ($_COOKIE['tipoUsuario'] == "0") {
            $usuario = Solicitante::find($_COOKIE['usuarioConectado']);
            $tipoUsuario = "Solicitantes";
        } else {
            $usuario = Trabajador::find($_COOKIE['usuarioConectado']);
            $tipoUsuario = "Trabajadores";
        }

        $usuario = DB::table($tipoUsuario)->update([
            "NOMBRE" => request("nombre"),
            "APELLIDOS" => request("apellido"),
            "EMAIL" => request("email"),
            "TELEFONO" => request("telefono"),
        ]);

        return redirect()->route('perfilUsuario');
    }

    function editarContrasena()
    {

        //FALTA LA ENCRIPTACIÓN
        $email = request("email");

        $solicitantes = Solicitante::get();

        $pass = substr(md5(uniqid()), 0, 10);

        return $pass;

        foreach ($solicitantes as $usuario){
            if($email == $usuario->EMAIL ){
                $usuario = DB::table("Solicitante")->update([
                    "PASSWORD" => $pass,
                ]);
                return redirect()->route('cambioContrasena', $pass);
            }
        }

        return redirect()->route('solicitarContrasena');
    }

    function recuperarContrasena()
    {

        $tipoUsuario = "";

        if ($_COOKIE['tipoUsuario'] == "0") {
            $usuario = Solicitante::find($_COOKIE['usuarioConectado']);
            $tipoUsuario = "Solicitantes";
        } else {
            $usuario = Trabajador::find($_COOKIE['usuarioConectado']);
            $tipoUsuario = "Trabajadores";
        }

        $usuario = DB::table($tipoUsuario)->update([
            "PASSWORD" => request("pass"),
        ]);

        return redirect()->route('perfilUsuario');
    }

}
