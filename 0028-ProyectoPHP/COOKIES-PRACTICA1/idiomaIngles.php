<?php
include "incrementaCookie.php";
if(isset($_COOKIE["idiomaSeleccionado"]))
{
    //no hace nada porque la COOKIE sigue existiendo
}
else
{
    header("Location: elegirIdioma.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document in INGLES</title>
</head>
<body>
    <h1 style="text-align: center"><strong>The Earth</strong></h1>
    <h4 style="text-align: center" onclick="<?php incrementaCookie($_SESSION["idiomaElegido"]);?>";>
        The Earth (from the Latin Terra, Roman deity equivalent 
        to Gaia, Greek goddess of femininity and fertility) is a 
        planet in the solar system that revolves around its 
        star - the Sun - in the third innermost orbit. It is the 
        densest and fifth largest of the eight planets in the solar 
        system. It is also the largest of the four terrestrial or rocky 
        planets. The Earth formed approximately 4.55 billion years ago 
        and life emerged about a billion years later. It is home to 
        millions of species, including humans, and is currently the 
        only astronomical body where life is known to exist. atmosphere 
        and other abiotic conditions have been significantly altered by 
        the planet's biosphere, favoring the proliferation of aerobic 
        organisms, as well as the formation of an ozone layer that, 
        together with the Earth's magnetic field, blocks harmful solar 
        radiation, thus allowing life on the planet
    </h4>
    <img style="margin-left: 30%; width:600px; height:600px" src="./imagenes/elMundo.jpg">
    <?php echo "La COOKIE vale: ".$_COOKIE["idiomaSeleccionado"]; ?>
</body>
</html>