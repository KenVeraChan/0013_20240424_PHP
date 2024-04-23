<?php
    class contabilidad{
        public function __construct(

        ){}
        private static int $entradaProductos=0;
        private static int $AlmacenProductos=10;
        
        public static function contaje()
        {
            self::$AlmacenProductos--;
            self::$entradaProductos++;
        }
        public function limite($AlmacenProductos)
        {
            if($AlmacenProductos<1)
            {
                echo "Se ha llegado al limite de productos almacenados!";
            }
        }
        public function registro()
        {
            echo "<br>Quedan: ".self::$AlmacenProductos." aun sin ocupar. Han entrado: ".self::$entradaProductos." productos en almacen.<br>";
        }
    }
?>