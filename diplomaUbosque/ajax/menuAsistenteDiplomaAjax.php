<?php
    include('../modelo/modeloDiploma.php');

    $cnsDiplomas = diplomaModelo::mdlDiploma();
?>

 <div class="container-fluid">
     <form method="post" id="slideFormulario" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group">
                <div style="width: 100%;">
                    <label>Nombre Del Diploma</label>
                    <select class="form-control" id="selectDiplomas" name="diploma" required=”required”>
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
                <!--<input id="file" type="file"  class="file" name="fileAsistente" data-preview-file-type="any" required=”required”>-->
                <input id="file" name="file" type="file" class="file" data-show-preview="false" >
           </div>
        </div>
     </form>
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
                    $("#divFrmCargar #file").fileinput({
                        msgPlaceholder: "Archivo asistentes excel",
                        browseClass: "btn btn-success",
                        browseLabel: "Excel",
                        removeClass: "btn btn-danger",
                        removeLabel: "Borrar",
                        removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
                        uploadClass: "btn btn-info",
                        uploadLabel: "Actualizar",
                        uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> ",
                        allowedFileExtensions: ["xls", "xlsx"]
                    });
                    /*CONFIGURACION SELEC2 Y  INPUTFILE*/
                    /*######################################################################################*/
               
             });
    </script>

</div>
