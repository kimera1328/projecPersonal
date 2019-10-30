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

	$('#regresaMenu').on('click',function(){
		$('#panelMenu').fadeIn( "slow", function() {});
		$('#slideFormulario').fadeOut( "slow", function() {});
	});
	/*funcion typehead para buscar con ajax en base de datos*/
	$('#country').typeahead({
		  source: function(query, result){
		   $.ajax({
		    url:"fetch.php",
		    method:"POST",
		    data:{query:query},
		    dataType:"json",
		    success:function(data)
		    {
		     result($.map(data, function(item){
		      return item;
		     }));
		    }
		   })
		  }
	 });
	/**/
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