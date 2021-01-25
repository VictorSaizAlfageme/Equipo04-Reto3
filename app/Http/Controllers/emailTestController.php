<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class emailTestController extends Controller
{
    public function passwordChanges(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);//Contraseña

        $subject = "La contraseña nueva es:";
        //$for = "correo_que_recibira_el_mensaje";
        $for = $request['email'];
        Mail::send('emails.email',$request->all(), function($msj) use($subject,$for){
            $msj->from("nuve.info@gmail.com","Empresa NUVE");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
