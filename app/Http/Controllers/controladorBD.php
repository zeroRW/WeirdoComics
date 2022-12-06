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

   
    public function createComic()
    {
        return view('registrarComic');
    }

   
    public function storeComic(validadorComic $req)
    {
        DB::table('tb_comics')->insert([

            "nombre"=> $req->input('txtNombre'),
            "edicionComic"=> $req->input('txtEdicion'),
            
            "compania"=> $req->input('txtCompañia'),
            "cantidad"=> $req->input('txtCantidad'),
            "precioCompra"=> $req->input('txtCompra'),
            "precioVenta"=> $req->input('txtVenta'),
            "fechaCo"=> $req->date('txtFecha'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);

        return redirect('registrarCom/createComic') -> with('confirmacion','Envio correcto');
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
}
