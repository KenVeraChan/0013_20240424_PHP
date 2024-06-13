var elemento1= document.getElementsByClassName("bloque_opciones");
var elemento2= document.getElementsByClassName("tabla");
var elemento3= document.getElementsByClassName("cabecera");
var elemento4= document.getElementsByClassName("consulta");
var elemento5= document.getElementsByClassName("celdas");
var elemento6= document.getElementsByClassName("desplegable");
var botonForm= document.getElementsByClassName("boton");

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
    //PONER DE COLOR DORADO TODOS LOS BOTONES PRESENTES
    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento1.length;i++)
        {
            elemento1[i].addEventListener('mouseenter',function(){
                elemento1[i].style.background= "-webkit-linear-gradient(top, #B2C600, #FFFFFF)";
                })
            elemento1[i].addEventListener('mouseleave',function(){
                elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF,#B2C600)";
                })
        }
    //TITULO PAGINA Y CABECERA
    elemento3[0].style.color="black";
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
function opciones()
{
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