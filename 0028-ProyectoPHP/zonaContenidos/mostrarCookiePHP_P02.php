<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de una COOKIE</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["cookiePrueba"]))
    {
        echo $_COOKIE["cookiePrueba"];
    }
    else
    {
        echo "La cookie no se ha creado!";
    }
    ?>
</body>
</html>