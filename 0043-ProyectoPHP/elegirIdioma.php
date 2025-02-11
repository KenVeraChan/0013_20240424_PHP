<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="elegiridioma.css" rel="stylesheet">
    <title>ELEGIR IDIOMA DEL SECTOR</title>
</head>
<body>
<?php
if(isset($_COOKIE["idiomaSeleccionado"]))
    {
        if($_COOKIE["idiomaSeleccionado"]=="es")
        {
            header("Location: idiomaEspaniol.php");
        }
        else if($_COOKIE["idiomaSeleccionado"]=="en")
        {
            header("Location: idiomaIngles.php");
        }
        else if($_COOKIE["idiomaSeleccionado"]=="de")
        {
            header("Location: idiomaAleman.php");
        }
    }
?>
    <h1 id="titulo"><strong>ELEGIR IDIOMA</strong></h1>
    <table id="opciones">
        <tr>
            <td class="idiomas"><a href="gestionTotalCookies.php?idioma=es"><img class ="idioma" src="imagenes/espaniol.jpg"></a></td>
            <td class="idiomas"><a href="gestionTotalCookies.php?idioma=en"><img class ="idioma" src="imagenes/ingles.jpg"></a></td>
            <td class="idiomas"><a href="gestionTotalCookies.php?idioma=de"><img class ="idioma" src="imagenes/aleman.jpg"></a></td>
            <td class="idiomas"><a href="destruyeCookie.php"><img class ="idioma" src="imagenes/cookies.jpg"></a></td>
        </tr>
    </table>
    <br>
    <br>
    <h4 id="titulo">Si se le da a la COOKIE se eliminará la que se había creado antes</h4>
</body>
</html>