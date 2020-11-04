<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'inicio']);

Route::get('/paciente', [PagesController::class, 'paciente']);

Route::get('/buscar', [PagesController::class, 'buscar']);

Route::post('/show', [PagesController::class, 'paciente_show'])->name('paciente.show');

Route::get('/pacientes.list', [PagesController::class, 'lista']);

Route::get('/pacientes.new', [PagesController::class, 'new']);

Route::post('/addPaciente', [PagesController::class, 'addPaciente']);