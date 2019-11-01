$(function(){

	$('.ir').on('click',function(){
		$('#panelMenu').toggle( "slow");
		$('#slideFormulario').fadeIn( "slow");
		//$('#frmCertificado').find('input, textarea, button, select').prop('disabled',false);
		const accion = $(this).attr('id');
		switch(accion) {
		  case 'btnCrear':
		  	
		  	$('#btnAccion').text('generar');
		  	$('#btnAccion').attr('value','generar');
		  	$("#encabezadoFrm").text('Parametrizacion para generar un Diploma');
		    var url='';
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

		    var url='ajax/cargaAsistenteDiplomaAjax.php';
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
		$('#slideFormulario').toggle( "slow");
	});
	//acciones boton regresar


});

