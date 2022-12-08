@extends('plantilla')
@section('codigo')
    
<div class="container mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">INVENTARIO VENTAS</div>
        <br>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID:</th>
                <th scope="col">Producto:</th>
                <th scope="col">cantidad:</th>
                <th scope="col">Empleado:</th>
                <th scope="col">Total:</th>
                <th scope="col">Fecha:</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($consultaCarVen  as $item)
                    <tr class="">
                        <td>{{$item->idVenta_A}}</td>                        
                        <td>{{$item->tipo}}</td> 
                        <td>{{$item->cantidad}}</td> 
                        <td>{{$item->empleado}}</td> 
                        <td>{{$item->total}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection