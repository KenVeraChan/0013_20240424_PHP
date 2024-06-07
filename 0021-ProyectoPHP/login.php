<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logginCSS.css">
    <title>SISTEMA DE LOGIN</title>
</head>
<body>
    <h1>ACCESO JEFES DE SECCIÓN</h1>
    <form action="compruebaLogin.php" method="POST">
        <table>
            <tr><td class="izq">Login: </td><td class="der"><input type="text" name="login"></td></tr>
            <tr><td class="izq">Password: </td><td class="der"><input type="password" name="password"></td></tr>
            <tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr>
        </table>
    </form> 
</body>
</html>