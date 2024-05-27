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
        elemento1[0].style.borderRadius= "20px 10px 30px 50px";
        elemento1[0].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento1[0].style.background= "-webkit-linear-gradient(top, #FFFFFF, #8D003D)";
        elemento1[0].addEventListener('mouseenter',function(){
            elemento1[0].style.background= "-webkit-linear-gradient(top,#8D003D,#FFFFFF)";
                })
        elemento1[0].addEventListener('mouseleave',function(){
            elemento1[0].style.background= "-webkit-linear-gradient(top,#FFFFFF, #8D003D)";
                })
} 
function tablaBusqueda()
{
    //EFECTO COLOR DEL BOTON DEL CUADRO DEL FORMULARIO//
    var botonForm=document.getElementsByClassName("boton");
    botonForm[0].addEventListener("mouseenter",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="yellow";
    })
    botonForm[0].addEventListener("mouseleave",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="white";
    })

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
        elemento2[i].style.visibility="visible";
        elemento2[i].style.backgroundColor="rgb(233, 233, 29)";
        elemento2[i].style.color="black";
        elemento2[i].style.borderRadius= "20px 10px 30px 50px";
        elemento2[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento2[i].style.background= "-webkit-linear-gradient(top,#FFFFFF,#B2C600)";
        elemento2[i].addEventListener('mouseenter',function(){
            elemento2[i].style.background= "-webkit-linear-gradient(top, #B2C600, #FFFFFF)";
                })
        elemento2[i].addEventListener('mouseleave',function(){
            elemento2[i].style.background= "-webkit-linear-gradient(top,#FFFFFF,#B2C600)";
                })
        }
    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Consulta de los Empleados en la Empresa</strong></h2>";
    elemento5.style.color="black";
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
    //EFECTO COLOR DEL BOTON DEL CUADRO DEL FORMULARIO//
    var botonForm=document.getElementsByClassName("boton");
    botonForm[1].addEventListener("mouseenter",function(){
        botonForm[1].style.transitionDuration = "0.5s";
        botonForm[1].style.backgroundColor="green";
    })
    botonForm[1].addEventListener("mouseleave",function(){
        botonForm[1].style.transitionDuration = "0.5s";
        botonForm[1].style.backgroundColor="white";
    })

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
        elemento2[i].style.visibility="visible";
        elemento2[i].style.backgroundColor=" rgb(93, 197, 93)";
        elemento2[i].style.color="black";
        elemento2[i].style.borderRadius= "20px 10px 30px 50px";
        elemento2[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento2[i].style.background= "-webkit-linear-gradient(top, #FFFFFF, #00C614)";
        elemento2[i].addEventListener('mouseenter',function(){
            elemento2[i].style.background= "-webkit-linear-gradient(top, #00C614, #FFFFFF)";
                })
        elemento2[i].addEventListener('mouseleave',function(){
            elemento2[i].style.background= "-webkit-linear-gradient(top,#FFFFFF,#00C614)";
                })
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
    //EFECTO COLOR DEL BOTON DEL CUADRO DEL FORMULARIO//
    var botonForm=document.getElementsByClassName("boton");
    botonForm[2].addEventListener("mouseenter",function(){
        botonForm[2].style.transitionDuration = "0.5s";
        botonForm[2].style.backgroundColor="blue";
    })
    botonForm[2].addEventListener("mouseleave",function(){
        botonForm[2].style.transitionDuration = "0.5s";
        botonForm[2].style.backgroundColor="white";
    })
    botonForm[3].addEventListener("mouseenter",function(){
        botonForm[3].style.transitionDuration = "0.5s";
        botonForm[3].style.backgroundColor="blue";
    })
    botonForm[3].addEventListener("mouseleave",function(){
        botonForm[3].style.transitionDuration = "0.5s";
        botonForm[3].style.backgroundColor="white";
    })

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
        elemento2[i].style.visibility="visible";
        elemento2[i].style.backgroundColor="rgb(120, 227, 199)";
        elemento2[i].style.color="black";
        elemento2[i].style.borderRadius= "20px 10px 30px 50px";
        elemento2[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento2[i].style.background= "-webkit-linear-gradient(top, #FFFFFF, #008084)";
        elemento2[i].addEventListener('mouseenter',function(){
            elemento2[i].style.background= "-webkit-linear-gradient(top,#008084,#FFFFFF)";
                })
        elemento2[i].addEventListener('mouseleave',function(){
            elemento2[i].style.background= "-webkit-linear-gradient(top,#FFFFFF, #008084)";
                })
        }
    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Actualizaciones del Registro</strong></h2>";
    elemento5.style.color="black";
    elemento5.style.backgroundColor="rgb(65, 180, 171)";
    //FONDO PAGINA SECCION
    var elemento6= document.getElementById("consulta");
    elemento6.style.backgroundColor="rgb(11, 71, 99)"; 
}
function tablaEliminacion()
{
    //EFECTO COLOR DEL BOTON DEL CUADRO DEL FORMULARIO//
    var botonForm=document.getElementsByClassName("boton");
    botonForm[4].addEventListener("mouseenter",function(){
        botonForm[4].style.transitionDuration = "0.5s";
        botonForm[4].style.backgroundColor="red";
    })
    botonForm[4].addEventListener("mouseleave",function(){
        botonForm[4].style.transitionDuration = "0.5s";
        botonForm[4].style.backgroundColor="white";
    })
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
        elemento2[i].style.backgroundColor="rgb(100, 10, 10)";
        elemento2[i].style.color="black";
        elemento2[i].style.borderRadius= "20px 10px 30px 50px";
        elemento2[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento2[i].style.background= "-webkit-linear-gradient(top, #FFFFFF,  #8D0000)";
        elemento2[i].addEventListener('mouseenter',function(){
            elemento2[i].style.background= "-webkit-linear-gradient(top, #8D0000,#FFFFFF)";
                })
        elemento2[i].addEventListener('mouseleave',function(){
            elemento2[i].style.background= "-webkit-linear-gradient(top,#FFFFFF, #8D0000)";
                })
        }
    //TITULO PAGINA Y CABECERA
    var elemento5= document.getElementById("cabecera");
    elemento5.innerHTML="<h2><strong>Eliminaciones del Registro</strong></h2>";
    elemento5.style.color="white";
    elemento5.style.backgroundColor="rgb(120, 4, 21)";
    //FONDO PAGINA SECCION
    var elemento6= document.getElementById("consulta");
    elemento6.style.backgroundColor="rgb(85, 4, 21)";   
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
            elemento[i].style.visibility="visible";     
            elemento[i].style.backgroundColor="rgb(233, 78, 78)";
            elemento[i].style.color="black";
            elemento[i].style.borderRadius= "20px 10px 30px 50px";
            elemento[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
            elemento[i].style.background= "-webkit-linear-gradient(top, #FFFFFF, #8D003D)";
            elemento[i].addEventListener('mouseenter',function(){
                elemento[i].style.background= "-webkit-linear-gradient(top, #8D003D, #FFFFFF)";
                    })
            elemento[i].addEventListener('mouseleave',function(){
                elemento[i].style.background= "-webkit-linear-gradient(top,#FFFFFF, #8D003D)";
                    }) 
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
        elemento[0].style.borderRadius= "20px 10px 30px 50px";
        elemento[0].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento[0].style.background= "-webkit-linear-gradient(top, #FFFFFF, #8D003D)";
        elemento[0].addEventListener('mouseenter',function(){
            elemento[0].style.background= "-webkit-linear-gradient(top,#8D003D,#FFFFFF)";
                })
        elemento[0].addEventListener('mouseleave',function(){
            elemento[0].style.background= "-webkit-linear-gradient(top,#FFFFFF, #8D003D)";
                })
        elemento4.style.backgroundColor="rgb(112, 30, 48)";
        elemento5.style.backgroundColor="rgb(141, 33, 80)";
        elemento5.innerHTML="<h2><strong>Candidatos a la plantilla Sfer4D Corporation</strong></h2>";
        contador=contador+1;
    }
}