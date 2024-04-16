<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Promedio</title>
</head>
<body>
    <h1>Bike</h1>
    <form action="{{route('bike.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
            Ingrese el nombre:
            <br>
            <input type="text" name="namebike">
        </label>
        <br>
        <label>
            Ingrese el modelo: 
            <br>
            <input type="text" name="descr">
        </label>
        <br><br><br>
       
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>