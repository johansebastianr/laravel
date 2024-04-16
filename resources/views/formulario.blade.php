<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Número Primo</title>
</head>
<body>
    <h2>Verificación de Número Primo</h2>

    <form action="{{ route('taller.store') }}" method="post">
        @csrf
        <label for="numero">Número:</label>
        <input type="number" name="numero" required>
        <br>
        <button type="submit">Verificar Número Primo</button>
    </form>

    @if(isset($numero) && isset($esPrimo))
        <p>El número {{ $numero }} {{ $esPrimo ? 'Es' : 'No es' }} primo</p>
    @endif

</body>
</html>
