<?php
    include('../modelo/modeloDiploma.php');

    $cnsDiplomas = diplomaModelo::mdlDiploma();
?>
<form method="post" id="slideFormulario" enctype="multipart/form-data">
 <div class="container-fluid">
	<div class="row">
		<div class="form-group">
            <div style="width: 100%;">
                <label>Nombre Del Diploma</label>
                <select class="form-control" id="selectDiplomas" name="state" required=”required”>
                    <option value="" disabled selected>Seleccion</option>
                    <?php
                    foreach ($cnsDiplomas as $key => $value) {
                        $idDiploma =  $value['iddiploma'];
                        $nombreDiploma =  trim($value['nombrediploma']);
                    ?>
                    <option value="<?php echo $idDiploma;?>"><?php echo $nombreDiploma;?></option>
                    <?php } ?>
                </select>
            </div>
		</div>
        <div class="form-group">
            <input id="file" type="file"  class="file" name="file" data-preview-file-type="any" required=”required”>
	   </div>

    <script>
             $(document).ready(function() {
                    /*######################################################################################*/
                    /*CONFIGURACION SELEC2 Y  INPUTFILE*/
                    $('#divFrmCargar #selectDiplomas').select2({
                      language: {

                        noResults: function() {

                          return "No hay resultado";        
                        },
                        searching: function() {

                          return "Buscando..";
                        }
                      },
                                          
                    });
                    $("#divFrmCargar #file").fileinput();
                    /*CONFIGURACION SELEC2 Y  INPUTFILE*/
                    /*######################################################################################*/
               
             });
    </script>
    <div id="resp">.</div>
   
 </div>
</div>
</form>