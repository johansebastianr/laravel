<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ecuación Cuadrática</title>
</head>
<body>
    <h2>Formula Cuadrática</h2>

    <form action="{{ route('cuadratica.store') }}" method="post">
        @csrf
        <label for="a">Coeficiente a:</label>
        <input type="number" name="a" required>
        <br>
        <label for="b">Coeficiente b:</label>
        <input type="number" name="b" required>
        <br>
        <label for="c">Coeficiente c:</label>
        <input type="number" name="c" required>
        <br>
        <button type="submit">Calcular Raíces</button>
    </form>
    <h2>Resultado de Ecuación Cuadrática</h2>

@if(isset($discriminante))
    <p>Discriminante: {{ $discriminante }}</p>
    @if($discriminante >= 0)
        <p>Raíz 1: {{ $raiz1 }}</p>
        <p>Raíz 2: {{ $raiz2 }}</p>
    @else
        <p>No hay raíces reales.</p>
    @endif
@endif
</body>
</html>
