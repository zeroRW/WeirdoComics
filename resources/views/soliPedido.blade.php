@extends('plantilla')


@section('codigo')
<div class="display-6 mt-3 mb-3 text-center" style="color: white"><strong>LEVANTAMIENTO DE PEDIDOS</strong></div>
<br>
<div class="container mt-3">

    
        <div class="row gx-4">
          <div class="col">
           <div class="p-3 border bg-light text-center d-grid gap-2 col-6 mx-auto">
                <a href="{{route('regispedido.comic')}}"><button class="btn btn-info">Comic</button></a>
           </div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light text-center d-grid gap-2 col-6 mx-auto">
                <a href="{{route('regispedido.articulo')}}"><button class="btn btn-warning">Articulo</button></a>
           </div>
          </div>
        </div>


</div>

@endsection