@extends('Plantilla')

@section('codigo')

<div class="col-md-6 offset-md-3 mt-5">
    <div class="card card-body">
        <div class="display-6 mt-3 mb-3 text-center">Editar Comics</div>
        <!-- Creacion del Formulario -->

        <form action="{{route('updateCom', $consultaCoEdi->idComics)}}" method="POST">
            @csrf
            {!!method_field('PUT')!!}
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nombre del Comic" name="txtNombre" value="{{$consultaCoEdi->nombre}}">
                    <p class="text-danger">{{$errors->first('txtNombre')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Edición:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Edición del Comic" name="txtEdicion" value="{{$consultaCoEdi->edicionComic}}">
                    <p class="text-danger">{{$errors->first('txtEdicion')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Compañía:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Compañía de Comics" name="txtCompañia" value="{{$consultaCoEdi->compania}}">
                    <p class="text-danger">{{$errors->first('txtCompañia')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Cantidad" name="txtCantidad" value="{{$consultaCoEdi->cantidad}}">
                    <p class="text-danger">{{$errors->first('txtCantidad')}}</p>
                </div>
                <label class="col-sm-3 col-form-label">($) Compra:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Precio compra" name="txtCompra" value="{{$consultaCoEdi->precioCompra}}">
                    <p class="text-danger">{{$errors->first('txtCompra')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">($) Venta:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Precio venta" name="txtVenta" value="{{$consultaCoEdi->precioVenta}}">
                    <p class="text-danger">{{$errors->first('txtVenta')}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="Cantidad de Comics" name="txtFecha" value="{{$consultaCoEdi->fechaCo}}">
                    <p class="text-danger">{{$errors->first('txtFecha')}}</p>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Editar Comic</button>
            </div>
        </form>
    </div>
</div>
    
@endsection