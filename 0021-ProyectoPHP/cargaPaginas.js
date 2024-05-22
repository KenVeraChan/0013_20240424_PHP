function cargarPagina()
{
    var elemento1 = document.getElementsByClassName("bloque_opciones");
    var elemento2 = document.getElementsByClassName("tabla");
    for(let i=0;i<elemento1.length-1;i++)
        {
        elemento1[i].style.visibility="hidden";
        elemento2[i].style.visibility="hidden";
        }
        elemento1[elemento1.length-1].style.visibility="hidden";
        //BOTON DE OPCIONES VISIBLE
        elemento1[0].style.visibility="visible";
}
function tablaBusqueda()
{
    //DESAPARECEN LAS TABLAS: INSERCCION-ACTUALIZACION-ELIMINACION //
    var elemento1 = document.getElementsByClassName("tabla");
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].style.visibility="hidden";
        }
    // Y APARECE LA TABLA DE BUSQUEDA //
        elemento1[0].style.visibility="visible";

    //PONER DE COLOR DORADO TODOS LOS BOTONES PRESENTES
    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    var elemento2 = document.getElementsByClassName("bloque_opciones");
    for(let i=0;i<elemento2.length;i++)
        {
        elemento2[i].style.backgroundColor="rgb(233, 233, 29)";
        }
    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Consulta de los Empleados en la Empresa</strong></h2>";
    elemento5.style.backgroundColor=" rgb(255, 255, 37)";
    //FONDO PAGINA SECCION
    var elemento6= document.getElementById("consulta");
    elemento6.style.backgroundColor="rgb(148, 148, 17)";

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
    //DESAPARECEN LAS TABLAS: BUSQUEDA-ACTUALIZACION-ELIMINACION //
    var elemento1 = document.getElementsByClassName("tabla");
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].style.visibility="hidden";
        }
    // Y APARECE LA TABLA DE INSERCCION //
    elemento1[1].style.visibility="visible";

    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    var elemento2 = document.getElementsByClassName("bloque_opciones");
    for(let i=0;i<elemento2.length;i++)
        {
        elemento2[i].style.backgroundColor=" rgb(93, 197, 93)";
        }
    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Registro de nuevos empleados en la Empresa</strong></h2>";
    elemento5.style.backgroundColor="rgb(65, 180, 40)";
    //FONDO PAGINA SECCION
    var elemento6= document.getElementById("consulta");
    elemento6.style.backgroundColor="rgb(65, 105, 5)"; 
}
function tablaActualizacion()
{
    //DESAPARECEN LAS TABLAS: BUSQUEDA-ACTUALIZACION-ELIMINACION //
    var elemento1 = document.getElementsByClassName("tabla");
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].style.visibility="hidden";
        }
    // Y APARECE LA TABLA DE INSERCCION //
    elemento1[2].style.visibility="visible";

    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    var elemento2 = document.getElementsByClassName("bloque_opciones");
    for(let i=0;i<elemento2.length;i++)
        {
        elemento2[i].style.backgroundColor="rgb(120, 227, 199)";
        }
    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Actualizaciones del Registro</strong></h2>";
    elemento5.style.backgroundColor="rgb(65, 180, 171)";
    //FONDO PAGINA SECCION
    var elemento6= document.getElementById("consulta");
    elemento6.style.backgroundColor="rgb(11, 71, 99)"; 
}
function tablaEliminacion()
{
    //DESAPARECEN LAS TABLAS: BUSQUEDA-ACTUALIZACION-ELIMINACION //
    var elemento1 = document.getElementsByClassName("tabla");
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].style.visibility="hidden";
        }
    // Y APARECE LA TABLA DE INSERCCION //
    elemento1[3].style.visibility="visible";

    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    var elemento2 = document.getElementsByClassName("bloque_opciones");
    for(let i=0;i<elemento2.length;i++)
        {
        elemento2[i].style.backgroundColor="rgb(250, 10, 10)";
        }
    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Eliminaciones del Registro</strong></h2>";
    elemento5.style.backgroundColor="rgb(240, 20, 22)";
    //FONDO PAGINA SECCION
    var elemento6= document.getElementById("consulta");
    elemento6.style.backgroundColor="rgb(190, 10, 22)";   
}
function opciones(){
    var op = document.getElementsByClassName("desplegable");
    var desbloq= document.getElementsByClassName("celdas"); //VARIABLE PARA TODOS
    var i=0; //VARIABLE PARA BLOQUEAR TODOS MENOS EL IMPLICADO PARA LA BUSQUEDA
    if(op[3].value.substr(0,1).localeCompare("1")==0)  //COMPARA SUBCADENAS
        {
        //1 - Buscar por ID //
        //CAJAS DE DATOS Y DESPLEGABLES
            for(i=0;i<4;i++)
            {
                //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                desbloq[i].value="";
                desbloq[i].placeholder="Casilla Bloqueada";
                desbloq[i].disabled=true;
                desbloq[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i<3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                op[i].value="";
                op[i].disabled=true;
                op[i].style.backgroundColor="rgb(206, 197, 170)";
                }
             if(i==0)
                {
                    //DESBLOQUEA LA ENTRADA SELECCIONADA
                    desbloq[i].placeholder="Inserte el número del ID";
                    desbloq[i].disabled=false;
                    desbloq[i].style.backgroundColor="white";
                }
            }
        //AHORA SE DEBE REALIZAR LA BUSQUEDA DE ESE CONTACTO POR ID
        }
    if(op[3].value.substr(0,1).localeCompare("2")==0)
        {
        //2 - Buscar por NOMBRE //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
                //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                desbloq[i].value="";
                desbloq[i].placeholder="Casilla Bloqueada";
                desbloq[i].disabled=true;
                desbloq[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i<3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                op[i].value="";
                op[i].disabled=true;
                op[i].style.backgroundColor="rgb(206, 197, 170)";
                }
             if(i==1)
                {
                    //DESBLOQUEA LA ENTRADA SELECCIONADA
                    desbloq[i].placeholder="Inserte el NOMBRE";
                    desbloq[i].disabled=false;
                    desbloq[i].style.backgroundColor="white";
                }
            }
        //AHORA SE DEBE REALIZAR LA BUSQUEDA DE ESE CONTACTO POR ID
        }
    if(op[3].value.substr(0,1).localeCompare("3")==0)
        {
        //3 - Buscar por APELLIDOS //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
                //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                desbloq[i].value="";
                desbloq[i].placeholder="Casilla Bloqueada";
                desbloq[i].disabled=true;
                desbloq[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i<3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                op[i].value="";
                op[i].disabled=true;
                op[i].style.backgroundColor="rgb(206, 197, 170)";
                }
             if(i==2)
                {
                    //DESBLOQUEA LA ENTRADA SELECCIONADA
                    desbloq[i].placeholder="Inserte el APELLIDOS";
                    desbloq[i].disabled=false;
                    desbloq[i].style.backgroundColor="white";
                }
            }
        }
    if(op[3].value.substr(0,1).localeCompare("4")==0)
        {
        //4 - Buscar por POBLADO //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
                //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                desbloq[i].value="";
                desbloq[i].placeholder="Casilla Bloqueada";
                desbloq[i].disabled=true;
                desbloq[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i!=0 && i!=3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                op[i].value="";
                op[i].disabled=true;
                op[i].style.backgroundColor="rgb(206, 197, 170)";
                }
                else
                {
                //DESBLOQUEA LA ENTRADA DESPLEGABLE ELEGIDA
                op[i].disabled=false;
                op[i].style.backgroundColor="white";
                }
            }
        }
    if(op[3].value.substr(0,1).localeCompare("5")==0)
        {
        //5 - Buscar por PROFESION //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
            //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                desbloq[i].value="";
                desbloq[i].placeholder="Casilla Bloqueada";
                desbloq[i].disabled=true;
                desbloq[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i!=1 && i!=3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                op[i].value="";
                op[i].disabled=true;
                op[i].style.backgroundColor="rgb(206, 197, 170)";
                }
                else
                {
                //DESBLOQUEA LA ENTRADA DESPLEGABLE ELEGIDA
                op[i].disabled=false;
                op[i].style.backgroundColor="white";
                }
            }
        }
    if(op[3].value.substr(0,1).localeCompare("6")==0)
        {
        //6 - Buscar por AHORROS //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
            //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                desbloq[i].value="";
                desbloq[i].placeholder="Casilla Bloqueada";
                desbloq[i].disabled=true;
                desbloq[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i!=2 && i!=3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                op[i].value="";
                op[i].disabled=true;
                op[i].style.backgroundColor="rgb(206, 197, 170)";
                }
                else
                {
                //DESBLOQUEA LA ENTRADA DESPLEGABLE ELEGIDA
                op[i].disabled=false;
                op[i].style.backgroundColor="white";
                }
            }
        }
}
var contador=1;
function llamada()
{
    var elemento= document.getElementsByClassName("bloque_opciones");
    var elemento1= document.getElementsByClassName("tabla");
    var elemento4= document.getElementById("consulta");
    var elemento5= document.getElementById("cabecera");
    if(contador%2!=0)
    {
        for(let i=0;i<elemento.length;i++)
            {
            elemento[i].style.backgroundColor="rgb(233, 78, 78)";
            elemento[i].style.color="black"
            elemento[i].style.visibility="visible";
            }
        for(let i=0;i<elemento1.length;i++)
            {
            elemento1[i].style.visibility="hidden";
            }
        contador=contador+1;
    }
    else
    {
        for(let i=1;i<elemento.length;i++)
            {
            elemento[i].style.visibility="hidden";
            }
        for(let i=0;i<elemento1.length;i++)
            {
            elemento1[i].style.visibility="hidden";
            }
        elemento[0].style.backgroundColor="rgb(233, 78, 78)";
        elemento4.style.backgroundColor="rgb(112, 30, 48)";
        elemento5.style.backgroundColor="rgb(243, 60, 173)";
        contador=contador+1;
    }
}