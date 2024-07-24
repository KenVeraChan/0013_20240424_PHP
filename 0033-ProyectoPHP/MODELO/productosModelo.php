<?php
    class Productos_modelo{

        private $db;  //Almacenaje de la conexión
        private $productos; //Almacenaje de los productos extraídos de una tabla SQL
        public function __construct()
        {
            require_once "MODELO/conexionModelo.php" ;
            $this->db=Conectar::conexion();
            $this->productos=array();
        }
        public function getProductos()
        {
            //Se tiene que declarar una variable a parte para que pueda leer correctamente la consulta SQL
            $tabla=configModelo::getTabla();
            //Llamada al método estático de la devolución del nombre de la tabla de la BBDD
            $consulta=$this->db->query("SELECT * FROM $tabla");
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->productos[]=$filas;
            }
            return $this->productos;
        }
    }
?>