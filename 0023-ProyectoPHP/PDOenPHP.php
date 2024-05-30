<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicios con PHP</title>
</head>
<body>
    <?php
        //CONEXION CON LA BASE DE DATOS EN EL SERVIDOR: AHORA SE PONE AQUI
        include("conexionPHP.php");

        //INICIOS CON PDO:
        try
        {
            $base = 'mysql:host='.$BD_servidor.';dbname='.$BD_nombre;
            $gbd = new PDO($base, $BD_usuario, $BD_contrasenia);
            echo("Conexión Realizada!");
        } 
        catch (PDOException $e) 
        {
                echo ("Falló la conexión:". $e->getMessage());
        }
        finally
        {
            //Si todo funciona correctamente o no se ejecuta este area
            //Se limpian las variables que se han utilizado
            $base=null;

        }
    ?>
</body>
</html>