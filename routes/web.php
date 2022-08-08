<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoAController;
use App\Http\Controllers\DepartamentoBController;
use App\Http\Controllers\DepartamentoCController;
use App\Http\Controllers\DepartamentoDController;
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

Route::get('/', function(){
    return view('layouts.dashboardPrincipal');
});
//Pruebas de rutas
Route::get('/departamentoA', DepartamentoAController::class);

Route::get('/departamentoB',  DepartamentoBController::class);

Route::get('/departamentoD', DepartamentoDController::class);

<<<<<<< HEAD
Route::get('/seccion1', function () {
    return view('layouts.vistadepartamentoA');
});
=======
Route::get('/departamentoC', DepartamentoCController::class);

Route::get('/seccion1', function () {
    return view('layouts.vistadepartamentoA');
});
>>>>>>> 7eb888348a1745f5e773cc252cdda4b14c1817d7
