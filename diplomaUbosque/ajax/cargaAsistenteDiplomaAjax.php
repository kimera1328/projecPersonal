<?php
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

    $conteoAsistentesAgregados = 0;
    for ($z = 2; $z <= $filas; $z++) {
       $numeroDocumento = $fields[$z]['numerodocumento'] = trim($data->sheets[0]['cells'][$z][3]);
       $nombre = $fields[$z]['nombre'] = $data->sheets[0]['cells'][$z][1];
       $apellido =  $fields[$z]['apellidos'] = $data->sheets[0]['cells'][$z][2];
       $tipoDocumento =  $fields[$z]['tipodocumento'] = $data->sheets[0]['cells'][$z][4];
       $cnsRevisaAsistente = diplomaModelo::mdlAsistente($numeroDocumento);//consulta asistente tabla asistente
       $nombreCompletoAsistente = $nombre." ".$apellido;
       if ($tipoDocumento < 10){ $tipoDocumento = "0".$tipoDocumento; }

       if(count($cnsRevisaAsistente)>0 && $numeroDocumento!=""){//si hay resultados actualiza si no inserta
            $idAsistente = $cnsRevisaAsistente[0]['idasistente'];
            $actualizaAsistente = diplomaModelo::mdlActualizaAsistente($idAsistente,$nombre,$apellido,$tipoDocumento);
            //consulteme si el asistentediploma existe
            $cnsDiplomaAsistente = diplomaModelo::mdlAsistenteDiploma($numeroDocumento,$idDiploma);
            if (count($cnsDiplomaAsistente)==0){
                 $conteoAsistentesAgregados++;
                 $insertaAsistenteDiploma = diplomaModelo::mdlInserAsistenteDiploma($idAsistente,$idDiploma);
                 if ($insertaAsistenteDiploma>0){
                     // $datos["result"] =  1;
                     //$datos["nombreAsistente"] =  $nombreCompletoAsistente;
                     echo json_encode(1);
                 }
            }else{
                echo json_encode(0);

            }
       }else{
           if ($numeroDocumento<>'') {//evita que se inserten asistentes vacios
               $conteoAsistentesAgregados++;
             //  $idInsertAsistente = diplomaModelo::mdlInsertaAsistente($nombre,$apellido,$numeroDocumento,$tipoDocumento);//inserta datos en tabla asistente
               // $insertaAsistenteDiploma = diplomaModelo::mdlInserAsistenteDiploma($idInsertAsistente,$idDiploma);
           }
       }

    }

}

?>


