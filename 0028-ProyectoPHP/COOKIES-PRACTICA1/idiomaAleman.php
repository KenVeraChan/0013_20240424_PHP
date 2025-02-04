<?php
include "incrementaCookie.php";
if(isset($_COOKIE["idiomaSeleccionado"]))
{
    //no hace nada porque la COOKIE sigue existiendo
}
else
{
    header("Location: elegirIdioma.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokument auf Deutsch</title>
</head>
<body onclick="<?php incrementaCookie($_SESSION["idiomaElegido"]);?>">
    <h1 style="text-align: center"><strong>Die Erde</strong></h1>
    <h4 style="text-align: center">
    La Tierra (del latín Terra, deidad romana equivalente a Gea, 
    diosa griega de la feminidad y la fecundidad) es un planeta del 
    sistema solar que gira alrededor de su estrella —el Sol— en la 
    tercera órbita más interna. Es el más denso y el quinto mayor de 
    los ocho planetas del sistema solar. También es el más grande de 
    los cuatro planetas terrestres o rocosos. La Tierra se formó hace 
    aproximadamente 4550 millones de años y la vida surgió unos mil 
    millones de años después. Es el hogar de millones de especies, 
    incluidos los seres humanos y actualmente el único cuerpo astronómico 
    donde se conoce la existencia de vida. La atmósfera y otras condiciones 
    abióticas han sido alteradas significativamente por la biosfera del 
    planeta, favoreciendo la proliferación de organismos aerobios, así como 
    la formación de una capa de ozono que junto con el campo magnético terrestre 
    bloquean la radiación solar dañina, permitiendo así la vida en la Tierra.
    </h4>
    <img style="margin-left: 30%; width:600px; height:600px" src="./imagenes/elMundo.jpg">
</body>
</html>