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
        $BD_servidor="localhost";
        $BD_usuario="root";
        $BD_contrasenia="";
        $BD_nombre="cursosql";
        $BD_tabla="pdo_pruebas";
        mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
        error_reporting(0);   //Para que no salgan los WARNINGS EN LA PAGINA WEB. QUITAR SI SE ESTA EDITANDO CODIGO

        //INICIOS CON PDO:
        try
        {
            $base = 'mysql:'.$BD_nombre.';host='.$BD_servidor;
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