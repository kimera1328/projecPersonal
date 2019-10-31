<?php
//fetch.php
/*
$connect = mysqli_connect("localhost", "root", "", "testing");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
*/
error_reporting(E_ALL);
ini_set('display_errors', '1');
//require_once(realpath(dirname(__FILE__) . "/proyecto/sala/includes/adaptador.php"));
include('../modelo/modeloDiploma.php');


$diploma = diplomaModelo::mdlDiploma($_POST["query"]);

//$result = mysqli_query($connect, $query);

$data = array();

if(count($diploma) > 0)
{
    foreach ($diploma as $key => $value) {

        echo $data[] = $value["nombrediploma"];
    }
    echo json_encode($data);
}

?>
