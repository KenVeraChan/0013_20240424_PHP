<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO en PHP con mysqli</title>
</head>
<body>
   <?php
   require ("POO_ConexionPHP.php");
   $conexion= new mysqli($DB_servidor,$DB_usuario,$DB_contrasenia,$DB_nombre);
   if($conexion->connect_errno)
   {
    echo("Fallo la conexión ".$conexion->connect_errno);
   }
   else{
    $conexion->set_charset("utf8");
    $sql="SELECT * FROM ".$DB_tabla;
    $resultado=$conexion->query($sql);
        if($conexion->errno)
        {
            die($conexion->error);
        }
        else{
            echo"<br>";
            echo"<strong>REALIZADO CON</strong><br>";
            echo"<strong> fetch_array </strong><br>";
            echo"<br>";
            while($fila=$resultado->fetch_array())
            {
                echo"<table><tr><td>";
                echo $fila[0]."</td><td>";
                echo $fila[1]."</td><td>";
                echo $fila[2]."</td><td>";
                echo $fila[3]."</td><td>";
                echo $fila[4]."</td><td>";
                echo $fila[5]."</td><td></tr></table>";
                echo"<br>";
                echo"<br>";
            }
        $conexion->close();
        }
    }
   ?>
</body>
</html>