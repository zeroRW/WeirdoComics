@extends('Plantilla')
@section('codigo')

  <!-- Alert -->
  @if (session()->has('actualizacion'))
  <script> 
  Swal.fire(
    'Todo correcto!',
    'Articulo Actualizado',
    'success'
    )
    </script>
  @endif

  @if (session()->has('eliminacion'))
  <script> 
  Swal.fire(
    'Todo correcto!',
    'Articulo Eliminado',
    'success'
    )
    </script>
  @endif

<div class="container mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Consultar Articulos</div>

        <div class="mb-3 row">
            <label class="col-sm-1 col-form-label">Buscar:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Filtrar Artículo" name="buscar" style="width: 250px">
            </div>
        </div>
        <!-- Creacion de Tabla -->
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Marca</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">($) Compra</th>
                <th scope="col">($) venta</th>
                <th scope="col">Fecha</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              
                @foreach ($articulos as $arti)
                <tr>
                <td>{{$arti->tipo}}</td>
                <td>{{$arti->marca}}</td>
                <td>{{$arti->descripcion}}</td>
                <td>{{$arti->cantidad}}</td>
                <td>{{$arti->precio_compra}}</td>
                <td>{{$arti->precio_venta}}</td>
                <td>{{$arti->created_at}}</td>
                <td>
                  <a href="{{route('editArt',$arti->idArticulo)}}" class="btn btn-warning">Editar</a>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteArt{{$arti->idArticulo}}">
                    Eliminar
                  </button>
                </td>

                <!-- Modal -->
                <div class="modal fade" id="deleteArt{{$arti->idArticulo}}" tabindex="-1" aria-labelledby="deleteArt" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                      <h2 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el articulo?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">                                        
                          <p>Tipo: {{$arti->tipo}}</p>
                          <p>Marca: {{$arti->marca}}</p>  
                          <p>Descripcion: {{$arti->descripcion}}</p>
                          <p>Cantidad: {{$arti->cantidad}}</p>
                          <p>Precio Compra: {{$arti->precio_compra}}</p>
                          <p>Precio venta: {{$arti->precio_venta}}</p>
                          <p>Fecha: {{$arti->created_at}}</p>                                            
                      </div>
                      <form action="{{route('desArt',$arti->idArticulo)}}" method="POST">
                          @csrf
                          {!!method_field('DELETE')!!}
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Si, eliminalo</button>
                          </div>
                      </form>
                  </div>
                  </div>
              </div>
              </tr>
                @endforeach
              
        </table>
    </div>
</div>
    
@endsection