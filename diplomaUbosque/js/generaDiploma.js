$(function(){



   $('#divFrmCargar').on('change','#numFirmaDiploma',function(){
        $('.divFirmaCreada').remove();
       var selectFirma = $('#numFirmaDiploma').val();
       for (var i=1; i<= selectFirma; i++) {
           agregarInput(i);
       }
    });
   function agregarInput(numInput) {
       var newInputNFirma = $('<div class="col-auto col-md-6 divFirmaCreada" ><label>Nombre '+numInput+':</label><input type="text" class="form-control" name="nombreFirma_'+numInput+'" placeholder="Firma '+numInput+'" /></div>"');
       var newInputCFirma = $('<div class="col-auto col-md-6 divFirmaCreada" ><label>Cargo '+numInput+':</label><input type="text" class="form-control" name="cargoFirma'+numInput+'" placeholder="Cargo Firma '+numInput+'" /></div>"');
       var newFile = $('<div class="col-auto col-md-12 divFirmaCreada" ><label>Firma Digital '+numInput+':</label><input type="file" class="file fileImagenFirma" id="firmaDigital_'+numInput+'" name="firmaDigital_'+numInput+'"/></div>"');

       $('#panelBody').append(newInputNFirma);
       $('#panelBody').append(newInputCFirma);
       $('#panelBody').append(newFile);


       $("#firmaDigital_"+numInput).fileinput({
           msgPlaceholder: "Imagen firma diploma formato(jpeg,png,jpg)",
           previewFileType: "image",
           browseClass: "btn btn-success",
           browseLabel: "Img"+numInput,
           browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
           removeClass: "btn btn-danger",
           removeLabel: "Borrar",
           removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
           allowedFileExtensions: ["jpeg", "png","jpg"]

       });
   }



});


