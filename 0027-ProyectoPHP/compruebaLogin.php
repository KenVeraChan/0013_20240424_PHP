<?php
//SE INTRODUCE EN UN ISSET PARA VER SI ESTA VACIO LA VARIABLE GLOBAL Y VER SI ESTA REGISTRADO EL USUARIO O NO
        //METODO 1: EMPLEANDO EN TODO ESTE FICHERO --> PDO PARA LA CONEXION
        require "conexionPHP.php";
        try{
            $base= new PDO('mysql:host='.$BD_servidor.';dbname='.$BD_nombre,$BD_usuario,$BD_contrasenia);
            $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM $BD_tabla_2 WHERE USUARIO= :login AND CONTRASENIA= :password"; //uso de marcadores
            $resultado=$base->prepare($sql);
            $login=htmlentities(addslashes($_POST["login"]));
            $password=htmlentities(addslashes($_POST["password"]));
                    //htmlentities() lo que hace es: Convert all applicable characters to HTML entities
                    //addslashes() lo que hace es: escapar de evitar entradas de teclado raras o bien inyecciones SQL
            $resultado->bindValue(":login",$login);
            $resultado->bindValue(":password",$password);
            $resultado->execute();
            $numeroRegistro=$resultado->rowCount();  //Si el usuario existe detectará una fila encontrada, sino dará cero filas
                if($numeroRegistro!=0)
                {
                    //Antes de redirigir al usuario se declarará la variable global session_start()
                    session_start();  //se inicia la sesion
                    //La variable SUPERGLOBAL $_SESSION["nombre_elegido"]
                    //permite usarse en cualquier parte del código de cualquier página creada PHP
                    $_SESSION["semaforo"]=1;
                }else{
                    //Antes de redirigir al usuario se declarará la variable global session_start()
                    session_start();  //se inicia la sesion
                    //La variable SUPERGLOBAL $_SESSION["nombre_elegido"]
                    //Se le redirige a la misma pagina propia de LOGIN
                        $_SESSION["semaforo"]=2;
                }
                

        }catch(Exception $e){
            die("Error: ".$e->getMessage()."  ".$e->getLine());
        }
?>