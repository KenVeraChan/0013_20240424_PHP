<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo con Strings</title>
    <style>
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php
        echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
        $variable1="Casa";
        $variable2="CASA";
        $resultado1=strcmp($variable1,$variable2); 
           //Devuelve 1 si no son iguales y 0 si son iguales
           //Es sensible a mayusculas y minusculas
           echo "El resultado de STRCMP es " . $resultado1 . "<br>";
        $resultado2=strcasecmp($variable1,$variable2);
           //Devuelve 1 si no son iguales y 0 si son iguales
           //NO es sensible a mayusculas y minusculas
           echo "El resultado de STRCASECMP es EL SIGUIENTE " . $resultado2 . "<br>";
    ?>
</body>
</html>