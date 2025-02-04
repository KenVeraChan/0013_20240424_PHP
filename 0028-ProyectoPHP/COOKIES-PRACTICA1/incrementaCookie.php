<?php
session_start();
function incrementaCookie($idioma)
{
    setcookie("idiomaSeleccionado",$idioma,time()+10);
}
?>