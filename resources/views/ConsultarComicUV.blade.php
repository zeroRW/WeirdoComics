@extends('plantillaVendedor')
@section('usuarioVenta')
    
<div class="container mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Consultar Comics</div>

        <div class="mb-3 row">
            <label class="col-sm-1 col-form-label">Buscar:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Filtrar Comic" name="buscar" style="width: 250px">
            </div>
        </div>
        <!-- Creacion de Tabla -->
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Edición</th>
                <th scope="col">Compañía</th>
                <th scope="col">Cantidad</th>
                <th scope="col">($) Compra</th>
                <th scope="col">($) venta</th>
                <th scope="col">Fecha</th>
              </tr>
            </thead>
            <tbody>
              <tr>
            </tr>
        </table>
    </div>
</div>

@endsection