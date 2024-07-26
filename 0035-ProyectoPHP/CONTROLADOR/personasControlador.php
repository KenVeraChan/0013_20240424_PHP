<?php
include "MODELO/configModelo.php";
//Se coloca aqui el configModelo.php Porque después en los dos REQUIRES hará falta de nuevo
require "MODELO/personasModelo.php";
$persona= new Personas_modelo();
$matrizPersonas=$persona->getPersonas();
$base= new Conectar();  //Se hace llamada a clase CONECTAR
$conexion=$base->conexion();
require "VISTA/personasVista.php";
//Aqui parecería estar todo el código de productosVista.php
?>