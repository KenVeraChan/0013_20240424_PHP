<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos al servidor BBDD</title>
</head>
<body>
    <?php
        $enviando=$_GET["enviar"];
        $borrando=$_GET["borrar"];
        $buscando=$_GET["buscar"];
        $actualizando=$_GET["actualizar"];
        if($enviando!=NULL)
        {
            insertarDatos();
        }
        if($borrando!=NULL)
        {
            borrarDatos();
        }
        if($buscando!=NULL)
        {
            consultaDatos();
        }
        if($actualizando!=NULL)
        {
           // actualizarDatos();
        }
        // 1) INSERTAR ALGUN NUEVO REGISTRO A LA BBDD
        function insertarDatos()
        {
            require("conexionPHP-5.php");
            $Codigo_Cliente=$_GET["COD"];
            $Empresa=$_GET["EMP"];
            $Direccion=$_GET["DIR"];
            $Telefono=$_GET["TEL"];
            $Poblacion=$_GET["POB"];
            $Responsable=$_GET["RES"];
            $Historial=$_GET["HIS"];
            //Se hace llamada al fichero de conexion PHP
            //Se podria haber hecho con INCLUDE
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                try {
                    $conexion=mysqli_connect($db_host,$db_usuario,$db_contrasenia); 
                    mysqli_set_charset($conexion,"utf8");
                    // CODIGO EN EL CASO QUE FUNCIONE LA CONEXION //
                        try{
                            //COMPRUEBA SI SE LE DIO AL BOTON DE REGISTRAR SIN CAMPOS RELLENADOS
                            if(strcmp($Codigo_Cliente,"")!=0)
                            {
                                mysqli_select_db($conexion,$db_nombre);
                                // CODIGO EN EL CASO QUE FUNCIONE EL RECONOCIMIENTO CON LA BBDD//
                                //Numeros sin comillas
                                $consulta="INSERT INTO CLIENTES(
                                                    CÓDIGOCLIENTE,
                                                    EMPRESA,
                                                    DIRECCIÓN,
                                                    TELÉFONO,
                                                    POBLACIÓN,
                                                    RESPONSABLE,
                                                    HISTORIAL) 
                                                    VALUES('$Codigo_Cliente',
                                                    '$Empresa',
                                                    '$Direccion',
                                                    '$Telefono',
                                                    '$Poblacion',
                                                    '$Responsable','$Historial')";
                                $resultados=mysqli_query($conexion,$consulta);
                                //CODIGO DE INSERCCION DE DATOS EN LA BBDD DE PHP MYADMIN
                                    if($resultados==false)
                                    {
                                        echo "Error en la consulta";
                                    }
                                    else{
                                        echo "<br>Registro realizado<br>-----------------------------------<br>";
                                        // SI SALE BIEN, SE SACARA POR PANTALLA LOS DATOS INTRODUCIDOS
                                        echo "<table><tr><td>$Codigo_Cliente</td></tr>";
                                        echo "<tr><td>$Empresa</td></tr>";
                                        echo "<tr><td>$Direccion</td></tr>";
                                        echo "<tr><td>$Telefono</td></tr>";
                                        echo "<tr><td>$Poblacion</td></tr>";
                                        echo "<tr><td>$Responsable</td></tr>";
                                        echo "<tr><td>$Historial</td></tr></table>";
                                    }
                                mysqli_close($conexion);
                            }
                            else{
                                echo "No ha introducido los datos para el REGISTRO!";
                            }
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
        }
        // 2) BORRAR ALGUN REGISTRO DE LA BBDD
        function borrarDatos()
        {
            require("conexionPHP-5.php");
            $Codigo_Cliente=$_GET["COD"];
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
                        //Numeros sin comillas
                        $consulta="DELETE FROM CLIENTES WHERE CÓDIGOCLIENTE='$Codigo_Cliente'";
                        $resultados=mysqli_query($conexion,$consulta);
                        //CODIGO DE INSERCCION DE DATOS EN LA BBDD DE PHP MYADMIN
                            if($resultados==false)
                            {
                                echo "Error en la consulta";
                            }
                            else{
                                //COMPRUEBA SI EL CAMPO DEL CODIGO CLIENTE SE HABÍA BORRADO 
                                if(mysqli_affected_rows($conexion)==0)
                                {
                                    //SI YA SE HABIA BORRADO EL REGISTRO PEDIDO
                                    echo "No hay registros existentes con el código pedido: ".$Codigo_Cliente. " o ya se había borrado antes!";
                                }
                                else
                                {
                                    //SI TODAVIA NO SE HA BORRADO EL REGISTRO PEDIDO
                                    echo "<br>Se ha borrado el registro siguiente:";
                                    echo "<br>-------------------------------------<br>";
                                    // SI SALE BIEN, SE SACARA POR PANTALLA LOS DATOS INTRODUCIDOS
                                    echo "<table><tr><td>$Codigo_Cliente</td></tr>";                                      
                                }
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
        }
        // 3) CONSULTA ALGUN REGISTRO EXISTENTE
        function consultaDatos()
        {
            require("conexionPHP-5.php");
            $Codigo_Cliente=$_GET["COD"];
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
                        //Numeros sin comillas
                        $consulta="SELECT * FROM CLIENTES WHERE CÓDIGOCLIENTE='$Codigo_Cliente'";
                        $resultados=mysqli_query($conexion,$consulta);
                        //CODIGO DE INSERCCION DE DATOS EN LA BBDD DE PHP MYADMIN
                            if($resultados==false)
                            {
                                echo "Error en la consulta";
                            }
                            else{
                                //COMPRUEBA SI SE LE DIO AL BOTON DE REGISTRAR SIN CAMPOS RELLENADOS
                                if(strcmp($Codigo_Cliente,"")!=0)
                                {
                                    //SI TODAVIA NO SE HA BORRADO EL REGISTRO PEDIDO
                                    echo "<br>Datos del registro consultado: ".$Codigo_Cliente;
                                    echo "<br>-------------------------------------<br>";
                                    // SI SALE BIEN, SE SACARA POR PANTALLA LOS DATOS INTRODUCIDOS
                                    while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC))
                                    {
                                        echo "<table><tr><td>";
                                        echo $fila['CÓDIGOCLIENTE']. "</td><td>";
                                        echo $fila['EMPRESA']. "</td><td>";
                                        echo $fila['DIRECCIÓN']. "</td><td>";
                                        echo $fila['TELÉFONO']. "</td><td>";
                                        echo $fila['POBLACIÓN']. "</td><td>";
                                        echo $fila['RESPONSABLE']. "</td><td>";
                                        echo $fila['HISTORIAL']. "</td></tr></table>";
                                        echo "<br><br>";    
                                    }  
                                }
                                else
                                {
                                    echo "No hay registros existentes con el código pedido o ya se había borrado antes!";
                                }
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
        }
?>
    
</body>
</html>