<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema_has_paciente extends Model
{
    use HasFactory;

    protected $fillable = ['id_sistema','id_user'];
}
