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