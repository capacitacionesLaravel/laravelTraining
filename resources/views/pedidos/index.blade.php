<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('pedidos.crear')}}">Crear</a>
    <br>
    <table>
        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{$pedido->identificacion}}</td>
                <td>{{$pedido->usuario}}</td>
                <td>{{$pedido->precio}}</td>
                <td>{{$pedido->descripcion}}</td>
                <td>{{$pedido->fecha_entrega}}</td>
                <td>{{$pedido->tienda}}</td>
            </tr>
            
        @endforeach
    </table>
    
</body>
</html>