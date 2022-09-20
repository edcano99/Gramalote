<?php	
	//include("conexion_webservice.php");
	//include("conexion_bbdd_mysql.php");

	include("../conexion/conexion.php");

	$placa = $_POST['placa'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$color = $_POST['color'];
	$vencesoat = $_POST['vencesoat'];
	$opcion = $_POST['opcion'];
	$venceseguro = $_POST['venceseguro'];
	$vencebimestral = $_POST['vencebimestral'];
	$tipotransporte = $_POST['tipotransporte'];
	$idempresa = $_POST['idempresa'];
	$cantpasajeros = $_POST['cantpasajeros'];
	$matricula = $_POST['matricula'];
	$nroextracto = $_POST['nroextracto'];
	$vencimientoextracto = $_POST['vencimientoextracto'];
	$checkbus = $_POST['checkbus'];

	

	//var_dump($id_usuario);
	// exit();
	if($opcion == 1){
		$queryI = "UPDATE vehiculos
		SET activacion='1' WHERE placa ='".$placa."'";
			
		// var_dump($consulta);
		$resultado = $conexion->prepare($queryI);
		 $resultado->execute(); 
		 
		 $query2 = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno  <> 'En servicio' and activacion = '1' order by turno+0 ";


		 // var_dump($query);
		  $stmt12 = mysqli_query($con,$query2);
		  $iturno=0;
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
	
	 }

	 if($opcion == 2){
		//var_dump($opcion);
		$consultaI = "SELECT COUNT(*) as total FROM vehiculos ";
	
	
		
	
			
		//var_dump($consulta);
		$resultadoI = $conexion->prepare($consultaI);
		$resultadoI->execute();  
	$total = $resultadoI->fetchAll(PDO::FETCH_ASSOC);
	$totalI = $total[0]["total"] + 1;
	//	var_dump($totalI);
		$consulta = "INSERT INTO vehiculos (
			placa ,
			modelo ,
			marca,
			color,
			vencesoat,
			venceseguro,
			vencebimestral,
			tipotransporte,
			empresafkvehi,
			cantpasajeros,
			turno,
			nroextracto,
			vencimientoextracto,
			checkbus,
			matricula
		)
		VALUES
			(
				'".$placa."',
				'".$modelo."',
				'".$marca."',
				'".$color."',
				'".$vencesoat."',
				'".$venceseguro."',
				'".$vencebimestral."',
				'".$tipotransporte."',
				'".$idempresa."',
				'".$cantpasajeros."',
				'".$totalI."',
				'".$nroextracto."',
				'".$vencimientoextracto."',
				'".$checkbus."',
				'".$matricula."'
				
			);  ";	
			//var_dump($consulta);		
	 $resultado = $conexion->prepare($consulta);
	 $resultado->execute();
		}

	if($opcion == 3){

		$consulta = "DELETE FROM vehiculos WHERE placa  ='".$placa."'";		
				
		$resultado = $conexion->prepare($consulta);
		$resultado->execute(); 
	
		
		
	
	 }
	
	

	  if($opcion == 4){
		$consulta = "SELECT * FROM vehiculos ";


	

		
		//var_dump($consulta);
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();        
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
	
	 }

	 if($opcion == 5){
		$queryI = "UPDATE vehiculos
		SET activacion='' WHERE placa ='".$placa."'";
			
		// var_dump($consulta);
		$resultado = $conexion->prepare($queryI);
		 $resultado->execute(); 
		 

		 
		 $query2 = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno  <> 'En servicio' and activacion = '1'  order by turno+0 ";


		 // var_dump($query);
		  $stmt12 = mysqli_query($con,$query2);
		  $iturno=0;


	   //   var_dump($totalval);

		  while ($rowGBI1 = mysqli_fetch_array($stmt12)) {
			$iturno++;
		// 	if($placa != $rowGBI1['placa'] && $rowGBI1['turno'] != 1 && $rowGBI1['turno'] > $turnoanterior){
		// 		$iturno = $rowGBI1['turno'] - 1;
				$queryIA = "UPDATE vehiculos SET turno='".$iturno."'  WHERE placa ='".$rowGBI1['placa']."'";
				//var_dump($queryIA);
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
	
	 }
	 

	 print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX


			
?>