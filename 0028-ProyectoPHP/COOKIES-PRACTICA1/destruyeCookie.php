<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir Cookie</title>
</head>
<body>
    <?php
    setcookie("idiomaSeleccionado","es",time()-1);
    header("Location: elegirIdioma.php");
    ?>
</body>
</html>