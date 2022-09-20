<?php

	//include("conexion_webservice.php");
	require_once("IMEC.php");
	//include('conexion_bbdd_mysql.php');
	require_once("accesos.php");

	//exit();
	if (!empty($_POST)) {
		
		if (!empty($_POST['correo']) && !empty($_POST['clave'])) {//Login
			
			$correo =$DB->Valores($_POST['correo']);
			//var_dump($correo);
			$clave	=$DB->Valores($_POST['clave']);
			// var_dump($clave);
			$ResAccesos=$Accesos->Ingresar($correo,$clave);
			//var_dump($ResAccesos);
			//CerrarAnteriores($ResAccesos["Token"]);
			echo $ResAccesos;
	
		}else if (!empty($_POST['token'])) {//Comprobar token
			$token=$_POST['token'];
			echo $Accesos->Comprobar($token);
			
		}
		else  {//Cerrar token
				$_SESSION["USER"]='';
				// session_destroy();
				//var_dump($_POST);
				echo 'este';
				
		}
	}
	
	?>