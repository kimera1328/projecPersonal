<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menu Certificacion Univensidad El bosque</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="../../frames/bootstrap.min.css" >-->
    <link href="../../frames/select2.min.css" rel="stylesheet" />
    <link href="../../frames/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="estilos/personalizado.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="container-fluid">
		<?php 
			if(isset($_POST['accion'])){
				//
			}else{

				include("modulo/menuPrincipal.php");
			}
		?>
	</div>
    <script src="../../frames/jquery-2.2.4.js"></script>
    <script src="../../frames/bootstrap.min.js"></script>
    <script src="../../frames/select2.min.js"></script>
    <script src="../../frames/fileinput.min.js"></script>
    <script type="text/javascript" src="../../frames/sweetalert.min.js"></script>

    <script src="js/main.js"></script>
    <!--<script src="js/cargaAsistentesDiploma.js"></script>-->

</body>
</html>

