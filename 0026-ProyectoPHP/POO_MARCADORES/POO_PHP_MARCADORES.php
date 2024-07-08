<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO en PHP con pdo</title>
</head>
<body>
    <?php
    require("POO_ConexionPHP_PDO.php");
    $NOMBRE=$_GET["NOMBRE"];
    $APELLIDO=$_GET["APELLIDO"];
    try{
        $base=new PDO('mysql:host='.BD_servidor.';dbname='.BD_nombre,BD_usuario,BD_contrasenia);
        $base->exec("SET CHARACTER SET utf8");
        $sql="SELECT ID,Nombre,Apellidos,Teléfono,Email FROM ".BD_tabla." WHERE NOMBRE=:N AND APELLIDOS=:A";
        $resultado=$base->prepare($sql);   //Objeto almacenado de tipo PDO Statement
        $resultado->execute(array(":N"=>$NOMBRE,":A"=>$APELLIDO));
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
        {
            echo "ID: ".$registro["ID"]."<br>NOMBRE:   ".$registro["Nombre"]."<br>APELLIDOS:   ".$registro["Apellidos"].
            "<br>TELÉFONO:   ".$registro["Teléfono"]."<br>EMAIL:   ".$registro["Email"]."<br>";
        }
        $resultado->closeCursor();
    }
    catch(Exception $e)
    {
        die("Error: ".$e->getMessage());
    }
    finally
    {
        $base=null;
    }

    ?>
</body>
</html>