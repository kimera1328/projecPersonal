    <form method="post" id="" enctype="multipart/form-data">
        <!--Encabezado Diploma primera seccion-->
        <div class="panel panel-default">
            <div class="panel-heading">Encabezado Diploma</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-auto col-md-12">
                        <label>Imagen de Fondo:</label>
                        <input id="imgEncabezado" name="imgEncabezado" type="file" class="file" data-show-preview="false">
                    </div>
                    <div class="col-auto col-md-6">
                        <label>Texto Encabezado:</label>
                        <input type="text" class="form-control" id="txtEncabezadoDiploma" name="txtEncabezadoDiploma" placeholder="ej: La Facultad de Enfermeria, La Division de Educacion Continuada de...">
                    </div>
                    <div class="col-auto col-md-2">
                        <label>Tamaño Letra:</label>
                        <select class="form-control" name="sizeEncabezado" id="sizeEncabezado">
                            <option value="">tamanio letra</option>
                            <option value="10">10 px</option>
                            <option value="11">11 px</option>
                            <option value="12">12 px</option>
                            <option value="13">13 px</option>
                        </select>
                    </div>
                    <div class="col-auto col-md-2">
                        <label>Fuente:</label>
                        <select class="form-control" name="fuenteEncabezado" id="fuenteEncabezado">
                            <option value="">**letra**</option>
                            <option value="Helvetica">Arial</option>
                            <option value="Courier">Courier</option>
                            <option value="Times">Times</option>
                            <option value="Symbol">Symbol</option>
                            <option value="ZapfDingbats">ZapfDingbats</option>
                        </select>
                    </div>
                    <div class="col-auto col-md-2 text-center">
                        <label>Negrita:</label><br>
                        <input type="checkbox" name="negritaTxtEncabezado" id="negritaTxtEncabezado">
                    </div>
                </div>
            </div>
        </div>
        <!--Fin Encabezado Diploma primera seccion-->
        <hr>
        <!--Contenido Diploma-->
        <div class="panel panel-default">
            <div class="panel-heading">Contenido Diploma</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-auto col-md-12">
                        <label>SMS: !Otorgacion:</label>
                        <input type="text" class="form-control" id=" " name="txtOtorgan" placeholder="ej:Otorgan el presente Certificado a:">
                    </div>
                    <div class="col-auto col-md-12">
                        <label>SMS : !Quien</label>
                        <input type="text" class="form-control" id="txtAsistioA" name="txtAsistioA" placeholder="ej:Quien asistió y cumplió los requisitos académicos establecidos para el">
                    </div>

                    <div class="col-auto col-md-8">
                        <label>Nombre diploma:</label>
                        <input type="text" class="form-control" id="nombreDiploma" name="nombreDiploma" placeholder="ej: Simposion de Espiritualidad y Autocuidado en Cuidados Palativos">
                    </div>
                    <div class="col-auto col-md-2">
                        <label>Tamaño Letra:</label>
                        <select class="form-control" name="sizeNombreDiploma" id="sizeNombreDiploma">
                            <option value="">tamanio letra</option>
                            <option value="10">10 px</option>
                            <option value="11">11 px</option>
                            <option value="12">12 px</option>
                            <option value="13">13 px</option>
                        </select>
                    </div>
                    <div class="col-auto col-md-2">
                        <label>Fuente:</label>
                        <select class="form-control" name="fuenteNombre" id="fuenteNombre">
                            <option value="">**letra**</option>
                            <option value="Helvetica">Arial</option>
                            <option value="Courier">Courier</option>
                            <option value="Times">Times</option>
                            <option value="Symbol">Symbol</option>
                            <option value="ZapfDingbats">ZapfDingbats</option>
                        </select>
                    </div>

                    <div class="col-auto col-md-6">
                        <label>Intensidad de horas</label>
                        <input type="text" class="form-control" id="intencidadHoras" name="intencidadHoras" placeholder="Bogotá D.C., agosto 28 de 2020">
                    </div>
                    <div class="col-auto col-md-6">
                        <label>Fecha de Certificacion</label>
                        <input type="date" class="form-control" id="fechaCertificacion" name="fechaCertificacion">
                    </div>
                </div>
            </div>
        </div>
        <!--Fin Seccion Contenido Diploma-->
        <hr>
        <!--Seccion parametrizacion Firma Diploma-->
        <div class="panel panel-default">
            <div class="panel-heading">Firmas Diploma</div>
            <div class="panel-body" >
                <div class="row" id="panelBody">
                    <div class="col-auto col-md-2">
                        <label>Tamanio letra Firma</label>
                        <select class="form-control col-auto col-md-2" name="txtSizeFirma" id="txtSizeFirma">
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="col-auto col-md-2">
                        <label>Fuente</label>
                        <select class="form-control" name="tipoLetraDiploma" id="tipoLetraDiploma">
                            <option value="">Fuente Firma</option>
                            <option value="Helvetica">Arial</option>
                            <option value="Courier">Courier</option>
                            <option value="Times">Times</option>
                            <option value="Symbol">Symbol</option>
                            <option value="ZapfDingbats">ZapfDingbats</option>
                        </select>
                    </div>
                    <div class="col-auto col-md-1 text-center">
                        <label>Negrita Nombres</label><br>
                        <input type="checkbox" name="negritaNombres" id="negritaNombres" checked>
                    </div>
                    <div class="col-auto col-md-7">
                        <label>Numero de Firmas</label>
                        <select class="form-control" name="numFirmaDiploma" id="numFirmaDiploma">
                            <option value=""># Firmas</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
               </div>
            </div>
        </div>
        <!--Fin Seccion parametrizacion Firma Diploma-->
    </form>

<script>
    $("#divFrmCargar #imgEncabezado").fileinput({
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