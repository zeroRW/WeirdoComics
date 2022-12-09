@extends('Plantilla')
@section('codigo')

<div class="col-md-6 offset-md-3 mt-5">

    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Editar Articulo</div>

        <!-- Creacion del Formulario -->
        <form action="{{route('updArt',$articulo->idArticulo)}}" method="POST">
            @csrf
            {!!method_field('PUT')!!}

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tipo:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Tipo de Articulo" name="txtTipo" value="{{$articulo->tipo}}">
                    <p class="text-danger">{{$errors->first('txtTipo')}}</p>         
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Marca:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Marca de Articulo" name="txtMarca" value="{{$articulo->marca}}">
                    <p class="text-danger">{{$errors->first('txtMarca')}}</p> 
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Descripción:</label>
                <div class="col-sm-10">
                    <textarea name="txtDescripcion" cols="70" rows="1" class="form-control">{{$articulo->descripcion}}</textarea>
                    <p class="text-danger">{{$errors->first('txtDescripcion')}}</p> 
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Cantidad" name="txtCantidad" value="{{$articulo->cantidad}}">
                    <p class="text-danger">{{$errors->first('txtCantidad')}}</p>
                </div>
                <label class="col-sm-2 col-form-label">($) Compra:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Precio Compra" name="txtCompra" value="{{$articulo->precio_compra}}" id="compra" oninput="calcular()" step="0.01">
                    <p class="text-danger">{{$errors->first('txtMarca')}}</p>
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
                    <input type="text" class="form-control" readonly="true" name="txtVenta" value="{{$articulo->precio_venta}}" id="venta" step="0.01">
                    <p class="text-danger">{{$errors->first('txtVenta')}}</p>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Actualizar Articulo</button>
            </div>        
        </form>
    </div>
</div>

@endsection