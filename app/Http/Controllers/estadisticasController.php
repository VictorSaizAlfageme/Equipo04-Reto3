<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Obra;
use App\Models\Solicitante;
use App\Models\Trabajador;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class estadisticasController extends Controller
{
    function cargarEstadisticas(){

        $obras = Obra::get();
        $ubicaciones = Ubicacion::get();
        $trabajadores = Trabajador::get();
        $solicitantes = Solicitante::get();

        $obrasAcabadas = 0;
        $obrasNoAcabadas = 0;
        $nuevas = 0;
        $reformas = 0;

        $ene = 0;
        $feb = 0;
        $mar = 0;
        $abr = 0;
        $may = 0;
        $jun = 0;
        $jul = 0;
        $ago = 0;
        $sep = 0;
        $oct = 0;
        $nov = 0;
        $dic = 0;

        foreach ($obras as $obra){

            //Cuantas obras acabadas.
            if($obra->IDESTADO == 51){
                $obrasAcabadas ++;
            }else{
                $obrasNoAcabadas ++;
            }

            //Cuantas obras de cada tipo.
            if($obra->IDOBRA == 1){
                $nuevas ++;
            }else{
                $reformas ++;
            }

            $d = date_parse_from_format("Y-m-d", $obra->FECHAINI);

            switch ($d["month"]){
                case 1:
                    $ene ++;
                    break;
                case 2:
                    $feb ++;
                    break;
                case 3:
                    $mar ++;
                    break;
                case 4:
                    $abr ++;
                    break;
                case 5:
                    $may ++;
                    break;
                case 6:
                    $jun ++;
                    break;
                case 7:
                    $jul ++;
                    break;
                case 8:
                    $ago ++;
                    break;
                case 9:
                    $sep ++;
                    break;
                case 10:
                    $oct ++;
                    break;
                case 11:
                    $nov ++;
                    break;
                case 1:
                    $dic ++;
                    break;
            }


        }


        $alava = 0;
        $vizcaya = 0;
        $guipuzcoa = 0;
        $otro = 0;

        foreach ($ubicaciones as $ubicacion){
            switch ($ubicacion->PROVINCIA){
                case "Alava":
                    $alava ++;
                    break;
                case "Vizcaya":
                    $vizcaya ++;
                    break;
                case "Guipuzcoa":
                    $guipuzcoa ++;
                    break;
                case "otro":
                    $otro ++;
                    break;
            }
        }


        $numTrabajadores = 0;
        foreach ($trabajadores as $trabajador){
            $numTrabajadores++;
        }

        $numSolicitantes = 0;
        foreach ($solicitantes as $trabajador){
            $numSolicitantes++;
        }


        //Regla de tres sobre las obras acabadas.
        $obrasTotales = $obrasNoAcabadas + $obrasAcabadas;
        $ratioObras = round(($obrasAcabadas * 100) / $obrasTotales);


        return view("estadisticas", [
            "obrasActivas" => $obrasNoAcabadas,
            "ratioObras" => $ratioObras,
            "obrasNuevasConstrucciones" => $nuevas,
            "obrasReformas" => $reformas,
            "alava" => $alava,
            "vizcaya" => $vizcaya,
            "guipuzcoa" => $guipuzcoa,
            "otro" => $otro,
            "ene" => $ene,
            "feb" => $feb,
            "mar" => $mar,
            "abr" => $abr,
            "may" => $may,
            "jun" => $jun,
            "jul" => $jul,
            "ago" => $ago,
            "sep" => $sep,
            "oct" => $oct,
            "nov" => $nov,
            "dic" => $dic,
            "numTrabajadores" => $numTrabajadores,
            "numSolicitantes" => $numSolicitantes
        ]);
    }
}
