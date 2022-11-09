@extends('Plantilla')
@section('codigo')

@if (session() -> has('confirmacion'))

<script type="text/javascript">    

</script>
@endif

<div class="col-md-6 offset-md-3 mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Registrar Comics</div>
        <!-- Creacion del Formulario -->

        <form action="guardaComic" method="POST">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nombre del Comic" name="txtNombre">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Edición:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Edición del Comic" name="txtEdición">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Compañía:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Compañía de Comics" name="txtCompañía">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Cantidad" name="txtCantidad">
                </div>
                <label class="col-sm-3 col-form-label">($) Compra:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Precio compra" name="txtCompra">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">($) Venta:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Precio venta" name="txtVenta">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="Cantidad de Comics" name="txtFecha">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar Comic</button>
            </div>
        </form>
    </div>
</div>

@endsection