<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Números Amigos</title>
</head>
<body>
    <h2>Números Amigos</h2>

    <form action="{{ route('taller.store-amigos') }}" method="post">
        @csrf
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required>
        <br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required>
        <br>
        <button type="submit">Verificar Números Amigos</button>
    </form>

    @if(isset($numero1) && isset($numero2))
        <p>Los números: {{ $numero1 }} y {{ $numero2 }} {{ $sonAmigos ? 'si' : 'no' }}  son amigos </p>
    @endif

</body>
</html>
