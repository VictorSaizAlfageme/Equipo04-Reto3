<?php

namespace App\Http\Controllers;

use App\Models\trabajador;
use Illuminate\Http\Request;

class trabajadoresController extends Controller
{
    /*Retorna todas las filas de la tabla. (SELECT * FROM)*/
    public function listarTodos()
    {
        $trabajadores = Trabajador::get();
        return view("trabajadores", compact("trabajadores"));
    }

    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto($id)
    {
        return $trabajador = Trabajador::find($id);
    }

    /*Inserta un elemento en la tabla. (Los atributos se envían mediante POST)*/
    public function insertar()
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

    /*Abre el formulario crear*/
    public function formCrear()
    {
        return view("trabajadoresForm");

        $this->listarTodos();
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
