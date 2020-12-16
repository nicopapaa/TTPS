<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Sistema;
use App\Models\Relacion;
use App\Models\Internacions;
use App\Models\Evoluciones;
use App\Models\Alertas;
use App\Models\Sistema_has_paciente;
use App\Models\Medico_has_paciente;
use App\Models\Alertas_historial;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;
use Carbon\Carbon;
use app\Evolucion\Person;
use App\Models\Somnolencia;



class EvolucionesController extends Controller
{
    public function cargarEvolucion(Request $request){
        $datos=request()->except('_token');



        #return count($saturacion);
        Evoluciones::insert($datos);

        #REGLA 1 - SOMNOLENCIA
        if(isset($datos['somnolencia'])){

            $obj = new Somnolencia();
            $result_obj = $obj->validar($datos['somnolencia']);
            return $result_obj;

            #busco todos los medicos que tiene asignado el paciente y envio el alerta a c/u
            $paciente = $datos['id_paciente'];
            $medicos = Medico_has_paciente::select('id_medico')->where('id_paciente','=', $paciente)->get();
            $i=0;
            while($i < count($medicos)){
                $medicoActual = $medicos[$i]['id_medico'];

                #genero alerta para todos los medicos del paciente
                Alertas::create([
                    'id_paciente' => $datos['id_paciente'],
                    'id_medico' => $medicoActual,
                    'comentario' => 'Somnolencia: Evaluar pase a UTI.',
                    'fecha' => (new DateTime('now')),
                    'leida' => 0
                ]);
                $i=$i+1;
            }
            Alertas_historial::create([
                'id_paciente' => $datos['id_paciente'],
                'id_medico' =>  $datos['id_medico'],
                'comentario' => 'Somnolencia: Evaluar pase a UTI.',
                'fecha' => (new DateTime('now')),
            ]);
        }

        #REGLA 2 - REG O MALA MECANICA RESPIRATORIA
        if(isset($datos['mecanica'])){
            if($datos['mecanica'] == 3 or $datos['mecanica'] == 2){
                if($datos['mecanica'] == 2)
                    $parametro = 'regular';
                else{
                    $parametro = 'mala';
                }
                #busco todos los medicos que tiene asignado el paciente y envio el alerta a c/u
                $paciente = $datos['id_paciente'];
                $medicos = Medico_has_paciente::select('id_medico')->where('id_paciente','=', $paciente)->get();
                $i=0;
                while($i < count($medicos)){
                    $medicoActual = $medicos[$i]['id_medico'];

                    #genero alerta para todos los medicos del paciente
                    Alertas::create([
                        'id_paciente' => $datos['id_paciente'],
                        'id_medico' => $medicoActual,
                        'comentario' => 'Mecánica respiratoria '.$parametro.': Evaluar pase a UTI.',
                        'fecha' => (new DateTime('now')),
                        'leida' => 0
                    ]);
                    $i=$i+1;
                }
                Alertas_historial::create([
                    'id_paciente' => $datos['id_paciente'],
                    'id_medico' =>  $datos['id_medico'],
                    'comentario' => 'Mecánica respiratoria '.$parametro.': Evaluar pase a UTI.',
                    'fecha' => (new DateTime('now')),
                ]);
            }
        }

        #REGLA 3 - FRECUENCIA RESPIRATORIA
        if($datos['frecuencia_respiratoria'] != null){
            if($datos['frecuencia_respiratoria'] > 30){

                #busco todos los medicos que tiene asignado el paciente y envio el alerta a c/u
                $paciente = $datos['id_paciente'];
                $medicos = Medico_has_paciente::select('id_medico')->where('id_paciente','=', $paciente)->get();
                $i=0;
                while($i < count($medicos)){
                    $medicoActual = $medicos[$i]['id_medico'];

                    #genero alerta para todos los medicos del paciente
                    Alertas::create([
                        'id_paciente' => $datos['id_paciente'],
                        'id_medico' => $medicoActual,
                        'comentario' => 'Frecuencia respiratoria mayor a 30( '.$datos['frecuencia_respiratoria'].' ): Evaluar pase a UTI.',
                        'fecha' => (new DateTime('now')),
                        'leida' => 0
                    ]);
                    $i=$i+1;
                }
                Alertas_historial::create([
                    'id_paciente' => $datos['id_paciente'],
                    'id_medico' =>  $datos['id_medico'],
                    'comentario' => 'Frecuencia respiratoria mayor a 30( '.$datos['frecuencia_respiratoria'].' ): Evaluar pase a UTI.',
                    'fecha' => (new DateTime('now')),
                ]);
            }
        }

        #REGLA 4 - 10 DIAS DE INICIO DE SINTOMAS. EVALUAR ALTA
        $paciente = $datos['id_paciente'];
        $internacion = DB::table('internacions')->select('f_inicio_sintomas')->where('id_paciente','=',$paciente)
                ->orderBy('f_inicio_sintomas', 'desc')
                ->get();
        $now = Carbon::now()->toDateString();
        $end_date = $internacion[0]->f_inicio_sintomas;
        $formatted_dt1=Carbon::parse($now);
        $formatted_dt2=Carbon::parse($end_date);
        $date_diff=$formatted_dt1->diffInDays($formatted_dt2);

        if ($date_diff >= 10){

            #busco todos los medicos que tiene asignado el paciente y envio el alerta a c/u
            $paciente = $datos['id_paciente'];
            $medicos = Medico_has_paciente::select('id_medico')->where('id_paciente','=', $paciente)->get();
            $i=0;
            while($i < count($medicos)){
                $medicoActual = $medicos[$i]['id_medico'];

                #genero alerta para todos los medicos del paciente
                Alertas::create([
                    'id_paciente' => $datos['id_paciente'],
                    'id_medico' => $medicoActual,
                    'comentario' => 'Pasaron '.$date_diff.' dias del inicio de sintomas. Evaluar alta de paciente.',
                    'fecha' => (new DateTime('now')),
                    'leida' => 0
                ]);
                $i=$i+1;
            }
            Alertas_historial::create([
                'id_paciente' => $datos['id_paciente'],
                'id_medico' =>  $datos['id_medico'],
                'comentario' => 'Pasaron '.$date_diff.' dias del inicio de sintomas. Evaluar alta de paciente.',
                'fecha' => (new DateTime('now')),
            ]);
        }

        #REGLA 5 -
        if(isset($datos['valor_oxigeno'])){
            if($datos['valor_oxigeno'] < 92){

                #busco todos los medicos que tiene asignado el paciente y envio el alerta a c/u
                $paciente = $datos['id_paciente'];
                $medicos = Medico_has_paciente::select('id_medico')->where('id_paciente','=', $paciente)->get();
                $i=0;
                $valor_oxigeno = $datos['valor_oxigeno'];
                while($i < count($medicos)){
                    $medicoActual = $medicos[$i]['id_medico'];

                    #genero alerta para todos los medicos del paciente
                    Alertas::create([
                        'id_paciente' => $datos['id_paciente'],
                        'id_medico' => $medicoActual,
                        'comentario' => 'Saturación de oxigeno menor a 92%( '.$valor_oxigeno.'% ) evaluar oxigenoterapia y prono.',
                        'fecha' => (new DateTime('now')),
                        'leida' => 0
                    ]);
                    $i=$i+1;
                }
                Alertas_historial::create([
                    'id_paciente' => $datos['id_paciente'],
                    'id_medico' =>  $datos['id_medico'],
                    'comentario' => 'Saturación de oxigeno menor a 92%( '.$valor_oxigeno.'% ) evaluar oxigenoterapia y prono.',
                    'fecha' => (new DateTime('now')),
                ]);
            }
        }

        #REGLA 6 -
        $paciente = $datos['id_paciente'];
        if(isset($datos['valor_oxigeno'])){
            $paciente = $datos['id_paciente'];
            $saturacion = DB::table('evoluciones')->select('valor_oxigeno')->where('id_paciente','=',$paciente)
                    ->orderBy('id', 'desc')
                    ->get();
            if (count($saturacion) > 0){
                $anterior =  $saturacion[0]->valor_oxigeno;
                $actual =  $datos['valor_oxigeno'] * 100 / $anterior;
                $total = $anterior - $actual;
                if ($total > 3){
                    #busco todos los medicos que tiene asignado el paciente y envio el alerta a c/u
                    $paciente = $datos['id_paciente'];
                    $medicos = Medico_has_paciente::select('id_medico')->where('id_paciente','=', $paciente)->get();
                    $i=0;
                    $valor_oxigeno = $datos['valor_oxigeno'];
                    while($i < count($medicos)){
                        $medicoActual = $medicos[$i]['id_medico'];

                        #genero alerta para todos los medicos del paciente
                        Alertas::create([
                            'id_paciente' => $datos['id_paciente'],
                            'id_medico' => $medicoActual,
                            'comentario' => 'Saturación de oxigeno menor a 92%( '.$valor_oxigeno.'% ) evaluar oxigenoterapia y prono.',
                            'fecha' => (new DateTime('now')),
                            'leida' => 0
                        ]);
                        $i=$i+1;
                    }
                    Alertas_historial::create([
                        'id_paciente' => $datos['id_paciente'],
                        'id_medico' =>  $datos['id_medico'],
                        'comentario' => 'Saturación de oxigeno menor a 92%( '.$valor_oxigeno.'% ) evaluar oxigenoterapia y prono.',
                        'fecha' => (new DateTime('now')),
                    ]);
                }
            }
        }

        #RETORNO A LA VISTA
        $paciente = DB::table('pacientes')
        ->Join('internacions', 'pacientes.id', '=', 'internacions.id_paciente')
        ->select('pacientes.*')
        ->get();
        return view('pacientes.internadolist',compact('paciente'));
       // Evoluciones::insert($request);

    }
}
