<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;
use App\Models\Sistema_has_paciente;
use App\Models\Internacions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;



class InternacionController extends Controller
{
    public function altaInternacion(Request $request){
        $datos=request()->except('_token');
        #return $datos['id_paciente'];
        Internacions::insert($datos);
        Sistema_has_paciente::create([
            'id_sistema' => 2,
            'id_user' => $datos['id_paciente'],
        ]);

        $sistema = Sistema::where('id','=',2)->get();
        $camas_usadas = $sistema[0]['camas_usadas'];
        $valor['camas_usadas'] = $camas_usadas + 1;
        Sistema::where('id','=',2)->update($valor);
        return view('pacientes.find');
    }

    public function dar_de_alta($id){
        $internado=Internacions::findOrFail($id);
        $now = Carbon::now()->toDateString();
        $datos['f_egreso']=$now;
        Internacions::find($internado['id'])->update($datos);

        $paciente = DB::table('pacientes')
            ->Join('internacions', 'pacientes.id', '=', 'internacions.id_paciente')
            ->select('pacientes.*','internacions.*')
            ->where('internacions.f_egreso','=',null)
            ->get();
        if (count($paciente) == 0)
            $paciente= null;

        return view('pacientes.internadolist',compact('paciente'));
    }

    public function dar_de_obito($id){
        $internado=Internacions::findOrFail($id);
        $now = Carbon::now()->toDateString();
        $datos['f_obito']=$now;
        Internacions::find($internado['id'])->update($datos);

        $paciente = DB::table('pacientes')
            ->Join('internacions', 'pacientes.id', '=', 'internacions.id_paciente')
            ->select('pacientes.*')
            ->where('internacions.f_obito','<>','a')
            ->get();
        if (count($paciente) == 0)
            $paciente= null;
        return view('pacientes.internadolist',compact('paciente'));

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

    public function evolucion($id){
        $paciente = $id;
        return view('pacientes.evolucion',compact('paciente'));
    }
}
