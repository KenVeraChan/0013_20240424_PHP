<?php
session_start();
//Se mantendrá la sesión iniciada para que el $_SESSION realice su trabajo líneas más abajo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINACIÓN</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="GET">
        <table>
            <tr>
                <td><label>Introduzca una población: </label></td>
                <td><input type="text" name="poblacion" placeholder="¿población?"></td>
            </tr>
            <tr><input type="submit" name="enviar" value="CARGAR"></tr>
        </table>
    </form>
<?php
        $tamPagina=5;
        if(isset($_GET["cargaPagina"]))
            {
                $paginaInicial=($_GET["cargaPagina"])*5;
                $_GET["enviar"]=true; //Reactivar por cada accionamiento de boton de paginación
            }
        else
            {
                $paginaInicial=0;
            }
        if(isset($_GET["enviar"]))
        {
            include("conexionPHP.php");
            $db_elegido=$_GET["poblacion"];
            if(isset($db_elegido))
            {
                //Si no es nulo y tiene contenido se guarda en $_SESSION
                $_SESSION["poblado"]=$db_elegido;
            }
            else{
                //Si no tiene contenido se recuerda lo que tenía contenido antes $_SESSION
                $db_elegido=$_SESSION["poblado"];
            }

            try{
                $base= new PDO('mysql:host='.$BD_servidor.';dbname='.$BD_nombre,$BD_usuario,$BD_contrasenia);
                $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $base->exec("SET CHARACTER SET utf8");
                $sql_total=$base->query("SELECT ID,Nombre,Apellidos,Dirección,Población,Teléfono,Fecha_Nacimiento FROM $BD_tabla WHERE Población='$db_elegido' LIMIT  $paginaInicial,$tamPagina");
                $resultado=$sql_total->fetchAll(PDO::FETCH_OBJ);
                //Contaje de filas para la paginación posterior
                $filasSQL=$base->query("SELECT ID,Nombre,Apellidos,Dirección,Población,Teléfono,Fecha_Nacimiento FROM $BD_tabla WHERE Población='$db_elegido'")->rowCount();  //Contar numero de filas afectadas por la sentencia SQL
                echo("<br><br>
                    <table style='width:1100px'>
                        <tr>
                            <td style='width:20px; text-align:center; color:yellow; background-color:grey'>ID</td>
                            <td style='width:140px; text-align:center; color:yellow; background-color:grey'>Nombre</td>
                            <td style='width:330px; text-align:center; color:yellow; background-color:grey'>Apellidos</td>
                            <td style='width:300px; text-align:center; color:yellow; background-color:grey'>Dirección</td>
                            <td style='width:100px; text-align:center; color:yellow; background-color:grey'>Población</td>
                            <td style='width:100px; text-align:center; color:yellow; background-color:grey'>Teléfono</td>
                            <td style='width:100px; text-align:center; color:yellow; background-color:grey'>Fecha Nacimiento</td>
                        </tr>
                ");
                foreach($resultado as $descarga)
                {
                    echo "
                    <tr>
                        <td style='width:20px; text-align:center'>$descarga->ID</td>
                        <td style='width:140px; text-align:center'>$descarga->Nombre</td>
                        <td style='width:330px; text-align:center'>$descarga->Apellidos</td>
                        <td style='width:300px; text-align:center'>$descarga->Dirección</td>
                        <td style='width:100px; text-align:center'>$descarga->Población</td>
                        <td style='width:100px; text-align:center'>$descarga->Teléfono</td>
                        <td style='width:100px; text-align:center'>$descarga->Fecha_Nacimiento</td>
                    </tr>
                    ";
                }
                echo "</table>";
                echo "<br><br>";
                //ZONA DE PAGINACION//
                $filasSQLBoton=$filasSQL/$tamPagina;
                echo "Hay: ".$filasSQL." regitros detectados";
                echo"<br><br>";
                echo"<form method='GET'><table style='width:200px'><tr>";
                for($i=0;$i<(round($filasSQLBoton,0,PHP_ROUND_HALF_UP)+1);$i++)
                {
                    echo"<td><input 
                            type='submit'
                            name='cargaPagina' 
                            value='$i' 
                            style='width: 30px; 
                                   heigth: 4px; 
                                   color: yellow; 
                                   background-color: grey;
                                   text-align: center
                         '></td>";
                }
                echo "</tr></table></form>";
            }
            catch(Exception $e)
            {
                echo "El error esta es: ".$e->getMessage().".<br>Y está en la línea: ".$e->getLine();
            }
        }
?>
</body>
</html>