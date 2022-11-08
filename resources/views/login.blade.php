@extends('template')
@section('desarrollo')

<div class="container w-50 mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <!--md mediano, lg largo, xl extralargo-->
      <div class="bg-white p-4 rounded">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 w-100 border-0" id="imagen">
            <center>
                <img src="https://cdn-icons-png.flaticon.com/512/626/626610.png" width="100" height="100" alt="">
            </center>
            <br>
            <h2 class="fw-bold text-center mb-3 ">Weirdo Comics</h2>
          </div>
  
          <!--LOGIN-->
  
          <form class="form-signin" action="" method="">
              <div class="mb-4">
                <label for="text" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario">
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-outline-primary">Registrar Usuario</button>
              </div>
              <br>
              <div class="my-3">
                <span>¿No tienes cuenta? <a href="{{route('user')}}" class="nav-link " ><font color="blue">Resgistrate</font></a></span>
              </div>
          </form>
  
      </div>
    </div>
</div>


@endsection