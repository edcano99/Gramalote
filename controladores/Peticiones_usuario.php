<?php	
	//include("conexion_webservice.php");
	//include("conexion_bbdd_mysql.php");

	include("../conexion/conexion.php");


	
	$usuario = $_POST['usuario'];
	$id_conductor = $_POST['id_conductor'];
	$nom_completo = $_POST['nom_completo'];
	$empresa = $_POST['empresa'];
	$telefono = $_POST['telefono'];
	$eps = $_POST['eps'];
	$arl = $_POST['arl'];
	$password = $_POST['password'];
	$rh = $_POST['rh'];
	$opcion = $_POST['opcion'];
	
    // var_dump($opcion);
	if($opcion == 1){
		function Encriptar($Variable){
			return sha1(md5('3@4gF$fTEm..'.$Variable));
		}
		$ClaveEnc=Encriptar($password);
		$random1 = rand(1111111111, 9999999999);

	$primaria_usu = $random1;
	   $consulta = "INSERT INTO usuarios (
		id_usuario ,
		usuario,
		clave,
		nombre_completo,
		empresa,
		telefono,
		eps,
		arl,
		rh
	)
	VALUES
		(
			'".$primaria_usu."',
			'".$usuario."',
			'".$ClaveEnc."',
			'".$nom_completo."',
			'".$empresa."',
			'".$telefono."',
			'".$eps."',
			'".$arl."',
			'".$rh."'
			
		);  ";	
		// var_dump($consulta);		
	  $resultado = $conexion->prepare($consulta);
	   $resultado->execute();
 
	}


	  if($opcion == 4){

		$consulta = "SELECT * FROM usuarios ";
		//var_dump($consulta);
		$resultado = $conexion->prepare($consulta);
		 $resultado->execute();        
		 $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
	
		
		
	
	 }
	 if($opcion == 6){
		$queryI = "UPDATE usuarios
		SET activar='1' WHERE id_usuario ='".$usuario."'";
			
		// var_dump($consulta);
		$resultado = $conexion->prepare($queryI);
		 $resultado->execute();        
	
		
		
	
	 }
	 if($opcion == 7){
		$queryI = "UPDATE usuarios
		SET activar='' WHERE id_usuario ='".$usuario."'";
			
		// var_dump($consulta);
		$resultado = $conexion->prepare($queryI);
		 $resultado->execute();        
	
		
		
	
	 }

	 if($opcion == 8){

		$consulta = "DELETE FROM usuarios WHERE id_usuario  ='".$usuario."'";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute();




	 }
	 if($opcion == 9){
		$usuarioconductor = $_POST['usuarioconductor'];
		$claveconductor = $_POST['claveconductor'];
		$cedulaconductor = $_POST['cedulaconductor'];
		$direccionconductor = $_POST['direccionconductor'];
		$nom_completoconductor = $_POST['nom_completoconductor'];
		$empresaconductor = $_POST['empresaconductor'];
		$telefonoconductor = $_POST['telefonoconductor'];
		$rhconductor = $_POST['rhconductor'];
		$arlconductor = $_POST['arlconductor'];
		$epsconductor = $_POST['epsconductor'];
		$licenciaconductor = $_POST['licenciaconductor'];
		$vencimientolicencia = $_POST['vencimientolicencia'];
		$vehiculoconductor = $_POST['vehiculoconductor'];

		function Encriptar($Variable){
			return sha1(md5('3@4gF$fTEm..'.$Variable));
		}
		$ClaveEnc=Encriptar($claveconductor );
		$random1 = rand(1111111111, 9999999999);

	$primaria_usu = $random1;
	   $consulta = "INSERT INTO usuarios (
		id_usuario ,
		usuario,
		clave,
		nombre_completo,
		empresa,
		telefono,
		eps,
		arl,
		tipousuario,
		rh
	)
	VALUES
		(
			'".$primaria_usu."',
			'".$usuarioconductor."',
			'".$ClaveEnc."',
			'".$nom_completoconductor."',
			'".$empresaconductor."',
			'".$telefonoconductor."',
			'".$epsconductor."',
			'".$arlconductor."',
			'Conductor',
			'".$rhconductor."'
			
		);  ";	
		// var_dump($consulta);		
	  $resultado = $conexion->prepare($consulta);
	   $resultado->execute();

	   $consultaI = "INSERT INTO conductor (
		id_conductor ,
		direccionconductor,
		licenciaconductor,
		vencimientolicencia,
		vehiculoconductor
	)
	VALUES
		(
			'".$primaria_usu."',
			'".$direccionconductor."',
			'".$licenciaconductor."',
			'".$vencimientolicencia."',
			'".$vehiculoconductor."'		
		);  ";	
		// var_dump($consulta);		
	  $resultadoI = $conexion->prepare($consultaI);
	   $resultadoI->execute();



	 }
	 if($opcion == 10){

		$usuarioconductorI = $_POST['usuarioconductorI'];
		$cedulaconductor = $_POST['cedulaconductor'];
		$direccionconductor = $_POST['direccionconductor'];
		$licenciaconductor = $_POST['licenciaconductor'];
		$vencimientolicencia = $_POST['vencimientolicencia'];
		$vehiculoconductor = $_POST['vehiculoconductor'];

		$consulta = "SELECT * FROM conductor left join usuarios on usuarios.id_usuario = conductor.id_conductor ";
		//var_dump($consulta);
		$resultado = $conexion->prepare($consulta);
		 $resultado->execute();        
		 $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	 }


	 if($opcion == 11){

		$usuarioconductorI = $_POST['usuarioconductorI'];
		$cedulaconductor = $_POST['cedulaconductor'];
		$direccionconductor = $_POST['direccionconductor'];
		$licenciaconductor = $_POST['licenciaconductor'];
		$vencimientolicencia = $_POST['vencimientolicencia'];
		$vehiculoconductor = $_POST['vehiculoconductor'];
		$consultaI = "INSERT INTO conductor (
			id_conductor,
			direccionconductor,
			licenciaconductor,
			vencimientolicencia,
			cedulaconductor,
			vehiculoconductor
		)
		VALUES
			(
				'".$usuarioconductorI."',
				'".$direccionconductor."',
				'".$licenciaconductor."',
				'".$vencimientolicencia."',
				'".$cedulaconductor."',
				'".$vehiculoconductor."'		
			);  ";	
			 //var_dump($consultaI);		
		  $resultadoI = $conexion->prepare($consultaI);
		   $resultadoI->execute();
	
	 }
	 if($opcion == 12){

		$consulta = "DELETE FROM conductor WHERE id_conductor  ='".$id_conductor."'";		
				
		$resultado = $conexion->prepare($consulta);
		$resultado->execute(); 
	
		
		
	
	 }

	 print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

?>