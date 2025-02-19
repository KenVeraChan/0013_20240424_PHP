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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>  <!-- CARGA LA JQUERY PARA EL JS-->
    <script src="inactividadSesion.js"></script>
    <title>Documento en ESPAÑOL</title>
</head>
<body onload="AddAlert(1,3)">
    <h1 style="text-align: center"><strong>La Tierra</strong></h1>
    <h4 style="text-align: center">
    Die Erde (von lateinisch Terra, römische Gottheit, gleichbedeutend mit Gaia, 
    griechische Göttin der Weiblichkeit und Fruchtbarkeit) ist ein Planet im Sonnensystem, 
    der sich auf der drittinnersten Umlaufbahn um seinen Stern - die Sonne - dreht. Er ist 
    der dichteste und fünftgrößte der acht Planeten im Sonnensystem. Er ist außerdem der größte 
    der vier Erd- oder Gesteinsplaneten. Die Erde entstand vor etwa 4,55 Milliarden Jahren und 
    etwa eine Milliarde Jahre später entstand auf ihr Leben. Sie ist die Heimat von Millionen von 
    Arten, darunter auch Menschen, und ist derzeit der einzige astronomische Körper, von dem bekannt 
    ist, dass es Leben in der Atmosphäre und unter anderen abiotischen Bedingungen gibt durch die 
    Biosphäre des Planeten verändert, was die Verbreitung aerober Organismen sowie die Bildung einer 
    Ozonschicht begünstigt, die zusammen mit dem Erdmagnetfeld schädliche Sonnenstrahlung blockiert 
    und so Leben auf dem Planeten ermöglicht. Die physikalischen Eigenschaften von Die Erde, die 
    geologische Geschichte und ihre Umlaufbahn haben es ermöglicht, dass das Leben weiterhin existiert. 
    Es wird geschätzt, dass der Planet noch für weitere 500 Millionen Jahre in der Lage sein wird, 
    Leben zu beherbergen, da nach aktuellen Prognosen die zunehmende Leuchtkraft der Sonne danach zum 
    Aussterben der Biosphäre führen wird.
    </h4>
    <img style="margin-left: 30%; width:600px; height:600px" src="./imagenes/elMundo.jpg">
</body>
</html>