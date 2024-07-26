<?php
    //Declaracion constantes estáticas:
    $BD_tabla=configModelo::getTabla();  //Se hace llamada a constantes estáticas
    $db_elegido=$_GET["poblacion"]??null;
    //Se le ha añadido 
    $tamPagina=3;
    if(isset($_GET["cargaPagina"]))
        {
            $paginaInicial=($_GET["cargaPagina"])* $tamPagina;
            $_GET["enviar"]=true; //Reactivar por cada accionamiento de boton de paginación
        }
    else
        {
            $paginaInicial=0;
            $_GET["enviar"]=true;
        }
    if(isset($db_elegido))
        {
        //Si no es nulo y tiene contenido se guarda en $_SESSION
        $_SESSION["poblado"]=$db_elegido;
        }
    else
        {
        //Si no tiene contenido se recuerda lo que tenía contenido antes $_SESSION
        $db_elegido=$_SESSION["poblado"];
        }
    if(!strcmp($db_elegido,""))
    {   //EN EL CASO DE LA PRIMERA CARGA DE LA PAGINA WEB
        $union=$conexion->query("SELECT * FROM $BD_tabla LIMIT  $paginaInicial,$tamPagina");
        $matrizPersonas=$union->fetchAll(PDO::FETCH_ASSOC);
        //Contaje de filas para la paginación posterior
        $filasSQL=$conexion->query("SELECT * FROM $BD_tabla")->rowCount();  
        //Contar numero de filas afectadas por la sentencia SQL
    }
    else
    {   //RESTO DE CARGAS DE LA PAGINA WEB
        $union=$conexion->query("SELECT * FROM $BD_tabla WHERE Poblacion='$db_elegido' LIMIT  $paginaInicial,$tamPagina");
        $matrizPersonas=$union->fetchAll(PDO::FETCH_ASSOC);
        //Contaje de filas para la paginación posterior
        $filasSQL=$conexion->query("SELECT * FROM $BD_tabla WHERE Poblacion='$db_elegido'")->rowCount();  
        //Contar numero de filas afectadas por la sentencia SQL
    }
?>