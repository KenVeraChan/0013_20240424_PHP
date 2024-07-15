<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruye la COOKIE</title>
</head>
<body>
    <?php
        setcookie("nombre_usuario","Rasselin",time()-1);
        echo "La cookie ha sido eliminada";
    ?>
</body>
</html>