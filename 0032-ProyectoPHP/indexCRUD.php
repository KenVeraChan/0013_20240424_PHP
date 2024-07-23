<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SEGUNDA VERSIÓN</title>
    <link href="estilosIndex.css" rel="stylesheet">
</head>
<body>

    <!--INTRODUCCION DE LA PAGINACION -->
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="GET" style="margin-top:20px; margin-left:20px">
        <table>
            <tr>
                <td><label><strong>Introduzca una población: </strong></label></td>
                <td><input type="text" name="poblacion" placeholder="En blanco, carga TODO"
                           style="text-align:center; width: 160px; height: 16px; background-color:rgb(241, 229, 48); margin-left: 10%"></td>
                <td><input type="submit" name="enviar" value="CARGAR" style="width:75px; background-color: darkgrey; margin-left: 20px"></td>
            </tr>
        </table>
    </form>
    <?php
    include("conexionPHP.php");
    $db_elegido=$_GET["poblacion"];
    $tamPagina=3;
    if(isset($_GET["cargaPagina"]))
        {
            $paginaInicial=($_GET["cargaPagina"])* $tamPagina;
            $_GET["enviar"]=true; //Reactivar por cada accionamiento de boton de paginación
        }
    else
        {
            $paginaInicial=0;
            $_GET["enviar"]=true;
        }
    if(isset($db_elegido))
        {
        //Si no es nulo y tiene contenido se guarda en $_SESSION
        $_SESSION["poblado"]=$db_elegido;
        }
    else
        {
        //Si no tiene contenido se recuerda lo que tenía contenido antes $_SESSION
        $db_elegido=$_SESSION["poblado"];
        }
    if(!strcmp($db_elegido,""))
    {   //EN EL CASO DE LA PRIMERA CARGA DE LA PAGINA WEB
        $conexion=$base->query("SELECT * FROM $BD_tabla LIMIT  $paginaInicial,$tamPagina");
        $registro=$conexion->fetchAll(PDO::FETCH_OBJ);
        //Contaje de filas para la paginación posterior
        $filasSQL=$base->query("SELECT * FROM $BD_tabla")->rowCount();  
        //Contar numero de filas afectadas por la sentencia SQL
    }
    else
    {   //RESTO DE CARGAS DE LA PAGINA WEB
        $conexion=$base->query("SELECT * FROM $BD_tabla WHERE Poblacion='$db_elegido' LIMIT  $paginaInicial,$tamPagina");
        $registro=$conexion->fetchAll(PDO::FETCH_OBJ);
        //Contaje de filas para la paginación posterior
        $filasSQL=$base->query("SELECT * FROM $BD_tabla WHERE Poblacion='$db_elegido'")->rowCount();  
        //Contar numero de filas afectadas por la sentencia SQL
    }
    ?>
    <h2 id="titulo"><strong>CRUD</strong></h2><h6 id="subtitulo"><strong>Create-Read-Update-Delete</strong></h6>
    <table id="tabla">
        <tr class="cabecera">
            <td class="cajaT">Id</td>
            <td class="cajaT">Nombre</td>
            <td class="cajaT">Apellido</td>
            <td class="cajaT">Direccion</td>
            <td class="cajaT">Poblacion</td>
            <td class="cajaT">Telefono</td>
            <td class="cajaT">Fecha Nacimiento</td>
        </tr>

        <?php
            foreach($registro as $persona):
        ?>
        <tr class="cabecera">
            <td class="cajaID"><?php echo($persona->id);?></td>
            <td class="caja"><?php echo($persona->Nombre);?></td>
            <td class="caja"><?php echo($persona->Apellido);?></td>
            <td class="caja"><?php echo($persona->Direccion);?></td>
            <td class="caja"><?php echo($persona->Poblacion);?></td>
            <td class="caja"><?php echo($persona->Telefono);?></td>
            <td class="caja"><?php echo($persona->Fecha_Nacimiento);?></td>
            <td class="caja">         
                <a href="borrarCRUD.php?id=<?php echo($persona->id);?>">
                        <input class="botonera" type="submit" value="Borrar"></a>
                <a href="actualizarCRUD.php?id=<?php echo($persona->id);?>">
                        <input class="botonera" type="submit" value="Actualizar">
            </td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
        <form class="cabecera" action="insertarCRUD.php" method="GET">
            <table id="tabla">
                <tr class="cajaReg">
                    <td class="cajaID"><input style="width:20px" type="text" class="rellenar" name="id" placeholder="Id"></td>
                    <td class="caja"><input type="text" class="rellenar" name="nombre" placeholder="Nombre"></td>
                    <td class="caja"><input type="text" class="rellenar" name="apellido" placeholder="Apellido"></td>
                    <td class="caja"><input type="text" class="rellenar" name="direccion" placeholder="Direccion"></td>
                    <td class="caja"><input type="text" class="rellenar" name="poblacion" placeholder="Poblacion"></td>
                    <td class="caja"><input type="text" class="rellenar" name="telefono" placeholder="Telefono"></td>
                    <td class="caja"><input type="text" class="rellenar" name="fecha_nacimiento" placeholder="Fecha Nacimiento"></td>
                    <td class="cajaB"><input type="submit" class="botonera" value="Insertar"></td>
                </tr>
            </table>
        </form>
    <?php
            echo "</table>";
            echo "<br><br>";
            //ZONA DE PAGINACION//
            $filasSQLBoton=$filasSQL/$tamPagina;
            echo "Hay: ".$filasSQL." regitros detectados";
            echo"<br><br>";
            echo"<form method='GET'><table style='width:200px'><tr>";
            for($i=0;$i<(round($filasSQLBoton,0,PHP_ROUND_HALF_UP)+1);$i++)
            {
                echo"<td><input 
                        type='submit'
                        name='cargaPagina' 
                        value='$i' 
                        style='width: 30px; 
                                heigth: 4px; 
                                color: yellow; 
                                background-color: grey;
                                text-align: center
                        '></td>";
            }
            echo "</tr></table></form>";
    ?>
</body>
</html>