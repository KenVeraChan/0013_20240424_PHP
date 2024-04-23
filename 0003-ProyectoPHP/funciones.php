<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en PHP</title>
</head>
<body>
    <?php
        echo "Este es un primer mensaje <br><br>";
            function dameDatos(){
                echo "Este es el mensaje del interior de la funcion <br>"; 
                //<br> es un retorno de carro
            }
        include("funcionesAlmacen.php");
        dameDatos();
    ?>
</body>
</html>