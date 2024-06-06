<?php
//DATOS DE LA CONEXION//
$DB_servidor='localhost';
$DB_usuario='root';
$DB_contrasenia='';
$DB_nombre='cursosql';
$DB_tabla='login';
$DB_charset='utf8';

//DATOS DE LOS OBJETOS//
class usuario{
    private $nombre;
    public function __construct()
    {

    }
    public function getNombreUsuario()
    {
        return $this->nombre;
    }
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombre=$nombreUsuario;
    }
}
$usuarioLogin=new usuario();

?>