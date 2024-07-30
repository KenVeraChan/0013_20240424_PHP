<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIO CORREOS ELECTRÓNICOS</title>
    <link href="interfazCorreoPHP.css" rel="stylesheet">
</head>
<body>
    <div class="cajaCorreo">
        <form action="../CONTROLADOR/enviarMail.php" method="POST">
            <table>
                <tr>
                    <td class="celda">
                    <input type="submit" id="enviar" name="Enviar">
                    </td>
                    <td class="celda">
                    <label class="concepto"><strong>Nombre: </strong></label><input class="cajaRellenoN" name="nombre" type="text" placeholder="Nombre">
                    <label class="concepto"><strong>Apellidos: </strong></label><input class="cajaRellenoN" name="apellidos" type="text" placeholder="Apellidos">
                    </td>
                </tr>
                <tr>
                    <td class="celdaCorreo">
                        <label class="concepto"><strong>Numero de Teléfono: </strong></label><input class="cajaRelleno" name="telefono" type="text" placeholder="Número de teléfono">
                    </td>
                </tr>
                <tr>
                    <td class="celdaCorreo">
                        <label class="concepto"><strong>E-Mail: </strong></label><input class="cajaRelleno" type="email" name="correo" placeholder="correo@corporacion.xx">
                    </td>
                </tr>
                <tr>
                    <td class="celdaCorreo">
                        <label class="concepto"><strong>Asunto del Mensaje: </strong></label><input class="cajaRelleno" name="asunto" type="text" placeholder="Asunto del Mensaje">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="concepto"><strong>Cuerpo del Mensaje: </strong></label><input class="cajaMensaje" type="text" name="mensaje" placeholder="Cuerpo del mensaje">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>