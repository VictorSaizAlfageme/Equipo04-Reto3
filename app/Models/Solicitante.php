<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    public $timestamps = false;

    protected $table = "SOLICITANTES";
    protected $fillable = ["DNI", "PASSWORD", "NOMBRE", "APELLIDOS", "FECHANAC", "LUGARNAC", "EMAIL", "TELEFONO"];
}
