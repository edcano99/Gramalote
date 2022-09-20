<?php
	//include("conexion_webservice.php");
	//include("conexion_bbdd_mysql.php");
	session_start();
	include("../conexion/conexion.php");
	$dataI = json_decode(file_get_contents("php://input"));
	$data2 = json_decode($dataI->json);
	$data3 = json_decode($dataI->centrocostos);
	$data4 = json_decode($dataI->areas);
	$data5 = json_decode($dataI->jsonI);

	$placa = $_POST['placa'];
	$puntoinicio = $_POST['zones'];
	$cantidad = $_POST['cantidad'];
	$funcionario = $_POST['funcionario'];
	$area = $_POST['area'];
	$tipousuario = $_POST['tipousuario'];
	$turno = $_POST['turno'];
	//$centrocostos = $_POST['centrocostos'];
	$puntofinal = $_POST['zonesI'];
	$service = $_POST['service'];

	$opcion = $_POST['opcion'];

	if($opcion == 3){

		$consulta = "DELETE FROM rutas WHERE id_rutas  ='".$id_rutas."'";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute();




	 }
	 if($opcion == 5){

		if($_SESSION["tipousuario"] != 'Conductor'){
		$consulta = "SELECT * FROM `conductor` inner join vehiculos ON vehiculos.placa = conductor.vehiculoconductor 
		inner JOIN usuarios on usuarios.id_usuario = conductor.id_conductor 
		inner JOIN servicios on servicios.placa_servicio = vehiculos.placa 
		inner JOIN funcionariosFK on funcionariosFK.id_servicioFK = servicios.id_servicio  
		  ORDER BY `servicios`.`fecha_servicio` DESC, `servicios`.`hora_inicio` DESC ";
		}else{
	
			$consulta = "SELECT * FROM `conductor` inner join vehiculos ON vehiculos.placa = conductor.vehiculoconductor 
			inner JOIN usuarios on usuarios.id_usuario = conductor.id_conductor 
			inner JOIN servicios on servicios.placa_servicio = vehiculos.placa 
			inner JOIN funcionariosFK on funcionariosFK.id_servicioFK = servicios.id_servicio 
			WHERE id_conductor = '".$_SESSION["id_usuario"]."' ORDER BY `servicios`.`fecha_servicio` DESC, `servicios`.`hora_inicio` DESC";
		}
		//var_dump($_SESSION["tipousuario"]);
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);




	 }

	if($dataI->opcion == 2){
    //var_dump($opcion);
	$fechaActual = date('Y-m-d');
	$random1 = rand(1111111111, 9999999999);
	//$random2 = rand(1111111111, 9999999999);
	//$random3 = rand(1111111111, 9999999999);
	// $primaria_ruta = $random1."-".$random2."-".$random3;
	//var_dump('adentro');
	$consulta = "INSERT INTO servicios (
		id_servicio ,
		placa_servicio,
		hora_inicio,
		otros,
		herramientas,
		inicio_servicio
	)
	VALUES
		(
			'".$random1."',
			'".$dataI->placa."',
			NOW()-INTERVAL 5 DAY_HOUR,
			'".implode(',', array_values($data5))."',
			'".$dataI->herramientas."',
			'SITE'


		);  ";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute();

		 $queryIII = "UPDATE vehiculos
		 SET turno='En servicio', turnoa='".$dataI->turno."' WHERE placa ='".$dataI->placa."'";

