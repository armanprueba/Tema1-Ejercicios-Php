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
        $nota3 = 7;
        if($nota1 > $nota2  && $nota1 > $nota3){
            echo "La nota 1 ($nota1) es mayor que la nota 2 ($nota2) y la nota 3 ($nota3)"; 
        }
        else if($nota2 > $nota1 && $nota2 > $nota3){
            echo "La nota 2 ($nota2) es mayor que la nota 1 ($nota1) y la nota 3 ($nota3)"; 
        }
        else if($nota3 > $nota1 && $nota3 > $nota2){
            echo "La nota 3 ($nota3) es mayor que la nota 1 ($nota1) y la nota 2 ($nota2)"; 
        }
        
    ?>

    
</body>
</html>