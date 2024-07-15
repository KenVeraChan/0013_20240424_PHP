<?php
    session_start();
    session_destroy();
    header("location:PHP_login.php");
?>