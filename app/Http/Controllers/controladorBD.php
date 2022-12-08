<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorComic;
use App\Http\Requests\validadorArticulos;
use App\Http\Requests\validador_Pedidos;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorProveedor;
use App\Http\Requests\validadorRegistroUsuario;
use App\Models\tb_comics;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PDF;

class controladorBD extends Controller
{

    //public function index(Request $req){}

    public function indexComic(){
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

    /*          Funciones de Pedidos            */

    public function solipedido()
    {
        return view('soliPedido');
    }

    public function pedidoComic()
    {
        $prov = DB::table('tb_proveedores')->get();

        $comics= DB::table('tb_comics')->get();

        $pedido = DB::table('tb_proveedores')
        ->crossJoin('tb_comics')
        ->crossJoin('tb_pedidos_comic')
        ->select('tb_comics.idComics','tb_pedidos_comic.idPedidoC','tb_proveedores.empresa', 'tb_comics.nombre', 'tb_pedidos_comic.cantidad')
        ->where('tb_pedidos_comic.id_Prov','=',DB::raw('tb_proveedores.idProveedor'))
        ->where('tb_pedidos_comic.id_Comic','=',DB::raw('tb_comics.idComics'))
        ->get();

        return view('levantamiento', compact('prov','comics','pedido'));
    }

    public function pedidoArticulo()
    {
        $prov = DB::table('tb_proveedores')->get();

        $articulos = DB::table('tb_articulos')->get();

        $pedido = DB::table('tb_proveedores')
        ->crossJoin('tb_articulos')
        ->crossJoin('tb_pedidos_articulo')
        ->select('tb_articulos.idArticulo','tb_pedidos_articulo.idPedidoA','tb_proveedores.empresa', 'tb_articulos.tipo', 'tb_pedidos_articulo.cantidad')
        ->where('tb_pedidos_articulo.id_Arti','=',DB::raw('tb_articulos.idArticulo'))
        ->where('tb_pedidos_articulo.id_Prov','=',DB::raw('tb_proveedores.idProveedor'))
        ->get();


        return view('levantamientoArt', compact('prov','articulos','pedido'));
    }

    public function savePedido_C(validador_Pedidos $request)
    {
        DB::table('tb_pedidos_comic') -> insert([
            'id_Prov'=>$request->input('slcProveedor'),
            'id_Comic'=>$request->input('slcProducto'),
            'cantidad'=>$request->input('nmCantidad'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('pedidos/Comic') -> with('Correcto','Bien');
    }

    public function savePedido_A(validador_Pedidos $request)
    {
        DB::table('tb_pedidos_articulo') -> insert([
            'id_Prov'=>$request->input('slcProveedor'),
            'id_Arti'=>$request->input('slcProducto'),
            'cantidad'=>$request->input('nmCantidad'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('pedidos/Articulo') -> with('Correcto','Bien');
    }


    public function inventario()
    {
        $articulos = DB::table('tb_articulos')->get();
        $comics = DB::table('tb_comics')->get();

        return view('inventario',compact('articulos','comics'));
    }

    public function filtro(Request $req){
        $producto = $req->input('Filtro');
        

        if (empty($producto)){
            return redirect('inventario');
        } else{
            $busqueda = DB::table('tb_articulos')->where('tipo',$producto)->get()->first();
            if(empty($busqueda)){
                $busqueda = DB::table('tb_comics')->where('nombre',$producto)->get()->first();
                if(empty($busqueda)){
                    return redirect('inventario');
                } else {
                    return view('filtroC',compact('busqueda'));
                }
            } else {
                return view('filtroA',compact('busqueda'));
            }
        }
    }


      /*          Funciones de PDF            */
    
      public function pdf_comic($id, $idC){
        
        //Consultas para el PDF
        $pedido = DB::table('tb_proveedores')
        ->crossJoin('tb_comics')
        ->crossJoin('tb_pedidos_comic')
        ->select('tb_comics.idComics','tb_pedidos_comic.idPedidoC','tb_proveedores.empresa', 'tb_comics.nombre', 'tb_pedidos_comic.cantidad')
        ->where('tb_pedidos_comic.id_Prov','=',DB::raw('tb_proveedores.idProveedor'))
        ->where('tb_pedidos_comic.id_Comic','=',DB::raw('tb_comics.idComics'))
        ->where('idPedidoC',$id)->first();

        $detalleC = DB::table('tb_comics')->where('idComics',$idC)->first();

        //Total de compra pedido
        $precioCompra = DB::table('tb_comics')->select('precioCompra')->where('idComics',$idC)->first();
        $preC = $precioCompra->precioCompra;

        $C_cantidad = DB::table('tb_pedidos_comic')->select('cantidad')->where('idPedidoc',$id)->first();
        $cantidad = $C_cantidad->cantidad;
        $total = ($preC) * ($cantidad);

        //Generar PDF
        $pdf = PDF::loadView('pdf.pdf_pedido', compact('pedido','detalleC','total'));
        return $pdf->stream();

     }

     public function pdf_articulo($id, $idA){
        
        //Consultas para el PDF
        $pedido = DB::table('tb_proveedores')
        ->crossJoin('tb_articulos')
        ->crossJoin('tb_pedidos_articulo')
        ->select('tb_articulos.idArticulo','tb_pedidos_articulo.idPedidoA','tb_proveedores.empresa', 'tb_articulos.tipo', 'tb_pedidos_articulo.cantidad')
        ->where('tb_pedidos_articulo.id_Arti','=',DB::raw('tb_articulos.idArticulo'))
        ->where('tb_pedidos_articulo.id_Prov','=',DB::raw('tb_proveedores.idProveedor'))
        ->where('idPedidoA',$id)->first();

        $detalleA = DB::table('tb_articulos')->where('idArticulo',$idA)->first();

        //Total de compra pedido
        $precioCompra = DB::table('tb_articulos')->select('precio_compra')->where('idArticulo',$idA)->first();
        $preC = $precioCompra->precio_compra;

        $C_cantidad = DB::table('tb_pedidos_articulo')->select('cantidad')->where('idPedidoA',$id)->first();
        $cantidad = $C_cantidad->cantidad;
        $total = ($preC) * ($cantidad);

        //Generar PDF
        $pdf = PDF::loadView('pdf.pdf_pedidoArti', compact('pedido','detalleA','total'));
        return $pdf->stream();

     }


    public function crear_pdf(){

        $pedido = DB::table('tb_proveedores')
        ->crossJoin('tb_comics')
        ->crossJoin('tb_pedidos_comic')
        ->select('tb_proveedores.empresa', 'tb_comics.nombre', 'tb_pedidos_comic.cantidad')
        ->where('tb_pedidos_comic.id_Prov','=',DB::raw('tb_proveedores.idProveedor'))
        ->where('tb_pedidos_comic.id_Comic','=',DB::raw('tb_comics.idComics'))
        ->get();

        $pdf = PDF::loadView('pdf.pdf_pedido', compact('pedido'));
        return $pdf->stream();

    }

    /* VENTAS */
    
    public function ventasMostrador()
    {
        $articulos = DB::table('tb_articulos')->get();
        $comics = DB::table('tb_comics')->get();

        return view('ventas',compact('articulos','comics'));
    }

}


