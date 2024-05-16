function cargarPagina(){
    var elemento0 = document.getElementById("tabla");
    elemento0.style.visibility="hidden";
    var elemento0 = document.getElementById("tabla2");
    elemento0.style.visibility="hidden";
}
function tablaBusqueda()
{
    //DESAPARECE LA SEGUNDA TABLA DE INSERCCION //
    var elemento0 = document.getElementById("tabla2");
    elemento0.style.visibility="hidden";

    // Y APARECE LA PRIMERA TABLA DE INSERCCION //
    var elemento1 = document.getElementById("tabla");
    elemento1.style.visibility="visible";

    //PONER DE COLOR DORADO TODOS LOS BOTONES PRESENTES
    //OPCIONES //
    var elemento2 = document.getElementById("bloque_opciones");
    elemento2.style.backgroundColor="rgb(206, 197, 70)";
    //BUSQUEDA //
    var elemento3 = document.getElementById("bloque_opciones_1");
    elemento3.style.backgroundColor="rgb(206, 197, 70)";
    //INSERCCION //
    var elemento4 = document.getElementById("bloque_opciones_2");
    elemento4.style.backgroundColor="rgb(206, 197, 70)";

    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Consulta de los Empleados en la Empresa</strong></h2>";
    elemento5.style.backgroundColor=" rgb(248, 124, 79)";
    //FONDO PAGINA SECCION
    var elemento6= document.getElementById("consulta");
    elemento6.style.backgroundColor="rgb(161, 80, 51)";

    //CAJAS DE DATOS Y DESPLEGABLES
    var elemento7= document.getElementsByClassName("celdas");
    var i=0;
    for(i=0; i<4;i++)
        {
            elemento7[i].placeholder="Bloqueado";
            elemento7[i].disabled=true;
        }
    var elemento8= document.getElementsByClassName("desplegable");
    for(i=0; i<3;i++)
        {
            elemento8[i].placeholder="Bloqueado";
            elemento8[i].disabled=true;
        }
}
function tablaInserccion()
{   
    //DESAPARECE LA PRIMERA TABLA DE BUSQUEDA //
    var elemento0 = document.getElementById("tabla");
    elemento0.style.visibility="hidden";

    // Y APARECE LA SEGUNDA TABLA DE INSERCCION //
    var elemento1 = document.getElementById("tabla2");
    elemento1.style.visibility="visible"; 
    //OPCIONES //
    var elemento2 = document.getElementById("bloque_opciones");
    elemento2.style.backgroundColor=" rgb(93, 197, 93)";
    //BUSQUEDA //
    var elemento3 = document.getElementById("bloque_opciones_1");
    elemento3.style.backgroundColor=" rgb(93, 197, 93)";
    //INSERCCION //
    var elemento4 = document.getElementById("bloque_opciones_2");
    elemento4.style.backgroundColor=" rgb(93, 197, 93)";

    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Registro de nuevos empleados en la Empresa</strong></h2>";
    elemento5.style.backgroundColor="rgb(65, 180, 171)";
    //FONDO PAGINA SECCION
    var elemento6= document.getElementById("consulta");
    elemento6.style.backgroundColor="rgb(11, 71, 99)"; 
}
function opciones(){
    var op = document.getElementsByClassName("desplegable")[3].value;
    //alert("hola mundo, has elegido la opción: "+op);
    //alert (op.substr(0,1));
    //1 - Buscar por ID //
    if(op.substr(0,1).localeCompare("1")==0)
        {
            alert ("--- Buscar por ID ---");
        }
    if(op.substr(0,1).localeCompare("2")==0)
        {
            alert ("--- Buscar por NOMBRE ---");
        }
    if(op.substr(0,1).localeCompare("3")==0)
        {
            alert ("--- Buscar por APELLIDOS ---");
        }
    if(op.substr(0,1).localeCompare("4")==0)
        {
            alert ("--- Buscar por POBLADO ---");
        }
    if(op.substr(0,1).localeCompare("5")==0)
        {
            alert ("--- Buscar por PROFESIÓN---");
        }
    if(op.substr(0,1).localeCompare("6")==0)
        {
            alert ("--- Buscar por AHORROS---");
        }



    //2 - Buscar por NOMBRE //
    //3 - Buscar por APELLIDOS //
    //4 - Buscar por POBLADO //
    //5 - Buscar por PROFESIÓN //
    //6 - Buscar por AHORROS //




}

var contador=1;
function llamada()
{
    var elemento1 = document.getElementById("bloque_opciones_1");
    var elemento2 = document.getElementById("bloque_opciones_2");
    var elemento3 = document.getElementById("bloque_opciones");
    var elemento4= document.getElementById("consulta");
    var elemento5= document.getElementById("cabecera");
    var elemento6= document.getElementById("tabla");
    var elemento7=document.getElementById("tabla2");
    if(contador%2!=0)
    {
        elemento1.style.backgroundColor="rgb(233, 78, 78)"
        elemento1.style.color="black"
        elemento1.style.zIndex=0;

        elemento2.style.backgroundColor="rgb(233, 78, 78)"
        elemento2.style.color="black"
        elemento2.style.zIndex=0;
        elemento6.style.zIndex=0;
        elemento7.style.zIndex=0;
        contador=contador+1;
    }
    else{
        elemento1.style.zIndex=-1;
        elemento2.style.zIndex=-1;
        elemento3.style.backgroundColor="rgb(233, 78, 78)";
        elemento4.style.backgroundColor="rgb(112, 30, 48)";
        elemento5.style.backgroundColor="rgb(243, 60, 173)";
        elemento6.style.visibility="hidden";
        elemento7.style.visibility="hidden";
        contador=contador+1;
    }
}