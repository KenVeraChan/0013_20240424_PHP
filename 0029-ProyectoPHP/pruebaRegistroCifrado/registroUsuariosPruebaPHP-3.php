<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRUEBA SI ESTA EN BBDD</title>
</head>
<body>
    <?php
    //CREACION DE UN NUEVO USUARIO CON CONTRSEÑA CIFRADA
    include "./../conexionPHP.php";
    try{
        $usuario=htmlentities(addslashes($_POST["usuario"]));
        $contrasenia=htmlentities(addslashes($_POST["contrasenia"]));
        $contador=0; //Para el numero de usuarios con una misma condicion de contraseña (en teoria 1 solo)
        $base= new PDO('mysql:host='.$BD_servidor.';dbname='.$BD_nombre,$BD_usuario,$BD_contrasenia);
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $sql="SELECT * FROM $BD_tabla_2 WHERE USUARIO=:USU"; //uso de marcadores
        $resultado=$base->prepare($sql);
                //htmlentities() lo que hace es: Convert all applicable characters to HTML entities
                //addslashes() lo que hace es: escapar de evitar entradas de teclado raras o bien inyecciones SQL
        $resultado->execute(array(":USU"=>$usuario));
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
        {
            if(password_verify($contrasenia,$registro['CONTRASENIA']))
            {
                $contador++;
            }
        }
        if($contador>0)
        {
            echo "Usuario encontrado y está registrado".". Contador= ".$contador;
        }
        else
        {
            echo "Usuario no encontrado en la BBDD";
        }
    $resultado->closeCursor();
    }
    catch(Exception $e)
    {
        echo "Error en la conexion con el servidor. <br>Código del error: ".$base->errorCode().".<br> Información del error: ".$base->errorInfo();
    }
    ?>
</body>
</html>