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
        
    }

    public function storeArticulo(validadorArticulos $request)
    {
        /*
        DB::table('tb_articulos') -> insert([
            'tipo'=>$request->input('txtTipo'),
            'marca'=>$request->input('txtMarca'),
            'descripcion'=>$request->input('txtDescripcion'),
            'cantidad'=>$request->input('txtCantidad'),
            'precio_compra'=>$request->input('txtCompra'),
            'precio_venta'=>$request->input('txtVenta'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(), 
        ]);
        */
        

        return redirect('registrarArt')->with('Success','Correcto');
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

    /*          Funciones de Proveedores            */
    public function indexProveedor()
    {
        $Proveedor=DB::table('tb_proveedores')->get();
        return view("consultarProveedor",compact('Proveedor'));
    }

    public function createProveedor()
    {
        
    }

    public function storeProveedor(validadorProveedor $request)
    {
        DB::table('tb_proveedores') -> insert([
            'empresa'=>$request->input('txtEmpresa'),
            'direccion'=>$request->input('txtDireccion'),
            'pais'=>$request->input('txtPais'),
            'contacto'=>$request->input('txtContacto'),
            'no_fijo'=>$request->input('txtNumero'),
            'no_celu'=>$request->input('txtCelular'),
            'correo'=>$request->input('txtCorreo'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('registrarProv') -> with('confirmacion','Envio correcto');
    }

    public function showProveedor($id)
    {
        
    }

    public function editProveedor($id)
    {
        $Proveedor=DB::table('tb_proveedores')->where('idProveedor',$id)->first();
        return view('editarProveedor',compact('Proveedor'));
    }

    public function updateProveedor(validadorProveedor $request, $id)
    {
        DB::table('tb_proveedores') ->where('idProveedor',$id)-> update ([
            'empresa'=>$request->input('txtEmpresa'),
            'direccion'=>$request->input('txtDireccion'),
            'pais'=>$request->input('txtPais'),
            'contacto'=>$request->input('txtContacto'),
            'no_fijo'=>$request->input('txtNumero'),
            'no_celu'=>$request->input('txtCelular'),
            'correo'=>$request->input('txtCorreo'),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('consultarProv') -> with('actualizacion','Envio correcto');
    }

    public function destroyProveedor($id)
    {
        //
    }
}
