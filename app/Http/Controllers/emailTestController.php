<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Mail;

class emailTestController extends Controller
{
    public function passwordChanges($pass){

    return $pass;

        $subject = "Recuperación de contraseña";
        //$for = "correo_que_recibira_el_mensaje";
        $for = $request['email'];

        Mail::send('email.email/',$request->all(), function($msj) use($subject,$for){
            $msj->from("nuve.info@gmail.com","Empresa NUVE");
            $msj->subject($subject);
            $msj->to($for);
        });

        return redirect('/');
    }
}
