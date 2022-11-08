<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorComics;
use App\Http\Requests\validadorArticulos;
use App\Http\Requests\validadorProveedores;

class controladorComics extends Controller
{
    public function loginInicio(){
        return view('login');
    }

    public function registrarUser(){
        return view('registrarUsuario');
    }

    public function editarU(){
        return view('editarUsuario');
    }

    public function casita(){
        return view('home');
    }

    public function registrarComic(validadorComics $reqCom){
        return view('registrarComic');
    }

    public function editarComic(validadorComics $reqEditCom){
        return view('editarComic');
    }

    public function consultarComic(){
        return view('consultarComic');
    }

    public function registrarArticulo(validadorArticulos $reqArt){
        return view('registrarArticulo');
    }

    public function editarArticulo(validadorArticulos $reqEditArt){
        return view('editarArticulo');
    }

    public function consultarArticulo(){
        return view('consultarArticulo');
    }

    public function registrarProveedor(validadorProveedores $reqProv){
        return view('registrarProveedor');
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
