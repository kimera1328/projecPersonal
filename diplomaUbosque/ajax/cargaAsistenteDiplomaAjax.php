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
            <label class="control-label">A file upload button without icon</label>
            <input type="file" class="filestyle" data-icon="false">

	</div>
     <script>
             $(document).ready(function() {
                 $('#selectDiplomas').select2();

             });
     </script>
 </div>