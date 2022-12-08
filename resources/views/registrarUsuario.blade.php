@extends('template')
@section('desarrollo')

    <!-- Alert -->
    @if (session()->has('Success'))
       <script> 
       Swal.fire(
        'Registro',
        'El usuario se registro',
        'success'
         )
         </script>
    @endif


<div class="col-md-4 offset-md-4 mt-5">
    <div class="bg-dark card card-body">
        <center>
            <img src="https://cdn-icons-png.flaticon.com/512/626/626610.png" width="70" height="70" alt="">
        </center>
        <div class="display-6 mt-3 mb-5 text-center" style="color: white">Weirdo Comics - Registrate</div>
        <!-- Creacion del Formulario -->

        <form action="RegisUsuario" method="POST">
          @csrf
            <div class="mb-3">
                <label  class="form-label" style="color: white">Nombre</label>
                <input type="text" name="nombreUser" class="form-control" placeholder="Empezando por apellidos..." value="{{old('nombreUser')}}">
                <p class="text-danger">{{$errors->first('nombreUser')}}</p> 
            </div>
            <div class="mb-3">
                <label  class="form-label" style="color: white">Matricula:</label>
                <input type="number" name="matricula" class="form-control" value="{{old('matricula')}}">
                <p class="text-danger">{{$errors->first('matricula')}}</p> 
            </div>    
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                <select class="form-select" id="inputGroupSelect01" name="roles">
                  <option selected>Selecciona un rol...</option>
                  <option value="Vendedor" {{old('roles') == 'Vendedor'? 'selected' :''}} >Vendedor</option>
                  <option value="Super Usuario" {{old('roles') == 'Super Usuario'? 'selected' :''}}>Super Usuario</option>
                </select>
            </div> 
              <p class="text-danger">{{$errors->first('roles')}}</p> 

            <br>
            <div class="d-grid">
                <button type="submit" class="btn btn-danger">Registrar Usuario</button>
            </div>
            <br>
            <div class="btn-group">
                <a href="registrarCom" class="btn btn-secondary" style="color: white"> Regresar </a>
            </div>      
          </form>
    </div>
</div>   

@endsection