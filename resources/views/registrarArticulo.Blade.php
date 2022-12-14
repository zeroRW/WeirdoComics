@extends('Plantilla')
@section('codigo')


    <!-- Alert -->
    @if (session() -> has('Success'))

    <script type="text/javascript">    
        Swal.fire(
            'Todo correcto',
            'Articulo guardado!',
            'success'
        )
    </script>
    @endif

<div class="col-md-6 offset-md-3 mt-5">

    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Registrar Articulo</div>

        <!-- Creacion del Formulario -->
        <form action="guardarArt" method="post">
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
                <label class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-10">
                    <textarea name="txtDescripcion" cols="60" rows="1" class="form-control">{{old('txtDescripcion')}}</textarea>
                    <p class="text-danger">{{$errors->first('txtDescripcion')}}</p>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" placeholder="Cantidad" name="txtCantidad" value="{{old('txtCantidad')}}">
                    <p class="text-danger">{{$errors->first('txtCantidad')}}</p>
                </div>
                <label class="col-sm-2 col-form-label">($) Compra:</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" placeholder="Precio Compra" name="txtCompra" value="{{old('txtCompra')}}" id="compra" oninput="calcular()" step="0.01">
                    <p class="text-danger">{{$errors->first('txtCompra')}}</p>
                </div>

                <script type="text/javascript">
                    function calcular(){
                        try{
                            var a = parseFloat(document.getElementById('compra').value) || 0;
                            document.getElementById('venta').value = a + a*(40/100) ;
                        } catch (e){}
                    }
                </script>

                <label class="col-sm-2 col-form-label">($) Venta:</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="txtVenta" id="venta" readonly="true" step="0.01" value="{{old('txtVenta')}}">
                    <p class="text-danger">{{$errors->first('txtVenta')}}</p>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar Articulo</button>
            </div>        
        </form>
    </div>
</div>

@endsection