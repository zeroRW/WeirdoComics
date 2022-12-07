@extends('plantilla')
@section('codigo')
    
<div class="col-md-6 offset-md-3 mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Editar Proveedor</div>

        <!-- Creacion del Formulario -->
        <form action="{{route('GEProv',$Proveedor->idProveedor)}}" method="POST">

            @csrf
            {!!method_field('PUT')!!}

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Empresa:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Empresa de Proveedor" name="txtEmpresa" value="{{$Proveedor->empresa}}">
                    <p class="text-danger">{{$errors->first('txtEmpresa')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Dirección:</label>
                <div class="col-sm-10">
                    <textarea name="txtDireccion" cols="70" rows="1" class="form-control">{{$Proveedor->direccion}}</textarea>
                    <p class="text-danger">{{$errors->first('txtDireccion')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">País:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="País de empresa" name="txtPais" value="{{$Proveedor->pais}}">
                    <p class="text-danger">{{$errors->first('txtPais')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Contacto:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Contacto de empresa" name="txtContacto" value="{{$Proveedor->contacto}}">
                    <p class="text-danger">{{$errors->first('txtContacto')}}</p>
                </div>
                <label class="col-sm-2 col-form-label">No. Fijo:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Numero de empresa" name="txtNumero" value="{{$Proveedor->no_fijo}}">
                    <p class="text-danger">{{$errors->first('txtNumero')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">No. Celular:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Celular de proveedor" name="txtCelular" value="{{$Proveedor->no_celu}}">
                    <p class="text-danger">{{$errors->first('txtCelular')}}</p>
                </div>
                <label class="col-sm-2 col-form-label">Correo:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Correo de empresa" name="txtCorreo" value="{{$Proveedor->correo}}">
                    <p class="text-danger">{{$errors->first('txtCorreo')}}</p>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Editar Proveedor</button>
            </div>        
        </form>
    </div>
</div>
@endsection