$(document).ready(function(){
  console.log("java script");
  $('#card_resultado').hide();
  $('#formulario').submit(function(e){
    e.preventDefault();
    var parametros = new FormData($('#formulario')[0]);

    $.ajax({
			data: parametros,
			url: "mostrar.php",
			type: "POST",
			contentType: false,
			processData: false,
			beforesend:function(){

			},
			success: function(response){

				var consulta = JSON.parse(response);
        var plantilla='';
        consulta.forEach(consulta => {

            //plantilla += "<li>"+consulta['empresa']+"</li>";
          //plantilla += `<a href='${consulta.ruta_imagen}' download='reporte'>descargar archivo</a>`;
          plantilla += `<tr>
              <td>${consulta.fecha}</td>
              <td>${consulta.empresa}</td>
              <td>${consulta.actividad}</td>
              <td>${consulta.texto}</td>
              <td><a href='${consulta.ruta_imagen}' download='reporte'>descargar archivo</a></td>
          </tr>`
        })

        $('#lista_consultas').html(plantilla);
        $('#card_resultado').show();
        
			}

		})










		})










})
