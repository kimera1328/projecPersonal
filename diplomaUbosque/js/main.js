$(function(){

	$('.ir').on('click',function(){
		$('#panelMenu').toggle( "slow");
		$('#opcionMenu').toggle();
		//$('#slideFormulario').fadeIn( "slow");
		//$('#frmCertificado').find('input, textarea, button, select').prop('disabled',false);
		const accion = $(this).attr('id');
		switch(accion) {
		  case 'btnCrear':
		  	$('#btnAccion').text('generar');
		  	$('#btnAccion').attr('value','generar');
		  	$("#encabezadoFrm").text('Parametrizacion para generar un Diploma');
		  	var url='ajax/generaDiplomaAjax.php';
		    break;
		  case 'btnPreVisualizar':
		  	$('#btnAccion').text('visualizar');
		  	$('#btnAccion').attr('value','visualizar');
		  	$("#encabezadoFrm").text('Previsualizacion Certificados');

		    var url='';
		    break;
		  case 'btnCargaAsistente':
		  	$('#btnAccion').text('cargar');
		  	$('#btnAccion').attr('value','cargar');
		  	$("#encabezadoFrm").text('Cargar asistentes a un diploma');

		    var url='ajax/menuAsistenteDiplomaAjax.php';
		    break;		    		    
		  case 'btnHistorialDiploma':
		  		$('#btnAccion').text('consultar');
			    $('#btnAccion').attr('value','consultar');
		  		$("#encabezadoFrm").text('Reporte Diplomas Generados');

		    var url='';
		    break;
		  default:
		    var url='';
		}
		if (url!='') {
			$('#divFrmCargar').load(url);
		}
	});

	//acciones boton regresar
	$('#regresaMenu').on('click',function(){
		$('#panelMenu').toggle( "slow");
		$('#opcionMenu').toggle();
	});
	//acciones boton regresar
	/*envio de formulario*/
	 $("#btnAccion").on('click',function(e){
	 	//if(validaForm()){
		//var select = $('#selectDiplomas').val();
		//var file = $('#file').val();
		//var data = "seleccion="+select+"&files="+file;
				event.preventDefault();
		 var form_data = new FormData(document.getElementById("slideFormulario"));
				$.ajax({
					type: 'POST',
					url: 'ajax/cargaAsistenteDiplomaAjax.php',
					data: form_data,
					dataType: 'json',
					contentType: false,
					cache: false,
					processData:false,
					/*beforeSend: function(data){
						$('#btnAccion').attr("disabled","disabled");
						$('#slideFormulario').css("opacity",".5");
						alert('asda');
					},*/
					success: function(response){ //console.log(response);
						if(response == 1){
							swal("OK!", "Asistente agregado Correctamente Nombre: ", "success");
							//$('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
						}else{
							swal("Alerta!", "Asistente agregado Correctamente Nombre: ", "arror");
						}

					}
				});


		//}else{
		//	 console.log("pilas");
	    //}
	 });
	/*fin envio formulario*/

/*valida formulario campos*/
function validaForm(){
    // Campos de texto
    var seleccion =  $("#selectDiplomas").val();
    var archivo =  $("#file").val(); 
    if(seleccion == null){
        $("#selectDiplomas").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }
    if(archivo == ''){
    	alert("Seleccione el archivo");
        $("#file").focus();
        return false;
      
    }
    return true; // Si todo está correcto
}
/*Fin valida formulario campos*/


});


