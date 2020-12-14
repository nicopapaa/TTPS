<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;
use App\Models\User;
use App\Models\Medico_has_paciente;

class PacienteController extends Controller
{
    public function medicosAsignados($id){

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
        return view('pacientes.medicosAsignados',$param);
    }

}
