<?php
    $base= new Conectar();  //Se hace llamada a clase CONECTAR
    $conexion=$base->conexion();
    $BD_tabla=ConexionPOOPHP::getTabla();

    //Declaracion de variables que leeran las propiedades del fichero que se descargará del servidor
    $idFich="";
    $nombreFich="";
    $contenidoFich="";
    $tipoFich="";

    $consulta=$conexion->query("SELECT * FROM $BD_tabla WHERE id=18");
    $resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach($resultado as $fila):
    {
        $idFich=$fila["id"];
        $nombreFich=$fila["Nombre"];
        $tipoFich=$fila["Tipo"];
        $contenidoFich=$fila["Contenido"];
    ?>
        <div>Id: <?php echo $idFich;?></div><br>
        <div>Nombre: <?php echo $nombreFich;?></div><br>
        <div>Tipo: <?php echo $tipoFich;?></div><br>
        <div style="border: solid; color: green">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($contenidoFich);?>" 
                alt="Esta es la primera imagen" 
                style="width: 60%">
        </div>
    <?php
        }endforeach;               
    ?>