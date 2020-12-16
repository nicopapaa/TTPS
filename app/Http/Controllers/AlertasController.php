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
use App\Models\Alertas_historial;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;
use Illuminate\Support\Facades\Auth;

class AlertasController extends Controller
{
    public function index($id){
        $paciente = DB::table('pacientes')
            ->Join('alertas', 'pacientes.id', '=', 'alertas.id_paciente')
            ->select('pacientes.*','alertas.*')
            ->where('leida','=',0)
            ->where('id_medico','=',$id)
            ->get();
        return view('alertas.index',compact('paciente'));
    }

    public static function count($user){
        $count = Alertas::where('id_medico','=',$user)->where('leida','=',0)->count();
        return $count;
    }

    public function leer($id){
        $affected = DB::table('alertas')
              ->where('id', $id)
              ->update(['leida' => 1]);
        $alerta = Alertas::where('id_medico','=',Auth::user()->id)->where('leida','=',0)->get();
        return view('alertas.index',compact('alerta'));
    }

    public function historial($id){
        $alerta = Alertas_historial::where('id_paciente','=',$id)->get();
        return view('alertasHistorial.index',compact('alerta'));
    }
}
