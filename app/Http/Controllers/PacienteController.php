<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;
use App\Models\User;
use App\Models\Medico_has_paciente;
use App\Models\Sistema_has_paciente;
use Illuminate\Support\Facades\DB;
class PacienteController extends Controller
{
    public function medicosAsignados($id){
        $user = User::where('id', '>', '6')->get();

        $medicosPaciente['datos'] = Medico_has_paciente::where('id_paciente','=',$id)->get();

        if (!is_null($medicosPaciente['datos'])){
            $count = count($medicosPaciente['datos']);
            $i = 0;
            while($i < $count){
                $medicos[$i] = User::find($medicosPaciente['datos'][$i]->id_medico);
                $i++;
            }
        }
        else{
            $medicos = 0;
        }

        #$users1 = DB::table('medico_has_pacientes')
         #   ->leftjoin('users', 'medico_has_pacientes.id_medico', '=', 'users.id')
          #  ->select('users.id')
           # ->get();
        #$users = $users1-$users1;
        #return $users;
        #$combos = Combo::where('estado','=',1)->where('stock','>',0)->with("productos")->get();

        #$j=0;
        #$count = count($medicos);

        #$sql = "";
        #return Medico_has_paciente::where(['id_paciente', '=', '1'])->get();


        $param['medico'] = $medicos;
        $param['paciente'] = $id;
        $param['user'] = $user;

        return view('pacientes.medicosAsignados',$param);
    }

    public function asignarMedicos(Request $request){
        $datos=request()->except('_token');
        Medico_has_paciente::insert($datos);
        $id = $datos['id_paciente'];

        $user = User::where('id', '>', '6')->get();
        $medicosPaciente['datos'] = Medico_has_paciente::where('id_paciente','=',$id)->get();
        if (!is_null($medicosPaciente['datos'])){
            $count = count($medicosPaciente['datos']);
            $i = 0;
            while($i < $count){
                $medicos[$i] = User::find($medicosPaciente['datos'][$i]->id_medico);
                $i++;
            }
        }
        $param['medico'] = $medicos;
        $param['paciente'] = $id;
        $param['user'] = $user;

        return view('pacientes.medicosAsignados',$param);
    }

    public function cambiarSistema(Request $request){
        $datos=request()->except('_token','_method');
        $sistemaActual = $datos['sistema_actual'];
        $sistema=$datos['id_sistema'];
        $paciente=$datos['id_user'];
        $datos=request()->except('_token','_method','sistema_actual','id_user');
        Sistema_has_paciente::where('id_sistema','=',$sistemaActual)->where('id_user','=',$paciente)->update($datos);
        return view('pacientes.internadolist',['paciente' => DB::table('pacientes')
        ->Join('internacions', 'pacientes.id', '=', 'internacions.id_paciente')
        ->select('pacientes.*')
        ->get()]);
    }
}

