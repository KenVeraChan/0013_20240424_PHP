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