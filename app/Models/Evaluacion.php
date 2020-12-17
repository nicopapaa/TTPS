<?php
namespace App\Models;
use Carbon\Carbon;

class Evaluacion
{
    public function validar($param){
        if($param == 1){
            return true;
        }
        else
            {
                return false;
            }
    }

    public function validar_mecanica($param){
        if(($param == 2) or ($param == 3)){
            return true;
        }
        else{
            return false;
        }
    }

    public function validar_frecuencia($param){
        if($param > 30){
            return true;
        }
        else{
            return false;
        }
    }

    public function validar_fecha($end_date){
        $now = Carbon::now()->toDateString();
        $formatted_dt1=Carbon::parse($now);
        $formatted_dt2=Carbon::parse($end_date);
        $date_diff=$formatted_dt1->diffInDays($formatted_dt2);
        if($date_diff > 10){
            return true;
        }
        else{
            return false;
        }
    }

    public function validar_oxigeno($param){
        if($param < 92){
            return true;
        }
        else{
            return false;
        }
    }

    public function validar_porcentaje($actual,$anterior){
        $total = $actual - $anterior;
        if($total > 3){
            return true;
        }
        else{
            return false;
        }
    }

}
