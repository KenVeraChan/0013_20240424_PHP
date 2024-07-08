<?php
    require("POO_ConexionPHP_CLASES_PDO.php");
    class Conexion
    {
        protected $conexion_db;
        public function __construct()
        {
            try
            {
                $this->conexion_db=new PDO('mysql:host='.BD_servidor.';dbname='.BD_nombre,BD_usuario,BD_contrasenia);
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->conexion_db->exec("SET CHARACTER SET utf8");
            }
            catch(Exception $e)
            {
                echo "La línea de error es: ".$e->getLine();
            }
        }
    }
?>