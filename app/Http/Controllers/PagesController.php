<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;

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

    public function sistema(){
        $sistemas = Sistema::all();
        return view('sistemas.list', compact('sistemas'));
    }

    public function sistema_show($id){
        $sistema = Sistema::findOrFail($id);

        return view('sistemas.show', compact('sistema'));
    }

    public function paciente_details($id){
        $paciente = Paciente::findOrFail($id);

        return view('pacientes.details', compact('paciente'));
    }

    public function paciente_evolucion($id){
        $paciente = Paciente::findOrFail($id);

        return view('pacientes.evolucion', compact('paciente'));
    }

    public function paciente_cambiar_sistema($id){
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.cambiar_sistema',compact('paciente'));
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
