<?php
//INICIA LA SESION DE ENTRADA
    //También permite rescatar la información almancenada en la variable superglobal $_SESSION
    $_SESSION["usuario"]=$_POST["login"];  //Se sasigna la sesión creada al usuario reigstrado LOGEADO
        echo "<div style=' 
                        float: right;
                        position: relative;
                        background-color: transparent;
                        text-align: center;
                        color: black;
                        width: 300px;
                        height: 25px;
                        padding-top: 10px;
                        '>Hola BIENVENIDO/A: ".$_SESSION["usuario"]."</div>
            <a style=' 
                        float: right;
                        background-color: transparent;
                        text-align: center;
                        font-size: 90%;
                        color: black;
                        width: 120px;
                        height: 25px;
                        text-decoration: none;
                        padding-top: 12px;
                        '
                href='salidaPagina.php'><strong>CERRAR SESION</strong></a> ";
    //ZONA DE LA COMPROBACION DEL USUARIO REGISTRADO EN LA BBDD DE LA PÁGINA WEB
        echo "Conexión establecida y usuario dentro de la RED";
?>