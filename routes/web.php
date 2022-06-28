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
    return view('welcome');
});
//Pruebas de rutas
Route::get('/profile', function () {
    return view('Layouts.perfil');
});

Route::get('/ver/{id}/{email}', function ($id, $email) {
    return 'Estas viendo el perfil numero '.$id.' Con el email '.$email;
});
