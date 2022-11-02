@extends('template')
@section('desarrollo')

<div class="col-md-4 offset-md-4 mt-5">
    <div class="card card-body">
        <center>
            <img src="https://cdn-icons-png.flaticon.com/512/626/626610.png" width="70" height="70" alt="">
        </center>
        <div class="display-6 mt-3 mb-5 text-center">Weirdo Comics - Editar Usuario</div>
        <!-- Creacion del Formulario -->

        <form action="" method="">
            <div class="mb-3">
                <label  class="form-label">Nombre</label>
                <input type="text" name="nombreUser" class="form-control" placeholder="Empezando por apellidos...">
            </div>
            <div class="mb-3">
                <label  class="form-label">Matricula:</label>
                <input type="number" name="matricula" class="form-control">
            </div>    
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                <select class="form-select" id="inputGroupSelect01">
                  <option selected>Selecciona un rol...</option>
                  <option value="1">Admin</option>
                  <option value="2">Super Admin</option>
                </select>
              </div> 

            <br>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
            </div>
            <br>
            <div class="btn-group">
                <a href="{{route('user')}}" class="btn btn-outline-secondary" style="color: black"> Regresar </a>
            </div>      
          </form>
    </div>
</div>   

@endsection