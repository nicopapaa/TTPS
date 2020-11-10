<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PagesController extends Controller
{
    public function inicio(){
        $pacientes = Paciente::all();
        return view('welcome', compact('pacientes'));
    }

    public function iniciar_sesion(){
        return view('auth.main-login');
    }

    public function paciente(){
        $pacientes = Paciente::all();
        return view('pacientes.new', compact('pacientes'));
    }
    public function lista(){
        return view('pacientes.list',['paciente' => Paciente::all()]);
    }

    public function buscar(){
        $pacientes = Paciente::all();
        return view('pacientes.find', compact('pacientes'));
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
