<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;
use App\Models\Internacions;
use App\Models\Evoluciones;
use App\Models\Sistema_has_paciente;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;

class EvolucionesController extends Controller
{
    public function cargarEvolucion(Request $request){
        $datos=request()->except('_token');
        Evoluciones::insert($datos);
        return view('pacientes.find');
        return $request;
        //Evoluciones::insert($request);

    }
}
