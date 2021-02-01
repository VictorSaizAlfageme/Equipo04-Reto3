<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEdificio extends Model
{
    public $timestamps = false;

    protected $table = "TIPOOBRA";
    protected $fillable = ["ID", "NOMBRE"];
}
