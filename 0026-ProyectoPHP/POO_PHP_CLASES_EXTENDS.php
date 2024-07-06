<?php
require("POO_PHP_CLASES.php");
    class personas extends Conexion
    {
        public function personas()
        {
            parent::__construct();  //CONECTARA TODO
        }
        public function get_Personas()
        {
            $resultado=$this->conexion_db->query('SELECT * FROM '.BD_tabla);
            $personas=$resultado->fetch_all(MYSQLI_ASSOC);
            return $personas;
        }
    }
?>