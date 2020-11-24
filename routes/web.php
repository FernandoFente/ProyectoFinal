<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AfiliadoController;

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
    return view('home');
});

Route::get('/formRegistro', function(){
    return view('formRegistro');
});

Route::get('/homeApp', function(){
    return view('homeApp');
});

Route::resource('Usuarios', UsuarioController::class);
Route::resource('Categorias', CategoriaController::class);
Route::resource('Afiliados', AfiliadoController::class);