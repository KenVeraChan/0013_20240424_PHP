<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Identificación</title>
</head>
<body>
<?php
session_start();  //se inicia la sesion
include "compruebaLogin.php";
$_SESSION["usuario"]=$_POST["login"];
if($_SESSION["semaforo"]==1)
{
    include "entradaPHP.php";
}
if(!isset($_SESSION["usuario"]))
{
    include "paginaLogin.php";
}
if(isset($_SESSION["usuario"]) && $_SESSION["semaforo"]==2)
{
    echo "No se ha podido conectar porque no se reconoce al <strong>USUARIO</strong> ni la <strong>CONTRASEÑA</strong>";
    include "paginaLogin.php";
}
?>
        <table>
            <tr>
                <td><img src="imagenesFormulario/Universo1.jpg" width="300" height="166"></td>
                <td><img src="imagenesFormulario/Universo2.jpg" width="300" height="166"></td>
            </tr>
            <tr>
                <td><img src="imagenesFormulario/Universo3.jpg" width="300" height="166"></td>
                <td><img src="imagenesFormulario/Universo4.jpg" width="300" height="166"></td>
            </tr>
        </table> 
</body>
</html>