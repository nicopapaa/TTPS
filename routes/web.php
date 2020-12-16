<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\InternacionController;
use App\Http\Controllers\EvolucionesController;
use App\Http\Controllers\AlertasController;
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

Route::get('/sistemas', [PagesController::class, 'sistema']);

Route::post('/show', [PagesController::class, 'paciente_show'])->name('paciente.show');

Route::get('/sistema/{id}', [PagesController::class, 'sistema_show'])->name('sistema.show');

Route::get('/pacientes.list', [PagesController::class, 'lista']);
Route::get('/pacientesInternados.list', [PagesController::class, 'internados']);


Route::get('/pacientes/{id}',[PagesController::class, 'paciente_details'])->name('paciente.details');

Route::get('/pacientes/evolucion/{id}',[PagesController::class, 'paciente_evolucion'])->name('paciente.evolucion');

Route::get('/pacientes.new', [PagesController::class, 'new']);

Route::post('/addPaciente', [PagesController::class, 'addPaciente']);

Route::get('/login', [PagesController::class, 'iniciar_sesion']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


#Route Sistemas
Route::get('/sistemas.index', [SistemaController::class, 'index']);
Route::get('/sistemas/show/{id}', [SistemaController::class, 'show']);

Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');

    #Route user login
    Route::get('/users.show/{id}', [UserController::class, 'show']);
    Route::get('/show/{id}',[UserController::class, 'show']);

    #listado de medicos
    Route::get('/medicos', [UserController::class, 'show_medicos']);

    #actualizar camas
    Route::post('/sistemas/update_camas', [SistemaController::class, 'update_camas']);

    #medicos asignados
    Route::get('/medicosAsignados/{id}', [PacienteController::class, 'medicosAsignados']);
    Route::post('/asignarMedicos', [PacienteController::class, 'asignarMedicos']);

    #cambiar de sistemas
    Route::get('/cambiarSistema/{id}', [PagesController::class , 'paciente_cambiar_sistema'])->name('paciente.cambiar_sistema');
    Route::post('/cambiarSistema', [PacienteController::class, 'cambiarSistema']);

    #internacion
    Route::get('/internacion.list', [InternacionController::class, 'listado']);
    Route::post('/altaInternacion', [InternacionController::class, 'altaInternacion']);
    Route::get('/pacienteInternado/{id}', [PagesController::class, 'datos']);
    Route::get('/evolucion/{id}', [InternacionController::class, 'evolucion']);

    #evolucion
    Route::post('/cargarEvolucion', [EvolucionesController::class, 'cargarEvolucion']);

    #alertas
    Route::get('/alertas/{id}', [AlertasController::class, 'index']);
    Route::get('/leer/{id}', [AlertasController::class, 'leer']);
    Route::get('/historial/{id}', [AlertasController::class, 'historial']);
});
