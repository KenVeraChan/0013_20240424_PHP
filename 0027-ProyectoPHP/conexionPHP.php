<?php
$BD_servidor="localhost";
$BD_usuario="root";
$BD_contrasenia="";
$BD_nombre="cursosql";
$BD_tabla="contactos_empresa";  //PARA TRAMITAR LA GESTION DE LOS EMPLEADOS
$BD_tabla_2='login';            //PARA RECONOCER A LOS JEFES DE SECCION
$DB_charset='utf8';    
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
error_reporting(0);   //Para que no salgan los WARNINGS EN LA PAGINA WEB. QUITAR SI SE ESTA EDITANDO CODIGO
?>