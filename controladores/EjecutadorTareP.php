

<?php	
	//include("conexion_webservice.php");
	//include("conexion_bbdd_mysql.php");
	/*   
    class Conexion{	  
        public static function Conectar() {        
            define('servidor', 'localhost');
            define('nombre_bd', 'u495881785_gramalote');
            define('usuario', 'u495881785_Gramalote');
            define('password', 'Gramalote123$%');					        
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{
                $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
                return $conexion;
            }catch (Exception $e){
                die("El error de Conexión es: ". $e->getMessage());
            }
        }
    }
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    
    
    $servidor="localhost"; 
        $usuario="u495881785_Gramalote"; 
        $clave="Gramalote123$%"; 
        $base_datos="u495881785_gramalote";
        if(!($con=mysqli_connect($servidor, $usuario, $clave)))
        {
             //echo "Falta conexion al servidor";
        }else{
            //echo 'conectado';
        }	
    $con->select_db($base_datos) ;
    $con->set_charset("utf8");	

    */
    
    // $dataI = json_decode(file_get_contents("php://input"));


	session_start();
	include("../conexion/conexion.php");
    //var_dump($opcion);

	$random1 = rand(1111111111, 9999999999);
	//$random2 = rand(1111111111, 9999999999);
	//$random3 = rand(1111111111, 9999999999);
	// $primaria_ruta = $random1."-".$random2."-".$random3;
     $dataI = json_decode(file_get_contents("php://input"));

	//  $data2 = json_decode($dataI->jsonI);
	//  $data3 = json_decode($dataI->json);
	 $data3 = json_decode($dataI->placa);
$i=0;
/*
     foreach ($data2 as $clave => $valor)
	{
        
        // var_dump($valor);


        // var_dump($data3[$i]);
        // var_dump(substr($valor, 0, -5));

        if(strlen($valor) > 9 ) {
            // var_dump(substr($valor, 0, -5));
        }else{
            // var_dump($valor);
        }
        $i++;
    }*/

	$primaria_ruta = $random1;
	$date = date('Y-m-d');
    /*
    $consulta = "INSERT INTO rutas (
		nomruta,
		direccion1,
		direccion2,
		desde,
		hasta
	)
	VALUES
		(
			'pruebarutaminutos',
			'direccionrutanumero',
			'direccionrutanumero2',
			'desde',
			'".$dataI->placa."'
			
		);  ";	
        */
		// var_dump($dataI->placa);		
	      //$resultadoI = $conexion->prepare($consulta);
	      //$resultadoI->execute();
          $fechaActual = date ( 'Y-m-d' );
          $consultaI = "SELECT * FROM servicios where placa_servicio = '".$dataI->placa."' AND hora_fin = '00:00:00' AND fecha_servicio = '".$fechaActual."' ORDER BY `servicios`.`fecha_servicio` DESC ";
          //var_dump($consulta);
          $resultadoI = $conexion->prepare($consultaI);
          $resultadoI->execute();
      $total = $resultadoI->fetchAll(PDO::FETCH_ASSOC);
      $totalI = $total[0]["hora_fin"] ;
      $totalIhh = $total[0]["hora_inicio"] ;
      $totalII = $total[0]["fecha_servicio"] ;
      $id_servicioI = $total[0]["id_servicio"] ;
      $herramientas = $total[0]["herramientas"] ;
      $enturnar = $total[0]["enturnar"] ;
//var_dump($id_servicioI .' servicio');
  
//var_dump($totalI .' hora fin');
$horahoy =date("H:i:s");;

      $dateTimeObject1 = date_create($totalIhh); 
$dateTimeObject2 = date_create($horahoy); 
  
$difference = date_diff($dateTimeObject1, $dateTimeObject2); 
$totaldetiempos = $difference->h .':'. $difference->m;
/*
echo ("The difference in hours is:");
echo $totaldetiempos;
echo "\n";
echo $dataI->placa;
echo "\n";
echo $totalIhh.' hora inicio';
echo "\n";
echo $horahoy .' hora actual';
echo "\n";
echo $totalI .' hora fin';
echo "\n";
echo $$consultaI ;
echo "\n";
*/

