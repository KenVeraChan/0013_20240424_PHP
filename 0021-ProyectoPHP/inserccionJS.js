var elemento1= document.getElementsByClassName("bloque_opciones");
var elemento2= document.getElementsByClassName("tabla");
var elemento3= document.getElementsByClassName("cabecera");
var elemento4= document.getElementsByClassName("consulta");
var elemento5= document.getElementsByClassName("celdas");
var elemento6= document.getElementsByClassName("desplegable");
var botonForm= document.getElementsByClassName("boton");

function tablaInserccion()
{   
    //EFECTO COLOR DEL BOTON: INSERTAR, DEL CUADRO DEL FORMULARIO//
    botonForm[0].addEventListener("mouseenter",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="rgb(28,203,28)";
    })
    botonForm[0].addEventListener("mouseleave",function(){
        botonForm[0].style.transitionDuration = "0.5s";
        botonForm[0].style.backgroundColor="white";
    })
    //OPCIONES-BUSQUEDA-INSERCCION-ACTUALIZACION-ELIMINACION //
    for(let i=0;i<elemento1.length;i++)
        {
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
}