@extends('Plantilla')
@section('codigo')

 <!-- Alert -->
 @if (session()->has('Success'))
 <script> 
 Swal.fire(
  'Todo correcto!',
  'Articulo Actualizado',
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
              <tr>
            </tr>
        </table>
    </div>
</div>
    
@endsection