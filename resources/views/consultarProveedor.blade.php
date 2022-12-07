@extends('plantilla')
@section('codigo')

@if (session() -> has('actualizacion'))

<script type="text/javascript">    
    Swal.fire(
            'Todo correcto!',
            'Proveedor Actualizado!',
            'success'
            )
</script>
@endif

@if (session() -> has('eliminacion'))

<script type="text/javascript">    
    Swal.fire(
            'Todo correcto!',
            'Proveedor Eliminado!',
            'success'
            )
</script>
@endif

<div class="container mt-5">
    <div class="card card-body" >
        <div class="display-6 mt-3 mb-3 text-center">Consultar Proveedores</div>

        <div class="mb-3 row">
            <label class="col-sm-1 col-form-label">Buscar:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Filtrar Proveedor" name="buscar" style="width: 250px">
            </div>
        </div>

        <!-- Tabla -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Empresa</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">País</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">No. Fijo</th>
                        <th scope="col">No. Celular</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($Proveedor as $prov)
                        <tr>
                          <td>{{$prov->empresa}}</td>  
                          <td>{{$prov->direccion}}</td>
                          <td>{{$prov->pais}}</td>  
                          <td>{{$prov->contacto}}</td>    
                          <td>{{$prov->no_fijo}}</td>  
                          <td>{{$prov->no_celu}}</td>  
                          <td>{{$prov->correo}}</td>  
                          <td>
                            <a href="{{route('editProv',$prov->idProveedor)}}" class="btn btn-warning">Editar</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteProv{{$prov->idProveedor}}">
                                Eliminar
                              </button>
                          </td>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteProv{{$prov->idProveedor}}" tabindex="-1" aria-labelledby="deleteProv" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el proveedor?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">                                        
                                            <p>Empresa: {{$prov->empresa}}</p>
                                            <p>Direccion: {{$prov->direccion}}</p>  
                                            <p>País: {{$prov->pais}}</p>
                                            <p>Contacto: {{$prov->contacto}}</p>
                                            <p>No. Fijo: {{$prov->no_fijo}}</p>
                                            <p>No. celular: {{$prov->no_celu}}</p>
                                            <p>Correo: {{$prov->correo}}</p>                                            
                                        </div>
                                        <form action="{{route('desProv',$prov->idProveedor)}}" method="POST">
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
                </tbody>
            </table>
        </div>
        <!-- Cierre Tabla -->
    </div>
</div>
    
@endsection