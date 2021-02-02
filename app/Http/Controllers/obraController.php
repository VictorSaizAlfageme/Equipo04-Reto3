<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Obra;
use App\Models\Ubicacion;
use App\Models\Solicitante;
use App\Models\Comentario;
use App\Models\TipoEdificio;
use App\Models\TipoObra;
use App\Models\Estado;
use App\Models\Trabajador;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use Symfony\Component\Routing\Annotation\Route;

class obraController extends Controller
{
    /*Retorna todas las filas de la tabla. (SELECT * FROM)*/
    public function listarTodos()
    {
        $listaObras = Obra::get();
        $listaUbicaciones = Ubicacion::get();

        return view('iTecnicos', [
            'listaObras' => $listaObras,
            'listaUbicaciones' => $listaUbicaciones
        ]);
    }

    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto()
    {

        $obra = Obra::find(request("id"));
        $ubicacion = Ubicacion::find($obra->IDUBICACION);
        $solicitante = Solicitante::find($obra->IDSOLICITANTE);
        $tipoObra = TipoObra::find($obra->IDOBRA);
        $tipoEdificio = TipoEdificio::find($obra->IDEDIFICIO);
        $listaEstados = Estado::get();
        $estadoObra = Estado::find($obra->IDESTADO);
        $comentarios = Comentario::get()->where('IDOBRA', $obra->ID);
        $listaTecnicos = Trabajador::get()->where('IDTIPO', 11);
        $tecnicoAsignado = Trabajador::find($obra->IDTRABAJADOR);




        return view('datosObra', [
            'obra' => $obra,
            'ubicacion' => $ubicacion,
            'solicitante' => $solicitante,
            'tipoObra' => $tipoObra,
            'tipoEdificio' => $tipoEdificio,
            'listaEstados' => $listaEstados,
            'estadoObra' => $estadoObra,
            'comentarios' => $comentarios,
            'listaTecnicos' => $listaTecnicos,
            'tecnicoAsignado' => $tecnicoAsignado
        ]);


    }

    public function cambiarFecha(){

        $id = request("id");

        $obra = DB::table("obras")->where('ID', $id)->update([
            "FECHAINI" => request("fechaIni"),
            "FECHAFIN" => request("fechaFin")
        ]);

        //VOLVER A CARGAR LA PÁGINA
        $obra = Obra::find(request("id"));
        $ubicacion = Ubicacion::find($obra->IDUBICACION);
        $solicitante = Solicitante::find($obra->IDSOLICITANTE);
        $tipoObra = TipoObra::find($obra->IDOBRA);
        $tipoEdificio = TipoEdificio::find($obra->IDEDIFICIO);
        $listaEstados = Estado::get();
        $estadoObra = Estado::find($obra->IDESTADO);
        $comentarios = Comentario::get()->where('IDOBRA', $obra->ID);
        $listaTecnicos = Trabajador::get()->where('IDTIPO', 11);
        $tecnicoAsignado = Trabajador::find($obra->IDTRABAJADOR);




        return view('datosObra', [
            'obra' => $obra,
            'ubicacion' => $ubicacion,
            'solicitante' => $solicitante,
            'tipoObra' => $tipoObra,
            'tipoEdificio' => $tipoEdificio,
            'listaEstados' => $listaEstados,
            'estadoObra' => $estadoObra,
            'comentarios' => $comentarios,
            'listaTecnicos' => $listaTecnicos,
            'tecnicoAsignado' => $tecnicoAsignado
        ]);
    }

    public function cambiarEstado(){

        $id = request("id2");

        $obra = DB::table("obras")->where('ID', $id)->update([
            "IDESTADO" => request("estadoObra")
        ]);


        $obra = Obra::find(request("id2"));
        $ubicacion = Ubicacion::find($obra->IDUBICACION);
        $solicitante = Solicitante::find($obra->IDSOLICITANTE);
        $tipoObra = TipoObra::find($obra->IDOBRA);
        $tipoEdificio = TipoEdificio::find($obra->IDEDIFICIO);
        $listaEstados = Estado::get();
        $estadoObra = Estado::find($obra->IDESTADO);
        $comentarios = Comentario::get()->where('IDOBRA', $obra->ID);
        $listaTecnicos = Trabajador::get()->where('IDTIPO', 11);
        $tecnicoAsignado = Trabajador::find($obra->IDTRABAJADOR);




        return view('datosObra', [
            'obra' => $obra,
            'ubicacion' => $ubicacion,
            'solicitante' => $solicitante,
            'tipoObra' => $tipoObra,
            'tipoEdificio' => $tipoEdificio,
            'listaEstados' => $listaEstados,
            'estadoObra' => $estadoObra,
            'comentarios' => $comentarios,
            'listaTecnicos' => $listaTecnicos,
            'tecnicoAsignado' => $tecnicoAsignado
        ]);

    }



