<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de BUSQUEDAS PHP</title>
    <style>
        table{
            width: 300px;
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
    <form id="formulario" action="busquedasMarcadoresPHP.php" method="get">
        <table>
            <tr><td>ID:</td><td><input type="text" name="id" style="width:80px; height:15px"></td></tr>
            <tr><td>EDAD: </td><td><input type="text" name="edad" style="width:80px; height:15px"></td></tr>
            <tr><td><input type="submit" value="BUSCAR" name="enviando"></td></tr>
        </table>    
    </form>
    </body>
</html>