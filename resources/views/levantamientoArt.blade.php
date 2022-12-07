@extends('plantilla')


@section('codigo')
<div class="display-6 mt-3 mb-3 text-center" style="color: white"><strong>PEDIDOS DE ARTICULOS</strong></div>

<div class="container mt-3">

    <!-- Alert -->
    @if (session()->has('SCCS'))
       <script> 
       Swal.fire(
        'Todo correcto!',
        'Pedido Guardado',
        'success'
         )
         </script>
    @endif


<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
        <!--Formulario -->
        <form action="guardarPed" method="POST">
        @csrf
            <div class="mb-2 row">
                <label class="col-sm-3 col-form-label">Proveedor:</label>
                <div class="col-sm-8">
                    <select class="form-select form-select" name="slcProveedor">
                        <option selected disabled>Selecciona un proveedor</option>
                        @foreach ($prov as $c)
                            <option value="{{$c->idProveedor}}">{{$c->empresa}}</option>
                        @endforeach
                    </select>
                    <p class="text-danger">{{$errors->first('slcProveedor')}}</p> 
                </div>                
            </div>    
            <div class="mb-2 row">
                <label class="col-sm-3 col-form-label">Producto:</label>
                <div class="col-sm-8">
                    <select class="form-select form-select" name="slcProducto">
                        <option selected disabled>Selecciona un producto</option>
                        @foreach ($articulos as $c2)
                            <option value="{{$c2->idArticulo}}">{{$c2->tipo}} - {{$c2->marca}}</option>
                        @endforeach

                    </select>
                    <p class="text-danger">{{$errors->first('slcProducto')}}</p> 
                </div>   
            </div>      
            <div class="mb-2 row">
                <label class="col-sm-3 col-form-label">No.Articulos:</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" placeholder="Cantidad" name="nmCantidad" value="{{old('nmCantidad')}}">
                    <p class="text-danger">{{$errors->first('nmCantidad')}}</p> 
                </div>               
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>        
        </form>
        </div>
      </div>
    </div>
    <!--Tabla -->
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Opciones</th>               
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center"><a href="#"><button>PDF</button></a><a href="#"><button>Enviar a correo</button></a></td>
                        </tr>
                        <tr class="">
    
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection