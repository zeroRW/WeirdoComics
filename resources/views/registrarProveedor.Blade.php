@extends('Plantilla')
@section('codigo')

@if (session() -> has('confirmacion'))

<script type="text/javascript">    

</script>
@endif

<div class="col-md-6 offset-md-3 mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Registrar Proveedor</div>

        <!-- Creacion del Formulario -->
        <form action="guardaProv" method="POST">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Empresa:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Empresa de Proveedor" name="txtEmpresa">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Dirección:</label>
                <div class="col-sm-10">
                    <textarea name="txtDirección" cols="70" rows="1"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">País:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="País de empresa" name="txtPais">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Contacto:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Contacto de empresa" name="txtContacto">
                </div>
                <label class="col-sm-2 col-form-label">No. Fijo:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Numero de empresa" name="txtNumero">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">No. Celular:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Celular de proveedor" name="txtCelular">
                </div>
                <label class="col-sm-2 col-form-label">Correo:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Correo de empresa" name="txtCorreo">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar Proveedor</button>
            </div>        
        </form>
    </div>
</div>
    
@endsection