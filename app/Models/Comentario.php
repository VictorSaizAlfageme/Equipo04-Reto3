<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $timestamps = false;

    protected $table = "COMENTARIOS";
    protected $fillable = ["FECHA", "TEXTO", "MULTIMEDIA", "IDOBRA"];
}
