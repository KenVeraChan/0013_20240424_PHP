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
