<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;
use App\Models\Internacions;
use App\Models\Sistema_has_paciente;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;

class PagesController extends Controller
{
    public function evoluciones(Resquest $request){
        return $request;
    }
}
