<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nota1 = 4.9;
        $nota2 = 5;
        if($nota1 > $nota2){
            echo "La nota1 ($nota1) es mayor a la nota 2 ($nota2)"; 
        }
        else if($nota2 > $nota1){
            echo "La nota2 ($nota2) es mayor a la nota 1 ($nota1)"; 
        }
        else{
            echo "La nota1 ($nota1) es igual a la nota 2 ($nota2)"; 
        }
    ?>

    
</body>
</html>