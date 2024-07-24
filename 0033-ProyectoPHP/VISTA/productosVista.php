<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS VISTA</title>
    <style>
        td
        {
            border: 1px doted #FF0000;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>NOMBRE DEL ARTÍCULO</td>
    </tr>
    <?php
    foreach($matrizProductos as $registro)
    {
        echo "<tr><td>".$registro["Nombre"]."</td></tr>";
    }
    ?>
</table>
</body>
</html>