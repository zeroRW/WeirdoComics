<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorComics;
use App\Http\Requests\validadorArticulos;
use App\Http\Requests\validador_Pedidos;
use App\Http\Requests\validadorProveedores;

class controladorComics extends Controller
{
    /* FUNCIONES DE LOGIN */

    public function loginInicio(){
        return view('login');
    }

    public function registrarUser(){
        return view('registrarUsuario');
    }

    public function editarU(){
        return view('editarUsuario');
    }

    

    /* FUNCIONES DE PLANTILLA USUARIO VENTA */

    public function registrarComic(){
        return view('registrarComic');
    }

    public function editarComic(){
        return view('editarComic');
    }

    public function consultarComic(){
        return view('consultarComic');
    }

    public function registrarArticulo(){
        return view('registrarArticulo');
    }

    public function editarArticulo(){
        return view('editarArticulo');
    }

    public function consultarArticulo(){
        return view('consultarArticulo');
    }

    public function registrarProveedor(){
        return view('registrarProveedor');
    }

    public function consultarProveedor(){
        return view('consultarProveedor');
    }

    public function editarProveedor(){
        return view('editarProveedor');
    }

    public function levantamientoPedido(){
        return view('levantamiento');
    }

    public function vistaVenta(){
        return view('ventas');
    }


    //Validaciones Articulo
    public function procesarArticulo(validadorArticulos $req){

        return redirect('registrarArt')->with('Success','Correcto');
    }
    public function procesarUpdArticulo(validadorArticulos $req){

        return redirect('consultarArt')->with('Success','Correcto');
    }

     //Validaciones Pedidos
     public function procesarPedido(validador_Pedidos $req){

        return redirect('levantamiento')->with('Success','Correcto');
     }

    public function vistaCarrito(){
        return view('carritoVenta');
    }

    /* FUNCION USUARIO VENDEDOR */

    public function ConComicUVenta(){
        return view('ConsultarComicUV');
    }

    public function ConArtUVenta(){
        return view('ConsultarArticuloUV');
    }

    public function ventaUV(){
        return view('ventasUV');
    }

    public function casita(){
            return view('home');
        }


    /*Rutas para procesar formularios campos*/
    
    public function procesarComic(validadorComics $req){
        return redirect('registrarCom') -> with('confirmacion','Envio correcto');
    }
    
    public function procesarEditComic(validadorComics $req){
        return redirect('consultarCom') -> with('actualizacion','Envio correcto');

    }

    public function procesarProv(validadorProveedores $req){
        return redirect('registrarProv') -> with('confirmacion','Envio correcto');
    }    

    public function procesarEditProv(validadorProveedores $req){
        return redirect('consultarProv') -> with('actualizacion','Envio correcto');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
