<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Preparadas</title>
</head>
<body>
<?php
include("conexionPHP.php");
try{
        
    //CREANDO VARIABLES RECIBIDAS DE LOS BOTONES DE ACCION
    $busqueda=$_GET["busqueda"];
    $inserccion=$_GET["inserccion"];

    //CREANDO VARIABLES RECIBIDAS DEL FORMULARIO
    $id=$_GET["id"];
    $nom=$_GET["nom"];
    $ape=$_GET["ape"];
    $dir=$_GET["dir"];
    $pob=$_GET["pob"];
    $prof=$_GET["prof"];
    $aho=$_GET["aho"];

    $conexion=mysqli_connect($BD_servidor,$BD_usuario,$BD_contrasenia);
    mysqli_set_charset($conexion,"utf8");
    try{
        mysqli_select_db($conexion,$BD_nombre);
            ///COMPROBACION DE BUSQUEDA///
            if(!strcmp($busqueda,"BUSCAR") & strcmp($inserccion,"INSERTAR"))
            {
                echo "<br><br>";
                echo "HA ELEGIDO BUSCAR UN ACTUAL EMPLEADO";
                echo "<br><br>";
                $semaforo=0;   //señal de qué selector esta implicado tras los CONDICIONALES
                ///FASE DE COMPROBACION///
                


                /// INICIO DE CONSULTAS PREPARADAS ///
                //----- PASO 1 -----//
                //Creacion de la consulta //
                $sql="INSERT INTO CONTACTOS_EMPRESA(ID,NOMBRE,APELLIDOS,DIRECCION,POBLACION,PROFESION,AHORROS) VALUES(?,?,?,?,?,?,?)";

                //----- PASO 2 -----//
                //Preparación de la consulta con la función mysqli_prepare(), //
                //la cual requiere de dos argumentos: El objeto de conexión y la sentencia SQ //
                $resultado=mysqli_prepare($conexion,$sql);

                //----- PASO 3 -----//
                //Unir los parámetros a la sentencia sql. La función mysqli_param() lo hace //
                $okey=mysqli_stmt_bind_param($resultado,"isssssi",$id,$nom,$ape,$dir, $pob, $prof,$aho);

                //----- PASO 4 -----//
                //Ejecutar la consulta con la función mysqli_stmt_execute()//
                $okey=mysqli_stmt_execute($resultado);
                if($okey==false)
                {
                    echo "Error al ejecutar la consulta";
                }else{

                //----- PASO 5 -----//
                // Asociar variables al resultado de la consulta. //
                //Esto se consigue con la función mysqli_stmt_bind_result() //
                //$okey=mysqli_stmt_bind_result($resultado,$conID,$conApellidos,$conNombre,$conPoblacion,$conEstCiv,$conProfesion);
                
                //----- PASO 6 -----//
                //Leer los valores. Para ello se utilizará la función mysqli_stmt_fetch //
                    echo "Articulos Agregados!!! <br><br>";
                //    while(mysqli_stmt_fetch($resultado)){
                //            echo $conID."  ".$conApellidos."  ".$conNombre."  ".$conPoblacion."  ".$conEstCiv."   ".$conProfesion."<br>";
                //    }
                mysqli_stmt_close($resultado); 
                }
            }
            ///COMPROBACIÓN DE INSERCCION/// 
            if(!strcmp($inserccion,"INSERTAR") & strcmp($busqueda,"BUSCAR"))
            {
                echo "<br><br>";
                echo "HA ELEGIDO REGISTRAR UN NUEVO EMPLEADO";
                echo "<br><br>";
                /// INICIO DE CONSULTAS PREPARADAS ///
                //----- PASO 1 -----//
                //Creacion de la consulta //
                $sql="INSERT INTO CONTACTOS_EMPRESA(ID,NOMBRE,APELLIDOS,DIRECCION,POBLACION,PROFESION,AHORROS) VALUES(?,?,?,?,?,?,?)";

                //----- PASO 2 -----//
                //Preparación de la consulta con la función mysqli_prepare(), //
                //la cual requiere de dos argumentos: El objeto de conexión y la sentencia SQ //
                $resultado=mysqli_prepare($conexion,$sql);

                //----- PASO 3 -----//
                //Unir los parámetros a la sentencia sql. La función mysqli_param() lo hace //
                $okey=mysqli_stmt_bind_param($resultado,"isssssi",$id,$nom,$ape,$dir, $pob, $prof,$aho);

                //----- PASO 4 -----//
                //Ejecutar la consulta con la función mysqli_stmt_execute()//
                $okey=mysqli_stmt_execute($resultado);
                if($okey==false)
                {
                    echo "Error al ejecutar la consulta";
                }else{

                //----- PASO 5 -----//
                // Asociar variables al resultado de la consulta. //
                //Esto se consigue con la función mysqli_stmt_bind_result() //
                //$okey=mysqli_stmt_bind_result($resultado,$conID,$conApellidos,$conNombre,$conPoblacion,$conEstCiv,$conProfesion);
                
                //----- PASO 6 -----//
                //Leer los valores. Para ello se utilizará la función mysqli_stmt_fetch //
                    echo "Articulos Agregados!!! <br><br>";
                //    while(mysqli_stmt_fetch($resultado)){
                //            echo $conID."  ".$conApellidos."  ".$conNombre."  ".$conPoblacion."  ".$conEstCiv."   ".$conProfesion."<br>";
                //    }
                mysqli_stmt_close($resultado); 
                }
            }

    }catch(mysqli_sql_exception $error1)
    {
        echo "No se ha podido establecer conexión con la base de datos!";
    }

}catch(mysqli_sql_exception $error2){
    echo "No se ha podido realizar la conexión!";
}




?>
</body>
</html>
