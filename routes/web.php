<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoAController;
use App\Http\Controllers\DepartamentoBController;
use App\Http\Controllers\DepartamentoCController;
use App\Http\Controllers\DepartamentoDController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartamentController;

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

//Pruebas de rutas
Route::get('/vistadepartamentoA', EmployeeController::class);

Route::get('/departamentoA', DepartamentoAController::class);

Route::get('/departamentoB',  DepartamentoBController::class);

Route::get('/departamentoD', DepartamentoDController::class);

Route::get('/departamentoC', DepartamentoCController::class);

Route::get('/', DepartamentController::class);

Route::get('/seccion1', function () {
    return view('layouts.vistadepartamentoA');
});