$resultadoIII = $conexion->prepare($queryIII);
	     $resultadoIII->execute();

		 $query2 = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus <> 'on' order by turno+0 ";


		 // var_dump($query);
		  $stmt12 = mysqli_query($con,$query2);
		  while ($rowGBI1 = mysqli_fetch_array($stmt12)) {
			$iturno++;
		// 	if($placa != $rowGBI1['placa'] && $rowGBI1['turno'] != 1 && $rowGBI1['turno'] > $turnoanterior){
		// 		$iturno = $rowGBI1['turno'] - 1;
				$queryIA = "UPDATE vehiculos SET turno='".$iturno."'  WHERE placa ='".$rowGBI1['placa']."'";
		// 		var_dump($queryIA);
		 		   $resultado = $conexion->prepare($queryIA);
		    	   $resultado->execute();

		 	}

			 $query2I = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno  <> 'En servicio' and activacion = '1' and checkbus = 'on' order by turno+0 ";


		 // var_dump($query);
		  $stmt12I = mysqli_query($con,$query2I);
		  $iturnoI=0;
		  while ($rowI = mysqli_fetch_array($stmt12I)) {
			$iturnoI++;
		// 	if($placa != $rowGBI1['placa'] && $rowGBI1['turno'] != 1 && $rowGBI1['turno'] > $turnoanterior){
		// 		$iturno = $rowGBI1['turno'] - 1;
				$queryIA = "UPDATE vehiculos SET turno='".$iturnoI."'  WHERE placa ='".$rowI['placa']."'";
		// 		var_dump($queryIA);
		 		   $resultado = $conexion->prepare($queryIA);
		    	   $resultado->execute();

		 	}
		// var_dump($queryI);
		// var_dump(implode(', ', array_keys($data2)));
		// var_dump(json_decode($array,JSON_UNESCAPED_UNICODE));



	$i=0;
	foreach ($data2 as $clave => $valor)
	{
	//	var_dump($valor);
	//	var_dump($data4[$i]);
	//	var_dump('adentro');
	$consultaI = "SELECT centrocosto as centrocosto FROM areas where nomarea = '".$data4[$i]."' ";
	//var_dump($consulta);
	$resultadoI = $conexion->prepare($consultaI);
	$resultadoI->execute();
$total = $resultadoI->fetchAll(PDO::FETCH_ASSOC);
$totalI = $total[0]["centrocosto"] ;
//var_dump($totalI);
	$consultaI = "INSERT INTO funcionariosFK (
		id_servicioFK,
		funcionario,
		centrocosto,
		area
	)
	VALUES
		(
			'".$random1."',
			'".$valor."',
			'".$totalI."',
			'".$data4[$i]."'

		);  ";
		$i++;
		 $resultadoI = $conexion->prepare($consultaI);
	     $resultadoI->execute();
	}
	$primaria_ruta = $random1;
	$date = new DateTime("now", new DateTimeZone('America/New_York') );
	$date->format('Y-m-d');

	$queryI = "UPDATE vehiculos
	SET notificacion='0' WHERE activacion = '1'  ";
				   
			   
					//	var_dump($queryI);
					$resultadoI = $conexion->prepare($queryI);
					$resultadoI->execute();  		


	}

	  if($dataI->opcion == 4){
		// $array = array("foo", "bar", "hello", "world");
		// $obj = json_decode($puntofinal,true);
		$queryI = "UPDATE servicios
		SET  otros='".implode(',', array_values($data2))."' WHERE id_servicio ='".$dataI->service."'";
		// $queryI = "UPDATE servicios
		// SET puntofinal='".$puntofinal."', otros='".$data2."' WHERE id_servicio ='".$service."'";


		// var_dump($queryI);
		// var_dump(implode(', ', array_keys($data2)));
		// var_dump(json_decode($array,JSON_UNESCAPED_UNICODE));
		$resultado = $conexion->prepare($queryI);
		 $resultado->execute();





	 }

	 if($opcion == 7){
		// $array = array("foo", "bar", "hello", "world");
		// $obj = json_decode($puntofinal,true);

		 $queryI = "UPDATE servicios SET puntofinal='SITE' , hora_fin = NOW()-INTERVAL 5 DAY_HOUR WHERE id_servicio ='".$service."'";
		    $resultado = $conexion->prepare($queryI);
		    $resultado->execute();
		// $query4 = "SELECT * FROM vehiculos WHERE placa ='".$placa."' ";
		// $stmt14 = mysqli_query($con,$query4);
		// while ($rowGBI2 = mysqli_fetch_array($stmt14)) {

		// 	$turnoanterior = $rowGBI2['turnoa'];
		// }

		  $query2 = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno  <> 'En servicio' and activacion = '1' and checkbus <> 'on' order by turno+0 ";


        // var_dump($query);
         $stmt12 = mysqli_query($con,$query2);
     $totalval = mysqli_num_rows($stmt12);
	 $totalvalI =  $totalval + 1;
  //   var_dump($totalval);

        $iturno=0;
        $queryIAI = "UPDATE vehiculos SET turno='".$totalvalI."', turnoa = '' WHERE placa ='".$placa."'";
       // $queryIA = "UPDATE vehiculos SET turno='', turnoa = '' WHERE placa ='".$placa."'";
	//    var_dump($queryIAI);
			   $resultadoIAI = $conexion->prepare($queryIAI);
			   $resultadoIAI->execute();
         while ($rowGBI1 = mysqli_fetch_array($stmt12)) {
			$iturno++;
		// 	if($placa != $rowGBI1['placa'] && $rowGBI1['turno'] != 1 && $rowGBI1['turno'] > $turnoanterior){
		// 		$iturno = $rowGBI1['turno'] - 1;
				$queryIA = "UPDATE vehiculos SET turno='".$iturno."'  WHERE placa ='".$rowGBI1['placa']."'";
		// 		var_dump($queryIA);
		 		   $resultado = $conexion->prepare($queryIA);
		    	   $resultado->execute();

		 	}

			 $query2I = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno  <> 'En servicio' and activacion = '1' and checkbus = 'on' order by turno+0 ";


		 // var_dump($query);
		  $stmt12I = mysqli_query($con,$query2I);
		  $iturnoI=0;
		  while ($rowI = mysqli_fetch_array($stmt12I)) {
			$iturnoI++;
		// 	if($placa != $rowGBI1['placa'] && $rowGBI1['turno'] != 1 && $rowGBI1['turno'] > $turnoanterior){
		// 		$iturno = $rowGBI1['turno'] - 1;
				$queryIAI = "UPDATE vehiculos SET turno='".$iturnoI."'  WHERE placa ='".$rowI['placa']."'";
				var_dump($queryIAI);
		 		   $resultadoII = $conexion->prepare($queryIAI);
		    	   $resultadoII->execute();

		 	}


		// }


		$queryI = "UPDATE vehiculos
		SET notificacion='0' WHERE activacion = '1'  ";

						//	var_dump($queryI);
						$resultadoI = $conexion->prepare($queryI);
						$resultadoI->execute();  	


	 }
	 if($opcion == 8){
		// $array = array("foo", "bar", "hello", "world");
		// $obj = json_decode($puntofinal,true);
		$cantpasajeros = $_POST['cantpasajeros'];
		
		 $queryI = "UPDATE servicios SET puntofinal='' , hora_fin = '00:00:00' WHERE id_servicio ='".$service."'";
		 //$queryI = "UPDATE servicios SET puntofinal='".$puntofinal."' WHERE id_servicio ='".$service."'";

		$resultado = $conexion->prepare($queryI);
		 $resultado->execute();


		 if($cantpasajeros != ''){
			$queryIIIfun = "UPDATE funcionariosFK
			SET funcionario='".$cantpasajeros."', WHERE id_servicioFK ='".$service."'";
			
			
$resultadoIIIfun = $conexion->prepare($queryIIIfun);
$resultadoIIIfun->execute();

			$queryIII = "UPDATE vehiculos
			SET turno='En servicio' WHERE placa ='".$placa."'";
			
		 }else{

			$queryIII = "UPDATE vehiculos
			SET turno='En servicio' WHERE placa ='".$placa."'";

		 }
		

$resultadoIII = $conexion->prepare($queryIII);
	     $resultadoIII->execute();

		 $query2 = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno  <> 'En servicio' and activacion = '1' and checkbus <> 'on' order by turno+0";


		 // var_dump($query);
		  $stmt12 = mysqli_query($con,$query2);
		  while ($rowGBI1 = mysqli_fetch_array($stmt12)) {
			$iturno++;
		// 	if($placa != $rowGBI1['placa'] && $rowGBI1['turno'] != 1 && $rowGBI1['turno'] > $turnoanterior){
		// 		$iturno = $rowGBI1['turno'] - 1;
				$queryIA = "UPDATE vehiculos SET turno='".$iturno."'  WHERE placa ='".$rowGBI1['placa']."'";
		// 		var_dump($queryIA);
		 		   $resultado = $conexion->prepare($queryIA);
		    	   $resultado->execute();

		 	}

			 $query2I = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno  <> 'En servicio' and activacion = '1' and checkbus = 'on' order by turno+0 ";


		 // var_dump($query);
		  $stmt12I = mysqli_query($con,$query2I);
		  $iturnoI=0;
		  while ($rowI = mysqli_fetch_array($stmt12I)) {
			$iturnoI++;
		// 	if($placa != $rowGBI1['placa'] && $rowGBI1['turno'] != 1 && $rowGBI1['turno'] > $turnoanterior){
		// 		$iturno = $rowGBI1['turno'] - 1;
				$queryIA = "UPDATE vehiculos SET turno='".$iturnoI."'  WHERE placa ='".$rowI['placa']."'";
		// 		var_dump($queryIA);
		 		   $resultado = $conexion->prepare($queryIA);
		    	   $resultado->execute();

		 	}

			 $queryI = "UPDATE vehiculos
			 SET notificacion='0' WHERE activacion = '1'  ";
							
						
							 //	var_dump($queryI);
							 $resultadoI = $conexion->prepare($queryI);
							 $resultadoI->execute();  	
	 }

	 if($opcion == 9){

		$consulta = "SELECT nomarea as nomarea  FROM areas ";
		//var_dump($consulta);
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);




	 }
	 
	 
	 if($opcion == 10){

		$consulta = "SELECT placa as placa  FROM vehiculos ";
		//var_dump($consulta);
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);




	 }

	 print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX


?>