$dtz = new DateTimeZone("America/Bogota");
$dt = new DateTime("now", $dtz);

//Stores time as "2021-04-04T13:35:48":
$currentTime = $dt->format("H:i:s");

//Stores time as "2021-04-04T01:35:20":
$currentTime =  $dt->format("h:i:s");

$to_time = strtotime($totalIhh);
$from_time = strtotime($currentTime);
$minutes = round(abs($to_time - $from_time) / 60,2);



$to_timeI = strtotime($totalI);
$from_timeI = strtotime($currentTime);
$minutesI = round(abs($to_timeI - $from_timeI) / 60,2);


/*
$start = strtotime($totalIhh);
$end = strtotime($horahoy);
$minutes = ($end - $start) / 60; */
//echo "The difference in minutes is $minutes minutes.";

/*
if($minutes >= 10){
    echo "$minutes Minutos es mayor";  
    echo $currentTime .' hora actual';
}else{
    echo "$minutes es menor";  
    echo $currentTime .' hora actual';

}

*/

// echo $difference->m;
// echo $difference->s;
//echo $horahoy;



     // if($totalI  != null){
        if($minutes >= 10){
            echo "$minutes Minutos es mayor";  
        }else{
            echo "$minutes es menor";  

        }

        if($herramientas == 'on' && $id_servicioI != '' ){
            echo "The difference in minutes is $minutes minutes.";  
       



             if($totalI  == '00:00:00' && $minutes >= 10){
               $queryI = "UPDATE servicios SET puntofinal='SITE' , sistema = 'si', hora_fin = NOW()-INTERVAL 5 DAY_HOUR WHERE id_servicio ='".$id_servicioI."'";
               $resultado = $conexion->prepare($queryI);
               $resultado->execute();
           // $query4 = "SELECT * FROM vehiculos WHERE placa ='".$placa."' ";
           // $stmt14 = mysqli_query($con,$query4);
           // while ($rowGBI2 = mysqli_fetch_array($stmt14)) {
       
           // 	$turnoanterior = $rowGBI2['turnoa'];
            }

if($minutesI > 10 && $enturnar == '' || $enturnar == NULL){


    $queryIentu = "UPDATE servicios SET enturnar='1'  WHERE id_servicio ='".$id_servicioI."'";
    $resultadoentu = $conexion->prepare($queryIentu);
    $resultadoentu->execute();

    $query2 = "SELECT * FROM vehiculos where vehiculos.turno <> '' and vehiculos.turno  <> 'En servicio' and activacion = '1' and checkbus <> 'on' order by turno+0 ";
       
       
    // var_dump($query);
     $stmt12 = mysqli_query($con,$query2);
 $totalval = mysqli_num_rows($stmt12);
 $totalvalI =  $totalval + 1;
//   var_dump($totalval);

    $iturno=0;
    $queryIAI = "UPDATE vehiculos SET turno='".$totalvalI."', turnoa = '' WHERE placa ='".$dataI->placa."'";
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
            //var_dump($queryIAI);
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
       
             
       
        }
        


/*

if($herramientas == '' && $totalI  == '00:00:00' && $id_servicioI != '' && $minutes >= 10 ){

            echo "The difference in minutes is $minutes minutes.";  
       



     // if($totalI  == 'hola'){
        $queryI = "UPDATE servicios SET puntofinal='SITE' , sistema = 'si' , hora_fin = NOW()-INTERVAL 5 DAY_HOUR WHERE id_servicio ='".$id_servicioI."'";
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
    $queryIAI = "UPDATE vehiculos SET turno='".$totalvalI."', turnoa = '' WHERE placa ='".$dataI->placa."'";
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
            //var_dump($queryIAI);
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

      */
    //   var_dump($totalI);
    //   var_dump($totalII);

	
	
			
?>