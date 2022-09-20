
<?php
session_start();
require_once("conexion/conexion.php");
if (isset($_GET["P"])) {#verifica que haya una variable "N" por método "GET"  
	//echo '{"Est":"hola","Est2":"mundo"}';
	require "controladores/Peticiones_".$_GET["P"].".php";//Requiere un archivo en el directorio "view/modulos/" con el nombre 'Modulo_"Valor de la variable N".php'
	exit();
	}

$emp_user=$_SESSION["id_usuario"];
//var_dump($emp_user);
 if(isset($emp_user))	
 {
	include 'Modulos/static/head.php';
// require "controladores/Peticiones_".$_GET["P"].".php";
require "Modulos/Modulo_".$_GET["N"].".php";//Requiere un archivo en el directorio "view/modulos/" con el nombre 'Modulo_"Valor de la variable N".php'
include 'Modulos/static/footer.php';
	
	?>
	<!-- <script language="javascript">	
	document.location.href="principal.php";
	</script> -->
	<?php	
	
 }

 else {

	require 'Modulos/static/login.php';

 }
 
?>
      <!--  -->


<?php

?> 