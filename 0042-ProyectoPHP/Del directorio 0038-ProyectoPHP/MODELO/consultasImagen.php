<?php
    $base= new Conectar();  //Se hace llamada a clase CONECTAR
    $conexion=$base->conexion();
    $BD_tabla=ConexionPOOPHP::getTabla();
    $conexion->query("INSERT INTO $BD_tabla (id, Nombre,Tipo,Contenido) VALUES(0,'$nombreArchivo','$tipoArchivo','$contenido')");
    header("Location: ../VISTA/indexPHP.php");
?>