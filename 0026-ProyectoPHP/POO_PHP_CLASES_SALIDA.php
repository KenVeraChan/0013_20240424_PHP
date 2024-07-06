<?php
    require("POO_PHP_CLASES_EXTENDS.php");
    $personas=new personas();
    $array_personas=$personas->get_Personas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salida por pantalla POO CLASES</title>
</head>
<body>
    <?php
        foreach($array_personas as $elemento)
        {
            echo"<table><tr><td>";
            echo $elemento['ID']."</td><td>";
            echo $elemento['Nombre']."</td><td>";
            echo $elemento['Apellidos']."</td><td>";
            echo $elemento['Dirección']."</td><td>";
            echo $elemento['Población']."</td><td>";
            echo $elemento['Teléfono']."</td><td></tr></table>";
        }
    ?>
</body>
</html>