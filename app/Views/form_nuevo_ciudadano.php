<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Ciudadano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Nuevo Ciudadano</h1>
    <form action="<?php echo base_url('guardar_ciudadano')?>" method="post">
        <div class="mb-3">
            <label for="txtDPI" class="form-label">DPI</label>
            <input type="number" name="txtDPI" id="txtDPI" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="txtApellidos" class="form-label">Apellidos</label>
            <input type="text" name="txtApellidos" id="txtApellidos" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtNombres" class="form-label">Nombres</label>
            <input type="text" name="txtNombres" id="txtNombres" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtDireccion" class="form-label">Dirección</label>
            <input type="text" name="txtDireccion" id="txtDireccion" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtTelCasa" class="form-label">Teléfono de casa</label>
            <input type="number" name="txtTelCasa" id="txtTelCasa" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtTelMovil" class="form-label">Teléfono móvil</label>
            <input type="number" name="txtTelMovil" id="txtTelMovil" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtEmail" class="form-label">Email</label>
            <input type="email" name="txtEmail" id="txtEmail" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtFechaNac" class="form-label">Fecha de nacimiento</label>
            <input type="date" name="txtFechaNac" id="txtFechaNac" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtCodNiv" class="form-label">Código de nivel académico</label>
            <input type="number" name="txtCodNiv" id="txtCodNiv" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtCodMuni" class="form-label">Código Municipal</label>
            <input type="number" name="txtCodMuni" id="txtCodMuni" aria-describedby="emailHelp">   
        </div>
        <div class="mb-3">
            <label for="txtContra" class="form-label">Contraseña</label>
            <input type="password" name="txtContra" id="txtContra" aria-describedby="emailHelp">
        </div>        



        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>