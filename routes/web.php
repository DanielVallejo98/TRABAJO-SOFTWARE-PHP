<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngresoPatient;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');
    
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('ingreso', IngresoPatient::class);
Route::post('patients/cedula', 'App\Http\Controllers\PatientController@cedula')->name('patients.cedula');;
Route::resource('patients', 'App\Http\Controllers\PatientController');

Route::resource('control','App\Http\Controllers\ControlCalidad');
//Route::post('control/create', 'App\Http\Controllers\PatientController');

/* Route::get('patients/create', [PatientsController::class , 'create']);
Route::get('patients/{name}', [PatientsController::class , 'show']);
 */
/* Route::get('/', function () {
    //return view('welcome');
    return "<h1>Página principal LIS</h1>";
}); 

Route::get('patients', function () {
    return "<h1>Aquí se listarán los pacientes de la BD del LIS</h1>";
});

Route::get('patients/create', function () {
    return "<h1>Formulario para el ingreso de pacientes al LIS</h1>";
});

Route::get('patients/{name}/{age?}', function ($name , $age=null) {
    if ($age){
        return "<h1>Paciente $name y tiene $age años de edad.</h1>";
    }else {
        return "<h1>Paciente $name.</h1>";
    }
}); */