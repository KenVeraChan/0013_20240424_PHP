<?php
$BD_servidor="localhost";
$BD_usuario="root";
$BD_contrasenia="";
$BD_nombre="cursosql";
$BD_tabla="datos_usuarios";            //PARA RECONOCER A LOS JEFES DE SECCION
$DB_charset="utf8";    
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
error_reporting(0);   //Para que no salgan los WARNINGS EN LA PAGINA WEB. QUITAR SI SE ESTA EDITANDO CODIGO

try{
    $base= new PDO('mysql:host='.$BD_servidor.';dbname='.$BD_nombre,$BD_usuario,$BD_contrasenia);
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
}
catch(Exception $e)
{
    echo "Error".$e->getMessage();
    echo "Linea del error: ".$e->getLine();
}
?>