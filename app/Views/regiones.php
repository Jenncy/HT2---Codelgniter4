<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Regiones</h1>
    <a class="btn btn-outline-secondary" href="<?=base_url('insertar_region/')?>">Nueva Región</a><br><br>
                    
    <table class="table -striped">
        <thead>
            <tr>
                <th>Código Región</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($datos as $region):
            ?>
            <tr>
                <td><?php echo $region['cod_region'];?></td>
                <td><?php echo $region['nombre'];?></td>
                <td><?=$region['descripcion'];?></td>
                <td>
                    <a class="btn btn-outline-danger" href="<?=base_url('eliminar_region/').$region['cod_region']?>">Eliminar</a>
                    <a class="btn btn-outline-info" href="<?=base_url('actualizar_region/').$region['cod_region']?>">Actualizar</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>