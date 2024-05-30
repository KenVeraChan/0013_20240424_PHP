<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcadores BUSQUEDAS con PDO en PHP</title>
</head>
<body>
    <?php
        //CONEXION CON LA BASE DE DATOS EN EL SERVIDOR: AHORA SE PONE AQUI
        include("conexionPHP.php");
        $busquedaID=$_GET["id"];
        $busquedaEDAD=$_GET["edad"];
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
                $sql="SELECT * FROM $BD_tabla WHERE ID=:P_ID AND EDAD=:P_EDAD";
            //Preparacion de la consulta
            $resultado=$basePDO->prepare($sql);
            //Pasando por parámetros el dato necesario para la búsqueda SQL
            $resultado->execute(array(":P_ID"=>$busquedaID,":P_EDAD"=>$busquedaEDAD));
            //Descarga de lo indicado en la instruccion con PDO a la base de datos SQL
                while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<br>ID: ".$registro['ID']."<br>Nombre: ".$registro['NOMBRE']."<br>EDAD: ".$registro['EDAD']."<br><br>";
                }
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
