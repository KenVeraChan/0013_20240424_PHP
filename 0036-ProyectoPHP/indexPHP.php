<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIDA DE IMÁGENES AL SERVIDOR</title>
</head>
<body>
    <form action="datosImagen.php" method="POST" enctype="multipart/form-data">
        <table style="margin: auto; width:450px; border:2px dotted #FF0000;">
            <tr>
                <td>
                    <label for="imagen">Imagen: </label>
                </td>
                <td>
                    <input type="file" name="imagen" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" value="Enviar Imagen">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>l