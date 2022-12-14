@extends('plantilla')


@section('codigo')
<div class="display-6 mt-3 mb-3 text-center" style="color: white"><strong>LEVANTAMIENTO DE PEDIDOS</strong></div>
<br>



<div class="container text-center">>
  <div class="row justify-content-around">
    <div class="col-4">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('img/comicCard.jpg')}}" />
                  <h3 class="mt-3 mb-3"><strong>COMICS</strong></h3>
                </div>
                <div class="flip-card-back">
                  <img src="{{asset('img/comicCard.jpg')}}" />
                  <h4 class="mt-3 mb-3"><strong>Realiza tu pedido de los comics a adquirir</strong></h4>
                  <a href="{{route('regispedido.comic')}}"><button class="btn btn-primary btn-lg"><i class="bi bi-box-seam"> Hacer pedido</i></button></a>
                </div>
              </div>
            </div>
    </div>
    <div class="col-4">
      
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="{{asset('img/articulosCard.jpg')}}" />
            <h3 class="mt-3 mb-3"><strong>ARTICULOS</strong></h3>

          </div>
          <div class="flip-card-back">
            <img src="{{asset('img/articulosCard.jpg')}}" />
            <h4 class="mt-3 mb-3"><strong>Adquire los articulos que necesites y pidelos ahora</strong></h4>
            <a href="{{route('regispedido.articulo')}}"><button class="btn btn-warning btn-lg"><i class="bi bi-bag-check-fill"> Hacer pedido</i></button></a>
          </div>
        </div>
      </div>





@endsection