<?php
    session_start();
    $base= new Conectar();  //Se hace llamada a clase CONECTAR
    $conexion=$base->conexion();
    $BD_tabla=ConexionPOOPHP::getTabla();
    $consulta=$conexion->query("SELECT FOTOGRAFIA FROM $BD_tabla WHERE CÓDIGOARTÍCULO='AR01'");
    $resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach($resultado as $foto):
    {
        $ruta_img=$foto["FOTOGRAFIA"];
?>
    <div style="border: solid; color: green">
        <img src="../UploadImages/<?php echo $ruta_img;?>" 
             alt="Esta es la primera imagen" 
             style="width: 20%">
    </div>
<?php
    }endforeach;
?>

