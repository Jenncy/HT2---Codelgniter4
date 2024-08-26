<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Ciudadano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Modifica Ciudadano</h1>
    <form action="<?php echo base_url('modificar_ciudadano')?>" method="post">
        <div class="mb-3">
            <label for="dpi" class="form-label">DPI</label>
            <input type="text" name="txtDPI" id="txtDPI" aria-describedby="emailHelp" 
            value="<?=$datos['dpi']?>" readonly>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellidos</label>
            <input type="text" name="txtApellidos" id="txtApellidos" aria-describedby="emailHelp" 
            value="<?=$datos['apellido']?>">  
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" name="txtNombres" id="txtNombres" aria-describedby="emailHelp" 
            value="<?=$datos['nombre']?>">  
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="txtDireccion" id="txtDireccion" aria-describedby="emailHelp"
            value="<?=$datos['direccion']?>">    
        </div>
        <div class="mb-3">
            <label for="tel_casa" class="form-label">Teléfono de casa</label>
            <input type="number" name="txtTelCasa" id="txtTelCasa" aria-describedby="emailHelp"
            value="<?=$datos['tel_casa']?>">    
        </div>
        <div class="mb-3">
            <label for="tel_movil" class="form-label">Teléfono móvil</label>
            <input type="number" name="txtTelMovil" id="txtTelMovil" aria-describedby="emailHelp"
            value="<?=$datos['tel_movil']?>">    
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="txtEmail" id="txtEmail" aria-describedby="emailHelp"
            value="<?=$datos['email']?>">     
        </div>
        <div class="mb-3">
            <label for="fechanac" class="form-label">Fecha de nacimiento</label>
            <input type="date" name="txtFechaNac" id="txtFechaNac" aria-describedby="emailHelp"
            value="<?=$datos['fechanac']?>">     
        </div>
        <div class="mb-3">
            <label for="cod_nivel_acad" class="form-label">Código de nivel académico</label>
            <input type="number" name="txtCodNiv" id="txtCodNiv" aria-describedby="emailHelp"
            value="<?=$datos['cod_nivel_acad']?>">    
        </div>
        <div class="mb-3">
            <label for="cod_muni" class="form-label">Código Municipal</label>
            <input type="number" name="txtCodMuni" id="txtCodMuni" aria-describedby="emailHelp"
            value="<?=$datos['cod_muni']?>">     
        </div>
        <div class="mb-3">
            <label for="contra" class="form-label">Contraseña</label>
            <input type="password" name="txtContra" id="txtContra" aria-describedby="emailHelp"
            value="<?=$datos['contra']?>" readonly>  
        </div>     



        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>