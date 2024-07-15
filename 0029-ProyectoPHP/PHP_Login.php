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
if($_SESSION["semaforo"]==1 || $autenticacion==true)
{
    //En el caso de que se haya establecido conexion afirmando que SE QUIERE RECORDAR USUARIO
    include "entradaPHP.php";
}
if(isset($_SESSION["usuario"]) && $_SESSION["semaforo"]==2)
{
    //En el caso de que haya habido error en el intento de logearse
    echo "No se ha podido conectar porque no se reconoce al <strong>USUARIO</strong> ni la <strong>CONTRASEÑA</strong>";
}
if($autenticacion==false && $_SESSION["semaforo"]==2)
{
    //Si no se ha dado a RECORDAR USUARIO y además sale por defecto $_SESSION["semaforo"]==2 porque
    // se recargo la pagina web existen dos opciones
    if(!isset($_COOKIE["nombre_usuario"]))
    {
        //SI NO SE QUISO RECORDR AL USUARIO carga el sistema de LOGIN 
        include "paginaLogin.php";
    }
    else
    {
        //SI SE QUISO RECORDAR AL USUARIO cargara solo la cabecera con la entrada ya establecida
        include "entradaPHP.php";
    }
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