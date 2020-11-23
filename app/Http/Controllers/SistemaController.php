<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function index(){
        #$pacientes = Paciente::all();
        #return view('welcome', compact('pacientes'));
        return view('sistemas.index');
    }
}
