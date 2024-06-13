var elemento1= document.getElementsByClassName("bloque_opciones");
var elemento2= document.getElementsByClassName("tabla");
var elemento3= document.getElementsByClassName("cabecera");
var elemento4= document.getElementsByClassName("consulta");
var elemento5= document.getElementsByClassName("celdas");
var elemento6= document.getElementsByClassName("desplegable");
var botonForm= document.getElementsByClassName("boton");

function tablaEliminacion()
{
    //EFECTO COLOR DEL BOTON: ELIMINAR, DEL CUADRO DEL FORMULARIO//
    botonForm[0].addEventListener("mouseenter",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="rgb(155,22,13)";
    })
    botonForm[0].addEventListener("mouseleave",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="white";
    })
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
}