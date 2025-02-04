<?php
echo "<br>";
$id="";
$nombre="";
$contenido="";
$tipo="";
require("Conexion.php");
$sql="SELECT * FROM camposblob WHERE id=27";
$resultado=$base->prepare($sql);
$resultado->execute();
while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
    $id=$fila["id"];
    $nombre=$fila["Nombre"];
    $contenido=$fila["Contenido"];
    $tipo=$fila["Tipo"];
}
?>
<center>
    <h1>Leer archivo BLOB de la BBDD</h1>
    <br>
    <?php
        echo "Id: " . $id . "<br>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Tipo: " . $tipo . "<br>";
        echo "Contenido: " . "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "'>";
        ?>
</center>