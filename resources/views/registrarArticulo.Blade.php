@extends('Plantilla')
@section('codigo')

<div class="col-md-6 offset-md-3 mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Registrar Articulo</div>

        <!-- Creacion del Formulario -->
        <form action="" method="">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tipo:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Tipo de Articulo" name="txtTipo">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Marca:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Marca de Articulo" name="txtMarca">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Descripción:</label>
                <div class="col-sm-10">
                    <textarea name="txtDescripción" cols="70" rows="1"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">($) Compra:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Precio Compra" name="txtCompra">
                </div>
                <label class="col-sm-2 col-form-label">($) Venta:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Precio Venta" name="txtVenta">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="txtFecha">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar Articulo</button>
            </div>        
        </form>
    </div>
</div>

@endsection