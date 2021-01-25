<?php
namespace App\Http\Controllers;
use App\Models\trabajador;
use Illuminate\Http\Request;
class trabajadoresController extends Controller
{
    /*Retorna todas las filas de la tabla. (SELECT * FROM)*/
    public function listarTodos()
    {
        $lista = Trabajador::get();
        return view("listar", compact("lista"));
    }
    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto($id)
    {
        return $trabajador = Trabajador::find($id);
    }
    /*Inserta un elemento en la tabla. (Los atributos se envían mediante POST)*/
    public function insertar()
    {
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
    public function iniciarSesion(){
        //FALTA LA ENCRIPTACIÓN
        $dni = request("dni");
        $pass = request("pass");
        $trabajadores = Trabajador::get();
        foreach ($trabajadores as $trabajador){
            if($dni == $trabajador->DNI && $pass == $trabajador->PASSWORD){
                return view("index");
            }
        }
        return view("loginTrabajadores");
    }
    /*Abre el formulario crear*/
    public function formCrear()
    {
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


