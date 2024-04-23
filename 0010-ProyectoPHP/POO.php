<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion Orientada a Objetos</title>
</head>
<body>
    <?php
        class coche{

            private int $ruedas;  //asignación de propiedad o atributo
            private string $color;
            private int $motor;
            public function __construct()
            {    //metodo constructor
                $this->ruedas=4;
                $this->color="";
                $this->motor=1600;
            }
            function arrancar(){
                echo "Estoy arrancando<br>";
            }
            function girar(){
                echo "Estoy girando<br>";
            }
            function frenar(){
                echo "Estoy frenando<br>";
            }
        }
        $coche1= new coche();  //estado inicial o instancia
        $coche2= new coche();
        $coche1->girar();

        class Persona {

            public function __construct(     //VERION PHP 8.0
                private string $nombre,
                private int $edad,
                private string $genero,
                private string $nacionalidad
            ){}
            public function getNombre(){
                return $this->nombre;
            }
            public function getEdad(){
                return $this->edad;
            }
            public function getGenero(){
                return $this->genero;
            }
            public function getNacionalidad(){
                return $this->nacionalidad;
            }
            public function setNombre($nombre){
                $this->nombre=$nombre;
            }
            public function setEdad($edad){
                $this->edad=$edad;
            }
            public function setGenero($genero){
                $this->genero=$genero;
            }
            public function setNacionalidad($nacionalidad){
                $this->nacionalidad=$nacionalidad;
            }
        }
        $persona1= new Persona("Rasselin",19,"Femenino","Shunaista");
        echo "La edad es: ".$persona1->getEdad();
    ?>
</body>
</html>