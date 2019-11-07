<?php 
$idDiploma = $_POST["seleccion"];
if(isset($_POST['buscar']) &&  isset($_FILES)){
    $idDiploma = $_POST["idDiploma"];
    /*Procesamos el file*/
    $data = new Spreadsheet_Excel_Reader(); 
    $data->setOutputEncoding('CP1251');
    /**/
    $data->read($_FILES["file"]["tmp_name"]);
    $filas = $data->sheets[0]['numRows'];

    
}

?>