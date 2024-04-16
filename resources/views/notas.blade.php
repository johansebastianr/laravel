<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Promedio</title>
</head>
<body>
    <h2>Cálculo de Promedio</h2>

    <form action="{{ route('taller.store-notas') }}" method="post">
        @csrf
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" step="0.1" min="0" max="10" required>
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" step="0.1" min="0" max="10" required>
        <br>
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" step="0.1" min="0" max="10" required>
        <br>
        <button type="submit">Calcular Promedio</button>
    </form>

    @if(isset($promedio))
    <p>El Promedio es {{ $promedio }}</p>
    @endif

</body>
</html>
