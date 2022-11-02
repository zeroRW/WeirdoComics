@extends('template')
@section('desarrollo')
    
<div class="col-md-4 offset-md-4 mt-5">
    <div class="card card-body">
        <center>
            <img src="https://cdn-icons-png.flaticon.com/512/626/626610.png" width="70" height="70" alt="">
        </center>
        <div class="display-6 mt-3 mb-5 text-left">Weirdo Comics - Registrate</div>
        <!-- Creacion del Formulario -->

        <form action="/crearusu" method="post">
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
              <div class="input-group mb-3" role="search">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-success" type="button" id="button-addon2">Buscar</button>
              </div>

              <!-- TABLA DE REGISTRO-->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                </tbody>
              </table>

            <br>
            <div class="d-grid">
                <button type="submit" class="btn btn-danger">Iniciar Sesion</button>
            </div>
            <br>
            <div class="btn-group">
                <a href="/" class="btn btn-outline-primary" style="color: black"> Regresar </a>
            </div>      
          </form>
    </div>
</div>   

@endsection