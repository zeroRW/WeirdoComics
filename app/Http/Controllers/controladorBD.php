<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorComic;
use App\Http\Requests\validadorArticulos;
use App\Http\Requests\validador_Pedidos;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorProveedor;
use App\Http\Requests\validadorRegistroUsuario;
use Carbon\Carbon;
use DB;

class controladorBD extends Controller
{
    public function indexComic()
    {
        return view('consultarComic');
    }

    public function createComics()
    {
        return view('registrarComic');
    }

    
    public function storeComic(validadorComic $request)
    {
        //
    }

    public function show($id)
    {
        return view('editarComic');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


    /*          Funciones de Articulos            */
    public function indexArticulo()
    {
        return view('consultarArticulo');
    }

    public function createArticulo()
    {
        return view('registrarArticulo');
    }

    public function storeArticulo(validadorComic $request)
    {
        //
    }

    public function showArticulo($id)
    {
        return view('editarArticulo');
    }

    public function editArticulo($id)
    {
        //
    }

    public function updateArticulo(Request $request, $id)
    {
        //
    }

    public function destroyArticulo($id)
    {
        //
    }
}