    public function agregarComentario(Request $request){

        date_default_timezone_set ('Europe/Madrid');
        $now = new DateTime();




        $id = request("id3");
        $plano = $request->file("plano");
        $nombreHash = $request->file("plano")->hashName();
        $plano->move('img/planos/' , $nombreHash);

        $comentario  = new Comentario(
            [
                "FECHA" => $now,
                "TEXTO" => request("comentario"),
                "MULTIMEDIA" => "/img/planos/" . $nombreHash,
                "IDOBRA" => $id
            ]
        );


        $comentario->save();




        $obra = Obra::find(request("id3"));
        $ubicacion = Ubicacion::find($obra->IDUBICACION);
        $solicitante = Solicitante::find($obra->IDSOLICITANTE);
        $tipoObra = TipoObra::find($obra->IDOBRA);
        $tipoEdificio = TipoEdificio::find($obra->IDEDIFICIO);
        $listaEstados = Estado::get();
        $estadoObra = Estado::find($obra->IDESTADO);
        $comentarios = Comentario::get()->where('IDOBRA', $obra->ID);
        $listaTecnicos = Trabajador::get()->where('IDTIPO', 11);
        $tecnicoAsignado = Trabajador::find($obra->IDTRABAJADOR);




        return view('datosObra', [
            'obra' => $obra,
            'ubicacion' => $ubicacion,
            'solicitante' => $solicitante,
            'tipoObra' => $tipoObra,
            'tipoEdificio' => $tipoEdificio,
            'listaEstados' => $listaEstados,
            'estadoObra' => $estadoObra,
            'comentarios' => $comentarios,
            'listaTecnicos' => $listaTecnicos,
            'tecnicoAsignado' => $tecnicoAsignado
        ]);

    }

    public function asignarTecnico(){

        $id = request("id4");

        $obraUpdate = DB::table("obras")->where('ID', $id)->update([
            "IDTRABAJADOR" => request("tecnico")
        ]);

        //VOLVER A CARGAR LA PÁGINA
        $obra = Obra::find(request("id4"));
        $ubicacion = Ubicacion::find($obra->IDUBICACION);
        $solicitante = Solicitante::find($obra->IDSOLICITANTE);
        $tipoObra = TipoObra::find($obra->IDOBRA);
        $tipoEdificio = TipoEdificio::find($obra->IDEDIFICIO);
        $listaEstados = Estado::get();
        $estadoObra = Estado::find($obra->IDESTADO);
        $comentarios = Comentario::get()->where('IDOBRA', $obra->ID);
        $listaTecnicos = Trabajador::get()->where('IDTIPO', 11);
        $tecnicoAsignado = Trabajador::find($obra->IDTRABAJADOR);




        return view('datosObra', [
            'obra' => $obra,
            'ubicacion' => $ubicacion,
            'solicitante' => $solicitante,
            'tipoObra' => $tipoObra,
            'tipoEdificio' => $tipoEdificio,
            'listaEstados' => $listaEstados,
            'estadoObra' => $estadoObra,
            'comentarios' => $comentarios,
            'listaTecnicos' => $listaTecnicos,
            'tecnicoAsignado' => $tecnicoAsignado
        ]);

    }

    public function eliminarTecnico(){

        $id = request("id5");

        $obra = DB::table("obras")->where('ID', $id)->update([
            "IDTRABAJADOR" => NULL
        ]);

        //VOLVER A CARGAR LA PÁGINA
        $obra = Obra::find(request("id5"));
        $ubicacion = Ubicacion::find($obra->IDUBICACION);
        $solicitante = Solicitante::find($obra->IDSOLICITANTE);
        $tipoObra = TipoObra::find($obra->IDOBRA);
        $tipoEdificio = TipoEdificio::find($obra->IDEDIFICIO);
        $listaEstados = Estado::get();
        $estadoObra = Estado::find($obra->IDESTADO);
        $comentarios = Comentario::get()->where('IDOBRA', $obra->ID);
        $listaTecnicos = Trabajador::get()->where('IDTIPO', 11);
        $tecnicoAsignado = Trabajador::find($obra->IDTRABAJADOR);




        return view('datosObra', [
            'obra' => $obra,
            'ubicacion' => $ubicacion,
            'solicitante' => $solicitante,
            'tipoObra' => $tipoObra,
            'tipoEdificio' => $tipoEdificio,
            'listaEstados' => $listaEstados,
            'estadoObra' => $estadoObra,
            'comentarios' => $comentarios,
            'listaTecnicos' => $listaTecnicos,
            'tecnicoAsignado' => $tecnicoAsignado
        ]);
    }





    /*Elimina al usuario recibido por POST*/
    public function eliminar(){
        Solicitante::where("ID", request("id"))->delete();

        //Mostrar de nuevo la tabla con los datos
        $lista = Solicitante::get();
        return view("listar", compact("lista"));
    }
}
