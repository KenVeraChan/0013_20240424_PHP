<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="uno" style="background-color: yellow;" action="borrador.php" method="get">
        <div>HOLA MUNDO:<input type="submit" name="uno" value="ENTRAR"></div>
        <div>ADIOS MUNDO:<input type="submit" name="dos" value="SALIR"></div>
    </form>
    <?php
    $uno=$_GET["uno"];
    $dos=$_GET["dos"];
        if(!strcmp($uno,"ENTRAR") & strcmp($dos,"SALIR"))
        {
            echo "Ha ENTRADO en el portal";
            echo "| ".$uno." |".$dos." |";
        }
        if(!strcmp($dos,"SALIR") & strcmp($uno,"ENTRAR"))
        {
            echo "Ha SALIDO en el portal";
            echo "| ".$uno." |".$dos." |";
        }
    ?>
</body>
</html>