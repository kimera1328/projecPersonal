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
		$('#slideFormulario').toggle( "slow");
	});
	//acciones boton regresar
	/*envio de formulario*/
	 $("#btnAccion").on('click',function(){
	 	
		if(validaForm()){ 
		var select = $('#selectDiplomas').val();
		var file = $('#file').val();
		var data = "seleccion="+select+"&files="+file;
		//console.log(select);
		var url = "ajax/cargaAsistenteDiplomaAjax.php";
			$.ajax({
			   type: "POST",                 
			   url: url,                    
			   data:data,
			   success: function(data)            
			   {
				 $('#resp').html(data);           
			   }
			 });
		}else{
			 console.log("pilas");
	    }select
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


