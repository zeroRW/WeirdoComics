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
Route::get('registrarUsuario',[controladorComics::class,'registrarUser'])->name('user');
Route::get('editarUsu',[controladorComics::class,'editarU'])->name('editUsu');
Route::get('inicio',[controladorComics::class,'casita'])->name('homeInicio');

Route::post('login', [controladorComics::class, 'procesoLogin'])->name('LG');
Route::post('RegisUsuario', [controladorComics::class, 'procesoUsuario'])->name('RU');

/* RUTAS PLANTILLAS Y SUPER USUARIO*/
Route::get('registrarCom',[controladorComics::class,'registrarComic'])->name('editComic');
Route::get('consultarCom',[controladorComics::class,'consultarComic'])->name('consuComic');
Route::get('registrarArt',[controladorComics::class,'registrarArticulo'])->name('articulo');
Route::get('editarArt',[controladorComics::class,'editarArticulo'])->name('editArt');
Route::get('consultarArt',[controladorComics::class,'consultarArticulo'])->name('consuArt');
Route::get('registrarProv',[controladorComics::class,'RegistrarProveedor'])->name('proveedor');
Route::get('consultarProv',[controladorComics::class,'consultarProveedor'])->name('consuProv');
Route::get('editarProv',[controladorComics::class,'editarProveedor'])->name('editProv');
Route::get('levantamiento',[controladorComics::class,'levantamientoPedido'])->name('levanPed');

//Validador articulos
Route::post('guardarArt',[controladorComics::class, 'procesarArticulo'])->name('saveArt');
Route::post('updateArt',[controladorComics::class, 'procesarUpdArticulo'])->name('updArt');


//Validador pedido
Route::post('guardarPed',[controladorComics::class, 'procesarPedido'])->name('savePed');

/* RUTA USUARIO VENTAS */
Route::get('registrarCom',[controladorComics::class,'registrarComic'])->name('comic');
Route::get('CCUV', [controladorComics::class, 'ConComicUVenta'])->name('CCUV');
Route::get('CAUV', [controladorComics::class, 'ConArtUVenta'])->name('CAUV');
Route::get('VUV', [controladorComics::class, 'ventaUV'])->name('VUV');


/* RUTA VISTA VENTA */
Route::get('vventa',[controladorComics::class,'vistaVenta'])->name('Vventas');
Route::get('carVen', [controladorComics::class, 'vistaCarrito'])->name('CaVen');


/* RUTAS POST*/
Route::post('guardaComic',[controladorComics::class,'procesarComic']) ->name('GComic');
Route::post('actualizarComic',[controladorComics::class,'procesarEditComic']) ->name('GEComic');
Route::post('guardaProv',[controladorComics::class,'procesarProv']) ->name('GProv');
Route::post('actualizarProv',[controladorComics::class,'procesarEditProv']) ->name('GEProv');
