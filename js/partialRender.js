

$(document).ready(function(){

	function MostrarContenido(data){
		$("#contenido").html(data);
	}

	function MostrarError(){
		$("#contenido").html("SE CAYO LA RED.");
	}

	function CargarAjax(e){
		var myId = $(this).attr("id");
		$("nav ul li").removeClass("active");
		
		$(".social.text-center a").removeClass("active");
		$(this).addClass("active");
		$.ajax(
			{
				url: "index.php?action="+myId,
				dataType: "html",
				success: MostrarContenido,
				error: MostrarError
			}
		);
		e.preventDefault();
	}

	$("nav ul li").on("click",CargarAjax);
	$(".navbar navbar-inverse navbar-fixed-top  collapse navbar-collapse nav  navbar-nav navbar-right li").on("click",CargarAjax);
	$(".contacto").on("click",CargarAjax);

	$('body').on('click', '#mostrar', function(event){
		event.preventDefault();
		$("#aMostrar").toggle();
	});

	$('body').on('click',"#myTable", function(event){
			event.preventDefault();
			$("#myTable").append( fecha + "</td><td>" + evento  + "</td></tr>" + organiza  + "</td></tr>");
	});

});
