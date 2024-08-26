<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Departamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Nuevo Departamento</h1>
    <form action="<?php echo base_url('guardar_departamento')?>" method="post">
        <div class="mb-3">
            <label for="txtCodDepto" class="form-label">Código Departamento</label>
            <input type="number" name="txtCodDepto" id="txtCodDepto" aria-describedby="emailHelp">
        </div>        
        <div class="mb-3">
            <label for="txtNombreDepto" class="form-label">Nombre</label>
            <input type="text" name="txtNombreDepto" id="txtNombreDepto" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="txtCodRegion" class="form-label">Código Región</label>
            <input type="text" name="txtCodRegion" id="txtCodRegion" aria-describedby="emailHelp">   
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>