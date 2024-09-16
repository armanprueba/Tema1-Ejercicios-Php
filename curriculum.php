<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre_alumno = "Arman Keyhani Ahmadi";
        $usuario = "alumno";
        $nombre = "nombre_" . $usuario;

        $idioma_sabidos = "español y algo de inglés";
        $lengua = "_sabidos";
        $idiomas = "idioma" . $lengua;

        $curso_actual = "2ºDAW";
        $año = "actual";
        $estudios = "curso_" . $año;
    ?>

    <p>Buenas, mi nombre es <?php echo $$nombre;?>, estudió <?php echo $$estudios;?> y se <?php echo $$idiomas;?> </p>
</body>
</html>