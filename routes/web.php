<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\TurnosAfiliadosController;

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

Route::get('/homeApp', function(){
    return view('homeApp');
})->middleware(['visitante']);

Route::resource('turnosafiliados', TurnosAfiliadosController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
});