$(document).ready(function(){

	//cargar datos
	$('#formulario').submit(function(e){
		e.preventDefault();
		let parametros = new FormData($('#formulario')[0]);

		$.ajax({

			url: "backend.php",
			type: "POST",
			data: {parametros},
			contentType: false,
			processData: false,
			beforesend:function(){

			},
			success: function(response){
				alert(response);
			}

		})
		$('#formulario').trigger('reset');

	})
	//fin cargar datos

})
