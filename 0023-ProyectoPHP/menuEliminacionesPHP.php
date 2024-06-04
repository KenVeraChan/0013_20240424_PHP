<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de ELIMINACIONES PHP</title>
    <style>
        table{
            width: 400px;
            margin: auto;
            background-color: #FFC;
            border: 2px solid #F00;
            padding: 5px;
        }
        td{
            text-align: center;
        }

    </style>
</head>
<body>
    <form id="formulario" action="eliminacionesMarcadoresPHP.php" method="POST">
        <table>
            <tr><td>ID:</td><td><input type="number" name="id" style="width:80px; height:15px"></td></tr>
            <tr><td><input type="submit" value="ELIMINAR" name="enviando"></td></tr>
        </table>    
    </form>
    </body>
</html>