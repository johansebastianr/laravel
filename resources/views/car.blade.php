<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Promedio</title>
</head>
<body>
    <h1>Car</h1>
    <form action="{{route('car.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
            Carro
            <br>
            <input type="text" name="namecar">
        </label>
        <br>
        <label>
            Ingrese el modelo: 
            <br>
            <input type="text" name="model">
        </label>
        <br><br><br>
       
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>