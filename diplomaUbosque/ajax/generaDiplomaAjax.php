
    <form method="post" id="" enctype="multipart/form-data">
        <div class="panel panel-default">
            <div class="panel-heading">Encabezado Diploma</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-auto col-md-4">
                        <label>Nombre Diploma:</label>
                        <input type="text" class="form-control" id="nombreDiploma" name="nombreDiploma" placeholder="Nombre Diploma">
                    </div>
                    <div class="col-auto col-md-4" >
                        <label>Tipo letra:</label>
                        <select class="form-control" name="tipoLetraDiploma" id="tipoLetraDiploma">
                            <option value="">Tipo letra</option>
                            <option value="Helvetica">Arial</option>
                            <option value="Courier">Courier</option>
                            <option value="Times">Times</option>
                            <option value="Symbol">Symbol</option>
                            <option value="ZapfDingbats">ZapfDingbats</option>
                        </select>
                    </div>
                    <div class="col-auto col-md-4">
                        <label>Tamaño letra:</label>
                        <select class="form-control" name="tamanioLetra" id="tamanioLetra">
                            <option value="">Tamanio letra</option>
                            <option value="10">10 px</option>
                            <option value="11">11 px</option>
                            <option value="12">12 px</option>
                            <option value="13">13 px</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto col-md-12">
                        <label>Imagen de Fondo:</label>
                        <input id="fileImagen" name="input-b2" type="file" class="file" data-show-preview="false">
                    </div>
                </div>
            </div>
        </div>
                <hr>
        <div class="panel panel-default">
            <div class="panel-heading">Datos de asistente</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-auto col-md-4">
                        <label>Nombre Diploma</label>
                        <input type="text" class="form-control" id="nombreDiploma" name="nombreDiploma" placeholder="Nombre Diploma">
                    </div>
                    <div class="col-auto col-md-4" >
                        <label>Nombre Diploma</label>
                        <select class="form-control" name="tipoLetraDiploma" id="tipoLetraDiploma">
                            <option value="">Tipo letra</option>
                            <option value="Helvetica">Arial</option>
                            <option value="Courier">Courier</option>
                            <option value="Times">Times</option>
                            <option value="Symbol">Symbol</option>
                            <option value="ZapfDingbats">ZapfDingbats</option>
                        </select>
                    </div>
                    <div class="col-auto col-md-4">
                        <label>Nombre Diploma</label>
                        <select class="form-control" name="tamanioLetra" id="tamanioLetra">
                            <option value="">Tamanio letra</option>
                            <option value="10">10 px</option>
                            <option value="11">11 px</option>
                            <option value="12">12 px</option>
                            <option value="13">13 px</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </form>

<script>
    $("#divFrmCargar #fileImagen").fileinput({
        msgPlaceholder: "Imagen de diploma formatos admitidos (jpeg,png)",
        previewFileType: "image",
        browseClass: "btn btn-success",
        browseLabel: "Imagen",
        browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
        removeClass: "btn btn-danger",
        removeLabel: "Borrar",
        removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
        uploadClass: "btn btn-info",
        uploadLabel: "Actualizar",
        uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> ",
        allowedFileExtensions: ["jpeg", "png"]
    });
</script>