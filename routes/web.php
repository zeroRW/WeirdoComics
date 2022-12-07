<?php

use App\Http\Controllers\controladorComics;
use App\HTTP\Controllers\controladorBD;
use App\HTTP\Controllers\controladorVendedorBD;
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

Route::get('registrar',[controladorBD::class,'createComic'])->name('comics');

Route::post('registrarCom', [controladorBD::class, 'storeComic'])->name('incert');

Route::get('editarCom',[controladorComics::class,'editarComic'])->name('editComic');

Route::get('consultarCom',[controladorComics::class,'consultarComic'])->name('consuComic');

/*------------------------------------*/


Route::get('registrarArt',[controladorComics::class,'registrarArticulo'])->name('articulo');

Route::get('registrarArt',[controladorBD::class,'createArticulo'])->name('articulo');

Route::get('editarArt',[controladorComics::class,'editarArticulo'])->name('editArt');
Route::get('consultarArt',[controladorComics::class,'consultarArticulo'])->name('consuArt');
Route::get('registrarProv',[controladorBd::class,'createProveedor'])->name('proveedor');
Route::get('consultarProv',[controladorBD::class,'indexProveedor'])->name('consuProv');
Route::get('editarProv/{id}',[controladorBD::class,'editProveedor'])->name('editProv');
Route::get('levantamiento',[controladorComics::class,'levantamientoPedido'])->name('levanPed');

//Validador articulos
Route::post('guardarArt',[controladorBD::class, 'storeArticulo'])->name('saveArt');
Route::post('updateArt',[controladorComics::class, 'procesarUpdArticulo'])->name('updArt');


//Validador pedido
Route::post('guardarPed',[controladorComics::class, 'procesarPedido'])->name('savePed');

/* RUTA USUARIO VENTAS */
Route::get('registrarCom',[controladorComics::class,'registrarComic'])->name('comic');
Route::get('inicio2', [controladorComics::class, 'ConComicUVenta'])->name('CCUV');
Route::get('CAUV', [controladorComics::class, 'ConArtUVenta'])->name('CAUV');
Route::get('VUV', [controladorComics::class, 'ventaUV'])->name('VUV');


/* RUTA VISTA VENTA */
Route::get('vventa',[controladorComics::class,'vistaVenta'])->name('Vventas');
Route::get('carVen', [controladorComics::class, 'vistaCarrito'])->name('CaVen');


/* RUTAS POST*/
Route::post('guardaComic',[controladorComics::class,'procesarComic']) ->name('GComic');
Route::post('actualizarComic',[controladorComics::class,'procesarEditComic']) ->name('GEComic');
Route::post('guardaProv',[controladorBD::class,'storeProveedor']) ->name('GProv');
Route::put('actualizarProv/{id}',[controladorBD::class,'updateProveedor']) ->name('GEProv');

/* RUTAS DELETE */
Route::delete('deleteArt/{id}',[controladorBD::class,'destroyProveedor'])->name('desProv');
/* redirec */

Route::post('redireqInicio', [controladorComics::class, '']);