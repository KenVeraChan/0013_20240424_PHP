<!-- ZONA DE LOGIN DE LA PÁGINA WEB  -->
<h1>ACCESO JEFES DE SECCIÓN</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <table>
            <tr><td class="izq">Login: </td><td class="der"><input type="text" name="login"></td></tr>
            <tr><td class="izq">Password: </td><td class="der"><input type="password" name="password"></td></tr>
            <tr><td>Recordar: <input type="checkbox" name="recordar" id="recordar"></td></tr>
            <tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr>
        </table>
    </form>