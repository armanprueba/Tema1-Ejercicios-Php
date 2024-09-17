<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numeros_aleatorios = array(0);
        for($i=0; $i<=5; $i++){
            $numeros_aleatorios[$i] =  rand(0, 99);
        }
        echo "Array desordenado: <br>"
        foreach($numeros_aleatorios as $numero){
            echo "$numero <br/>";
        }

        sort($numeros_aleatorios);
        echo "Array ordenado: <br>"
        foreach($numeros_aleatorios as $numero){
            echo "$numero <br/>";
        }

    ?>

    <?php 
        //$booleano = in_array(2, $numeros_aleatorios);
        if (in_array(2, $numeros_aleatorios)) echo "<br>El 2 está en los números aleatorios";     
        else echo "<br>El 2 no está en los números aleatorios";
    ?>

    <?php
        $count_array = count($numeros_aleatorios);
        $media_array = array_sum($numeros_aleatorios) / $count_array;
        $valor_minimo = $numeros_aleatorios[0];
        $valor_maximo = $numeros_aleatorios[$count_array - 1];
        echo"<br>El valor mínimo del array es: $valor_minimo";
        echo"<br>El valor maximo del array es: $valor_maximo";
        echo"<br>La media del array es: $media_array";

    ?>
</body>
</html>
