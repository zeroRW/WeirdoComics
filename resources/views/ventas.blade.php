@extends('plantilla')
@section('codigo')

@if (session()->has('Hecho'))
{!!
    "<script> 
        Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Vendido!',
        showConfirmButton: false,
        timer: 1200
        })
    </script>"
!!}
@endif

<div class="container text-center mt-4">
    <div class="row">
      <div class="display-6 mb-3 text-center" style="color: white"><strong>Venta Comics</strong></div>
    </div>
</div>

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
            <td class="text-center"><a href=""><button class="btn btn-danger">Vender</button></a></td></tr>
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
        <td class="text-center"><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalAgregar{{$art->idArticulo}}">Vender</button></td>
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
  
          <div class="card mb-4">
          
              <div class="card-header fw-bold text-center">
                {{$art->tipo}}
              </div>
              
              <div class="card-body">
  
                  <form action="guardaVenta/A" method="post" class="border" id="formVA{{$art->idArticulo}}">
                   @csrf         
                      <input type="number" name="idArt" value="{{$art->idArticulo}}" hidden>
                      <div class="mt-3">
                        <div><label class="form">Marca:</label></div>
                        <input class="form-control" type="text" disabled value="{{$art->marca}}">          
                      </div>
                      <div class="">
                          <div><label class="form">Descripción:</label></div>
                          <input class="form-control" type="text" disabled value="{{$art->descripcion}}">          
                      </div>
                      <div class="mb-3">
                          <div><label class="form">($)Precio:</label></div>
                          <input class="form-control" type="text" disabled value="{{$art->precio_venta}}" id="preV{{$art->idArticulo}}">
                      </div>
                      <div class="mb-3">
                        <div><label class="form">Cantidad:</label></div>
                        <input class="form-control" type="text" name="cantidad" value="{{old('cantidad')}}" id="cantidad{{$art->idArticulo}}" oninput="calcular({{$art->idArticulo}})">
                        <p class="text-danger">{{$errors->first('cantidad')}}</p>
                      </div>
                      <div class="mb-3">
                        <div><label class="form">Empleado:</label></div>
                        <input class="form-control" type="text" name="empleado" value="{{old('empleado')}}">
                        <p class="text-danger">{{$errors->first('empleado')}}</p>
                      </div>
            
                      <div class="mb-3">
                        <div><label class="form">($)Total:</label></div>
                        <input class="form-control" type="text" name="total" id="totalV{{$art->idArticulo}}" readonly="true" step="0.01">
                        <p class="text-danger">{{$errors->first('total')}}</p>
                      </div>
               </div>
               
              <div class="modal-footer">
                  <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cofirmar</button>
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="resetFormA({{$art->idArticulo}})">Cancelar</button>
                </form>
          </div>
  
      </div>
      </div>
      </div>
  </div>
</div>
@endforeach
<script type="text/javascript">
   
  function resetFormA(id){
    const form = document.getElementById("formVA"+id);
    form.reset();
  }
  
  function calcular(id){
      try{   
          let a = parseFloat(document.getElementById('cantidad'+id).value) || 0;
          let b = parseFloat(document.getElementById('preV'+id).value);

          document.getElementById('totalV'+id).value = a * b;

          return console.log(a*b);

      } catch (e){}
  }
</script>

@endsection