var elemento1= document.getElementsByClassName("bloque_opciones");
var elemento3= document.getElementsByClassName("cabecera");

function tablaBusqueda()
{
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
}