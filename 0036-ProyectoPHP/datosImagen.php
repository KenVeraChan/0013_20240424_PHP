<?php
//Recepción de los datos de la imagen
//Variable global $_FILES y las propiedades de la imagen
$nombreImagen=$_FILES["imagen"]["name"];
$tipoImagen=$_FILES["imagen"]["type"];
$tamanioImagen=$_FILES["imagen"]["size"];

//Se le comunica al servidor a dónde se quieren subir las imagenes, LA RUTA
$carpeta_destino=$_SERVER["DOCUMENT_ROOT"].'/UploadImages/';
//Como siempre se añaden las descargas a la carpeta TEMPORAL, se le indica al servidor de moverlas a la carpeta señalada
move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpeta_destino.$nombreImagen);
//Mover la imagen del directorio temporal al directorio seleccionado
?>