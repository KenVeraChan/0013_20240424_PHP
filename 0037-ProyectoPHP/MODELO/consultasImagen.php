<?php
    $base= new Conectar();  //Se hace llamada a clase CONECTAR
    $conexion=$base->conexion();
    $BD_tabla=ConexionPOOPHP::getTabla();
    $conexion->query("UPDATE $BD_tabla SET FOTOGRAFIA=('$nombreImagen') WHERE CÓDIGOARTÍCULO='AR01'");
    header("Location: ../VISTA/indexPHP.php");
?>