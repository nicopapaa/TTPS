<?php

namespace App\Http\Controllers;
use App\Models\Sistema;
use Illuminate\Http\Request;
use App\Models\Sistema_has_user;
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
        $sistemauser['datos'] = Sistema_has_user::find($id_sistema)::all();

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
        return view('sistemas.show',$param);
    }

}
