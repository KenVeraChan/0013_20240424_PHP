<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIDA DE IMÁGENES AL SERVIDOR</title>
</head>
<body>
    <form action="../MODELO/eleccion.php" method="POST" enctype="multipart/form-data">
        <table style="margin: auto; width:450px; border:2px dotted #FF0000;">
            <tr>
                <td>
                    <label for="imagen">Imagen: </label>
                </td>
                <td>
                    <input type="file" name="archivo" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="envia" value="Enviar Imagen">
                </td>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="carga" value="Cargar Imagen">
                </td>
            </tr>
        </table>
    </form>
    <?php
    ?>
</body>
</html>