var elemento1= document.getElementsByClassName("bloque_opciones");
var elemento2= document.getElementsByClassName("tabla");
var elemento3= document.getElementsByClassName("cabecera");
var elemento4= document.getElementsByClassName("consulta");
var elemento5= document.getElementsByClassName("celdas");
var elemento6= document.getElementsByClassName("desplegable");
var botonForm= document.getElementsByClassName("boton");

function cargarPagina()
{
    for(let i=0;i<elemento1.length-1;i++)
        {
        elemento1[i].style.visibility="hidden";
        elemento2[i].style.visibility="hidden";
        }
        elemento1[elemento1.length-1].style.visibility="hidden";
        //BOTON DE OPCIONES VISIBLE
        elemento1[0].style.visibility="visible";
        elemento1[0].style.borderRadius= "30px 30px 30px 30px";
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
    //EFECTO COLOR DEL BOTON: BUSCAR, DEL CUADRO DEL FORMULARIO//
    botonForm[0].addEventListener("mouseenter",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="yellow";
    })
    botonForm[0].addEventListener("mouseleave",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="white";
    })
    //DESAPARECEN LAS TABLAS: INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento2.length;i++)
        {
            elemento2[i].style.visibility="hidden";
        }
    // Y APARECE LA TABLA DE BUSQUEDA //
            elemento2[0].style.visibility="visible";
    //PONER DE COLOR DORADO TODOS LOS BOTONES PRESENTES
    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento1.length;i++)
        {
            elemento1[i].style.visibility="visible";
            elemento1[i].style.backgroundColor="rgb(233, 233, 29)";
            elemento1[i].style.color="black";
            elemento1[i].style.borderRadius= "30px 30px 30px 30px";
            elemento1[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
            elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF,#B2C600)";
            elemento1[i].addEventListener('mouseenter',function(){
                elemento1[i].style.background= "-webkit-linear-gradient(top, #B2C600, #FFFFFF)";
                })
            elemento1[i].addEventListener('mouseleave',function(){
                elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF,#B2C600)";
                })
        }
    //TITULO PAGINA Y CABECERA
    elemento3[0].innerHTML="<h2><strong>Consulta de los Empleados en la Empresa</strong></h2>";
    elemento3[0].style.color="black";
    elemento3[0].style.backgroundColor=" rgb(255, 255, 37)";
    //FONDO PAGINA SECCION
    elemento4[0].style.backgroundColor="rgb(148, 148, 17)";
    //CAJAS DE DATOS Y DESPLEGABLES
    var i=0;
    for(i=0; i<4;i++)
        {
            elemento5[i].placeholder="Bloqueado";
            elemento5[i].disabled=true;
        }
    for(i=0; i<3;i++)
        {
            elemento6[i].placeholder="Bloqueado";
            elemento6[i].disabled=true;
        }
}
function tablaInserccion()
{   
    //EFECTO COLOR DEL BOTON: INSERTAR, DEL CUADRO DEL FORMULARIO//
    botonForm[1].addEventListener("mouseenter",function(){
        botonForm[1].style.transitionDuration = "0.5s";
        botonForm[1].style.backgroundColor="rgb(28,203,28)";
    })
    botonForm[1].addEventListener("mouseleave",function(){
        botonForm[1].style.transitionDuration = "0.5s";
        botonForm[1].style.backgroundColor="white";
    })

    //DESAPARECEN LAS TABLAS: BUSQUEDA-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento2.length;i++)
        {
        elemento2[i].style.visibility="hidden";
        }
    // Y APARECE LA TABLA DE INSERCCION //
    elemento2[1].style.visibility="visible";

    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].style.visibility="visible";
        elemento1[i].style.backgroundColor=" rgb(93, 197, 93)";
        elemento1[i].style.color="black";
        elemento1[i].style.borderRadius= "30px 30px 30px 30px";
        elemento1[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento1[i].style.background= "-webkit-linear-gradient(top, #FFFFFF, #00C614)";
        elemento1[i].addEventListener('mouseenter',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top, #00C614, #FFFFFF)";
                })
        elemento1[i].addEventListener('mouseleave',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF,#00C614)";
                })
        }
    //TITULO PAGINA Y CABECERA
    elemento3[0].innerHTML="<h2><strong>Registro de nuevos empleados en la Empresa</strong></h2>";
    elemento3[0].style.color="black";
    elemento3[0].style.backgroundColor="rgb(65, 180, 40)";
    //FONDO PAGINA SECCION
    elemento4[0].style.backgroundColor="rgb(65, 105, 5)"; 
}
function tablaActualizacion()
{
    //EFECTO COLOR DEL BOTON: ACTUALIZAR, DEL CUADRO DEL FORMULARIO//
    //BOTON DE ACTUALIZAR//
    botonForm[2].disabled=true;  //DESACTIVADO PORQUE TODAVIA NO SE PUEDE EJECUTAR
    botonForm[2].addEventListener("mouseenter",function(){
        botonForm[2].style.transitionDuration = "0.5s";
        botonForm[2].style.backgroundColor="rgb(12,184,203)";
    })
    botonForm[2].addEventListener("mouseleave",function(){
        botonForm[2].style.transitionDuration = "0.5s";
        botonForm[2].style.backgroundColor="white";
    })

    //EFECTO COLOR DEL BOTON: CARGAR, DEL CUADRO DEL FORMULARIO//
    //BOTON DE CARGAR//
    botonForm[3].addEventListener("mouseenter",function(){
        botonForm[3].style.transitionDuration = "0.5s";
        botonForm[3].style.backgroundColor="rgb(12,184,203)";
    })
    botonForm[3].addEventListener("mouseleave",function(){
        botonForm[3].style.transitionDuration = "0.5s";
        botonForm[3].style.backgroundColor="white";
    })
    botonForm[3].addEventListener("onclick",function(){
        alert("hola");
        //cargaDatosActualizacion();
    })
    //DESAPARECEN LAS TABLAS: BUSQUEDA-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento2.length;i++)
        {
        elemento2[i].style.visibility="hidden";
        }
    // Y APARECE LA TABLA DE INSERCCION //
    elemento2[2].style.visibility="visible";

    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].style.visibility="visible";
        elemento1[i].style.backgroundColor="rgb(120, 227, 199)";
        elemento1[i].style.color="black";
        elemento1[i].style.borderRadius= "30px 30px 30px 30px";
        elemento1[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento1[i].style.background= "-webkit-linear-gradient(top, #FFFFFF, #008084)";
        elemento1[i].addEventListener('mouseenter',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top,#008084,#FFFFFF)";
                })
        elemento1[i].addEventListener('mouseleave',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF, #008084)";
                })
        }

    //TITULO PAGINA Y CABECERA
    elemento3[0].innerHTML="<h2><strong>Actualizaciones del Registro</strong></h2>";
    elemento3[0].style.color="black";
    elemento3[0].style.backgroundColor="rgb(65, 180, 171)";
    //FONDO PAGINA SECCION
    elemento4[0].style.backgroundColor="rgb(11, 71, 99)";

    //CAJAS DE DATOS Y DESPLEGABLES: COMIENZA CON EL INDICE 10 PORQUE HAY MAS TABLAS DETRAS
    for(var i=10; i<14;i++)
        {
            elemento5[i].placeholder="Bloqueado";
            elemento5[i].disabled=true;
        }
    for(i=6; i<8;i++)
        {
            elemento6[i].placeholder="Bloqueado";
            elemento6[i].disabled=true;
        } 
}
function tablaEliminacion()
{
    //EFECTO COLOR DEL BOTON: ELIMINAR, DEL CUADRO DEL FORMULARIO//
    botonForm[4].addEventListener("mouseenter",function(){
        botonForm[4].style.transitionDuration = "0.5s";
        botonForm[4].style.backgroundColor="rgb(155,22,13)";
    })
    botonForm[4].addEventListener("mouseleave",function(){
        botonForm[4].style.transitionDuration = "0.5s";
        botonForm[4].style.backgroundColor="white";
    })
    //DESAPARECEN LAS TABLAS: BUSQUEDA-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento2.length;i++)
        {
        elemento2[i].style.visibility="hidden";
        }
    // Y APARECE LA TABLA DE ELIMINACION //
    elemento2[3].style.visibility="visible";
    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].style.backgroundColor="rgb(100, 10, 10)";
        elemento1[i].style.color="black";
        elemento1[i].style.borderRadius= "30px 30px 30px 30px";
        elemento1[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
        elemento1[i].style.background= "-webkit-linear-gradient(top, #FFFFFF,  #8D0000)";
        elemento1[i].addEventListener('mouseenter',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top, #8D0000,#FFFFFF)";
                })
        elemento1[i].addEventListener('mouseleave',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF, #8D0000)";
                })
        }
    //TITULO PAGINA Y CABECERA
    elemento3[0].innerHTML="<h2><strong>Eliminaciones del Registro</strong></h2>";
    elemento3[0].style.color="white";
    elemento3[0].style.backgroundColor="rgb(120, 4, 21)";
    //FONDO PAGINA SECCION
    elemento4[0].style.backgroundColor="rgb(85, 4, 21)";   
}
function opciones(){
    var i=0; //VARIABLE PARA BLOQUEAR TODOS MENOS EL IMPLICADO PARA LA BUSQUEDA
    if(elemento6[3].value.substr(0,1).localeCompare("1")==0)  //COMPARA SUBCADENAS
        {
        //1 - Buscar por ID //
        //CAJAS DE DATOS Y DESPLEGABLES
            for(i=0;i<4;i++)
            {
                //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                elemento5[i].value="";
                elemento5[i].placeholder="Casilla Bloqueada";
                elemento5[i].disabled=true;
                elemento5[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i<3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                elemento6[i].value="";
                elemento6[i].disabled=true;
                elemento6[i].style.backgroundColor="rgb(206, 197, 170)";
                }
             if(i==0)
                {
                    //DESBLOQUEA LA ENTRADA SELECCIONADA
                    elemento5[i].placeholder="Inserte el número del ID";
                    elemento5[i].disabled=false;
                    elemento5[i].style.backgroundColor="white";
                }
            }
        //AHORA SE DEBE REALIZAR LA BUSQUEDA DE ESE CONTACTO POR ID
        }
    if(elemento6[3].value.substr(0,1).localeCompare("2")==0)
        {
        //2 - Buscar por NOMBRE //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
                //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                elemento5[i].value="";
                elemento5[i].placeholder="Casilla Bloqueada";
                elemento5[i].disabled=true;
                elemento5[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i<3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                elemento6[i].value="";
                elemento6[i].disabled=true;
                elemento6[i].style.backgroundColor="rgb(206, 197, 170)";
                }
             if(i==1)
                {
                    //DESBLOQUEA LA ENTRADA SELECCIONADA
                    elemento5[i].placeholder="Inserte el NOMBRE";
                    elemento5[i].disabled=false;
                    elemento5[i].style.backgroundColor="white";
                }
            }
        //AHORA SE DEBE REALIZAR LA BUSQUEDA DE ESE CONTACTO POR ID
        }
    if(elemento6[3].value.substr(0,1).localeCompare("3")==0)
        {
        //3 - Buscar por APELLIDOS //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
                //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                elemento5[i].value="";
                elemento5[i].placeholder="Casilla Bloqueada";
                elemento5[i].disabled=true;
                elemento5[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i<3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                elemento6[i].value="";
                elemento6[i].disabled=true;
                elemento6[i].style.backgroundColor="rgb(206, 197, 170)";
                }
             if(i==2)
                {
                    //DESBLOQUEA LA ENTRADA SELECCIONADA
                    elemento5[i].placeholder="Inserte el APELLIDOS";
                    elemento5[i].disabled=false;
                    elemento5[i].style.backgroundColor="white";
                }
            }
        }
    if(elemento6[3].value.substr(0,1).localeCompare("4")==0)
        {
        //4 - Buscar por POBLADO //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
                //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                elemento5[i].value="";
                elemento5[i].placeholder="Casilla Bloqueada";
                elemento5[i].disabled=true;
                elemento5[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i!=0 && i!=3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                elemento6[i].value="";
                elemento6[i].disabled=true;
                elemento6[i].style.backgroundColor="rgb(206, 197, 170)";
                }
                else
                {
                //DESBLOQUEA LA ENTRADA DESPLEGABLE ELEGIDA
                elemento6[i].disabled=false;
                elemento6[i].style.backgroundColor="white";
                }
            }
        }
    if(elemento6[3].value.substr(0,1).localeCompare("5")==0)
        {
        //5 - Buscar por PROFESION //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
            //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                elemento5[i].value="";
                elemento5[i].placeholder="Casilla Bloqueada";
                elemento5[i].disabled=true;
                elemento5[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i!=1 && i!=3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                elemento6[i].value="";
                elemento6[i].disabled=true;
                elemento6[i].style.backgroundColor="rgb(206, 197, 170)";
                }
                else
                {
                //DESBLOQUEA LA ENTRADA DESPLEGABLE ELEGIDA
                elemento6[i].disabled=false;
                elemento6[i].style.backgroundColor="white";
                }
            }
        }
    if(elemento6[3].value.substr(0,1).localeCompare("6")==0)
        {
        //6 - Buscar por AHORROS //
        //CAJAS DE DATOS Y DESPLEGABLES
        for(i=0;i<4;i++)
            {
            //BLOQUEA TODAS LAS ENTRADAS DE TEXTO
                elemento5[i].value="";
                elemento5[i].placeholder="Casilla Bloqueada";
                elemento5[i].disabled=true;
                elemento5[i].style.backgroundColor="rgb(206, 197, 170)";
                if(i!=2 && i!=3)
                {
                //BLOQUEA TODAS LAS ENTRADAS DESPLEGABLES
                elemento6[i].value="";
                elemento6[i].disabled=true;
                elemento6[i].style.backgroundColor="rgb(206, 197, 170)";
                }
                else
                {
                //DESBLOQUEA LA ENTRADA DESPLEGABLE ELEGIDA
                elemento6[i].disabled=false;
                elemento6[i].style.backgroundColor="white";
                }
            }
        }
}
var contador=1;
function llamada()
{
    if(contador%2!=0)
    {
        for(let i=0;i<elemento1.length;i++)
            {
                elemento1[i].style.visibility="visible";     
                elemento1[i].style.backgroundColor="rgb(233, 78, 78)";
                elemento1[i].style.color="black";
                elemento1[i].style.borderRadius= "30px 30px 30px 30px";
                elemento1[i].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
                elemento1[i].style.background= "-webkit-linear-gradient(top, #FFFFFF, #8D003D)";
                elemento1[i].addEventListener('mouseenter',function(){
                    elemento1[i].style.background= "-webkit-linear-gradient(top, #8D003D, #FFFFFF)";
                    })
                elemento1[i].addEventListener('mouseleave',function(){
                    elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF, #8D003D)";
                    }) 
            }
        for(let i=0;i<elemento2.length;i++)
            {
                elemento2[i].style.visibility="hidden";
            }
        contador=contador+1;  //el contador se suma una unidad antes de ejecutar cualquier cambio
    }
    else
    {
        for(let i=1;i<elemento1.length;i++)
            {
                elemento1[i].style.visibility="hidden";
            }
        for(let i=0;i<elemento2.length;i++)
            {
                elemento2[i].style.visibility="hidden";
            }
            elemento1[0].style.borderRadius= "30px 30px 30px 30px";
            elemento1[0].style.boxShadow= "rgb(255,255,255) 3px 3px 3px";
            elemento1[0].style.background= "-webkit-linear-gradient(top, #FFFFFF, #8D003D)";
            elemento1[0].addEventListener('mouseenter',function(){
                    elemento1[0].style.background= "-webkit-linear-gradient(top,#8D003D,#FFFFFF)";
                })
            elemento1[0].addEventListener('mouseleave',function(){
                    elemento1[0].style.background= "-webkit-linear-gradient(top,#FFFFFF, #8D003D)";
                })
        elemento4[0].style.backgroundColor="rgb(112, 30, 48)";
        elemento3[0].style.backgroundColor="rgb(141, 33, 80)";
        elemento3[0].innerHTML="<h2><strong>Candidatos a la plantilla Sfer4D Corporation</strong></h2>";
        contador=contador+1; //el contador se suma una unidad antes de ejecutar cualquier cambio
    }
}

function cargaDatosActualizacion()
{
    botonForm[2].disabled=false;  //DESACTIVADO PORQUE TODAVIA NO SE PUEDE EJECUTAR
    elemento6[0].disabled=false;
    elemento6[1].disabled=false;
    elemento5[0].innerHTML="<?php $_SESSION['id']?>";
    elemento5[1].innerHTML="<?php $_SESSION['nombre']?>";
    elemento5[2].innerHTML="<?php $_SESSION['apellidos']?>";
    elemento5[3].innerHTML="<?php $_SESSION['direccion']?>";
    elemento6[0].innerHTML="<?php $_SESSION['poblacion']?>";
    elemento6[1].innerHTML="<?php $_SESSION['profesion']?>"
    elemento6[2].innerHTML="<?php $_SESSION['ahorros']?>";
}
