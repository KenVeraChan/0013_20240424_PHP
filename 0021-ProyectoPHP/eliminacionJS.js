var elemento1= document.getElementsByClassName("bloque_opciones");
var elemento2= document.getElementsByClassName("tabla");
var elemento3= document.getElementsByClassName("cabecera");
var elemento4= document.getElementsByClassName("consulta");
var elemento5= document.getElementsByClassName("celdas");
var elemento6= document.getElementsByClassName("desplegable");
var botonForm= document.getElementsByClassName("boton");

function tablaEliminacion()
{
   //EFECTO COLOR DEL BOTONES DEL FORMULARIO ELIMINAR//
    //BOTON DE ACTUALIZAR(0)--CARGAR(1)--LIMPIAR(2)//
    for(let i=0;i<3;i++)
        {
            botonForm[i].addEventListener("mouseenter",function(){
            botonForm[i].style.transitionDuration = "0.5s";
            botonForm[i].style.backgroundColor="rgb(155,22,13)";
        })
        botonForm[i].addEventListener("mouseleave",function(){
            botonForm[i].style.transitionDuration = "0.5s";
            botonForm[i].style.backgroundColor="white";
        })
    }
    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].addEventListener('mouseenter',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top, #8D0000,#FFFFFF)";
                })
        elemento1[i].addEventListener('mouseleave',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF, #8D0000)";
                })
        }
    //TITULO PAGINA Y CABECERA
    elemento3[0].style.color="white";
    //CELDAS QUE SE COLOREAN PARA INDICAR QUE SON LAS MOSTRADAS
    for(i=0;i<5;i++)
        {
            elemento5[i].style.background= "rgb(230,166,166)";
        if(i<2)
            {
                elemento6[i].style.background= "rgb(230,166,166)";
            }
        }
        elemento5[0].style.background= "white";
}