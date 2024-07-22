<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTADO</title>
</head>
<body>
    <?php
        include("conexionPHP.php");
        $id=$_GET["id"];
        $nombre=$_GET["nombre"];
        $apellido=$_GET["apellido"];
        $direccion=$_GET["direccion"];
        $base->query("INSERT INTO $BD_tabla (id,Nombre,Apellido,Direccion) VALUES ($id,'$nombre','$apellido','$direccion')");
        header("Location:index.php");
    ?>
</body>
</html>