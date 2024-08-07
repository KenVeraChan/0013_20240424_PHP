<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRUEBA REGISTRO</title>
</head>
<body>
    <?php
    //CREACION DE UN NUEVO USUARIO CON CONTRSEÑA CIFRADA
    include "./../conexionPHP.php";
    $usuario=$_POST["usuario"];
    $contrasenia=$_POST["contrasenia"];
    $pass_cifrado=password_hash($contrasenia,PASSWORD_DEFAULT, array("cost"=>12));
    //Se crea un coste metido por array para la generacion del cifrado de la contraseña
    try{
        $base= new PDO('mysql:host='.$BD_servidor.';dbname='.$BD_nombre,$BD_usuario,$BD_contrasenia);
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $sql="INSERT INTO $BD_tabla_2 (ID,USUARIO,CONTRASENIA) VALUES (:ID,:USU,:CONTRA)"; //uso de marcadores
        $resultado=$base->prepare($sql);
                //htmlentities() lo que hace es: Convert all applicable characters to HTML entities
                //addslashes() lo que hace es: escapar de evitar entradas de teclado raras o bien inyecciones SQL
        $resultado->execute(array(":ID"=>5,":USU"=>$usuario,":CONTRA"=>$pass_cifrado));
        echo "Usuario Registrado";
        $resultado->closeCursor();
    }
    catch(Exception $e)
    {
        echo "Error en la conexion con el servidor. <br>Código del error: ".$base->errorCode().".<br> Información del error: ".$base->errorInfo();
    }
    ?>
</body>
</html>
