<?php
class Conectar{
    public static function conexion()
    {  //Estatico porque no va a cmabiar su valor ni los métodos internos
        try{
            $conexion=new PDO('mysql:host='.configModelo::getServidor().';dbname='.configModelo::getNombre(),configModelo::getUsuario(),configModelo::getContrasenia());
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        }
        catch(Exception $e)
        {
            die("Error: ".$e->getMessage());
        }
        return $conexion;
    }
}
?>