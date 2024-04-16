<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Números Primos</title>
</head>
<body>
    <h1>Números Primos</h1>

    <form action="{{ route('calcular.primo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Calcular Primo</button>
    </form>

    @if(isset($resultado))
        <p>El número {{ $numero }} {{ $resultado ? 'es' : 'no es' }} primo.</p>
    @endif
</body>
</html>
