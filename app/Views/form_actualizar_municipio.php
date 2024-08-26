<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Municipio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Modifica Municipio</h1>
    <form action="<?php echo base_url('modificar_municipio')?>" method="post">
        <div class="mb-3">
            <label for="cod_muni" class="form-label">Código Municipio</label>
            <input type="text" name="txtCodMuni" id="txtCodMuni" aria-describedby="emailHelp" 
            value="<?=$datos['cod_muni']?>" readonly>
        </div>        
        <div class="mb-3">
            <label for="nombre_municipio" class="form-label">Nombre</label>
            <input type="text" name="txtNombreMuni" id="txtNombreMuni" aria-describedby="emailHelp" 
            value="<?=$datos['nombre_municipio']?>">
        </div>
        <div class="mb-3">
            <label for="cod_depto" class="form-label">Código Departamento</label>
            <input type="text" name="txtCodDepto" id="txtCodDepto" aria-describedby="emailHelp"
            value="<?=$datos['cod_depto']?>">   
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>