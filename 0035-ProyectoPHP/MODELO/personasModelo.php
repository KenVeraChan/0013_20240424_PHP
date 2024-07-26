<?php
    class Personas_modelo{

        private $db;  //Almacenaje de la conexión
        private $personas; //Almacenaje de los productos extraídos de una tabla SQL
        public function __construct()
        {
            require_once "MODELO/conexionModelo.php" ;
            $this->db=Conectar::conexion();
            $this->personas=array();
        }
        public function getPersonas()
        {
            //Se tiene que declarar una variable a parte para que pueda leer correctamente la consulta SQL
            $tabla=configModelo::getTabla();
            //Llamada al método estático de la devolución del nombre de la tabla de la BBDD
            $consulta=$this->db->query("SELECT * FROM $tabla");
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->personas[]=$filas;
            }
            return $this->personas;
        }
    }
?>