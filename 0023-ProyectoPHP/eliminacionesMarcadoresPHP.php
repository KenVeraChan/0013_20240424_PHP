<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcadores Eliminaciones con PDO en PHP</title>
</head>
<body>
    <?php
        //CONEXION CON LA BASE DE DATOS EN EL SERVIDOR: AHORA SE PONE AQUI
        include("conexionPHP.php");
        $eliminacionID=$_POST["id"];
        //INICIOS CON PDO:
        //CONFIGURACION:
        try
        {
            $base = 'mysql:host='.$BD_servidor.';dbname='.$BD_nombre;
            //Instanciación de una conexion de la BBDD//
            $basePDO = new PDO($base, $BD_usuario, $BD_contrasenia);
            //Tratamiento de errores//
            $basePDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //Adaptacion del lenguaje español del juego de caracteres
            $basePDO->exec("SET CHARACTER SET utf8");
            //Creación de una busqueda en SQL//
                $sql="DELETE FROM $BD_tabla where ID=:ID";
            //Preparacion de la consulta
            $resultado=$basePDO->prepare($sql);
            //Pasando por parámetros el dato necesario para la búsqueda SQL
            $resultado->execute(array(":ID"=> $eliminacionID));
            //Eliminacion de un registro
            echo("Registro eliminado");
            $resultado->closeCursor();
        } 
        catch (PDOException $e) 
        {
                echo ("Falló la conexión:". $e->getMessage()." en el código en la línea: ".$e->getLine());
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
