<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alertas extends Model
{
    use HasFactory;

    protected $fillable = ['id','id_paciente','id_medico','comentario','fecha','leida'];
}
