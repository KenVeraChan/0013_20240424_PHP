<?php
require ("devuelvePers.php");
$enviar=$_GET["poblacion"];
$personas=new devuelvePers();
$array_personas=$personas->getPersonas($enviar);
$personas->borrarMemoriaBuffer(); //Al ser un METODO VOID no se le asigna a una variable
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPRESION DATOS</title>
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
            echo"<br>";
            echo"<br>";  
        }
    ?>
</body>
</html>
