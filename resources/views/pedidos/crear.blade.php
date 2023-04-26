<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
</head>
<body>
    <form action="{{route('pedidos.guardar')}}" method="POST">
        {{-- parametro obliagtorio csrf --}}
        @csrf 
            identificacion 
            <input type="number" name="identificacion">
            <br>
            usuario
            <input type="text" name="usuario">
            <br>
            <label for="">Precio <input type="number" name="precio"></label>
            <br>
            <label for="">descripcion<input type="text" name="descripcion"></label>
            <br>
            <label for="">fecha entrega <input type="date" name="fecha_entrega"></label>
            <br>
            <label for=""> tienda
                <select name="tienda" id="">
                    <option value="D1">D1</option>
                    <option value="Ara">ARA</option>
                    <option value="Exito">Exito</option>
                </select>
            </label>
            <br>
            <button type="submit">Guardar</button>
    </form>
    
</body>
</html>