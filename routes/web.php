<?php

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

Route::get('/', function () {
    return view('layouts.template.plantilla');
});
//Pruebas de rutas
Route::get('/departamentoA', function () {
    return view('layouts.departamentoA');
});

Route::get('/departamentoA/seccion1', function () {
    return view('layouts.vistadepartamentoA');
});


Route::get('/departamentoB', function () {
    return view('layouts.departamentoB');
});

Route::get('/departamentoC', function () {
    return view('layouts.departamentoC');
});

Route::get('/departamentoD', function () {
    return view('layouts.departamentoD');
});

Route::get('/ver/{id}/{email}', function ($id, $email) {
    return 'Estas viendo el perfil numero '.$id.' Con el email '.$email;
});
