<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alertas_historial extends Model
{
    use HasFactory;

    protected $fillable = ['id','id_paciente','id_medico','comentario','fecha'];
}
