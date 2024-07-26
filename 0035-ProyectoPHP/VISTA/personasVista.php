<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD TERCERA VERSIÓN</title>
    <link href="VISTA/estilosIndex.css" rel="stylesheet">
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

    <?php include "CONTROLADOR/gestionPHP.php";  //Incluye la gestión y consultas ?>

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
            foreach($matrizPersonas as $persona):
        ?>
        <tr class="cabecera">
            <td class="cajaID"><?php echo $persona["id"];?></td>
            <td class="caja"><?php echo $persona["Nombre"];?></td>
            <td class="caja"><?php echo $persona["Apellido"];?></td>
            <td class="caja"><?php echo $persona["Direccion"];?></td>
            <td class="caja"><?php echo $persona["Poblacion"];?></td>
            <td class="caja"><?php echo $persona["Telefono"];?></td>
            <td class="caja"><?php echo $persona["Fecha_Nacimiento"];?></td>
            <td class="caja">         
                <a href="VISTA/borrarCRUD.php?id=<?php echo $persona["id"];?>">
                        <input class="botonera" type="submit" value="Borrar"></a>
                <a href="VISTA/actualizarCRUD.php?id=<?php echo $persona["id"];?>">
                        <input class="botonera" type="submit" value="Actualizar">
            </td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
        <form class="cabecera" action="VISTA/insertarCRUD.php" method="GET">
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
    <?php include "CONTROLADOR/botonesPaginacion.php";  //Incluye la gestión de botones paginación ?>
</body>
</html>