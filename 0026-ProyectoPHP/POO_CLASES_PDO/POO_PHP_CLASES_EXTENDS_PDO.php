<?php
require("POO_PHP_CLASES_PDO.php");
    class personas extends Conexion
    {
        public function personas()
        {
            parent:: __construct();  //CONECTARA TODO
        }
        public function get_Personas($datos)
        {
            $sql=$sql="SELECT ID,Nombre,Apellidos,Teléfono,Email FROM ".BD_tabla." WHERE ID=".$datos;
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            $this->conexion_db=null;
            return $resultado;
        }
    }
?>