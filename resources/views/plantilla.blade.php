<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>WEIRDO COMICS</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/626/626610.png">
    <!--SweatAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

</head>
<body>

    <!--NAVBAR-->

    <nav class="navbar bg-light">
        <header class="header">
            <div class="container">
                <div class="btn-menu">
                    <label style="color: black " for="btn-menu">☰</label>
                </div>
                <a class="navbar-brand" href="#">
                    <div class="logo">
                        <img class="izq" src="https://cdn-icons-png.flaticon.com/512/626/626610.png" width="70" height="70" alt="">
                        <aside>
                            <h1 style="color: black">Weirdo Comics</h1>
                        </aside>
                    </div>
                </a>
            </div>
        </header>
        <form class="d-flex">
            <a href="{{route ('CaVen')}}">
                <img class="car" src="{{asset('img/carrito.png')}}" width="50" height="50" alt="carrito">
            </a>
        </form>
      </nav>

      <div class="capa"></div>
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="{{route ('comic')}}"><img src="{{asset('img/iconoRegisComic.png')}}" width="40" height="40" alt="">  Registro Comics</a>
                    <a href="{{route ('articulo')}}"><img src="{{asset('img/iconoArticulos.png')}}" width="40" height="40" alt=""> Registrar Articulos</a>
                    <a href="{{route ('consuComic')}}"><img src="{{asset('img/iconoConComic.png')}}" width="40" height="40" alt=""> Consulta Comics</a>
                    <a href="{{route ('consuArt')}}"><img src="{{asset('img/iconoConArt.png')}}" width="40" height="40" alt=""> Consulta Articulos</a>
                    <a href="{{route ('proveedor')}}"><img src="{{asset('img/iconoPro.png')}}" width="40" height="40" alt=""> Proveedores</a>
                    <a href="{{route ('consuProv')}}"><img src="{{asset('img/iconoConPro.png')}}" width="40" height="40" alt=""> Consulta Proveedores</a>
                    <a href="{{route ('levanPed')}}"><img src="{{asset('img/iconoPedidos.png')}}" width="40" height="40" alt=""> Pedidos</a>
                    <a href="{{route ('Vventas')}}"><img src="{{asset('img/iconoVeve.png')}}" width="40" height="40" alt=""> Ventas</a>
                    <a class="fw-bold" href="/">LOG OUT</a>
                </nav>
                
                <label for="btn-menu">✖️</label>
            </div>
        </div>

    @yield('codigo')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>