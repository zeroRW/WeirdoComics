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
    <div class="display-6 mb-3 text-center" style="color: white"><strong>VENTAS</strong></div>
  </div>
</div>
<div class="container mt-2">
  <div class="card card-body">

<form action="filtro2" method="post">
  @csrf

  <div class="mb-3 row">
      <label class="col-sm-1 col-form-label">Buscar:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" placeholder="Nombre completo del producto" name="Filtro">
      </div>
      <button type="submit" class="col-sm-1 btn btn-dark me-3">Filtrar</button>
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

    <tr class="">                     
        <td>{{$busqueda->tipo}}</td>
        <td>{{$busqueda->cantidad}}</td>
        <td>${{$busqueda->precio_venta}}</td>
        <td class="text-center"><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalAgregar{{$busqueda->idArticulo}}">Vender</button></td>
    </tr>
   
  </tbody>
</table>
</div>
</div>
 
 <!-- Modal -->

 <div class="modal fade" id="modalAgregar{{$busqueda->idArticulo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAgregar" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Realizar Venta</h5>
      </div>
      <div class="modal-body">
  
          <div class="card mb-4">
          
              <div class="card-header fw-bold text-center">
                {{$busqueda->tipo}}
              </div>
              
              <div class="card-body">
  
                  <form action="guardaVenta/A" method="post" class="border" id="formVA{{$busqueda->idArticulo}}">
                   @csrf         
                      <input type="number" name="idArt" value="{{$busqueda->idArticulo}}" hidden>
                      <div class="mt-3">
                        <div><label class="form">Marca:</label></div>
                        <input class="form-control" type="text" disabled value="{{$busqueda->marca}}">          
                      </div>
                      <div class="">
                          <div><label class="form">Descripción:</label></div>
                          <input class="form-control" type="text" disabled value="{{$busqueda->descripcion}}">          
                      </div>
                      <div class="mb-3">
                          <div><label class="form">($)Precio:</label></div>
                          <input class="form-control" type="text" disabled value="{{$busqueda->precio_venta}}" id="preV{{$busqueda->idArticulo}}">
                      </div>
                      <div class="mb-3">
                        <div><label class="form">Cantidad:</label></div>
                        <input class="form-control" type="text" name="cantidad" value="{{old('cantidad')}}" id="cantidad{{$busqueda->idArticulo}}" oninput="calcular({{$busqueda->idArticulo}})">
                        <p class="text-danger">{{$errors->first('cantidad')}}</p>
                      </div>
                      <div class="mb-3">
                        <div><label class="form">Empleado:</label></div>
                        <input class="form-control" type="text" name="empleado" value="{{old('empleado')}}">
                        <p class="text-danger">{{$errors->first('empleado')}}</p>
                      </div>
            
                      <div class="mb-3">
                        <div><label class="form">($)Total:</label></div>
                        <input class="form-control" type="text" name="total" id="totalV{{$busqueda->idArticulo}}" readonly="true" step="0.01">
                        <p class="text-danger">{{$errors->first('total')}}</p>
                      </div>
               </div>
               
              <div class="modal-footer">
                  <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cofirmar</button>
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="resetFormA({{$busqueda->idArticulo}})">Cancelar</button>
                </form>
          </div>
  
      </div>
      </div>
      </div>
  </div>
</div>

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