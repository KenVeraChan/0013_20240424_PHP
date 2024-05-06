<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Productos</title>
        <style>
            #Negrita{
                text-align: center;
                color:brown;
            }
            #header{
                padding-top: 10px;
                padding-bottom: 10px;
                background-color:coral;
                text-align: center;
                width: 100%;
                float: left;
                height: 15px;   
            }
            #formulario{
                background-color:burlywood;
                width: 100%;
                float: left;
                height: 650px;
            }
            #cajaFormulario{
                padding-top: 10px;
                margin-top:10px;
                margin-left: 37%;
                float: inline-start;
                background-color:burlywood;
                width: 400px;
                height: 360px;
                border: 2px;
                border-color: red;
                border-style:double;
            }
            #forma{
                padding-left:30px;
                padding-top: 30px;
            }
            .cajita{
                height: 15px;
                width: 200px;
                float: right;
                background-color: white;
            }
            .desingacion{
                height: 20px;
                width: 350px;
                margin-top: 5px;
                margin-bottom: 5px;
                float: left;    
            }
            .boton{
                height: 25px;
                width: 120px;
                margin-top: 20px;
                margin-bottom: 10px;
                margin-left: 20px;
            }
        </style>
</head>
<body>
    <div id="header">
            <strong id="Negrita">Registro de Productos</strong>
    </div>
    <div id="formulario">
            <div id="cajaFormulario">
                <form id="forma" action="TratamientoRegistros.php" method="get">
                    <label class="desingacion">Código del Cliente: <input type="text" class="cajita" name="COD"></label>
                    <label class="desingacion">Empresa: <input type="text" class="cajita" name="EMP"></label>
                    <label class="desingacion">Dirección: <input type="text" class="cajita" name="DIR"></label>
                    <label class="desingacion">Teléfono: <input type="text" class="cajita" name="TEL"></label>
                    <label class="desingacion">Población: <input type="text" class="cajita" name="POB"></label>
                    <label class="desingacion">Responsable: <input type="text" class="cajita" name="RES"></label>
                    <label class="desingacion">Historial: <input type="text" class="cajita" name="HIS"></label>
                    <input type="submit" class="boton" value="REGISTRAR" name="enviar">
                    <input type="submit" class="boton" value="BORRAR" name="borrar">
                    <input type="submit" class="boton" value="BUSCAR" name="buscar">
                    <input type="submit" class="boton" value="ACTUALIZAR" name="actualizar">
                </form>
            </div>
    </div>
</body>
</html>