<?php
namespace App\Models;

class Somnolencia
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

}
