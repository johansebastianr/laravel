<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos enviados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .pdf-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }

        iframe {
            width: 100%;
            height: 500px;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Su pqrsds fue enviado con éxito</h1>

        <ul>
            @foreach($clientes->zip($pqrsds) as [$cliente, $pqrsd])
                @if($cliente && $pqrsd)
                    <li>
                        <strong>Tipo:</strong> {{ $pqrsd->tipoPqrsd ?? '' }}<br>
                        <strong>Correo:</strong> {{ $pqrsd->correoElectronico ?? '' }}<br>
                        <strong>Nombre:</strong> {{ $cliente->primerNombre ?? '' }}<br>
                        <strong>Apellido:</strong> {{ $cliente->primerApellido ?? '' }}<br>
                        <strong>Tipo de documento:</strong> {{ $cliente->tipoDocumento ?? '' }}<br>
                        <strong>C.C:</strong> {{ $cliente->numeroIdentificacion ?? '' }}<br>
                        <strong>Descripción:</strong> {{ $pqrsd->descripcionSolicitud ?? '' }}<br>
                        <strong>PDF Adjunto:</strong><br>
                        <iframe src="{{ 'http://localhost/laravel/public/storage/imagenes/' .$pqrsd->urlPdf }}"  frameborder="0"></iframe>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</body>
</html>
