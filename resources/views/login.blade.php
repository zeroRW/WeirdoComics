@extends('template')
@section('desarrollo')


<div class="container w-50 mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <!--md mediano, lg largo, xl extralargo-->
      <div class="bg-dark p-4 rounded">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 w-100 border-0" id="imagen">
            <center>
                <img src="https://cdn-icons-png.flaticon.com/512/626/626610.png" width="100" height="100" alt="">
            </center>
            <br>
            <h2 class="fw-bold text-center mb-3 " style="color: white">Weirdo Comics</h2>
          </div>
  
          <!--LOGIN-->
  
          <form class="form-signin" action="login" method="POST">
            @csrf
              <div class="mb-4">
                <label for="text" style="color: white" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" value="{{old('usuario')}}">
                <p class="text-danger"><strong>{{$errors->first('usuario')}}</strong></p> 
              </div>
              <div class="mb-4">
                <label for="password" style="color: white" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}">
                <p class="text-danger"><strong>{{$errors->first('password')}}</strong></p> 
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
              </div>
              
          </form>
  
      </div>
    </div>
</div>


@endsection