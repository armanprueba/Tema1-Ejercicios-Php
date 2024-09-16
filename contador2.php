<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONTADORES</h1>
    <p>Este contador va del 1 al 100:</p>
    <?php 
        $num1 = 1;
        $num2 = 10;
        echo "$num1";
        do{
            $num1++;
            echo ",$num1";
        }while($num1<100);
        

    ?>
    <p>Este contador va del 10 al 1:</p>
    <?php 
        do{
            echo "$num2-";
            $num2--;
        }while($num2>0);
        echo "$num2";  
    ?>

</body>
</html>