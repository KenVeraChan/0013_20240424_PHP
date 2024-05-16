<?php
$BD_servidor="localhost";
$BD_user="root";
$BD_password="";
$BD_nombre="cursosql";
$BD_tabla="contactos";
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
try
{
    $conexion=mysqli_connect($BD_servidor,$BD_user,$BD_password);
    //EVITA INYECCIONES SQL ADVERSAS
    $poblado=$_GET["buscar"];
    mysqli_set_charset($conexion,"utf8");
    try{
        mysqli_select_db($conexion,$BD_nombre);
        //   $consulta="select * from $BD_tabla where Población='$poblado'";
        //    $resultado=mysqli_query($conexion,$consulta);
        //    while($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC))
        //    {
        //        echo "<br>";
        //        echo $fila['ID']."--->".$fila['Alias']."--->".$fila['Apellidos']."--->".$fila['Nombre']."--->".$fila['Dirección']."--->".$fila['Población'];
        //        echo "<br>";
        //    }

        //----- PASO 1 -----//
        //DEFINIR LA CONSULTA CON EL INTERROGANTE AL FINAL//
        $sql="SELECT ID, Apellidos, Nombre, Población, 'Nivel académico', Profesión FROM $BD_tabla WHERE Población=?";

        //----- PASO 2 -----//
        //Preparación de la consulta con la función mysqli_prepare(), //
        //la cual requiere de dos argumentos: El objeto de conexión y la sentencia SQ //
        $resultado=mysqli_prepare($conexion,$sql);

        //----- PASO 3 -----//
        //Unir los parámetros a la sentencia sql. La función mysqli_param() lo hace //
        $okey=mysqli_stmt_bind_param($resultado,"s",$poblado);

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
        $okey=mysqli_stmt_bind_result($resultado,$conID,$conApellidos,$conNombre,$conPoblacion,$conEstCiv,$conProfesion);
        
        //----- PASO 6 -----//
        //Leer los valores. Para ello se utilizará la función mysqli_stmt_fetch //
            echo "Articulos encontrados: <br><br>";
            while(mysqli_stmt_fetch($resultado)){
                    echo $conID."  ".$conApellidos."  ".$conNombre."  ".$conPoblacion."  ".$conEstCiv."   ".$conProfesion."<br>";
            }
           mysqli_stmt_close($resultado); 
        }


        //mysqli_close($conexion);
    }catch(mysqli_sql_exception $error2){
        echo "No se ha podido establecer conexion con la base de datos";
    }
}catch(mysqli_sql_exception $error)
{
    echo "No se ha podido establecer la conexión con el SERVIDOR";
}


?>