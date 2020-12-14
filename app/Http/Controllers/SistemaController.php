<?php

namespace App\Http\Controllers;
use App\Models\Sistema;
use Illuminate\Http\Request;
use App\Models\Sistema_has_medico;
use App\Models\Sistema_has_jefes;
use App\Models\User;
use App\Models\Paciente;
use App\Models\Sistema_has_paciente;

class SistemaController extends Controller
{
    public function index(){
        $sistema['sistema'] = Sistema::all();
        return view('sistemas.index',$sistema);
    }

    public function show($id){
        #recupero sistema
        $sistema['sistema'] = Sistema::find($id);

        #medicos del sistema
        $id_sistema = $sistema['sistema']->id;
        $sistemauser['datos'] = Sistema_has_medico::where('id','=',$id_sistema)->get();

         #jefes del sistema
         $sistemajefe['datos'] = Sistema_has_jefes::where('id','=',$id_sistema)->get();

        #pacientes del sistema
        $sistemapaciente['datos'] = Sistema_has_paciente::find($id_sistema)::all();

        if (!is_null($sistemapaciente['datos'])){
            $count = count($sistemapaciente['datos']);
            $i = 0;
            while($i < $count){
                $paciente[$i] = Paciente::find($sistemapaciente['datos'][$i]->id_paciente);
                $i++;
            }
        }

        if (!is_null($sistemajefe['datos'])){
            $count = count($sistemajefe['datos']);
            $i = 0;
            while($i < $count){
                $jefe[$i] = User::find($sistemajefe['datos'][$i]->id_user);
                $i++;
            }
        }

        if (!is_null($sistemauser['datos'])){
            $count = count($sistemauser['datos']);
            $i = 0;
            while($i < $count){
                $valor[$i] = User::find($sistemauser['datos'][$i]->id_user);
                $i++;
            }
        }

        $param['sistema'] = $sistema;
        $param['usuario'] = $valor;
        $param['paciente'] = $paciente;
        $param['jefe'] = $jefe;
        return view('sistemas.show',$param);
    }

}
