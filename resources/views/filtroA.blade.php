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
                    <tr class="">
                        <td>{{$busqueda->idArticulo}}</td>                        
                        <td>{{$busqueda->tipo}}</td>
                        <td>{{$busqueda->cantidad}}</td>
                        <td>{{$busqueda->precio_compra}}</td>
                        <td>{{$busqueda->precio_venta}}</td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection