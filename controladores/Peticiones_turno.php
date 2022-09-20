<?php	
	//include("conexion_webservice.php");
	//include("conexion_bbdd_mysql.php");

	include("../conexion/conexion.php");
	$dataI = json_decode(file_get_contents("php://input"));

	$data2 = json_decode($dataI->json);
	$dataII = json_decode(file_get_contents("php://input"));

	$data3 = json_decode($dataII->jsonI);




	// var_dump($data2);
	// var_dump($data3);
	// var_dump('turnero');
	$i = 0;
	foreach ($data2 as $clave => $valor)
	{
		// var_dump($valor);
		// var_dump($data3[$i]);
		$queryI = "UPDATE vehiculos
		SET turno='".$data3[$i]."'  WHERE placa ='".$valor."'";
					   
				   
						//	 var_dump($queryI);
				 $stmt12 = mysqli_query($con,$queryI);
		$i++;
		
		
	
}
 
	
	// exit();
	

	 print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

    
?>