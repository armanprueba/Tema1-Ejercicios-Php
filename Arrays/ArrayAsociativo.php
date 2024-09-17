<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <?php 
        $array_sexo = array('');
        $array_dos = array('');
        for($i=0; $i<=100; $i++){
            $num_aleatorio = rand(1, 2);
            if ($num_aleatorio == 1) $array_sexo[$i] =  'M';
            else $array_sexo[$i] = 'F';
        }
        
        $contador = ['M' => 0, 'F' => 0]; //Se crea un array asociativo llamado contador para almacenar los datos del array_sexo
        foreach($array_sexo as $genero){
            $contador[$genero]++;  //Se aumenta el valor del genero indicado con el ++ para que al final tenga los mismos valor que el array_sexo
        }

        echo"Hay $contador[M] hombres y $contador[F] mujeres";
        //print_r($contador);
    ?>

</body>
</html>