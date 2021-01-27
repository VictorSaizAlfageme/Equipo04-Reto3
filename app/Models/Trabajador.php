<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public $timestamps = false;

    protected $table = "TRABAJADORES";
    protected $fillable = ["DNI", "PASSWORD", "NOMBRE", "APELLIDOS", "IMAGEN", "EMAIL", "TELEFONO", "DISPONIBILIDAD", "IDTIPO"];
}
