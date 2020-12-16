<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;
use App\Models\Internacions;
use App\Models\Evoluciones;
use App\Models\Alertas;
use App\Models\Sistema_has_paciente;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;

class EvolucionesController extends Controller
{
    public function cargarEvolucion(Request $request){
        $datos=request()->except('_token');
        #Evoluciones::insert($datos);

        #regla 1 - Checkeo la temperatura del paciente.
        if( $datos['temperatura'] > '37' ){
            Alertas::create([
                'id_paciente' => 1,
                'id_medico' => 2,
                'comentario' => 'El paciente tiene fiebre',
                'fecha' => '2020-12-15',
                'leida' => 'No'
            ]);
        }
        return view('/');
        //Evoluciones::insert($request);

    }
}
