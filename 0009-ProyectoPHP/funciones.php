<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
    function fraseMayus($frase,$conversion=true)
    {
        $frase=strtolower($frase);
        if($conversion==true){
            $resultado=ucwords($frase);
        }else{
            $resultado=strtoupper($frase);
        }
        return($resultado);
    }

    echo (fraseMayus("Hola Mundo",false));


    function incrementa($valor1)
    {
        $valor1++;
        return $valor1;
    }
    $numero=5;
    echo incrementa($numero)."<br>";
    echo $numero;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    function fraseMayusPasoPorValor($param)
    {
        $param=strtolower($param);

        $param=ucwords($param);
        return($param);
    }
    function fraseMayusPasoPorReferencia(&$param)
    {
        $param=strtolower($param);

        $param=ucwords($param);
        return($param);
    }
    $cadena="hOlA mUnDo";
    echo "Imprime sin aplicar funcion: <strong>".$cadena."</strong><br>";
    echo "Imprime por VALOR: <strong>".fraseMayusPasoPorValor($cadena)."</strong><br>";
    echo "Imprime por REFERENCIA: <strong>".fraseMayusPasoPorReferencia($cadena)."</strong><br>";
    echo "<strong>".$cadena."</strong><br>";
    ?>
</body>
</html>