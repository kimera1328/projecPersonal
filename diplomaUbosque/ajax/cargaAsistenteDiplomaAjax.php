<?php
require_once('../../../frames/Excel/reader.php');
//require_once(realpath(dirname(__FILE__) .'IOFactory.php'));

if(isset($_POST['diploma']) &&  isset($_FILES)){
   $idDiploma = $_POST["diploma"];
    /*Procesamos el file*/
  $data = new Spreadsheet_Excel_Reader();
  $data->setOutputEncoding('CP1251');
    /**/
    $data->read($_FILES['fileAsistente']['tmp_name']);
    $filas = $data->sheets[0]['numRows'];
for ($z = 2; $z <= $filas; $z++) {
   $numeroDocumento = $fields[$z]['numerodocumento'] = trim($data->sheets[0]['cells'][$z][3]);
   $nombre = $fields[$z]['nombre'] = $data->sheets[0]['cells'][$z][1];
   $apellido =  $fields[$z]['apellidos'] = $data->sheets[0]['cells'][$z][2];
   $tipoDocumento =  $fields[$z]['tipodocumento'] = $data->sheets[0]['cells'][$z][4];


}


 /*foreach ($fields as $field)
 {
    echo $field['nombre'];
 }*/

}

?>


