<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- CSS de Bootstrap (desde un CDN) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Formulario</h1>
        </div>
    </div>
    <br>
    
    <form action="{{ route('formulario.store') }}" method="POST">
    @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <label for="esAnonima">¿Es Anónima?</label>
                    <select class="form-control" id="esAnonima" name="esAnonima" placeholder="Selecciona una opción">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="TRUE">Sí</option>
                        <option value="FALSE">No</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <label for="tipoPqrsd">Tipo de PQRSDS</label>
                    <select class="form-control" id="tipoPqrsd" name="tipoPqrsd" placeholder="Selecciona una opción">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="peticion">Petición</option>
                        <option value="queja">Queja</option>
                        <option value="reclamo">Reclamo</option>
                        <option value="solicitud">Solicitud</option>
                        <option value="denuncia">Denuncia</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <label for="tipoPersona">Tipo de clientes</label>
                    <select class="form-control" id="tipoPersona" name="tipoPersona" placeholder="Selecciona una opción">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="natural">Natural</option>
                        <option value="juridica">Jurídica</option>
                        <option value="apoderado">Apoderado</option>
                        <option value="ninos_ninas_adolescentes">Niños, Niñas y Adolescentes</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col text-left">
            <h2 style="font-size:25px;">Datos personales</h2>
        </div>
    </div>
    <br>
        <!-- Datos clientes -->
        <div class="row">
            <!-- Primer columna -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="primerNombre">Primer Nombre</label>
                    <input type="text" class="form-control" id="primerNombre" name="primerNombre" placeholder="Primer Nombre">
                </div>
                <div class="form-group">
                    <label for="segundoNombre">Segundo Nombre</label>
                    <input type="text" class="form-control" id="segundoNombre" name="segundoNombre" placeholder="Segundo Nombre">
                </div>
                <div class="form-group">
                    <label for="primerApellido">Primer Apellido</label>
                    <input type="text" class="form-control" id="primerApellido" name="primerApellido" placeholder="Primer Apellido">
                </div>
                <div class="form-group">
                    <label for="segundoApellido">Segundo Apellido</label>
                    <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" placeholder="Segundo Apellido">
                </div>
                <div class="form-group">
                    <label for="tipoDocumento">Tipo de Documento</label>
                    <select class="form-control" id="tipoDocumento" name="tipoDocumento">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="cedula de Cuidadania">Cédula de Ciudadanía</option>
                        <option value="cedula de extrangeria">Cédula de Extranjería</option>
                        <option value="registroCivil">Registro Civil</option>
                        <option value="targetaIdentidad">Tarjeta de Identidad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcionSolicitud">Descripción de solicitud</label>
                    <textarea class="form-control" id="descripcionSolicitud" name="descripcionSolicitud" rows="3" placeholder="Escribe aquí la descripción de la solicitud"></textarea>
                </div>
        </div>
            
            <!-- Segunda columna -->
        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="numeroIdentificacion">Número de Identificación</label>
                    <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" placeholder="Número de Identificación">
                </div>

                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
                </div>
                
                <div class="form-group">
                    <label for="genero">Género</label>
                    <select class="form-control" id="genero" name="genero">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                </div>

                <div class="form-group">
                    <label for="correoElectronico">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" placeholder="Correo Electrónico">
                </div>
            </div>
        </div>

        <br>
        <!-- Campos restantes -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Adjuntar archivo PDF</label>
                    <input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">
                </div>
            </div>

            <!-- Botón de envío -->
            <div class="col-md-12 text-left">
                <button type="submit" class="btn btn-primary form">Enviar</button>
            </div>
            <br><br><br>
        </div>
    </form>
</div>

</body>
</html>
