<?php
class Conectar{

    public static function conexionMysqli($bdMysql){
        $conexion=new mysqli("localhost","root","3edcft6",$bdMysql);
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}
class conexionPDO{

	static public function conectar($base){

		$usuario="root";
		$contraseña="sisInfo";
		$dbName=$base;
		try {
			$bd = new PDO('mysql:host=localhost;port=33206;dbname='.$dbName, $usuario, $contraseña);
			$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$bd ->exec("set names utf8");//cartabetres, Ñ tildes, se puedan recibir sin problemas
			return $bd;
		} catch(PDOException $e) {
		  echo 'Error conectando con la base de datos: ' . $e->getMessage();
		}
	}

}
?>
