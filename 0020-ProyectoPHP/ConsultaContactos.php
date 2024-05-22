<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Contactos</title>
    <link rel="stylesheet" href="estilosCabecera.css">
    <script src="cargaPaginas.js"></script>
</head>
<body onload="cargarPagina()">
    <div id="cabecera"><h2><strong>Candidatos a la plantilla Sfer4D Corporation</strong></h2></div> 
    <div><input type="submit" id="bloque_opciones" value="OPCIONES" onclick="llamada()"></div>
    <div><input type="submit" id="bloque_opciones_1" value="BÚSQUEDA" onclick="tablaBusqueda()"></div>
    <div><input type="submit" id="bloque_opciones_2" value="INSERCCIÓN" onclick="tablaInserccion()"></div>   
    <div id="consulta">
    <!-- BUSQUEDAS -->
        <form id="tabla" action="consultasPreparadas.php" method="get">
           <p class="separacion"></p>
           <label class="celda">ID CONTACTO:<input type="text" class="celdas" name="id"></label> <!--ID-->
           <p class="separacion"></p>
           <label class="celda">NOMBRE:<input type="text" class="celdas" name="nom"></label> <!--NOMBRE-->
           <p class="separacion"></p>
           <label class="celda">APELLIDOS:<input type="text" class="celdas" name="ape"></label> <!--APELLIDOS-->
           <p class="separacion"></p>
           <label class="celda">DIRECCIÓN:<input type="text" class="celdas" name="dir"></label> <!--DIRECCION-->
           <p class="separacion"></p>
           <label class="celda">POBLADO:
                <select name="pob" class="desplegable">
                    <option></option>
                    <option>Barcelona</option>
                    <option>Girona</option>
                    <option>Lleida</option>
                    <option>Madrid</option>
                    <option>Northwith</option>
                    <option>Tarragona</option>
                    <option>Valencia</option>
                    <option>Zaragoza</option>
                </select>
            </label> <!--POBLADO-->
            <p class="separacion"></p>
           <label class="celda">PROFESIÓN:
           <select name="prof" class="desplegable">
                    <option></option>
                    <option>Abogado/a</option>
                    <option>Administrativo/a</option>
                    <option>Arquitecto/a</option>
                    <option>Asesor/a fiscal</option>
                    <option>Camarero/a</option>
                    <option>Comercial</option>
                    <option>Conductor/a</option>
                    <option>Contable</option>
                    <option>Delineante</option>
                    <option>Dependiente</option>
                    <option>Diseñador/a</option>
                    <option>Enfermero/a</option>
                    <option>Estudiante</option>
                    <option>Funcionario/a</option>
                    <option>Ingeniera Software</option>
                    <option>Oficial</option>
                    <option>Profesor/a</option>
                    <option>Recepcionista</option>
                    <option>Representante</option>
                    <option>Taxista</option>
                    <option>NULL</option>
                </select>
           </label> <!--PROFESION-->
           <p class="separacion"></p>
           <label class="celda">AHORROS:
                <select name="aho" class="desplegable">
                    <option></option>
                    <option>Menos de 1.000</option>
                    <option>De 1.000 a 25.000</option>
                    <option>De 25.000 a 50.000</option>
                    <option>De 50.000 a 75.000</option>
                    <option>De 75.000 a 100.000</option>
                    <option>De 100.000 a 125.000</option>
                    <option>Mas de 125.000</option>
                </select>
           </label> <!--AHORROS-->
           <p class="separacion"></p>
           <label class="celda">ELEGIR:   
                <select name="eleccion" class="desplegable" onchange="opciones()">
                    <option class="opciones">1 - Buscar por ID</option>
                    <option class="opciones">2 - Buscar por NOMBRE</option>
                    <option class="opciones">3 - Buscar por APELLIDOS</option>
                    <option class="opciones">4 - Buscar por POBLADO</option>
                    <option class="opciones">5 - Buscar por PROFESIÓN</option>
                    <option class="opciones">6 - Buscar por AHORROS</option>
                </select>
            </label> <!--ELECCION-->
            <p class="separacion"></p> 
           <input type="submit" value="BUSCAR" name="busqueda" class="boton"> <!--AHORROS-->
        </form>

    <!-- INSERCCIONES -->
        <form id="tabla2" action="consultasPreparadas.php" method="get">
           <p class="separacion"></p>
           <label class="celda">ID CONTACTO:<input type="text" class="celdas" name="id"></label> <!--ID-->
           <p class="separacion"></p>
           <label class="celda">NOMBRE:<input type="text" class="celdas" name="nom"></label> <!--NOMBRE-->
           <p class="separacion"></p>
           <label class="celda">APELLIDOS:<input type="text" class="celdas" name="ape"></label> <!--APELLIDOS-->
           <p class="separacion"></p>
           <label class="celda">DIRECCIÓN:<input type="text" class="celdas" name="dir"></label> <!--DIRECCION-->
           <p class="separacion"></p>
           <label class="celda">POBLADO:
                <select name="pob" class="desplegable">
                    <option></option>
                    <option>Barcelona</option>
                    <option>Girona</option>
                    <option>Lleida</option>
                    <option>Madrid</option>
                    <option>Northwith</option>
                    <option>Tarragona</option>
                    <option>Valencia</option>
                    <option>Zaragoza</option>
                </select>
            </label> <!--POBLADO-->
            <p class="separacion"></p>
           <label class="celda">PROFESIÓN:
           <select name="prof" class="desplegable">
                    <option></option>
                    <option>Abogado/a</option>
                    <option>Administrativo/a</option>
                    <option>Arquitecto/a</option>
                    <option>Asesor/a fiscal</option>
                    <option>Camarero/a</option>
                    <option>Comercial</option>
                    <option>Conductor/a</option>
                    <option>Contable</option>
                    <option>Delineante</option>
                    <option>Dependiente</option>
                    <option>Diseñador/a</option>
                    <option>Enfermero/a</option>
                    <option>Estudiante</option>
                    <option>Funcionario/a</option>
                    <option>Ingeniera Software</option>
                    <option>Oficial</option>
                    <option>Profesor/a</option>
                    <option>Recepcionista</option>
                    <option>Representante</option>
                    <option>Taxista</option>
                    <option>NULL</option>
                </select>
           </label> <!--PROFESION-->
           <p class="separacion"></p>
           <label class="celda">AHORROS:<input type="text" class="celdas" name="aho"></label> <!--AHORROS-->
           <p class="separacion"></p>
           <input type="submit" value="INSERTAR" name="inserccion" class="boton"> <!--AHORROS-->
        </form>
    </div>
</body>
</html>