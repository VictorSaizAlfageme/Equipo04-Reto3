<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    public $timestamps = false;

    protected $table = "NOTIFICACIONES";
    protected $fillable = ["FECHA", "CONTENIDO", "IDSOLICITANTE", "IDTRABAJADOR"];
}
