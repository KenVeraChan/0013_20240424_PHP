<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Asociativos</title>
</head>
<body>
    <?php
    //Array asociativo
        $puntero;
        $datos=array(                 
            "Nombre"=>"Rasselin",
            "Apellidos"=>"Wissangel Rousher",
            "Edad"=>19,
            "Ocupación"=>"Estudiante Universidad: 2 Curso",
            "Estado civil"=>"Soltera",
            "Trabajo"=>"Hostelería",
            "Residencia"=>"Shunay - Exteriores costeros"
        );
        foreach($datos as $clave=>$valor)
        {
            echo "$clave: $valor <br>";
        }
        echo "<br>";
        //Añadir un nuevo elemento a un Array asociativo
        $datos["Planeta"]="Ambur";
        foreach($datos as $clave=>$valor)
        {
            echo "$clave: $valor <br>";
        }

    //Array indexado
        echo "<br>";
        $semana[0]="Lunes";     
        $semana[1]="Martes";
        $semana[2]="Mércoles";
        $semana[3]="Jueves"; 
        for($i=0;$i<count($semana);$i++)
        {
            echo $semana[$i]."<br>";
        }
        echo "<br>";
    //Ordenar un Array
    //Antes de devolver por pantalla el Array se añade:
    sort($semana);
    for($i=0;$i<count($semana);$i++)
    {
        echo $semana[$i]."<br>";
    }
    echo "<br>";
    //Arrays multidimensionales asociativos
    $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                    "cítrico"=>"mandarina",
                                    "otros"=>"manzana"),
                    "leche"=>array("animal"=>"vaca",
                                   "vegetal"=>"coco"),
                    "carne"=>array("vacuno"=>"lomo",
                                   "porcino"=>"pata"            
                    ));
        echo $alimentos["carne"]["vacuno"];
        echo "<br>";
        echo "<br>";
        
        foreach ($alimentos as $key => $value) {
            echo $key."=><br>";
            foreach($value as $k=>$v){
                echo $k."=>".$v. "<br>"; 
            }
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
    //Arrays mutidimensionales indexados
    $numeros=array(array(1,1,1),array(2,2,2),array(3,3,3));
        for($i=0;$i<=2;$i++)
        {
            echo "<br>";
            for($j=0;$j<=2;$j++)
            {
                echo $numeros[$i][$j];
            }
        }
        echo "<br>";
        echo "<br>";
    //Desestructuracion de Arrays indexados
    function getCoordenadas()
    {
        return[12.45,42.42,98.21];
    }
    [$x,$y,$z]=getCoordenadas();
    echo "Coordenada X: ".$x."<br>"."Coordenada Y: ".$y."<br>"."Coordenada Z: ".$z."<br>";
    
    //Desestructuracion de Arrays asociativos
    $individuo=[
        "Nombre"=>"Rasselin",
        "Edad"=>19,
        "Ciudad"=>"Shunay"
    ];
    ["Nombre"=>$elNombre,"Edad"=>$laEdad,"Ciudad"=>$laCiudad]=$individuo;
    echo "<br>".$elNombre."<br>".$laEdad."<br>".$laCiudad."<br>";  
    
    ?>
</body>
</html>