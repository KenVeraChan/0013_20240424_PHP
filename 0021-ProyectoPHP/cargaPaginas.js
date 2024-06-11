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
//APARECE Y DESAPARECE LOS BOTONES DEL MENU
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
