<?php 
//var_dump('aqio');
 error_reporting(0);
//  $con = new mysqli('localhost', 'root', '', 'portalcapacitacion');
//  $con->set_charset("utf8");

//  class Conexion{	  
//      public static function Conectar() {        
//          define('servidor', 'localhost');
//          define('nombre_bd', 'portalcapacitacion');
//          define('usuario', 'root');
//          define('password', '');					        
//          $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
//          try{
//              $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
//              return $conexion;
//          }catch (Exception $e){
//              die("El error de Conexión es: ". $e->getMessage());
//          }
//      }
//  }

date_default_timezone_set('America/Bogota');
    $serv="localhost";
	$user="u495881785_Gramalote";
	$pass="Gramalote123$%";
	$db="u495881785_gramalote";
	$type = "mysqli";
$mysqli = new mysqli($serv, $user,  $pass, $db);
/* check connection */
if (mysqli_connect_errno()) {
printf("Error de conexión: %s\n", mysqli_connect_error());
exit();
}
$mysqli->set_charset("utf8");
?>