<?php	
	//include("conexion_webservice.php");
	//include("conexion_bbdd_mysql.php");
	   
	include("../conexion/conexion.php");
	// $dataI = json_decode(file_get_contents("php://input"));

	// $data2 = json_decode($dataI->json);
	$fecha1 = $_POST['fecha1'];
	$fecha2 = $_POST['fecha2'];
	$vehiculoconductor = $_POST['vehiculoconductor'];
	$usuarioconductor = $_POST['usuarioconductor'];
	$opcion = $_POST['opcion'];


	 if($opcion == 1){
		$consulta = "SELECT * FROM vehiculos where vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus <> 'on' and turno = '2' and notificacion = '0'   order by turno+0  ";



		$resultado = $conexion->prepare($consulta);
		$resultado->execute();        
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
	
		$queryI = "UPDATE vehiculos
		SET notificacion='1' WHERE vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus <> 'on'  order by turno+0 ";
					   
				   
						//	var_dump($queryI);
						$resultadoI = $conexion->prepare($queryI);
						$resultadoI->execute();  		
	
	 }
	


	 if($opcion == 2){
		$consulta = "SELECT * FROM vehiculos where vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus <> 'on' and turno = '3' and notificacion = '0'   order by turno+0  ";



		$resultado = $conexion->prepare($consulta);
		$resultado->execute();        
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
	
		$queryI = "UPDATE vehiculos
		SET notificacion='1' WHERE vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus <> 'on'  order by turno+0 ";
					   
				   
						//	var_dump($queryI);
						$resultadoI = $conexion->prepare($queryI);
						$resultadoI->execute();  		
	
	 }
	
	


	 print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

  			
?>