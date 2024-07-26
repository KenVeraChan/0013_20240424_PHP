<?php
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
?>