<?php
include "objetosNOestaticos.php";
include "objetosYESestaticos.php";
    class indexPruebas{
        public function getProductos()
        {
            $prueba= new configModeloNO();
            //Llamada al método estático de la devolución del nombre de la tabla de la BBDD
            echo "Nombre de la base de datos EN MÉTODOS NO ESTÁTICOS: ".$prueba->getNombre();
            echo "<br><br>";
            echo "Nombre de la base de datos EN MÉTODOS SI ESTÁTICOS: ".configModeloYES::getNombre();
        }
    }
?>

<?php
    $prueba2= new indexPruebas();
    echo $prueba2->getProductos();
?>