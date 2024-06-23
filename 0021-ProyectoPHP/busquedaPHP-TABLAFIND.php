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
            echo "<br>";
            echo "<table style='margin-top: 60px; width:80%; margin-left: 10%'>";
            echo "<tr style='background-color:rgb(239,255,90)'>
                    <td><strong>ID</strong></td>
                    <td><strong>NOMBRE</strong></td>
                    <td><strong>APELLIDOS</strong></td>
                    <td><strong>DIRECCIÓN</strong></td>
                    <td><strong>POBLACIÓN</strong></td>
                    <td><strong>PROFESIÓN</strong></td>
                    <td><strong>AHORROS</strong></td>
                  </tr>";
            for ($i=0;$i<100;$i++)
            {
                echo "<tr>";
                for($j=0;$j<7;$j++)
                {
                    if(isset($_SESSION["matrizEmpleados"][$i][$j]))
                    {
                        echo "<td class='uno' style='background-color:rgb(235,245,148)'>".$_SESSION["matrizEmpleados"][$i][$j]."</td>";
                    }
                }
                echo "</tr>";
                $j=0; //Reinicio de la variable siguiente fila
            }
        echo "</table>" 
        ?>
    </div>
    <script>
        function tablaColor()
        {
            var cambia=document.getElementsByClassName("consulta")
            cambia[0].addEventListener("mouseenter",function(){
                cambia[0].style.transitionDuration = "0.5s";
                cambia[0].style.backgroundColor="yellow";
            })
            cambia[0].addEventListener("mouseleave",function(){
                cambia[0].style.transitionDuration = "0.5s";
                cambia[0].style.backgroundColor="white";
            })        
        }
    </script>
</body>
</html>