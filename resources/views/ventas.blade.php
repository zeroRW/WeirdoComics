@extends('plantilla')
@section('codigo')

<div class="container text-center mt-4">
    <div class="row">
      <div class="display-6 mb-3 text-center" style="color: white"><strong>Venta Comics</strong></div>
    </div>
</div>
{{-- comment 
<div class="container text-center mt-5">
    <div class="row align-items-start">
      <div class="col">
        <div class="card" style="width: 20rem;">
            <img src="{{asset('img/comicDC.jpeg')}}" class="" height="400" alt="...">
            <div class="card-body">
              <h5 class="card-title">Universo DC Hallowen</h5>
              <p class="card-text"> ($) Costo: $59 </p>
                <div class="mb-3">
                    <input type="number" name="pedido1" placeholder="N° pedidos...">
                </div>
              <a href="#" class="btn btn-danger">Vender</a>
            </div>
          </div>
          <br>
      </div>
      
      <div class="col">
        <div class="card" style="width: 20rem;">
            <img src="{{asset('img/pegatinas.jpg')}}" class="" height="400" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pegatinas Marvel</h5>
              <p class="card-text"> ($) Costo: $20 </p>
              <div class="mb-3">
                  <input type="number" name="pedido2" placeholder="N° pedidos...">
              </div>
                <a href="#" class="btn btn-danger">Vender</a>
            </div>
          </div>
          <br>
      </div>
      
      <div class="col">
        <div class="card" style="width: 20rem;">
            <img src="{{asset('img/comic3.jpg')}}" class="" height="400" alt="...">
            <div class="card-body">
              <h5 class="card-title">Originis of Marvel Comics</h5>
              <p class="card-text"> ($) Costo: $90 </p>
                <div class="mb-3">
                    <input type="number" name="pedido3" placeholder="N° pedidos...">
                </div>
              <a href="#" class="btn btn-danger">Vender</a>
            </div>
          </div>
      </div>
    </div>
    --}}
<div class="container mt-2">
      <div class="card card-body">
  
    <form action="filtro" method="post">
      @csrf
      <div class="mb-3 row">
          <label class="col-sm-1 col-form-label">Buscar:</label>
          <div class="col-sm-3">
              <input type="text" class="form-control" placeholder="Filtrar Comic" name="Filtro">
          </div>
          <button class="col-sm-1 btn btn-dark me-3">Filtrar</button>
      </div>
  </form>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Producto:</th>
        <th scope="col">Stock:</th>
        <th scope="col">Precio:</th>
      </tr>
    </thead>
      <tbody>
        @foreach ($comics as $com)
          <tr class="">                      
            <td>{{$com->nombre}}</td>
            <td>{{$com->cantidad}}</td>
            <td>${{$com->precioVenta}}</td>
            <td class="text-center"><a href=""><button class="btn btn-danger">Vender</button></a></td>          </tr>
       @endforeach
      </tbody>
  </table>
</div>
</div>
<div class="container text-center mt-4">
  <div class="row">
    <div class="display-6 mb-3 text-center" style="color: white"><strong>Venta Articulos</strong></div>
  </div>
</div>
<div class="container mt-2">
  <div class="card card-body">

<form action="filtro" method="post">
  @csrf
  <div class="mb-3 row">
      <label class="col-sm-1 col-form-label">Buscar:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" placeholder="Filtrar Ariticulo" name="Filtro">
      </div>
      <button class="col-sm-1 btn btn-dark me-3">Filtrar</button>
  </div>
</form>

<table class="table table-bordered">
<thead>
  <tr>
    <th scope="col">Producto:</th>
    <th scope="col">Stock:</th>
    <th scope="col">Precio:</th>
  </tr>
</thead>
  <tbody>
    @foreach ($articulos as $art)
    <tr class="">                     
        <td>{{$art->tipo}}</td>
        <td>{{$art->cantidad}}</td>
        <td>${{$art->precio_venta}}</td>
        <td class="text-center"><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalAgregar{{$art->idArticulo}}">Vender<i class="bi bi-file-plus"></i></button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
 
 <!-- Modal -->
 @foreach ($articulos as $art)
 <div class="modal fade" id="modalAgregar{{$art->idArticulo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAgregar" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Realizar Venta</h5>
      </div>
      <div class="modal-body">

          @if ($errors->any())
  
              @foreach ($errors->all() as $error)
           
              <div class="alert alert-danger alert-dimissible fade show" role="alert">
               <strong> {{$error}} </strong>
               <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
             </div>
  
              @endforeach
  
          @endif
  
          <div class="card mb-4">
          
              <div class="card-header fw-bold text-center">
                {{$art->tipo}}
              </div>
              
              <div class="card-body">
  
                  <form action="" method="post" class="border">
                   @csrf
                      
                      <div class="mt-3">
                        <div><label class="form">Marca:</label></div>
                        <input class="form-control" type="text" disabled value="{{$art->marca}}">          
                      </div>
                      <div class="">
                          <div><label class="form">Descripción:</label></div>
                          <input class="form-control" type="text" disabled value="{{$art->descripcion}}">          
                      </div>
                      <div class="mb-3">
                          <div><label class="form">Precio($):</label></div>
                          <input class="form-control" type="text" disabled value="{{$art->precio_venta}}" id="preV">
                      </div>
                      <div class="mb-3">
                        <div><label class="form">Cantidad:</label></div>
                        <input class="form-control" type="text" name="cantidad" value="" id="cantidad" oninput="calcular()">
                        <p class="text-danger">{{$errors->first('cantidad')}}</p>
                      </div>
                      <div class="mb-3">
                        <div><label class="form">Empleado:</label></div>
                        <input class="form-control" type="text" name="empleado" value="">
                        <p class="text-danger">{{$errors->first('empleado')}}</p>
                      </div>
                      <script type="text/javascript">
                        function calcular(){
                            try{   
                                var a = parseFloat(document.getElementById('cantidad').value) || 0;
                                var b = parseFloat(document.getElementById('preV').value);
                      
                                document.getElementById('totalV').value = a * b;
                            } catch (e){}
                        }
                      </script>
                      <div class="mb-3">
                        <div><label class="form">Total($):</label></div>
                        <input class="form-control" type="text" name="total" value="" id="totalV" readonly="true">
                        <p class="text-danger">{{$errors->first('total')}}</p>
                      </div>
               </div>
               
              <div class="modal-footer">
                  <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cofirmar</button>
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                </form>
          </div>
  
      </div>
      </div>
      </div>
  </div>
</div>
@endforeach

@endsection