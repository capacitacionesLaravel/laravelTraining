<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
</head>
<body>
    <form action="{{ isset($pedido) ? route('pedidos.editar', $pedido->id): route('pedidos.crear') }}" method="POST">
        {{-- parametro obliagtorio csrf --}}
        @csrf
        @if (isset($pedido))
        <input type="hidden" name="id" value="{{ $pedido->id }}">
        @endif

            identificacion
            <input type="number" name="identificacion" value="{{ isset($pedido) ?$pedido->identificacion:'' }}">
            <br>
            usuario
            <input type="text" name="usuario" value="{{ isset($pedido) ?$pedido->usuario:'' }}" >
            <br>
            <label for="">Precio <input type="number" name="precio" value="{{ isset($pedido) ?$pedido->precio:'' }}"></label>
            <br>
            <label for="">descripcion<input type="text" name="descripcion"value="{{ isset($pedido) ?$pedido->descripcion:'' }}"></label>
            <br>
            <label for="">fecha entrega <input type="date" name="fecha_entrega" value="{{ isset($pedido) ?$pedido->fecha_entrega:'' }}"></label>
            <br>
            <label for=""> tienda
                <select name="tienda" id="" value="{{ isset($pedido) ?$pedido->tienda:'' }}">
                    <option value="D1">D1</option>
                    <option value="Ara">ARA</option>
                    <option value="Exito">Exito</option>
                </select>
            </label>
            <br>
            <button type="submit">Guardar</button>
            <a href="{{ route('pedidos.index') }}">Regresar</a>
    </form>

</body>
</html>
