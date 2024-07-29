<?php
require "../CONTROLADOR/areaInstancias.php";
//FICHERO PRINCIPAL DE INICIO DE EJECUCIÓN BACKEND
//Recepción de los datos de la imagen
//Variable global $_FILES y las propiedades de la imagen
$nombreArchivo=$_FILES["archivo"]["name"];
$tipoArchivo=$_FILES["archivo"]["type"];
$tamanioArchivo=$_FILES["archivo"]["size"];
if(isset($_POST["carga"]))
{
    require "../MODELO/lecturaImagen.php";
}
else
{
    if($tamanioArchivo<=3000000)   //LIMITANDO el Tamanio a 3MG
    {
        //Se le comunica al servidor a dónde se quieren subir las imagenes, LA RUTA
        $carpeta_destino=$_SERVER["DOCUMENT_ROOT"].'/UploadImages/';
        //Como siempre se añaden las descargas a la carpeta TEMPORAL, se le indica al servidor de moverlas a la carpeta señalada
        move_uploaded_file($_FILES["archivo"]["tmp_name"],$carpeta_destino.$nombreArchivo);
        //Mover la imagen del directorio temporal al directorio seleccionado

        //CAMPOS BLOB PARA PODER SUBIR UN FICHERO AL SERVIDOR DISPONIBLE
        $archivoObjetivo=fopen($carpeta_destino.$nombreArchivo,"r");
        //Se apunta al archivo que se quiere abrir con el permiso de LECTURA
        $contenido=fread($archivoObjetivo,$tamanioArchivo);
        //Convertir en bytes el archivo seleccionado empleando FREAD

        $contenido=addslashes($contenido);  //Funcion que permite escapar a los signos ortográficos que PHP no entiende
        fclose($archivoObjetivo);  //Se cierra el proceso de la apertura del proceso de conversión
    }
    else{
        echo "El tamanio de la imagen supera la de <strong>1MB</strong>";
    }
    //Se invoca al area de instancias en donde estan todos los ficheros del CONTROLADOR
    require "../MODELO/consultasImagen.php";
}
?>