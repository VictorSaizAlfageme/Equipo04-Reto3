<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solicitante;
use App\Models\Trabajador;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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



        $usuario = DB::table($tipoUsuario)->where('ID', $usuario->ID)->update([
            "NOMBRE" => request("nombre"),
            "APELLIDOS" => request("apellido"),
            "EMAIL" => request("email"),
            "TELEFONO" => request("telefono"),
        ]);

        return redirect()->route('perfilUsuario');
    }

    function editarContrasena()
    {
        $tipoUsuario = "";

        if ($_COOKIE['tipoUsuario'] == "0") {
            $usuario = Solicitante::find($_COOKIE['usuarioConectado']);
            $tipoUsuario = "Solicitantes";
        } else {
            $usuario = Trabajador::find($_COOKIE['usuarioConectado']);
            $tipoUsuario = "Trabajadores";
        }
        $encriptada = password_hash(request("pass"), PASSWORD_DEFAULT);

        $usuario = DB::table($tipoUsuario)->where('ID', $usuario->ID)->update([
            "PASSWORD" => $encriptada,
        ]);

        return redirect()->route('perfilUsuario');

    }

    function recuperarContrasena(Request $request)
    {

        //FALTA LA ENCRIPTACIÓN
        $email = request("email");
        $pass = request("pass");

        $solicitantes = Solicitante::get();

        $encriptada = password_hash(request("pass"), PASSWORD_DEFAULT);


        foreach ($solicitantes as $usuario){
            if($email == $usuario->EMAIL ){
                $usuario = DB::table("Solicitantes")->where('ID', $usuario->ID)->update([
                    "PASSWORD" => $pass,
                ]);

                $subject = "Recuperación de contraseña";
                //$for = "correo_que_recibira_el_mensaje";

                $for = $request['email'];

                Mail::send('email.email', request()->all(), function($msj) use($subject,$email){
                    $msj->from("nuve.info@gmail.com","Empresa NUVE");
                    $msj->subject($subject);
                    $msj->to($email);
                });

                return redirect('/');
            }
        }
        return back()->with('error', 'El correo no existe.');
    }

}
