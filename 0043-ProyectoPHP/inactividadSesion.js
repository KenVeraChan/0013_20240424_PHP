var mouseStop = null;
var Time = 5000; //tiempo en milisegundos que espera para saefectuarse la funcion
var texto="";   //texto de devolucion
var subdirectorios="../";
var paginaExit="destruyeCookie.php";
var puntero=0;  //puntero de adicion de cadenas

function AddAlert(logeando,distancia_web) 
{
    if(logeando==1)  //Usuario: RRHH, JEFE O CLIENTE logeado, en otro caso estas funciones posteriores no deberían afectar, porque es cookie de visitante de página web
    {
        $(document).on('mousemove', function() {
            clearTimeout(mouseStop);
            mouseStop = setTimeout(Myfunction,Time,distancia_web);  //Documentar YA metodo setTimeout funcionamiento!!!!
        });
    }
    else
    {
        //No hace nada
    }
}
function Myfunction(distancia_web) 
{
    for(puntero=0;puntero<distancia_web;puntero++)
    {
        texto=texto+subdirectorios;
    }
    alert("Por motivos de inactividad en la página web, la sesión ha caducado. Por favor vuelva a Logearse!"+texto); //aqui efectua la funcion cuando dejas de mover el raton
    window.location.href=paginaExit;  //Ve a la seccion de destruir la cookie para que al mismo tiempo se destruya y se cierre sesion
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////


/*

var mouseStop = null;
var Time = 5000; //tiempo en milisegundos que espera para saefectuarse la funcion
function AddAlert() {
  $(document).on('mousemove', function() {
     clearTimeout(mouseStop);
     mouseStop = setTimeout(Myfunction,Time);
  });
}
function Myfunction() {
     alert("Dejo de mover el raton!!"); //aqui efectua la funcion cuando dejas de mover el raton
     window.location.href="destruyeCookie.php";  //Ve a la seccion de destruir la cookie para que al mismo tiempo se destruya y se cierre sesion
     
}

*/