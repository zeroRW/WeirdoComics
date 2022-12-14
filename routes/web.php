<?php

use App\Http\Controllers\controladorComics;
use App\HTTP\Controllers\controladorBD;
use App\HTTP\Controllers\controladorVendedorBD;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\PedidoMail;
use FontLib\Table\Type\name;

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

//Route::resource('categorias', [controladorBD::class]);
Route::get('consultaCom',[controladorBD::class,'indexComic'])->name('consuComic');

Route::get('editarCom/{id}',[controladorBD::class,'editComic'])->name('editCom');

Route::put('editarCo/{id}', [controladorBD::class, 'updateComic'])->name('updateCom');

Route::delete('eliminarCo/{id}', [controladorBD::class, 'destroyComic'])->name('destroyCom');

/*------------------------------------*/

Route::get('registrarArt',[controladorBD::class,'createArticulo'])->name('articulo');

Route::get('editarArt/{id}',[controladorBD::class,'editArticulo'])->name('editArt');

Route::get('consultarArt',[controladorBD::class,'indexArticulo'])->name('consuArt');

Route::get('registrarProv',[controladorBD::class,'createProveedor'])->name('proveedor');
Route::get('consultarProv',[controladorBD::class,'indexProveedor'])->name('consuProv');
Route::get('editarProv/{id}',[controladorBD::class,'editProveedor'])->name('editProv');

//Validador articulos
Route::post('guardarArt',[controladorBD::class,'storeArticulo'])->name('saveArt');

Route::put('updateArt/{id}',[controladorBD::class,'updateArticulo'])->name('updArt');


//PEDIDOS
Route::get('pedidos/soli',[controladorBD::class,'solipedido'])->name('levanPed');
Route::get('pedidos/Comic',[controladorBD::class,'pedidoComic'])->name('regispedido.comic');
Route::get('pedidos/Articulo',[controladorBD::class,'pedidoArticulo'])->name('regispedido.articulo');

// Guardar Pedido
Route::post('regisPed/Comic',[controladorBD::class, 'savePedido_C'])->name('insertPed.Comic');
Route::post('regisPed/Articulo',[controladorBD::class, 'savePedido_A'])->name('insertPed.Artic');


/* RUTA USUARIO VENTAS */
Route::get('registrarCom',[controladorComics::class,'registrarComic'])->name('comic');
Route::get('inicio2', [controladorComics::class, 'ConComicUVenta'])->name('CCUV');
Route::get('CAUV', [controladorComics::class, 'ConArtUVenta'])->name('CAUV');
Route::get('VUV', [controladorComics::class, 'ventaUV'])->name('VUV');

/* RUTA VISTA VENTA */
Route::get('vventa',[controladorBD::class,'ventasMostrador'])->name('Vventas');
Route::get('carVen', [controladorComics::class, 'vistaCarrito'])->name('CaVen');

/* VENTAS */
Route::post('guardaVenta/A',[controladorBD::class,'insertVentaA']) ->name('proceso.venta');

/* RUTAS POST*/
Route::post('guardaComic',[controladorComics::class,'procesarComic']) ->name('GComic');
Route::post('actualizarComic',[controladorComics::class,'procesarEditComic']) ->name('GEComic');
Route::post('guardaProv',[controladorBD::class,'storeProveedor']) ->name('GProv');
Route::put('actualizarProv/{id}',[controladorBD::class,'updateProveedor']) ->name('GEProv');

/* RUTAS DELETE */
Route::delete('deleteProv/{id}',[controladorBD::class,'destroyProveedor'])->name('desProv');
Route::delete('deleteArt/{id}',[controladorBD::class,'destroyArticulo'])->name('desArt');

/* redirec */

Route::post('redireqInicio', [controladorComics::class, '']);


/*  INVENTARIO  */
Route::get('inventario',[controladorBD::class,'inventario'])->name('inve');
Route::post('filtro',[controladorBD::class,'filtro'])->name('FilIn');

Route::post('filtro2',[controladorBD::class,'filtro2'])->name('FilIn2');

Route::get('inventarioVentas', [controladorBD::class, 'indexCarrito'])->name('invenVen');

// CORREO 
Route::get('email',function(){
    $data = array(
        'name' => 'WeirdoComics',
    );

    Mail::send('emails.welcome', $data, function($message){

        $message->from('overhaulrew@gmail.com', 'Pedido');

        $message->to('overhaulrew@gmail.com')->subject('Detalle del pedido:');
    })->name('sendMail');

    return "Email enviado correctamente";
});

Route::get('correo',[controladorBD::class,'envioCorreo'])->name('correo.env');

Route::get('mail', function(){
    $correo = new PedidoMail;

    Mail::to('overhaulrew@gmail.com')->send($correo);

    return "Email enviado correctamente";

});

//PDF
// test
Route::get('pdf_d',[controladorBD::class, 'crear_pdf'])->name('view.pdf');

// pdf pedido comic individual 
Route::get('pedido/comic/{id}/{idC}/pdf',[controladorBD::class, 'pdf_comic'])->name('pedidoCo.pdf');

// pdf pedido articulo individual 
Route::get('pedido/articulo/{id}/{idC}/pdf',[controladorBD::class, 'pdf_articulo'])->name('pedidoArt.pdf');

