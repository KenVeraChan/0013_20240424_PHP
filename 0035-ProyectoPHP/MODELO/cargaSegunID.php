<?php
include "configModelo.php";
include "conexionModelo.php";
$base= new Conectar();  //Se hace llamada a clase CONECTAR
$conexion=$base->conexion();
//Se tienen que volver a incluir porque se osciló:
//1) De un fichero de VISTA A MODELO
//2) De un fichero de MODELO A MODELO 
//3) Por eso no detectaba el include "MODELO/configModelo.php"
//   porque estaba en la misma carpeta y bastaba obligatoriamente
//   poner include "configModelo.php"
//4) Idem para el include "conexionModelo.php"

    $id=$_GET["id"];
    $BD_tabla=configModelo::getTabla();
    $base=$conexion->query("SELECT * FROM $BD_tabla WHERE ID=$id");
    $registro=$base->fetchAll(PDO::FETCH_OBJ);
?>