<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SEGUNDA VERSIÓN</title>
    <link href="estilosIndex.css" rel="stylesheet">
</head>
<body>
    <?php
    include ("conexionPHP.php");
    $conexion=$base->query("SELECT * FROM $BD_tabla");
    $registro=$conexion->fetchAll(PDO::FETCH_OBJ);
    ?>
    <h2 id="titulo"><strong>CRUD</strong></h2><h6 id="subtitulo"><strong>Create-Read-Update-Delete</strong></h6>
    <table id="tabla">
        <tr class="cabecera">
            <td class="cajaT">Id</td><td class="cajaT">Nombre</td><td class="cajaT">Apellido</td><td class="cajaT">Direccion</td></tr>
        </tr>

        <?php
            foreach($registro as $persona):
        ?>
        <tr class="cabecera">
            <td class="cajaID"><?php echo($persona->id);?></td>
            <td class="caja"><?php echo($persona->Nombre);?></td>
            <td class="caja"><?php echo($persona->Apellido);?></td>
            <td class="caja"><?php echo($persona->Direccion);?></td>
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
                    <td class="cajaB"><input type="submit" class="botonera" value="Insertar"></td>
                </tr>
            </table>
        </form>

</body>
</html>