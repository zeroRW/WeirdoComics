<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>
</head>
<body>

    <H1>Pedido de comic</H1>
    
    <div>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>              
                </tr>
            </thead>
            <tbody>
                <tr class="">               
                    <td>{{$pedido->empresa}}</td>
                    <td>{{$pedido->nombre}}</td>
                    <td>{{$pedido->cantidad}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>