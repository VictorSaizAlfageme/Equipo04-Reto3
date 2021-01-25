<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    public $timestamps = false;

    protected $table = "OBRAS";
    protected $fillable = ["FECHAINI", "FECHAFIN", "DESCRIPCION", "PLANO", "IDESTADO", "IDEDIFICIO", "IDOBRA", "IDUBICACION", "IDSOLICITANTE", "IDTRABAJADOR"];
}
