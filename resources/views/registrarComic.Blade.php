@extends('Plantilla')
@section('codigo')

@if (session() -> has('confirmacion'))

<script type="text/javascript">    
    Swal.fire(
        'Todo correcto',
        'Comic guardado!',
        'success'
    )
</script>
@endif

@if (session()->has('yes'))
{!!
    "<script> 
        Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Bienvenido',
        showConfirmButton: false,
        timer: 1200
        })
    </script>"
!!}
@endif

<div class="col-md-6 offset-md-3 mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Registrar Comics</div>
        <!-- Creacion del Formulario -->

        <form action="{{route('incert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nombre del Comic" name="txtNombre" value="{{old('txtNombre')}}">
                    <p class="text-danger">{{$errors->first('txtNombre')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Edición:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Edición del Comic" name="txtEdicion" value="{{old('txtEdicion')}}">
                    <p class="text-danger">{{$errors->first('txtEdicion')}}</p>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="imagen">Imagen de portada:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="imagen" value="">
                    <p class="text-danger">{{$errors->first('imagen')}}</p>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Compañía:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Compañía de Comics" name="txtCompañia" value="{{old('txtCompañia')}}">
                    <p class="text-danger">{{$errors->first('txtCompañia')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Cantidad" name="txtCantidad" value="{{old('txtCantidad')}}">
                    <p class="text-danger">{{$errors->first('txtCantidad')}}</p>
                </div>
                <label class="col-sm-3 col-form-label">($) Compra:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Precio compra" name="txtCompra" value="{{old('txtCompra')}}">
                    <p class="text-danger">{{$errors->first('txtCompra')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">($) Venta:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Precio venta" name="txtVenta" value="{{old('txtVenta')}}">
                    <p class="text-danger">{{$errors->first('txtVenta')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="Cantidad de Comics" name="txtFecha" value="{{old('txtFecha')}}">
                    <p class="text-danger">{{$errors->first('txtFecha')}}</p>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar Comic</button>
            </div>
        </form>
    </div>
</div>

@endsection