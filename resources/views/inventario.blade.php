@extends('plantilla')
@section('codigo')

<div class="container mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">INVENTARIO</div>

        <form action="filtro" method="post">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-1 col-form-label">Buscar:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Filtrar Artículo" name="Filtro">
                </div>
                <button class="col-sm-1 btn btn-primary">Filtrar</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID:</th>
                <th scope="col">Producto:</th>
                <th scope="col">cantidad:</th>
                <th scope="col">Precio compra:</th>
                <th scope="col">Precio venta:</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $art)
                    <tr class="">
                        <td>{{$art->idArticulo}}</td>                        
                        <td>{{$art->tipo}}</td>
                        <td>{{$art->cantidad}}</td>
                        <td>{{$art->precio_compra}}</td>
                        <td>{{$art->precio_venta}}</td>
                    </tr>
                @endforeach
                @foreach ($comics as $com)
                    <tr class="">
                        <td>{{$com->idComics}}</td>                        
                        <td>{{$com->nombre}}</td>
                        <td>{{$com->cantidad}}</td>
                        <td>{{$com->precioCompra}}</td>
                        <td>{{$com->precioVenta}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection