<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de Stock</title>
</head>
<body>
<?php
    include("contabilidadLaboratorio.php");
    include("productosQuimicos.php");
    include("productosBiologicos.php");

    $suministros= new contabilidad();
    $Acido= new prodQuimicos("Ácido Sulfúrico",3,"20240423-3");
    $suministros->contaje();
    echo "La contabilidad queda: ".$suministros->registro()."<br>";
    $Glucosa= new prodBiologicos("Glucógeno",30);
    $suministros->contaje();
    echo "La contabilidad queda: ".$suministros->registro()."<br>";
    $Glucosa->perjudicial();

?>
</body>
</html>