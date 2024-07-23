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
        $poblacion=$_GET["poblacion"];
        $telefono=$_GET["telefono"];
        $fecha_nacimiento=$_GET["fecha_nacimiento"];
        $base->query("INSERT INTO $BD_tabla (id,Nombre,Apellido,Direccion,Poblacion,Telefono,Fecha_Nacimiento) VALUES ($id,'$nombre','$apellido','$direccion','$poblacion','$telefono','$fecha_nacimiento')");
        header("Location:indexCRUD.php");
    ?>
</body>
</html>