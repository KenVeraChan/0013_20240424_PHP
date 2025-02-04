<?php
    $base= new Conectar();  //Se hace llamada a clase CONECTAR
    $conexion=$base->conexion();
    $BD_tabla=ConexionPOOPHP::getTabla();

    //Declaracion de variables que leeran las propiedades del fichero que se descargará del servidor
    $idFich="";
    $nombreFich="";
    $contenidoFich="";
    $tipoFich="";

    $sql="SELECT * FROM $BD_tabla WHERE id=?";
    $consulta=$conexion->prepare($sql);
    $consulta->execute(array("47"));
    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)):
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
                style="width: 70%">
        </div>
    <?php
        }endwhile; 
        $consulta->closeCursor();             
    ?>