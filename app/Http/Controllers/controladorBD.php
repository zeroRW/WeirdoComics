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
        $consultaCo = DB::table('tb_comics')->get();
        return view('consultarComic', compact('consultaCo'));
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
            "imagenCo" => $req->input('imagen'),
            "cantidad"=> $req->input('txtCantidad'),
            "precioCompra"=> $req->input('txtCompra'),
            "precioVenta"=> $req->input('txtVenta'),
            "fechaCo"=> $req->date('txtFecha'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('registrar') -> with('confirmacion','Envio correcto');
    }

    public function show($id)
    {

    }

    public function editComic($id)
    {
        $consultaCoEdi = DB::table('tb_comics')->where('idComics', $id)->first();
        return view('editarComic', compact('consultaCoEdi'));
    }

    public function updateComic(validadorComic $req, $id)
    {
        DB::table('tb_comics')->where('idComics', $id)->update([

            "nombre"=> $req->input('txtNombre'),
            "edicionComic"=> $req->input('txtEdicion'),
            "compania"=> $req->input('txtCompañia'),
            "imagenCo" => $req->input('imagen'),
            "cantidad"=> $req->input('txtCantidad'),
            "precioCompra"=> $req->input('txtCompra'),
            "precioVenta"=> $req->input('txtVenta'),
            "fechaCo"=> $req->date('txtFecha'),
            "updated_at"=> Carbon::now(),

        ]);

        return redirect('consultaCom')->with('actualizacion', 'bca');
    }

    public function destroyComic($id)
    {
        DB::table('tb_comics')->where('idComics', $id)->delete();

        return redirect('consultaCom')->with('eliminado', 'cba');
    }


    /*          Funciones de Articulos            */
    public function indexArticulo()
    {
        $articulos=DB::table('tb_articulos')->get();
        return view('consultarArticulo',compact('articulos'));
    }

    public function createArticulo()
    {

        return view('registrarArticulo');
    }

    public function storeArticulo(validadorArticulos $request)
    {
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
        

        return redirect('registrarArt')->with('Success','Correcto');
    }

    public function editArticulo($id)
    {
        $articulo=DB::table('tb_articulos')->where('idArticulo',$id)->first();
        return view('editarArticulo',compact('articulo'));
    }

    public function updateArticulo(validadorArticulos $request, $id)
    {
        DB::table('tb_articulos')->where('idArticulo',$id) -> update([
            'tipo'=>$request->input('txtTipo'),
            'marca'=>$request->input('txtMarca'),
            'descripcion'=>$request->input('txtDescripcion'),
            'cantidad'=>$request->input('txtCantidad'),
            'precio_compra'=>$request->input('txtCompra'),
            'precio_venta'=>$request->input('txtVenta'),
            "updated_at"=>Carbon::now(), 
        ]);
        

        return redirect('consultarArt')->with('actualizacion','Correcto');
    }

    public function destroyArticulo($id)
    {
        DB::table('tb_articulos')->where('idArticulo',$id)->delete();
        return redirect('consultarArt') -> with('eliminacion','Envio correcto');
    }

    /*          Funciones de Proveedores            */
    public function indexProveedor()
    {
        $Proveedor=DB::table('tb_proveedores')->get();
        return view("consultarProveedor",compact('Proveedor'));
    }

    public function createProveedor()
    {
        return view('registrarProveedor');
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
        DB::table('tb_proveedores')->where('idProveedor',$id)->delete();
        return redirect('consultarProv') -> with('eliminacion','Envio correcto');
    }
}
