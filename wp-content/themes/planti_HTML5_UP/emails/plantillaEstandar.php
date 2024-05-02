<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $asunto; ?></title>
</head>
<body style="font-family: Arial, sans-serif;">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f4f4f4;">
        <h2 style="color: #333;"><?= $asunto ?></h2>
        <p><?= $datos_extra['mensaje'] ?></p>
        <p>Los alumnos inscritos en el grupo <?= $datos_extra['grupo'] ?> han sido:</p>
        <ul>
            <?php foreach($datos_extra['alumnos'] as $alumno): ?>
                <li><?= $alumno['nombre'] ?> <?= $alumno['apellidos'] ?> identificacion: <?= $alumno['identificacion'] ?></li>
            <?php endforeach; ?>
        </ul>
        <p>La categoria a la que se ha inscrito el grupo es: <?= $datos_extra['categoria'] ?></p>
    </div>

</body>
</html>
