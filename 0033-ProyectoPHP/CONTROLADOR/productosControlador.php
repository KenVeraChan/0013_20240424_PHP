<?php
require("MODELO/configModelo.php");
require_once "MODELO/productosModelo.php";
$producto= new Productos_modelo();
$matrizProductos=$producto->getProductos();
require_once "VISTA/productosVista.php";
//Aqui parecería estar todo el código de productosVista.php
?>