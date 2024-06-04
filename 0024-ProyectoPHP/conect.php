<?php
require ("config.php");
    class Conexion{
        protected $conexion_db;
        public function __construct()
        {
        /*CON PDO*/
          try{
            $this->conexion_db=new PDO('mysql:host=localhost;dbname=cursosql','root','');  //('mysql:host='.BD_servidor.';dbname='.BD_nombre.','.BD_usuario.','.BD_contrasenia);           
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");
            //return $this->conexion_db;
            }catch(Exception $e){
                echo "la linea del error es: ".$e->getLine();
            }

        /* CON MYSQLI    
        
            $this->conexion_db=new mysqli(BD_servidor,BD_usuario,BD_contrasenia,BD_nombre);
            if($this->conexion_db->connect_errno)
            {
                echo ("Fallo al intentar conectar a MySQL:".$this->conexion_db->connect_error);
                return;
            }
            $this->conexion_db->set_charset(DB_charset);
        */
        }
    }
?>