<?php
require "../CONTROLADOR/areaInstancias.php";
if(isset($_POST["carga"]))
{
    require "../MODELO/lecturaImagen.php";
}
if(isset($_POST["envia"]))
{
    require "../MODELO/datosArchivos.php"; 
}
?>