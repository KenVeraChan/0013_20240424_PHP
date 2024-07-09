<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir una COOKIE</title>
</head>
<body>
    <?php
    setcookie("cookiePrueba","Esta es la primera informacion guardada en el navegador",time()-1,
    "/zonaContenidos/");
    ?>
</body>
</html>