<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/626/626610.png">
    <title>WEIRDO COMICS</title>
</head>
<body>
    
    <!--NAVBAR-->

    <nav class="navbar bg-dark">
        <header class="header">
            <div class="container">
                <div class="btn-menu">
                    <label style="color: white " for="btn-menu">☰</label>
                </div>
                <a class="navbar-brand" href="#">
                    <div class="logo">
                        <img class="izq" src="https://cdn-icons-png.flaticon.com/512/626/626610.png" width="70" height="70" alt="">
                        <aside>
                            <h1 style="color: black">Weirdo Comics - Selling</h1>
                        </aside>
                    </div>
                </a>
            </div>
        </header>
        <form class="d-flex">
            <a href="">
                <img class="car" src="{{asset('img/carrito2.png')}}" width="50" height="50" alt="carrito">
            </a>
        </form>
      </nav>

      <div class="capa"></div>
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a  href="{{route ('homeInicio')}}"><img class="icono" src="{{asset('img/iconoInicio.png')}}" width="50" height="50" alt=""> Inicio</a>
                    <a  href="{{route ('CCUV')}}"><img class="icono" src="{{asset('img/iconoRegisComic.png')}}" width="50" height="50" alt=""> Consulta Comics</a>
                    <a  href="{{route ('CAUV')}}"><img class="icono" src="{{asset('img/iconoArticulos.png')}}" width="50" height="50" alt=""> Consulta Articulos</a>
                    <a  href="{{route ('VUV')}}"><img class="icono" src="{{asset('img/iconoVentas.png')}}" width="50" height="50" alt=""> Ventas</a>
                    <a class="fw-bold" href="/">LOG OUT</a>
                </nav>
                
                <label for="btn-menu">✖️</label>
            </div>
        </div>

    @yield('usuarioVenta')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="{{asset('estilo.js')}}"></script>
</body>
</html>