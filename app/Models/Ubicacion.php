<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    public $timestamps = false;

    protected $table = "UBICACIONES";
    protected $fillable = ["LATITUD", "LONGITUD", "COOR", "CALLE", "NUMERO", "CODPOSTAL", "PISO", "MANO", "POBLACION", "MUNICIPIO", "PROVINCIA"];
}
