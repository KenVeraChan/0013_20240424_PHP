<?php
        //INICIA LA SESION DE ENTRADA
        session_start();  //Para reanudar la sesion creada si se ha iniciado sino creará una nueva
                          //También permite rescatar la información almancenada en la variable superglobal $_SESSION
        if(!isset($_SESSION["usuario"]))
        {
            //Si es falso que no se ha registrado nada en la sesion
            header("Location:login.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Empleados</title>
    <link rel="stylesheet" href="busquedaCSS-TABLAFIND.css">
    <script src="busquedaJS-TABLAFIND.js"></script>
</head>
<body onload="tablaBusqueda()">
<?php
    echo("<div style=' 
                    float: right;
                    position: relative;
                    background-color: transparent;
                    text-align: center;
                    color: black;
                    width: 300px;
                    height: 25px;
                    padding-top: 10px;
                    '>Hola BIENVENIDO/A: ".$_SESSION["usuario"]."</div>
        <a style=' 
                    float: right;
                    background-color: transparent;
                    text-align: center;
                    font-size: 90%;
                    color: black;
                    width: 120px;
                    height: 25px;
                    text-decoration: none;
                    padding-top: 12px;
                    '
            href='salidaPagina.php'><strong>CERRAR SESION</strong></a> ");
?>
    <div class="cabecera"><h2><strong>Busqueda de Empleados en la Empresa</strong></h2></div> 
    <div><input type="submit" class="bloque_opciones" value="OPCIONES" onclick="llamada()""></div>
    <div><input type="submit" class="bloque_opciones" value="BÚSQUEDA" onclick="location.href='busquedaPHP.php'"></div>
    <div><input type="submit" class="bloque_opciones" value="INSERCCIÓN" onclick="location.href='inserccionPHP.php'"></div>
    <div><input type="submit" class="bloque_opciones" value="ACTUALIZACIÓN" onclick="location.href='actualizacionPHP.php'"></div>  
    <div><input type="submit" class="bloque_opciones" value="ELIMINACIÓN" onclick="location.href='eliminacionPHP.php'"></div>   
    <div class="consulta">
        <?php
                $empleadosRegistro[100][100] = $_SESSION["matrizEmpleados"];
                echo "<br>";
                for ($i=0;$i<100;$i++)
                 {
                    for($j=0;$j<100;$j++)
                        {
                            if(!empty($empleadosRegistro[$i][$j]))
                            {
                                echo $empleadosRegistro[$i][$j]."<br>";
                            }
                            else
                            {
                                $i=99; //Pone fin al bucle
                                $j=99;
                            }
                        }
                    $j=0; //Reinicio de la variable siguiente fila
                }    
        ?>
    </div>
</body>
</html>