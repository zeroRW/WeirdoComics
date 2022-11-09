@extends('plantillaVendedor')
@section('usuarioVenta')
    
<div class="container text-center mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-7">
            <form class="d-flex" role="search">
                <input class="form-control me-3" type="search" placeholder="buscar articulo..." aria-label="Search">
                <button class="btn btn-outline-dark me-3" type="submit">Buscar</button>
            </form>  
        </div>
    </div>
</div>

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
</div>

@endsection