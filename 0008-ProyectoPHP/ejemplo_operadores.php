<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones elementales con PHP</title>
    <style>
        .formulario{
            background: color #323232;
        }
    </style>
</head>
<body>
    <p>&nbsp;</p>
        <form class="formulario" name="formulario" method="post" action="calculadora.php">
            <label for="num1"> Numero 1 </label> 
            <input type="number" name="num1">
            <br><br>
            <label for="num2"> Numero 2 </label>
            <input type="number" name="num2">
            <br><br>
            <label for="resultado"> Operacion </label>
            <select name="operacion" id="operacion">
                <option>Suma</option>
                <option>Resta</option>
                <option>Multiplicacion</option>
                <option>Division</option>
                <option>Incremento 1</option>
                <option>Decremento 1</option>
                <option>Casting Variable String a Numerico</option>
                <option>Tablas de Multiplicar</option>
            </select>
            <input type="submit" name="button" id="button" value="Calcular" onclick="prueba">
        </form>
    <p>&nbsp;</p>


    <?php
        include("calculadora.php");
    ?>
</body>
</html>