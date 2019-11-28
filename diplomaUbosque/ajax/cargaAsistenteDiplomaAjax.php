<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../../../frames/Excel/reader.php');
include('../modelo/modeloDiploma.php');
//require_once(realpath(dirname(__FILE__) .'IOFactory.php'));

if(isset($_POST['diploma']) &&  isset($_FILES)){
  $idDiploma = $_POST["diploma"];
  /*Procesamos el file*/
  $data = new Spreadsheet_Excel_Reader();
  $data->setOutputEncoding('CP1251');
  $data->read($_FILES['fileAsistente']['tmp_name']);
  $filas = $data->sheets[0]['numRows'];
for ($z = 2; $z <= $filas; $z++) {
   $numeroDocumento = $fields[$z]['numerodocumento'] = trim($data->sheets[0]['cells'][$z][3]);
   $nombre = $fields[$z]['nombre'] = $data->sheets[0]['cells'][$z][1];
   $apellido =  $fields[$z]['apellidos'] = $data->sheets[0]['cells'][$z][2];
   $tipoDocumento =  $fields[$z]['tipodocumento'] = $data->sheets[0]['cells'][$z][4];
   //verifica si el asistente esta registrado o no en el diploma.
   $cnsRevisaAsistente = diplomaModelo::mdlRevisaAsistenteDiploma($numeroDocumento,$idDiploma);
//var_dump($cnsRevisaAsistente);
   if ($tipoDocumento < 10){ $tipoDocumento = "0".$tipoDocumento; }
   if(count($cnsRevisaAsistente)>0 && $numeroDocumento!=""){//si hay resultados actualiza si no inserta
        $idAsistente = $cnsRevisaAsistente[0]['idasistente'];
        diplomaModelo::mdlActualizaAsistente($idAsistente,$nombre,$apellido,$tipoDocumento);
   }else{
       $idInsertAsistente = diplomaModelo::mdlInsertaAsistente($nombre,$apellido,$numeroDocumento,$tipoDocumento);//inserta datos en tabla asistente
       $idAsistente = $idInsertAsistente;
       $insertaAsistenteDiploma = diplomaModelo::mdlInserAsistenteDiploma($idAsistente,$idDiploma);
   }
}
 /*foreach ($fields as $field)
 {
    echo $field['nombre'];
 }*/

}

?>


