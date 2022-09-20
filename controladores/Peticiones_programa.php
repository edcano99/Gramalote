<?php
	//include("conexion_webservice.php");
	//include("conexion_bbdd_mysql.php");
	session_start();
	include("../conexion/conexion.php");
	$dataI = json_decode(file_get_contents("php://input"));
	$data2 = json_decode($dataI->json);





	//$opcion = $_POST['opcion'];

	
	//var_dump($conexion);

	if($dataI->opcion == 2){
   
	$fechaActual = date('Y-m-d');
	$random1 = rand(1111111111, 9999999999);
	//$random2 = rand(1111111111, 9999999999);
	//$random3 = rand(1111111111, 9999999999);
	// $primaria_ruta = $random1."-".$random2."-".$random3;
	//var_dump('adentro');
	$consulta = "INSERT INTO programas (
		id_programa,
		fecha_pro
	)
	VALUES
		(
			'".$random1."',
			'".$dataI->fechapro."'
		);  ";

		$resultado = $conexion->prepare($consulta);
		//var_dump($consulta);
		$resultado->execute();

		




	
	foreach ($data2 as $clave => $valor)
	{
		//var_dump($valor);
	//	var_dump($data4[$i]);
	//	var_dump('adentro');
	
	$consultaI = "INSERT INTO programas_fk (
		vehiculo,
		programa_fk
	)
	VALUES
		(
			'".$valor."',
			'".$random1."'

		);  ";
		$i++;
		 $resultadoI = $conexion->prepare($consultaI);
	     $resultadoI->execute();
		 //var_dump($resultadoI);
	}





	}

	// print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX


?>