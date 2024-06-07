<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salida Pagina Web</title>
</head>
<body>
    <?php
        session_start();
        session_destroy();
        header("location:login.php");
    ?>
</body>
</html>