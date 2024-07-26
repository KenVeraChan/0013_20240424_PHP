<?php
    if(isset($_POST["actualizar"]))
    {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $direccion=$_POST["direccion"];
        $poblacion=$_POST["poblacion"];
        $telefono=$_POST["telefono"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];

        //Recogida de datos estáticos
        $BD_tabla=configModelo::getTabla();
        $base=$conexion->query("UPDATE $BD_tabla SET Nombre='$nombre',Apellido='$apellido',Direccion='$direccion' ,Poblacion='$poblacion' ,Telefono='$telefono' ,Fecha_Nacimiento='$fecha_nacimiento' WHERE ID=$id");
        header("Location:../index.php");   //VOLVER AL INDEX no a la pagina personasVista sino bucle infinito de errores en includes
    }
    if(isset($_POST["volver"]))
    {
        header("Location:../index.php");  //VOLVER AL INDEX no a la pagina personasVista sino bucle infinito de error en includes
    }
?>