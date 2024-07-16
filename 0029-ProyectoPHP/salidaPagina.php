<?php
    session_start();
    session_destroy();
    setcookie("nombre_usuario","Rasselin",time()-1);
    header("location:PHP_Login.php");
?>