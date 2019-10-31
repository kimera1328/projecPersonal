<?php
include('../../../proyecto/sala/includes/adaptador.php');
class diplomaModelo{
    public function mdlDiploma($nombreDiploma){
        $db=Factory::createDbo();
        $sql="SELECT *
              FROM diploma 
              WHERE nombrediploma LIKE '%".$nombreDiploma."%'";
        return $db->GetAll($sql);
    }
}