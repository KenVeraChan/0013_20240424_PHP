<?php
    require("POO_ConexionPHP_CLASES_MYSQLI.php");
    class Conexion
    {
        protected $conexion_db;
        public function __construct()
        {
            $this->conexion_db=new mysqli(BD_servidor,BD_usuario,BD_contrasenia,BD_nombre);
            if($this->conexion_db->connect_errno)
            {
                echo "Fallo al conectar a Mysql: ".$this->conexion_db->connect_errno;
                return;
            }
            $this->conexion_db->set_charset((DB_charset));
        }
    }
?>