<?php
class configModeloNO{
    private $BD_servidor="localhost";
    private $BD_usuario="root";
    private $BD_contrasenia="";
    private $BD_nombre="cursosql";
    private $BD_tabla="datos_usuarios";
    private $BD_charset="utf8"; 

    public function getServidor()
    {
        return $this->BD_servidor;
    }
    public function getUsuario()
    {
        return $this->BD_usuario;
    }
    public function getContrasenia()
    {
        return $this->BD_contrasenia;
    }
    public function getNombre()
    {
        return $this->BD_nombre;
    }
    public function getTabla()
    {
        return $this->BD_tabla;
    }
    public function getCharset()
    {
        return $this->BD_charset;
    }
}
   
?>