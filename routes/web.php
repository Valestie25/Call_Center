<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoAController;
use App\Http\Controllers\DepartamentoBController;
use App\Http\Controllers\DepartamentoCController;
use App\Http\Controllers\DepartamentoDController;
use App\Http\Controllers\SearchBarController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\EmpleadosController;

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

Route::get('/', function () {
    return view('layouts.template.plantilla');
});

Route::get('/dashboard', SearchBarController::class);
//Pruebas de rutas
Route::get('/departamentoA', DepartamentoAController::class);

Route::get('/departamentoB',  DepartamentoBController::class);

Route::get('/departamentoD', DepartamentoDController::class);

Route::get('/departamentoC', DepartamentoCController::class);

/*
Route::get('/departamento/create', [DepartamentosController::class, 'create']);
*/ 

Route::resource('departamento', DepartamentosController::class);

Route::get('/seccion1', function () {
    return view('layouts.vistadepartamentoA');
});