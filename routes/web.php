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
//Pruebas de rutas
Route::get('/departamentoA', DepartamentoAController::class);

Route::get('/seccion1', function () {
    return view('layouts.vistadepartamentoA');
});

Route::get('/departamentoB',  DepartamentoBController::class);

Route::get('/departamentoD', DepartamentoDController::class);

Route::get('/ver/{id}/{email}', function ($id, $email) {
    return 'Estas viendo el perfil numero '.$id.' Con el email '.$email;
});
