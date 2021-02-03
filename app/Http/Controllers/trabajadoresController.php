<?php

namespace App\Http\Controllers;

use App\Models\trabajador;
use Illuminate\Http\Request;

class trabajadoresController extends Controller
{

    /*Retorna todas las filas de la tabla. (SELECT * FROM)*/
    public function listarTodos()
    {
        $listaTrabajadores = Trabajador::simplePaginate(10);
        return view("tables", ["listaTrabajadores"=>$listaTrabajadores]);
    }

    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto()
    {
        $trabajador = Trabajador::find(request("id"));

        return view('datosPerfil', [
            'trabajador' => $trabajador
        ]);
    }

    /*Inserta un elemento en la tabla. (Los atributos se envían mediante POST)*/
    public function insertar()
    {

        $dis = (int)request("disponibilidad");
        $tipo = (int)request("tipo");

        $encriptada = password_hash(request("pass"), PASSWORD_DEFAULT);

        $trabajador  = new Trabajador(
            [
                "DNI" => request("dni"),
                "PASSWORD" => $encriptada,
                "NOMBRE" => request("nombre"),
                "APELLIDOS" => request("apellidos"),
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
        $dni = request("dni");
        $trabajador = Trabajador::get()->where("DNI", $dni)->first();


        if(empty($trabajador)){
            return back()->with('error', 'Dni y/o contraseña de cuenta incorrectos');
        }else{
            if(password_verify(request("pass"), $trabajador->PASSWORD)){

                setcookie("usuarioConectado", $trabajador->ID, strtotime("+1 year"));
                setcookie("tipoUsuario", "1", strtotime("+1 year"));
                setcookie("tipoTrabajador", $trabajador->IDTIPO, strtotime("+1 year"));
                setcookie("nombreUsuario", $trabajador->NOMBRE, strtotime("+1 year"));
                return redirect()->route('inicio');
            }else{
                $lista = Trabajador::get();
                foreach ($lista as $elemento){
                    if($elemento->DNI == request("dni")){
                        return back()->with('error', 'Dni y/o contraseña de cuenta incorrectos');
                    }
                    if($elemento->PASS == request("pass")){
                        return back()->with('error', 'Dni y/o contraseña de cuenta incorrectos');
                    }
                }

                return redirect()->route('inicioSesion');
            }
        }
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

    /*Elimina al usuario recibido por POST*/
    public function eliminar(){
        $id = Trabajador::find(request("id"));
        Trabajador::where("ID", $id)->delete();

        //Mostrar de nuevo la tabla con los datos
        $listaTrabajadores = Trabajador::simplePaginate(10);
        return view("tables", ["listaTrabajadores"=>$listaTrabajadores]);
    }

}
