<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión con el Servidor</title>
</head>
<body>
    <?php
        $db_host="localhost";
        $db_nombre="cursosql";
        $db_usuario="root";
        $db_contrasenia="";

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $conexion=mysqli_connect($db_host,$db_usuario,$db_contrasenia); 
            // CODIGO EN EL CASO QUE FUNCIONE LA CONEXION //
                try{   
                    mysqli_select_db($conexion,$db_nombre);
                      // CODIGO EN EL CASO QUE FUNCIONE EL RECONOCIMIENTO CON LA BBDD//
                    mysqli_set_charset($conexion,"utf8");    
                    $consulta="SELECT * FROM alumnos";
                    $resultados=mysqli_query($conexion,$consulta);
                
                    while($fila=mysqli_fetch_row($resultados))
                    {   //Recorre el registro completo por ser verdadero el WHILE
                        echo $fila[0]."  ";
                        echo $fila[1]."  ";
                        echo $fila[2]."  ";
                        echo $fila[3]."  ";
                        echo "<br>";
                    }
                    mysqli_close($conexion);
                /////MANEJO DE ERRORES ////
                }catch(mysqli_sql_exception $error2){
                    //se podria crear pagina web de mostrar error
                    echo"Base de datos NO RECONOCIDA";
                    exit();
                }
        } catch (mysqli_sql_exception $error) {
            //se podria crear pagina web de mostrar error
            echo "Fallo al conectar con la BBDD";
            exit(); //Sale del codigo de PHP
        }  
    ?>
</body>
</html>