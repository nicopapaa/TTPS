<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;
use App\Models\Sistema_has_paciente;
use App\Models\Internacions;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class InternacionController extends Controller
{
    public function altaInternacion(Request $request){
        $datos=request()->except('_token');
        Internacions::insert($datos);
        return view('pacientes.find');
    }

    public function listado(){
        $internaciones = Internacions::all();
        return view('internacion.list', compact('internaciones'));
    }

    public function paciente_show(Request $dni){
        $dni = $dni->dni;
        $count = Paciente::where('dni', '=', $dni)->count();
        if($count >= 1){
            return view('pacientes.show', ['paciente' => Paciente::where('dni', '=', $dni)->first()]);
        }
        else{
            return redirect('pacientes.new');
        }
    }

    public function new(){
        $pacientes = Paciente::all();
        return view('pacientes.new', compact('pacientes'));
    }

    public function addPaciente(Request $request){
        $datos=request()->except('_token');
        Paciente::insert($datos);
        return view('pacientes.find');
    }

}
