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
    public function mdlAsistente($documentoAsistente){
        $db=Factory::createDbo();
        $sql="SELECT *
              FROM asistente 
              WHERE documentoasistente= '".$documentoAsistente."'";
        return $db->GetAll($sql);
    }
    public function mdlAsistenteDiploma($documentoAsistente,$diploma){
        $db=Factory::createDbo();
        $sql="SELECT *
              FROM asistentediploma ad,asistente a 
              WHERE a.idasistente = ad.idasistente AND 
                    ad.iddiploma='".$diploma."' AND
                    a.documentoasistente= '".$documentoAsistente."'";
        return $db->GetAll($sql);
    }

    public function mdlActualizaAsistente($idAsistente,$nombreAsistente,$apellidosAsistente,$tipodocumento){
        $db=Factory::createDbo();
        $sql="UPDATE asistente 
              SET nombreasistente='".utf8_encode($nombreAsistente)."', 
				  apellidoasistente='".utf8_encode($apellidosAsistente)."',
				  tipodocumento = '".$tipodocumento."' 
			  WHERE (idasistente='".$idAsistente."')";
        return $db->Execute($sql);
    }
    public function mdlInsertaAsistente($nombre,$apellidos,$numeroDocumento,$tipoDocumento){
        $db=Factory::createDbo();
        $sql="INSERT INTO asistente (nombreasistente, 
                                     apellidoasistente,
                                     documentoasistente,
                                      tipodocumento) 
                                    VALUES ('".utf8_encode($nombre)."', 
                                            '".utf8_encode($apellidos)."', 
                                            '".utf8_encode($numeroDocumento)."', 
                                            '".utf8_encode($tipoDocumento)."')";
        $db->Execute($sql);
        $lastId = $db->insert_Id();

        return $lastId; // retorno el id del insert

    }
    public function mdlInserAsistenteDiploma($idAsistente,$idDiploma){
        $db=Factory::createDbo();
        $sql="INSERT INTO asistentediploma (idasistente, iddiploma, codigoestado)
              VALUES ('".$idAsistente."', '".$idDiploma."', '100')";
        $consulta = $db->Execute($sql);
        $resultado = $db->affected_rows($consulta);
        return $resultado;
    }




}
