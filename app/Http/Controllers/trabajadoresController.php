<?php

namespace App\Http\Controllers;

use App\Models\trabajador;
use Illuminate\Http\Request;

class trabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores = Trabajador::get();

        return view("trabajadores", compact("trabajadores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("trabajadoresForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        /*
            Trabajador::create([
            "DNI" => request("dni"),
            "PASSWORD" => request("password"),
            "NOMBRE" => request("nombre"),
            "APELLIDO1" => request("apellido1"),
            "APELLIDO2" => request("apellido2"),
            "IMAGEN" => request("imagen"),
            "EMAIL" => request("email"),
            "TELEFONO" => request("telefono"),
            "DISPONIBILIDAD" => request("disponibilidad"),
            "IDTIPO" => request("tipo")

        ]);
        */

        $dis = (int)request("disponibilidad");
        $tipo = (int)request("tipo");

        $trabajador  = new Trabajador(
            [
                "DNI" => request("dni"),
                "PASSWORD" => request("password"),
                "NOMBRE" => request("nombre"),
                "APELLIDO1" => request("apellido1"),
                "APELLIDO2" => request("apellido2"),
                "IMAGEN" => request("imagen"),
                "EMAIL" => request("email"),
                "TELEFONO" => request("telefono"),
                "DISPONIBILIDAD" => $dis,
                "IDTIPO" => $tipo
            ]
        );

        $trabajador->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
