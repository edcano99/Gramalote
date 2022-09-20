<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'u495881785_gramalote');
        define('usuario', 'u495881785_Gramalote');
        define('password', 'Gramalote123$%');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try
        {
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
            return $conexion;
        }
        catch (Exception $e){
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
 ?>