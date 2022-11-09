@extends('Plantilla')
@section('codigo')

<div class="col-md-6 offset-md-3 mt-5">

    <!-- Alert -->
    @if (session()->has('Success'))
       <script> 
       Swal.fire(
        'Todo correcto!',
        'Articulo Guardado',
        'success'
         )
         </script>
    @endif

    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Registrar Articulo</div>

        <!-- Creacion del Formulario -->
        <form action="guardarArt" method="POST">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tipo:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Tipo de Articulo" name="txtTipo" value="{{old('txtTipo')}}">
                    <p class="text-danger">{{$errors->first('txtTipo')}}</p>         
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Marca:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Marca de Articulo" name="txtMarca" value="{{old('txtMarca')}}">
                    <p class="text-danger">{{$errors->first('txtMarca')}}</p> 
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Descripción:</label>
                <div class="col-sm-10">
                    <textarea name="txtDescripcion" cols="70" rows="1" value="{{old('txtDescripcion')}}"></textarea>
                    <p class="text-danger">{{$errors->first('txtDescripcion')}}</p> 
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">($) Compra:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Precio Compra" name="txtCompra" value="{{old('txtCompra')}}">
                    <p class="text-danger">{{$errors->first('txtMarca')}}</p>
                </div>
                <label class="col-sm-2 col-form-label">($) Venta:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Precio Venta" name="txtVenta" value="{{old('txtVenta')}}">
                    <p class="text-danger">{{$errors->first('txtVenta')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="txtFecha" value="{{old('txtFecha')}}">
                    <p class="text-danger">{{$errors->first('txtFecha')}}</p>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar Articulo</button>
            </div>        
        </form>
    </div>
</div>

@endsection