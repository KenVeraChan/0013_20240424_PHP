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
        $nombre=$_GET["nombre"];
        $apellido=$_GET["apellido"];
        $direccion=$_GET["direccion"];
        $poblacion=$_GET["poblacion"];
        $telefono=$_GET["telefono"];
        $fecha_nacimiento=$_GET["fecha_nacimiento"];
        $BD_tabla=configModelo::getTabla();
        $conexion->query("INSERT INTO $BD_tabla (id,Nombre,Apellido,Direccion,Poblacion,Telefono,Fecha_Nacimiento) VALUES ($id,'$nombre','$apellido','$direccion','$poblacion','$telefono','$fecha_nacimiento')");
        header("Location:../index.php");
    ?>