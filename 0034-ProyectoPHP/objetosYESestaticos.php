<?php
class configModeloYES{
    private static $BD_servidor="localhost";
    private static $BD_usuario="root";
    private static $BD_contrasenia="";
    private static $BD_nombre="cursosql";
    private static $BD_tabla="datos_usuarios";
    private static $BD_charset="utf8"; 

    public static function getServidor()
    {
        return self::$BD_servidor;
    }
    public static function getUsuario()
    {
        return self::$BD_usuario;
    }
    public static function getContrasenia()
    {
        return self::$BD_contrasenia;
    }
    public static function getNombre()
    {
        return self::$BD_nombre;
    }
    public static function getTabla()
    {
        return self::$BD_tabla;
    }
    public static function getCharset()
    {
        return self::$BD_charset;
    }
}
?>