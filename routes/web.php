<?php

use App\Http\Controllers\controladorComics;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

/* RUTAS DE INDEX, REGISTRO Y INICIO */
Route::get('/',[controladorComics::class,'loginInicio'])->name('Inicio');
Route::get('registrarU',[controladorComics::class,'registrarUser'])->name('user');
Route::get('editarUsu',[controladorComics::class,'editarU'])->name('editUsu');
Route::get('inicio',[controladorComics::class,'casita'])->name('homeInicio');


