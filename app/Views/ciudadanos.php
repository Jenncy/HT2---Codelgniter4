<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Ciudadanos</h1>
    <a class="btn btn-outline-secondary" href="<?=base_url('insertar_ciudadano/')?>">Nuevo Ciudadano</a><br><br>
                    
    <table class="table -striped">
        <thead>
            <tr>
                <th>DPI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono de casa</th>
                <th>Teléfono móvil</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
                <th>Código Nivel Académico</th>
                <th>Código Municipio</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($datos as $ciudadanos):
            ?>
            <tr>
                <td><?php echo $ciudadanos['dpi'];?></td>
                <td><?php echo $ciudadanos['apellido'];?></td>
                <td><?php echo $ciudadanos['nombre'];?></td>
                <td><?php echo $ciudadanos['direccion'];?></td>
                <td><?php echo $ciudadanos['tel_casa'];?></td>
                <td><?php echo $ciudadanos['tel_movil'];?></td>
                <td><?php echo $ciudadanos['email'];?></td>
                <td><?php echo $ciudadanos['fechanac'];?></td>
                <td><?php echo $ciudadanos['cod_nivel_acad'];?></td>
                <td><?php echo $ciudadanos['cod_muni'];?></td>
                <td><?php echo $ciudadanos['contra'];?></td>
                <td>
                    <a class="btn btn-outline-danger" href="<?=base_url('eliminar_ciudadano/').$ciudadanos['dpi']?>">Eliminar</a>
                    <a class="btn btn-outline-info" href="<?=base_url('actualizar_ciudadano/').$ciudadanos['dpi']?>">Actualizar</a>
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