<?php
$exito=mail($mailCorreo,$mailAsunto,$mailMensaje,$headers);
if($exito)
{
    echo "El mensaje se ha enviado";
}
else
{
    echo "Ha habido un error";
}
?>