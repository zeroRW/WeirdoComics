<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>
</head>
<body>

    <H1>Test PDF</H1>
    
    <div>
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
                @foreach ($pedido as $data)
                <tr class="">               
                    <td>{{$data->empresa}}</td>
                    <td>{{$data->nombre}}</td>
                    <td>{{$data->cantidad}}</td>

                    <td class="text-center"><a href="#"><button>PDF</button></a><a href="#"><button>Enviar a correo</button></a></td>
                </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>