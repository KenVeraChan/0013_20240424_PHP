<?php
    require("POO_PHP_CLASES_EXTENDS_PDO.php");
    $personas=new personas();
    $array_personas=$personas->get_Personas(3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salida por pantalla PDO CLASES</title>
</head>
<body>
    <?php
        foreach($array_personas as $elemento)
        {
            echo"<table><tr><td>";
            echo $elemento['ID']."</td><td>";
            echo $elemento['Nombre']."</td><td>";
            echo $elemento['Apellidos']."</td><td>";
            echo $elemento['Teléfono']."</td><td>";
            echo $elemento['Email']."</td><td></tr></table>";
        }
    ?>
</body>
</html>