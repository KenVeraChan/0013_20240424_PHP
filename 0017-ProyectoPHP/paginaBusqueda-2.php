<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .celda{
            width: 10%;
            background-color: aqua;
            border: 3px;
            border-color: black;
        }
    </style>

<?php
    function consulta($laBusqueda)
    {
        require("conexionPHP-4.php");
        //Se hace llamada al fichero de conexion PHP
        //Se podria haber hecho con INCLUDE
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            $conexion=mysqli_connect($db_host,$db_usuario,$db_contrasenia); 
            mysqli_set_charset($conexion,"utf8");
            // CODIGO EN EL CASO QUE FUNCIONE LA CONEXION //
                try{
                    mysqli_select_db($conexion,$db_nombre);
                    // CODIGO EN EL CASO QUE FUNCIONE EL RECONOCIMIENTO CON LA BBDD//
                    $consulta="SELECT * FROM CLIENTES WHERE CÓDIGOCLIENTE='$laBusqueda'";
                    $resultados=mysqli_query($conexion,$consulta);
                    while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC))
                    {   //Recorre el registro completo por ser verdadero el WHILE
                        echo "<table id='tabla_uno'><tr><td class='celda'>";
                        echo $fila['CÓDIGOCLIENTE']."</td><td class='celda'>";
                        echo $fila['EMPRESA']."</td><td class='celda'>";
                        echo $fila['DIRECCIÓN']."</td><td class='celda'>";
                        echo $fila['POBLACIÓN']."</td><td class='celda'>";
                        echo $fila['RESPONSABLE']."</td><td class='celda'>";
                        echo "</td></tr></table>";
                        echo "<br>";
                    }
                    mysqli_close($conexion);
                /////MANEJO DE ERRORES ////
                }catch(mysqli_sql_exception $error2){
                    //se podria crear pagina web de mostrar error
                 //   echo"Base de datos NO RECONOCIDA";
                  //  exit();
                }
        } catch (mysqli_sql_exception $error) {
            //se podria crear pagina web de mostrar error
            echo "Fallo al conectar con la BBDD";
            exit(); //Sale del codigo de PHP
        }
    }  
    ?>
</head>
<body>
    <?php
        $miBusqueda=$_GET["buscar"];
        //peticion de busqueda de la variable del servidor GET
        $miPagina=$_SERVER["PHP_SELF"];
        //que aparezca la busqueda en la misma pagina
        if($miBusqueda!=NULL)
        {
            consulta($miBusqueda);

        }else
        {
            echo("
            <form action='" . $miPagina . "' method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'>
            </form>
            ");
        }

    ?>
</body>
</html>