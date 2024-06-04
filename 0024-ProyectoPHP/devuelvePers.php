<?php
    require ("conect.php");
    class devuelvePers extends Conexion
    {
        public function devuelvePers()
        {
            //Llamar al constructor de la clase padre
           parent::__construct();
        }
        public function getPersonas($dato)
        {
            $sql= "SELECT 
                    ID,
                    Nombre,
                    Apellidos,
                    Dirección, 
                    Población,
                    Teléfono FROM ".BD_tabla.
                " WHERE Población='".$dato."'";

        /*CON PDO*/
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();   //Cierre de conexion
            return $resultado;
        /*CON POO   
            $resultado=$this->conexion_db->query($sql);
            $personas=$resultado->fetch_all(MYSQLI_ASSOC);
            return $personas;
        */
        }
        public function borrarMemoriaBuffer():void
        {
            $this->conexion_db=null;
        }
    }
?>