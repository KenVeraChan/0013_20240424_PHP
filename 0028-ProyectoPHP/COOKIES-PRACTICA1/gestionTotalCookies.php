<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Cookies</title>
</head>
<body>
<?php
    //Crea COOKIE para trabajar con el idioma elegido
    setcookie("idiomaSeleccionado",$_GET["idioma"],time()+3000);
    header("Location: elegirIdioma.php");
    //Lo que se guarda en $_GET["idioma"] es lo que en el enlace se mete como ?idioma=es, osea se guarda "es" u otro caso
    ?>
</body>
</html>