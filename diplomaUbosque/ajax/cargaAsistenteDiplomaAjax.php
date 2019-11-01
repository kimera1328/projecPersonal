<?php
    include('../modelo/modeloDiploma.php');

    $cnsDiplomas = diplomaModelo::mdlDiploma();
?>
 <div class="container-fluid">
	<div class="row">
		<div class="form-group">
            <div style="width: 100%;">
                <label>Nombre Del Diploma</label>
                <select class="form-control" id="selectDiplomas" name="state">
                    <option value="" disabled selected>Seleccion</option>
                    <?php
                    foreach ($cnsDiplomas as $key => $value) {
                        $idDiploma =  $value['iddiploma'];
                        $nombreDiploma =  trim($value['nombrediploma']);
                    ?>
                    <option value="<?php echo $$idDiploma;?>"><?php echo $nombreDiploma;?></option>
                    <?php } ?>
                </select>
            </div>
		</div>
        <div class="form-group">
            <input id="file-1" type="file"  class="file" data-preview-file-type="any">
	   </div>

    <script>
             $(document).ready(function() {
                 $('#divFrmCargar #selectDiplomas').select2();
                 $("#divFrmCargar #file-1").fileinput({

                     uploadUrl: "/file-upload-batch/2",
                     uploadAsync: true,
                     previewFileIcon: '<i class="fas fa-file"></i>',
                     allowedPreviewTypes: null, // set to empty, null or false to disable preview for all types
                     previewFileIconSettings: {
                         'docx': '<i class="fas fa-file-word text-primary"></i>',
                         'xlsx': '<i class="fas fa-file-excel text-success"></i>',
                         'pptx': '<i class="fas fa-file-powerpoint text-danger"></i>',
                         'jpg': '<i class="fas fa-file-image text-warning"></i>',
                         'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
                         'zip': '<i class="fas fa-file-archive text-muted"></i>',
                     }

                 });
             });
    </script>
 </div>