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
    //METODO 2: EMPLEANDO EN TODO ESTE FICHERO --> DE MYSQLI PARA LAS CONSULTAS PREPARADAS
    //CREANDO VARIABLES RECIBIDAS DE LOS BOTONES DE ACCION
    $busqueda=$_GET["busqueda"];
    $inserccion=$_GET["inserccion"];
    $actualizacion=$_GET["actualizacion"];
    $carga=$_GET["carga"];
    $eliminacion=$_GET["eliminacion"];
    //CREANDO VARIABLES RECIBIDAS DEL FORMULARIO
    $id=$_GET["id"];
    $nom=$_GET["nom"];
    $ape=$_GET["ape"];
    $dir=$_GET["dir"];
    $pob=$_GET["pob"];
    $prof=$_GET["prof"];
    $aho=$_GET["aho"];
    //SE CREA UN ARRAY UNIDIMENSIONAL DE VALORES PARA FACILITAR EL CODIGO
    $datos_FORM=array($id,$nom,$ape,$dir,$pob,$prof,$aho);
    $datos_CONSULTA=array("ID","NOMBRE","APELLIDOS","DIRECCION","POBLACION","PROFESION","AHORROS");
    $datos_CONSULTA_DINERO=array(0,1000,25000,50000,75000,100000,125000,20000000);
    //CONEXION PROCESO
    $conexion=mysqli_connect($BD_servidor,$BD_usuario,$BD_contrasenia);
    mysqli_set_charset($conexion,"utf8");
    try{
        mysqli_select_db($conexion,$BD_nombre);
            ///COMPROBACION DE BUSQUEDA///
            if(!strcmp($busqueda,"BUSCAR") & strcmp($inserccion,"INSERTAR") & strcmp($actualizacion,"ACTUALIZAR") & strcmp($eliminacion,"ELIMINAR"))
            {
                echo "<br><br>";
                echo "HA ELEGIDO BUSCAR UN ACTUAL EMPLEADO";
                echo "<br><br>";
                $semaforo=0;   //señal de qué selector esta implicado tras los CONDICIONALES
                $puntero=0;    //señal para la seleccion del tipo de AHORRO en el desplegable
                ///FASE DE COMPROBACION///
                for($semaforo=0;$semaforo<count($datos_FORM);$semaforo++)
                {
                    if(!is_null($datos_FORM[$semaforo]) && $semaforo!=10)
                    {
                        /// INICIO DE CONSULTAS PREPARADAS ///
                        //----- PASO 1 -----//
                        //Creacion de la consulta //
                        if($semaforo==6)
                        {
                          //CON EL DESPLEGABLE DE COMPARACIÓN
                            if(!strcmp($datos_FORM[$semaforo],"Menos de 1.000"))
                            {
                                $puntero=0;
                            }
                            if(!strcmp($datos_FORM[$semaforo],"De 1.000 a 25.000"))
                            {
                                $puntero=1;
                            }
                            if(!strcmp($datos_FORM[$semaforo],"De 25.000 a 50.000"))
                            {
                                $puntero=2;
                            }
                            if(!strcmp($datos_FORM[$semaforo],"De 50.000 a 75.000"))
                            {
                                $puntero=3;
                            }
                            if(!strcmp($datos_FORM[$semaforo],"De 75.000 a 100.000"))
                            {
                                $puntero=4;
                            }
                            if(!strcmp($datos_FORM[$semaforo],"De 100.000 a 125.000"))
                            {
                                $puntero=5;
                            }
                            if(!strcmp($datos_FORM[$semaforo],"Mas de 125.000"))
                            {
                                $puntero=6;
                            }
                                $sql="SELECT 
                                    $datos_CONSULTA[0],
                                    $datos_CONSULTA[1],
                                    $datos_CONSULTA[2],
                                    $datos_CONSULTA[3],
                                    $datos_CONSULTA[4],
                                    $datos_CONSULTA[5],
                                    $datos_CONSULTA[6]
                                FROM $BD_tabla 
                                WHERE $datos_CONSULTA[$semaforo]>? AND $datos_CONSULTA[$semaforo]<?";
                                $resultado=mysqli_prepare($conexion,$sql);
                                $okey=mysqli_stmt_bind_param($resultado,"ii",$datos_CONSULTA_DINERO[0+$puntero],$datos_CONSULTA_DINERO[1+$puntero]);
                                $okey=mysqli_stmt_execute($resultado);
                                if($okey==false)
                                {
                                    echo "Error al ejecutar la consulta";
                                }else{
                                $okey=mysqli_stmt_bind_result($resultado,$conID,$conNombre,$conApellidos,$conDireccion,$conPoblacion,$conProfesion,$conAhorros);
                                    echo "Personal encontrado: <br><br>";
                                    while(mysqli_stmt_fetch($resultado)){
                                            echo $conID."  ".$conNombre."  ".$conApellidos."  ".$conDireccion."  ".$conPoblacion."  ".$conProfesion."  ".$conAhorros."<br>";
                                    }
                                mysqli_stmt_close($resultado); 
                                }
                            $semaforo=10;
                        }
                        else
                        {
                          //CON EL RESTO DE OPCIONES NO COMPARATIVAS
                            $sql="SELECT 
                                    $datos_CONSULTA[0],
                                    $datos_CONSULTA[1],
                                    $datos_CONSULTA[2],
                                    $datos_CONSULTA[3],
                                    $datos_CONSULTA[4],
                                    $datos_CONSULTA[5],
                                    $datos_CONSULTA[6]
                                FROM $BD_tabla 
                                WHERE $datos_CONSULTA[$semaforo]=?";
                            //----- PASO 2 -----//
                            //Preparación de la consulta con la función mysqli_prepare(), //
                            //la cual requiere de dos argumentos: El objeto de conexión y la sentencia SQ //
                            $resultado=mysqli_prepare($conexion,$sql);
                            //----- PASO 3 -----//
                            //Unir los parámetros a la sentencia sql. La función mysqli_param() lo hace //
                            
                            $okey=mysqli_stmt_bind_param($resultado,"s",$datos_FORM[$semaforo]);

                            //----- PASO 4 -----//
                            //Ejecutar la consulta con la función mysqli_stmt_execute()//
                            $okey=mysqli_stmt_execute($resultado);
                            if($okey==false)
                            {
                                echo "Error al ejecutar la consulta";
                            }else{

                            //----- PASO 5 -----//
                            //Crear y Asociar variables al resultado de la consulta. //
                            //Esto se consigue con la función mysqli_stmt_bind_result() //
                            $okey=mysqli_stmt_bind_result($resultado,$conID,$conNombre,$conApellidos,$conDireccion,$conPoblacion,$conProfesion,$conAhorros);
                            
                            //----- PASO 6 -----//
                            //Leer los valores. Para ello se utilizará la función mysqli_stmt_fetch //
                                echo "Personal encontrado: <br><br>";
                                while(mysqli_stmt_fetch($resultado)){
                                        echo $conID."  ".$conNombre."  ".$conApellidos."  ".$conDireccion."  ".$conPoblacion."  ".$conProfesion."  ".$conAhorros."<br>";
                                }
                            mysqli_stmt_close($resultado); 
                            }
                            $semaforo=10;  //SE CIERRA EL PASO PARA QUE ENTRE AQUI DE NUEVO
                        }
                    }
                }
            }
            ///COMPROBACIÓN DE INSERCCION/// 
            if(strcmp($busqueda,"BUSCAR") & !strcmp($inserccion,"INSERTAR") & strcmp($actualizacion,"ACTUALIZAR") & strcmp($eliminacion,"ELIMINAR"))
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
            ///COMPROBACIÓN DE ACTUALIZACION/// 
            if(strcmp($busqueda,"BUSCAR") & strcmp($inserccion,"INSERTAR") & (!strcmp($actualizacion,"ACTUALIZAR") || !strcmp($carga,"CARGAR")) & strcmp($eliminacion,"ELIMINAR"))
            {
                if(!strcmp($carga,"CARGAR"))
                {
                    //SI SE QUIEREN CARGAR LOS DATOS POR EL ID BUSCADO SE MOSTRARAN EN LA TABLA
                    echo ("has elegido cargar datos");
                }
                if(!strcmp($actualizacion,"ACTUALIZAR"))
                {
                    //TRAS CARGAR LOS DATOS SE DESBLOQUEARAN TODAS LAS CASILLAS PARA CAMBIAR ALGO Y SE ACTUALIZARA
                    echo("has elegido actualizar datos");
                }
                    echo "<br><br>";
                    echo "HA ELEGIDO ACTUALIZAR EL REGISTRO";
                    echo "<br><br>";
                    /// INICIO DE CONSULTAS PREPARADAS ///
                    //----- PASO 1 -----//
                    //Creacion de la consulta //
                    $sql="SELECT * FROM $BD_tabla WHERE $datos_CONSULTA[0]=?";
                    //----- PASO 2 -----//
                    //Preparación de la consulta con la función mysqli_prepare(), //
                    //la cual requiere de dos argumentos: El objeto de conexión y la sentencia SQ //
                    $resultado=mysqli_prepare($conexion,$sql);

                    //----- PASO 3 -----//
                    //Unir los parámetros a la sentencia sql. La función mysqli_param() lo hace //
                    $okey=mysqli_stmt_bind_param($resultado,"i",$id);

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
                    $okey=mysqli_stmt_bind_result($resultado,$conID,$conNombre,$conApellidos,$conDireccion,$conPoblacion,$conProfesion,$conAhorros);                    
                    //----- PASO 6 -----//
                    //Leer los valores. Para ello se utilizará la función mysqli_stmt_fetch //
                        echo "Personal identificado: <br><br>";
                        while(mysqli_stmt_fetch($resultado)){
                                echo $conID."  ".$conNombre."  ".$conApellidos."  ".$conDireccion."  ".$conPoblacion."  ".$conProfesion."  ".$conAhorros."<br>";
                        }
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
