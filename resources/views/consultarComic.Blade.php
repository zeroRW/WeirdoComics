@extends('Plantilla')
@section('codigo')
    
@if (session() -> has('actualizacion'))

<script type="text/javascript">    
    Swal.fire(
            'Todo correcto!',
            'Comic Actualizado!',
            'success'
            )
</script>
@endif

@if (session()->has('eliminado'))
    {!!
    " <script> Swal.fire(
        'Alerta',
        'El comic ha sido eliminado correctamente',
        'warning'
      ) </script>"
    !!}
@endif

@include('modalEliminar')

<div class="container mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Consultar Comics</div>


        <form class="col-3 d-flex" role="search" action="{{route('categorias.consultarComic')}}" method="GET">
            <input class="form-control me-2" name="busqueda" type="search" placeholder="Search" aria-label="Search" value="">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
        
        <br>
            

        <!-- Creacion de Tabla -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edición</th>
                    <th scope="col">Compañía</th>
                <th scope="col">Cantidad</th>
                <th scope="col">($) Compra</th>
                <th scope="col">($) venta</th>
                <th scope="col">Fecha</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultaCo as $item)
            <tr>
                <th scope="row">{{$item->idComics}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->edicionComic}}</td>
                <td>{{$item->compania}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->precioCompra}}</td>
                <td>{{$item->precioVenta}}</td>
                <td>{{$item->fechaCo}}</td>
                <td>
                    <a href="{{route('editCom',$item->idComics)}}" class="btn btn-outline-success mb-3">Editar</a>
                    
                    <button type="button" class="btn btn-outline-danger mb-3" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$item->idComics}}">
                        Eliminar
                    </button>
                    
                </td>
            </tr>
            @endforeach
        </tbody> 
        </table>
    </div>
    </div>
</div>


@foreach ($consultaCo  as $item)
<!--MODAL ELIMINAR-->
<div class="modal fade" id="modalEliminar{{$item->idComics}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><strong>Eliminar Comic</strong></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
          
          <div class="alert alert-danger col-md-8 offset-md-2 text-center" role="alert">
              <strong>
                  ¿Esta seguro de eliminar este Comic? No se podra consultar nuevamente.   
              </strong>
          </div>
          
          <div class="conteiner col-md-8 offset-md-2">     
              
              <form action="{{route('destroyCom', $item->idComics)}}" method="POST">
                  
                  @csrf
                  {!!method_field('delete')!!}
                  
                  <div class="card text-left">
                      
                      <div class="card-header">
                          <h5 class="text-primary text-center"><strong>Nombre Comic: </strong>{{$item->nombre}}</h5>
                      </div>
                      
                      <div class="card-body">
                          <h5 class="card-title text-center"><strong>Fecha: </strong>{{$item->fechaCo}}</h5>
                      </div>
                      
                  </div>
              <br>
          </div>
          
          
      </div>
      
      <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Destruir!!!</button>
      </div>
  </form>
  </div>
</div>
</div>

@endforeach
@endsection