<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Visita</title>
</head>
<body>
    <?php
        session_start();  //Para reanudar la sesion creada si se ha iniciado sino creará una nueva
                          //También permite rescatar la información almancenada en la variable superglobal $_SESSION
    if(!isset($_SESSION["usuario"]))
    {
        //Si es falso que no se ha registrado nada en la sesion
        header("Location:login.php");
    }

    ?>
    <h1>BIENVENIDOS USUARIOS</h1>
        <?php
            echo("<br>Hola: ".$_SESSION["usuario"]."<br>");
        ?>
    <p>Esto es una información solo para <strong>Usuarios Registrados!</strong></p>
</body>
</html>