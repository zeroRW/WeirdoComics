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
                    <tr>
                        @foreach ($Proveedor as $prov)
                          <td>{{$prov->empresa}}</td>  
                          <td>{{$prov->direccion}}</td>
                          <td>{{$prov->pais}}</td>  
                          <td>{{$prov->contacto}}</td>    
                          <td>{{$prov->no_fijo}}</td>  
                          <td>{{$prov->no_celu}}</td>  
                          <td>{{$prov->correo}}</td>  
                          <td>
                            <a href="{{route('editProv',$prov->idProveedor)}}" class="btn btn-warning">Editar</a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                          </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Cierre Tabla -->

    </div>
</div>
    
@endsection