<?php	
	//include("conexion_webservice.php");
	//include("conexion_bbdd_mysql.php");
	   
	include("../conexion/conexion.php");
	$dataI = json_decode(file_get_contents("php://input"));

	$data2 = json_decode($dataI->json);
	$area = $_POST['area'];
	$centrocosto = $_POST['centrocosto'];
	$id_area = $_POST['id_area'];
	$opcion = $_POST['opcion'];

	if($opcion == 3){

		$consulta = "DELETE FROM areas WHERE id_area  ='".$id_area."'";		
				var_dump($consulta);
		$resultado = $conexion->prepare($consulta);
		$resultado->execute(); 
	
		
		
	
	 }
	 if($opcion == 5){

		$consulta = "SELECT *  FROM areas ";
		//var_dump($consulta);
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();        
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
	
		
		
	
	 }
	
	if($opcion == 2){
    //var_dump($opcion);

	$random1 = rand(1111111111, 9999999999);
	//$random2 = rand(1111111111, 9999999999);
	//$random3 = rand(1111111111, 9999999999);
	// $primaria_ruta = $random1."-".$random2."-".$random3;
	$primaria_ruta = $random1;
	$date = date('Y-m-d');
    $consulta = "INSERT INTO areas (
		centrocosto,
		nomarea
	)
	VALUES
		(
			'".$centrocosto."',
			'".$area."'
			
		);  ";	
		//var_dump($consulta);		
	 $resultadoI = $conexion->prepare($consulta);
	  $resultadoI->execute();
	}

	  if($opcion == 4){
		// $bus = $_POST['bus'];
		// $tiporuta = $_POST['tiporuta'];
		$consulta = "SELECT * FROM estudiantes left join usuarios ON  estudiantes.padreidfk = usuarios.id_usuario where estudiantes.".$tiporuta." = '".$bus."' ";
		//var_dump($consulta);
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();        
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
	
		
		
	
	 }



	 print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

    exit();
	// $condicion = $_POST['condicion'];
	// $id_Usu = $_POST['id_Usu'];
//$puntaje_pregunta = $_POST['puntaje_pregunta'];
//  var_dump($nombre);
//  var_dump($empresa);
//  var_dump($opcion);
// var_dump($condicion);
// var_dump($id_Usu);
//exit();
 $hoy = date("Y-m-d");
// print_r($hoy);
// exit();
if($opcion == 2){
	$queryGBI1xx = "SELECT
	COUNT(*) AS consecutivo
FROM
capacitacion where id_empresa_capacitacion = '".$empresa."' ";
$resultadoconse = $conexion->prepare($queryGBI1xx);
$resultadoconse->execute();
$data=$resultadoconse->fetchAll(PDO::FETCH_COLUMN,0);
//$stmtGBI1xx = sqlsrv_query($connGBI, $queryGBI1xx );

$cerosx = '00000000';

$consecutivo = intval($data[0]);

$consecutivoI = $consecutivo + 1;
// var_dump('este es el consecutivo '.$consecutivoI);
$random1 = rand(1111111111, 9999999999);
			$random2 = rand(1111111111, 9999999999);
			$random3 = rand(1111111111, 9999999999);
			$id_capacitacion = $random1."-".$random2."-".$random3;

	$consulta = "INSERT INTO capacitacion (
		id_capacitacion ,
		id_orden_sesion ,
		nom_capacitacion,
		dirigido_a_capacitacion,
		fuente_capacitacion,
		personal_capacitacion,
		id_empresa_capacitacion,
		porcentajecalificacion,
		fecha_creacion
	)
	VALUES
		(
			'".$id_capacitacion."',
			'".$consecutivoI."',
			'".$nombre."',
			'".$dirigido_a_capacitacion."',
			'".$fuente_capacitacion."',
			'".$personal_capacitacion."',
			'".$empresa."',
			'".$porcentajecalificacion."',
			DATE_ADD(NOW(),INTERVAL +0 HOUR)
			
		);  ";	
		//var_dump($consulta);		
	 $resultado = $conexion->prepare($consulta);
	  $resultado->execute();


	

}

 if($opcion == 4){

	$consulta = "SELECT * FROM capacitacion where id_empresa_capacitacion='".$empresa."' ";
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();        
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	
	

 }
 
 if($opcion == 3){

	$consulta = "DELETE FROM capacitacion WHERE id_capacitacion  ='".$user_id."'";		
            
	$resultado = $conexion->prepare($consulta);
	$resultado->execute(); 

	
	

 }


 print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
	
			
?>