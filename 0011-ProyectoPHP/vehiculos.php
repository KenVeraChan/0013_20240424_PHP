<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
    

<?php
    class vehiculo{              //Clase principal
        function __construct(    //Version PHP8.0
            private int $motor,
            private string $matricula,
            private string $nacionalidad
        ){}
        function arrancar()
        {
            echo "Arrancando Veiculo<br>";
        }
            public function getMotor()
            {
                return $this->motor;
            }
            public function setMotor(int $motor)
            {
                $this->motor = $motor;
                return $this;
            }
            public function getMatricula()
            {
                return $this->matricula;
            }
            public function setMatricula(string $matricula)
            {
                $this->matricula = $matricula;
                return $this;
            }
            public function getNacionalidad()
            {
                return $this->nacionalidad;
            }
            public function setNacionalidad(string $nacionalidad)
            {
                $this->matricula = $nacionalidad;
                return $this;
            }
    }

    //----------------------------------------------------------------------------

    class trenes extends vehiculo{
        function __construct(
            private int $puertasAuto,
            private string $modelo
        ){}
        function arrancar(){
            parent::arrancar();
            echo "El tren comienza a rodar<br>";
        }
            public function getPuertasAuto()
            {
                return $this->puertasAuto;
            }
            public function setPuertasAuto(int $puertasAuto)
            {
                $this->puertasAuto = $puertasAuto;
                return $this;
            }
            public function getModelo()
            {
                return $this->modelo;
            }
            public function setModelo(string $modelo)
            {
                        $this->modelo = $modelo;
                        return $this;
            }
    }
    $limusina= new vehiculo(4,1600,"VA8332AJ");
    echo "El coche registrado es: ".$limusina->getMatricula()."<br>";
    $tren= new trenes(120,"Alvia");
    $tren->setMatricula("34JPP99");
    echo "El tren: ".$tren->getMatricula()." tiene: ".$tren->getPuertasAuto()." puertas Automáticas<br>";
    echo $limusina->arrancar();
    echo $tren->arrancar();

?>
</body>
</html>