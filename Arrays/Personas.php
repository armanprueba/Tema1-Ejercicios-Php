<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $arrayPersonas = array('32324253G' => array('nombre'=>'Aitor', 'altura' => 182, 'email' => 'aitor@correo.com'),
                           '01234567A' => array('nombre'=>'Juan', 'altura' => 172, 'email' => 'juan@correo.com'),
                           '65004204V' => array('nombre'=>'Pedro', 'altura' => 166, 'email' => 'pedro@correo.com'),
                           '33826410G' => array('nombre'=>'Carlos', 'altura' => 191, 'email' => 'carlos@correo.com'),
                           '12345678A' => array('nombre'=>'Sergio', 'altura' => 165, 'email' => 'sergio@correo.com'),
    
        );

        foreach($arrayPersonas as $dni => $personas){
            echo "Soy $personas[nombre] mi mail es $personas[email] y mi dni: $dni"."<br>";
        }

    ?>

</body>
</html>