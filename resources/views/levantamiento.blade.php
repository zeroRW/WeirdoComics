@extends('plantilla')
@section('codigo')
<div class="display-6 mt-3 mb-3 text-center"><strong>LEVANTAMIENTO DE PEDIDOS</strong></div>

<div class="container mt-3">

    <!-- Alert -->
    @if (session()->has('Success'))
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
                <label class="col-sm-3 col-form-label">Empresa:</label>
                <div class="col-sm-8">
                    <select class="form-select form-select" name="slcEmpresa" id="slcE">
                        <option selected disabled>Selecciona...</option>
                        <option value="Ejemp1" {{old('slcEmpresa') == 'Ejemp1' ? 'selected' :''}}>Ejemp1</option>
                        <option value="Ejemp2" {{old('slcEmpresa') == 'Ejemp2'? 'selected' :''}}>Ejemp2</option>
                    </select>
                    <p class="text-danger">{{$errors->first('slcEmpresa')}}</p> 
                </div>   
            </div>
            <div class="mb-2 row">
                <label class="col-sm-3 col-form-label">Proveedor:</label>
                <div class="col-sm-8">
                    <select class="form-select form-select" name="slcProveedor">
                        <option selected disabled>Selecciona...</option>
                        <option value="Ejemp1" {{old('slcProveedor') == 'Ejemp1' ? 'selected' :''}}>Ejemp1</option>
                        <option value="Ejemp2" {{old('slcProveedor') == 'Ejemp2'? 'selected' :''}}>Ejemp2</option>
                    </select>
                    <p class="text-danger">{{$errors->first('slcProveedor')}}</p> 
                </div>                
            </div>
            <div class="mb-2 row">
                <label class="col-sm-3 col-form-label">Articulo:</label>
                <div class="col-sm-8">
                    <select class="form-select form-select" name="slcArticulo">
                        <option selected disabled>Selecciona...</option>
                        <option value="Ejemp1" {{old('slcArticulo') == 'Ejemp1' ? 'selected' :''}}>Ejemp1</option>
                        <option value="Ejemp2" {{old('slcArticulo') == 'Ejemp2'? 'selected' :''}}>Ejemp2</option>
                    </select>
                    <p class="text-danger">{{$errors->first('slcArticulo')}}</p>
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
                            <th scope="col">Empresa</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Articulo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"><button>PDF</button></a><a href="#"><button>Enviar a correo</button></a></td>
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