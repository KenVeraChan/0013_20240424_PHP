<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilosRegistroCifrado.css" rel="stylesheet">
    <title>REGISTRO USUARIOS</title>
</head>
<body>
    <h2 id="titulo"><strong>REGISTRO USUARIOS</strong></h2>
    <form action="registroUsuariosPruebaPHP-3.php" method="POST">
        <table id="tabla">
            <tr class="fila"><td><label>USUARIO:</label><input type="text" name="usuario"></td></tr>
            <tr class="fila"><td><label>CONTRASEÑA:</label><input type="password" name="contrasenia"></td></tr>
            <tr class="fila"><td><input type="submit" name="enviar" value="enviar"></td></tr>
        </table>
    </form>
</body>
</html>