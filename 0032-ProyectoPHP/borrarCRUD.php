<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORRADO</title>
</head>
<body>
    <?php
        include("conexionPHP.php");
        $id=$_GET["id"];
        $base->query("DELETE FROM $BD_tabla WHERE id='$id'");
        header("Location:indexCRUD.php");
    ?>
</body>
</html>