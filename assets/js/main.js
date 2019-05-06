$(document).ready(function()
{

	$('#btn-contacto').click(function(e){ /// para el formulario
		e.preventDefault();
		$.ajax({
			url: "assets/contactar.php",
			method: "POST",
			data: $("#form-contacto").serialize(),
			success: function(data){
				$("#result").html(data);
			}
		})
	})


$("#form-contacto").keypress(function(e) {//Para deshabilitar el uso de la tecla "Enter"
if (e.which == 13) {
return false;
}
});




	$("body").on("click","#borrar-gasto",function(){
	var op = $(this).attr('op');
	var iden = $(this).attr('iden');
    	$.post("application/src/routes.php", {op:op, iden:iden}, 
    	function(htmlexterno){
		$("#gastos").html(htmlexterno);
   	 	});
	});


});



function valida(f) {
  var ok = true;
  var msg = "Debes escribir algo en los campos:\n";
  if(f.elements[0].value == "")
  {
    msg += "- Jugador 1\n";
    ok = false;
  }

  if(f.elements["jugador2"].value == "")
  {
    msg += "- Jugador 2\n";
    ok = false;
  }

  if(f.jugador3.value == "")
  {
    msg += "- Jugador 3\n";
    ok = false;
  }

  if(ok == false)
    alert(msg);
  return ok;
}