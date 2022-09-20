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

		$consulta = "SELECT * FROM `conductor` inner join vehiculos ON vehiculos.placa = conductor.vehiculoconductor 
		inner JOIN usuarios on usuarios.id_usuario = conductor.id_conductor 
		inner JOIN servicios on servicios.placa_servicio = vehiculos.placa 
		inner JOIN funcionariosFK on funcionariosFK.id_servicioFK = servicios.id_servicio 
		WHERE fecha_servicio BETWEEN '".$fecha1."' and '".$fecha2."'  ";
		//var_dump($consulta);
	if($vehiculoconductor != '' ){
		$consulta .="and placa_servicio = '".$vehiculoconductor."'";

	}
	
	if($usuarioconductor != '' ){
		$consulta .="and id_usuario = '".$usuarioconductor."'";

	}
		$consulta .="ORDER BY `servicios`.`fecha_servicio` DESC, `servicios`.`hora_inicio` DESC ";
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();        
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
	
		
		
	
	 }
	
	


	 print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

  			
?>