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
    <title>Consulta de Contactos</title>
    <link rel="stylesheet" href="eliminacionCSS.css">
    <script src="eliminacionJS.js"></script>
</head>
<body onload="tablaEliminacion()">
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
    <div class="cabecera"><h2><strong>Eliminación de un empleado</strong></h2></div> 
    <div><input type="submit" class="bloque_opciones" value="OPCIONES" onclick="llamada()""></div>
    <div><input type="submit" class="bloque_opciones" value="BÚSQUEDA" onclick="location.href='busquedaPHP.php'"></div>
    <div><input type="submit" class="bloque_opciones" value="INSERCCIÓN" onclick="location.href='inserccionPHP.php'"></div>
    <div><input type="submit" class="bloque_opciones" value="ACTUALIZACIÓN" onclick="location.href='actualizacionPHP.php'"></div>  
    <div><input type="submit" class="bloque_opciones" value="ELIMINACIÓN" onclick="location.href='eliminacionPHP.php'"></div>   
    <div class="consulta">
    <!-- ELIMINACIONES TABLA 4 -->
        <form class="tabla" action="consultasPreparadas.php" method="get">
           <p class="separacion"></p>
           <label class="celda">ID CONTACTO:<input type="text" class="celdas" name="id"></label> <!--ID-->
           <p class="separacion"></p>
           <label class="celda">NOMBRE:<input type="text" class="celdas" name="nom"></label> <!--NOMBRE-->
           <p class="separacion"></p>
           <label class="celda">APELLIDOS:<input type="text" class="celdas" name="ape"></label> <!--APELLIDOS-->
           <p class="separacion"></p>
           <label class="celda">DIRECCIÓN:<input type="text" class="celdas" name="dir"></label> <!--DIRECCION-->
           <p class="separacion"></p>
           <label class="celda">POBLADO:
                <select name="pob" class="desplegable">
                    <option></option>
                    <option>Barcelona</option>
                    <option>Girona</option>
                    <option>Lleida</option>
                    <option>Madrid</option>
                    <option>Northwith</option>
                    <option>Tarragona</option>
                    <option>Valencia</option>
                    <option>Zaragoza</option>
                </select>
            </label> <!--POBLADO-->
            <p class="separacion"></p>
           <label class="celda">PROFESIÓN:
           <select name="prof" class="desplegable">
                    <option></option>
                    <option>Abogado/a</option>
                    <option>Administrativo/a</option>
                    <option>Arquitecto/a</option>
                    <option>Asesor/a fiscal</option>
                    <option>Camarero/a</option>
                    <option>Comercial</option>
                    <option>Conductor/a</option>
                    <option>Contable</option>
                    <option>Delineante</option>
                    <option>Dependiente</option>
                    <option>Diseñador/a</option>
                    <option>Enfermero/a</option>
                    <option>Estudiante</option>
                    <option>Funcionario/a</option>
                    <option>Ingeniera Software</option>
                    <option>Oficial</option>
                    <option>Profesor/a</option>
                    <option>Recepcionista</option>
                    <option>Representante</option>
                    <option>Taxista</option>
                    <option>NULL</option>
                </select>
           </label> <!--PROFESION-->
           <p class="separacion"></p>
           <label class="celda">AHORROS:<input type="text" class="celdas" name="aho"></label> <!--AHORROS-->
           <p class="separacion"></p>
           <input type="submit" value="ELIMINAR" name="eliminacion" class="boton"> <!--AHORROS-->
           <input type="submit" value="CARGA" name="carga_eliminacion" class="boton"><!--AHORROS-->
           <input type="submit" value="BORRA" name="borrado_eliminacion" class="boton"> <!--AHORROS-->
        </form>
    </div>
    <script>
        if(<?php echo($_SESSION["semaforo"])?>==1)
        {
            rellenar();
        }
        if(<?php echo($_SESSION["semaforo"])?>==2)
        {
            limpiar();
        }
        if(<?php echo($_SESSION["semaforo"])?>==3)
        {
            eliminacion();
        }
        function rellenar()
        {
        document.getElementsByClassName("celdas")[0].value = "<?php echo($_SESSION["id"]);?>";
        document.getElementsByClassName("celdas")[1].value = "<?php echo($_SESSION["nombre"]);?>";
        document.getElementsByClassName("celdas")[2].value = "<?php echo($_SESSION["apellidos"]);?>";
        document.getElementsByClassName("celdas")[3].value = "<?php echo($_SESSION["direccion"]);?>";
        document.getElementsByClassName("desplegable")[0].value = "<?php echo($_SESSION["poblacion"]);?>";
        document.getElementsByClassName("desplegable")[1].value = "<?php echo($_SESSION["profesion"]);?>";
        document.getElementsByClassName("celdas")[4].value = "<?php echo($_SESSION["ahorros"]);?>";
        }
        function limpiar()
        {
            //CELDAS QUE SE COLOREAN PARA INDICAR QUE SON LAS MOSTRADAS
        document.getElementsByClassName("celdas")[0].value = "";
        document.getElementsByClassName("celdas")[1].value = "";
        document.getElementsByClassName("celdas")[2].value = "";
        document.getElementsByClassName("celdas")[3].value = "";
        document.getElementsByClassName("desplegable")[0].value = "";
        document.getElementsByClassName("desplegable")[1].value = "";
        document.getElementsByClassName("celdas")[4].value = "";
        }
        function eliminacion()
        {
            document.getElementsByClassName("celdas")[0].value = "";
            document.getElementsByClassName("celdas")[1].value = "";
            document.getElementsByClassName("celdas")[2].value = "";
            document.getElementsByClassName("celdas")[3].value = "";
            document.getElementsByClassName("desplegable")[0].value = "";
            document.getElementsByClassName("desplegable")[1].value = "";
            document.getElementsByClassName("celdas")[4].value = "";
        }
    </script>
</body>
</html>