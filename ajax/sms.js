$( "#enviar" ).submit(function( event ) {
var parametros = $(this).serialize();
$.ajax({
  type: "POST",
  url: "../procesos/notificacion.php",
  data: parametros,
   beforeSend: function(objeto){
    $("#mensaje").html("Mensaje: Cargando...");
    },
  success: function(datos){
  $("#mensaje").html(datos);//mostrar mensaje 
  $('#enviar').modal('hide'); // ocultar  formulario
  $("#enviar")[0].reset();  //resetear inputs
  //$('#newModal').modal('hide');  // ocultar modal
  //loadTabla(1);
  }
});
event.preventDefault();
});