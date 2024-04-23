<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadoras SL</title>
</head>
<body>


<?php
if(isset($_POST["button"])){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];
    calculadora($operacion);
}
function calculadora($calculo)
{
    if(strcmp("Suma",$calculo)==0)
    {
        global $numero1;
        global $numero2;
        $resultado=$numero1+$numero2;
        echo "<br>El resultado es: <br> $resultado";
    }
    if(strcmp("Casting Variable String a Numerico",$calculo)==0)
    {
        global $numero1;
        global $numero2;
        $letra_num=30.432;
        $resultado1=$numero1+$letra_num;
        echo "<br>El resultado de sumar el numero 1 con un STRING es: <br> $resultado1 <br><br>";
        $resultado2=$numero2+(int)$letra_num;    //SE HA HECHO EL CASTING DEL NUMERO DECIMAL A ENTERO
        echo "<br>El resultado de sumar el numero 2 con un STRING es: <br> $resultado2 <br><br>";
        
    }
    if(strcmp("Tablas de Multiplicar",$calculo)==0)
    {
        global $oscilante;
        global $numero1;
        echo "<br>";
        while($numero1>=1)
        {
            echo "<div class=\"resaltar\" style=\"
                        float: left;
                        width: 150px;
                        weight: 220px;
                        background-color: yellow;
                        \">Tabla del ".$numero1;
            echo "<br>";
            for($oscilante=0;$oscilante<21;$oscilante++)
            {
                echo $oscilante."x".$numero1."=".$oscilante*$numero1."<br>";
            }
            echo "</div>";
            $numero1--;
        }
    }
}
?>
</body>
</html>