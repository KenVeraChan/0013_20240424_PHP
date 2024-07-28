<?php
require "../CONTROLADOR/areaInstancias.php";
//FICHERO PRINCIPAL DE INICIO DE EJECUCIÓN BACKEND
//Recepción de los datos de la imagen
//Variable global $_FILES y las propiedades de la imagen
$nombreImagen=$_FILES["imagen"]["name"];
$tipoImagen=$_FILES["imagen"]["type"];
$tamanioImagen=$_FILES["imagen"]["size"];
if(isset($_POST["carga"]))
{
    require "../MODELO/lecturaImagen.php";
}
else
{
    if($tamanioImagen<=3000000)   //LIMITANDO el Tamanio a 3MG
    {
        if($tipoImagen=="image/jpeg" || $tipoImagen=="image/jpg" || $tipoImagen=="image/png" || $tipoImagen=="image/gif")
        {
            //Se le comunica al servidor a dónde se quieren subir las imagenes, LA RUTA
            $carpeta_destino=$_SERVER["DOCUMENT_ROOT"].'/UploadImages/';
            //Como siempre se añaden las descargas a la carpeta TEMPORAL, se le indica al servidor de moverlas a la carpeta señalada
            move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpeta_destino.$nombreImagen);
            //Mover la imagen del directorio temporal al directorio seleccionado
        }
        else
        {
            echo "El formato de la imagen que se pretendia subir no es de tipo: jpeg,png,gif";
        }
    }
    else{
        echo "El tamanio de la imagen supera la de <strong>1MB</strong>";
    }
    //Se invoca al area de instancias en donde estan todos los ficheros del CONTROLADOR
    require "../MODELO/consultasImagen.php";
}
?>