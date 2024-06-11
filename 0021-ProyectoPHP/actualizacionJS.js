var elemento1= document.getElementsByClassName("bloque_opciones");
var elemento2= document.getElementsByClassName("tabla");
var elemento3= document.getElementsByClassName("cabecera");
var elemento4= document.getElementsByClassName("consulta");
var elemento5= document.getElementsByClassName("celdas");
var elemento6= document.getElementsByClassName("desplegable");
var botonForm= document.getElementsByClassName("boton");

function tablaActualizacion()
{
   //EFECTO COLOR DEL BOTON: ACTUALIZAR, DEL CUADRO DEL FORMULARIO//
    //BOTON DE ACTUALIZAR//
    botonForm[0].disabled=true;  //DESACTIVADO PORQUE TODAVIA NO SE PUEDE EJECUTAR
    botonForm[0].addEventListener("mouseenter",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="rgb(12,184,203)";
    })
    botonForm[0].addEventListener("mouseleave",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="white";
    })

    //EFECTO COLOR DEL BOTON: CARGAR, DEL CUADRO DEL FORMULARIO//
    //BOTON DE CARGAR//
    botonForm[1].addEventListener("mouseenter",function(){
        botonForm[1].style.transitionDuration = "0.5s";
        botonForm[1].style.backgroundColor="rgb(12,184,203)";
    })
    botonForm[1].addEventListener("mouseleave",function(){
        botonForm[1].style.transitionDuration = "0.5s";
        botonForm[1].style.backgroundColor="white";
    })
    botonForm[1].addEventListener("onclick",function(){
        alert("hola");
        //cargaDatosActualizacion();
    })
    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento1.length;i++)
        {
        elemento1[i].addEventListener('mouseenter',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top,#008084,#FFFFFF)";
                })
        elemento1[i].addEventListener('mouseleave',function(){
            elemento1[i].style.background= "-webkit-linear-gradient(top,#FFFFFF, #008084)";
                })
        }
    //TITULO PAGINA Y CABECERA
    elemento3[0].style.color="black";
}