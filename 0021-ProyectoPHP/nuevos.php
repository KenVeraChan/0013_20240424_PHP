<?php
    session_start();
    if(isset($_SESSION["nombre"]) or isset($_SESSION["apellidos"]))
    {
        //echo "<br>Nombre: ".$_SESSION["nombre"];
        //echo "<br>Apellidos: ".$_SESSION["apellidos"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP RECEPTORA</title>
</head>
<body>
    <div><label><input type="text" class="casilla"></label></div>
    <div><label><input type="text" class="casilla"></label></div>
    <div><label><input type="text" class="casilla"></label></div>
    <div><label><input type="text" class="casilla"></label></div>
    <div><label><input type="text" class="casilla"></label></div>
    <div><label><input type="text" class="casilla"></label></div>
    <div><label><input type="text" class="casilla"></label></div>
</body>
<script>
    document.getElementsByClassName("casilla")[0].value = "<?php echo($_SESSION["id"]);?>";
    document.getElementsByClassName("casilla")[1].value = "<?php echo($_SESSION["nombre"]);?>";
    document.getElementsByClassName("casilla")[2].value = "<?php echo($_SESSION["apellidos"]);?>";
    document.getElementsByClassName("casilla")[3].value = "<?php echo($_SESSION["direccion"]);?>";
    document.getElementsByClassName("casilla")[4].value = "<?php echo($_SESSION["poblacion"]);?>";
    document.getElementsByClassName("casilla")[5].value = "<?php echo($_SESSION["profesion"]);?>";
    document.getElementsByClassName("casilla")[6].value = "<?php echo($_SESSION["ahorros"]);?>";
</script>
</html>