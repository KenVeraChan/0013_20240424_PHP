<?php
$mailNombre=$_POST["nombre"];
$mailApellidos=$_POST["apellidos"];
$mailTelefono=$_POST["telefono"];
$mailCorreo=$_POST["correo"];
$mailAsunto=$_POST["asunto"];
$mailMensaje=$_POST["mensaje"];

//Nomenclatura para transferencia de archivos entre diferentes paises e idimas
$headers="MIME-Version: 1.0\r\n";   //Saltos de linea \n o \r sin tener una misma linea una cantidad superior de 70 caracteres
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From: Prueba Rasselin <sfer4d_corporation@outlook.com>\r\n";

require "../CONTROLADOR/enviarCorreoPHP.php";
?>