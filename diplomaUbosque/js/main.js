$(function(){
	//$("#slideFormulario").hide();/*pendiente ocultar*/

	$("#slideFormulario").hide();/*pendiente ocultar*/
	$('#frmCertificado').find('input, textarea, button, select').prop('disabled',true);

	$('.ir').on('click',function(){
		$('#panelMenu').fadeOut( "slow", function() {});
		$('#slideFormulario').fadeIn( "slow", function() {});
		$('#frmCertificado').find('input, textarea, button, select').prop('disabled',false);
		const accion = $(this).attr('id');
		switch(accion) {
		  case 'btnCrear':
		  	deslizaPanelMenu('adelante');
		  	$("#encabezadoFrm").text('Parametrizacion para generar un Diploma');
		    var url='';
		    break;
		  case 'btnpreVisualizar':
		  	$("#encabezadoFrm").text('Previsualizacion Certificados');
		    var url='';
		    break;
		  case 'btnCargaAsistente':
		  	$("#encabezadoFrm").text('Cargar asistentes a un diploma');
		    var url='';
		    break;		    		    
		  case 'btnHistorialDiploma':
		  		$("#encabezadoFrm").text('Reporte Diplomas Generados');
		    var url='';
		    break;
		  default:
		    var url='';
		}
	});


	function deslizaPanelMenu(movimiento) {
		switch(movimiento) {
		  case 'adelante':
		  		$('#panelMenu').fadeOut(2000,'slow', function() {});
		    break;
		  case 'atras':
		  		$('#panelMenu').fadeIn('slow/400/fast', function() {});
		    var url='';
		    break;
		  default:
		    var url='';
		}
	}
});