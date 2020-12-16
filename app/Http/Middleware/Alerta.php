<?php

namespace App\Http\Middleware;
use App\Http\Controllers\AlertasController;

class Alerta extends Middleware
{

    public function count()
    {
        return 10;
    }
}
