<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>
</head>
<body>
    <H1>Weirdo Comics</H1>
    <H2>Pedido de comic</H2>


    <div>
        <div>
            <label><strong>Proveedor: </strong>{{$pedido->empresa}}</label>
            <p>_______________________________________________</p>
        </div>
        <div>
            <label><strong>Producto: </strong>{{$pedido->nombre}}</label>      
            <div>

               <label>Detalle Producto</label> 
               <br>
               <label>Edición: {{$detalleC->edicionComic}}</label>
               <br>
               <label>Compañia: {{$detalleC->compania}}</label>
               <br>
               <label>Precio Compra: {{$detalleC->precioCompra}}</label>
            </div>
            
            <p>_______________________________________________</p>
        </div>
       
        <div>
            <label> <strong> Cantidad: </strong>{{$pedido->cantidad}}</label>
            <br>
               <label>Total: {{$total}}</label>
               
            <p>_______________________________________________</p>
        </div>
    </div>
    
</body>
</html>