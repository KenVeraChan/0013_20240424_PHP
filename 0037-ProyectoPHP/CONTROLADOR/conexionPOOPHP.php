<?php
class ConexionPOOPHP
{
    private static $BD_Servidor="localhost";
    private static $BD_BaseDatos="cursosql";
    private static $BD_Usuario="root";
    private static $BD_Contrasenia="";
    private static $BD_Tabla="productos";
    private static $BD_CharSet="utf8";

    public static function ConexionPOOPHP()
    {

    }
    public static function getServidor()
    {
        return self::$BD_Servidor;
    }
    public static function getBaseDatos()
    {
        return self::$BD_BaseDatos;
    }
    public static function getUsuario()
    {
        return self::$BD_Usuario;
    }
    public static function getContrasenia()
    {
        return self::$BD_Contrasenia;
    }
    public static function getTabla()
    {
        return self::$BD_Tabla;
    }
    public static function getCharSet()
    {
        return self::$BD_CharSet;
    }
}
?>