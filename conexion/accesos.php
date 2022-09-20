<?php
/**
 * 
 */ 
// var_dump('here');
function call($method, $parameters, $url)
{
	ob_start();
	$curl_request = curl_init();

	curl_setopt($curl_request, CURLOPT_URL, $url);
	curl_setopt($curl_request, CURLOPT_POST, 1);
	curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
	curl_setopt($curl_request, CURLOPT_HEADER, 1);
	curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

	$jsonEncodedData = json_encode($parameters);

	$post = array(
		 "method" => $method,
		 "input_type" => "JSON",
		 "response_type" => "JSON",
		 "rest_data" => $jsonEncodedData
	);

	curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
	$result = curl_exec($curl_request);
	curl_close($curl_request);

	$result = explode("\r\n\r\n", $result, 2);
	$response = json_decode($result[1]);
	ob_end_flush();

	return $response;
}

class accesos
{
	function __construct(){}
	function Ingresar($Nombre, $Clave){#crea Token en caso de conseguir el usuario en BD.
		$BD = new IMEC();
		$Fecha=date('Y-m-d');$Hora=date('G:i.s');
	 	 $Clave=$BD->Encriptar($Clave);
		$Res["Men"]="Datos de acceso Erróneos o usuario no activo, Por Favor Valide.";#mensaje por defecto.
		$Res["Est"]=false;#Estado De la Respuesta.
		//# SELECT `id_Usu`, `corrreo_Usu`, `clave_Usu`, `nombres_Usu`, `apellidos_Usu`, `telefono_Usu`, `direccion_Usu`, `carpeta_Usu`, `calificacion_Usu`, `id_TipUsu`, `id_EstVal` FROM `usuarios` WHERE 1
		
		$DatosUsu=$BD->Consultar("usuarios","usuario='".$Nombre."' AND clave='".$Clave."'");#consulta USuarios.
		
		if ($DatosUsu["activar"] != ''){
			session_start();
// 			$Id 				=$DatosUsu["id_Usu"];
 			$Res["Men"]			="Bienvenido.";
			$Res["Est"]			=true;
// 			$Res["Correo"]		=$DatosUsu["corrreo_Usu"];
			// $_SESSION["nombres_usuario"]=$Res["Nombres"]=$DatosUsu["nombre"];
// 			$_SESSION["Apellidos"]=$Res["Apellidos"]	=$DatosUsu["apellidos_Usu"];
// 			$Res["Telefono"]	=$DatosUsu["telefono_Usu"];
// 			$Res["Direccion"]	=$DatosUsu["direccion_Usu"];
// 			$Res["Calificacion"]=$DatosUsu["calificacion_Usu"];
// 			$Res["Tipo"]		=$DatosUsu["id_TipUsu"];
// 			$Res["Validacion"]	=$DatosUsu["id_EstVal"];
// 			$_SESSION["USER"]=$DatosUsu["corrreo_Usu"];
//  $_SESSION["tipousu"]=$DatosUsu["tipousu"];
 $_SESSION["id_usuario"]=$DatosUsu["id_usuario"];
 $_SESSION["tipousuario"]=$DatosUsu["tipousuario"];
//			$_SESSION["documento"]=$DatosUsu["documento"];
// 		    $_SESSION["id_emp"]=$DatosUsu["Empresa_usu"];
// 		    $_SESSION["telefono_Usu"]=$DatosUsu["telefono_Usu"];
// 		    $_SESSION["cedula"]=$DatosUsu["cedula"];

// 		    $DatosEmp=$BD->Consultar("empresa","id_emp='".$_SESSION["id_emp"]."'");#
// 		    $DatosRol=$BD->Consultar("permisos","iduser='".$_SESSION["id_Usu"]."' and idrol = 1");
		    
// 			$_SESSION["Nom_emp"]=$DatosEmp["Nom_emp"];
// 			$_SESSION["idrol"]=$DatosRol["idrol"];

// 		    $user=$_SESSION["id_Usu"];
// 			//var_dump('variable sesion '. $_SESSION["id_Usu"]);
// 			$BD->InsertNoti($user,6);
			session_start();
 			header('Content-Type: text/html; charset=UTF-8');
// ?>

<?php
			# Creo token de sesión ............................
			#SELECT `is_Ses`, `fecha_Ses`, `hora_Ses`, `token_Ses`, `id_Usu`, `id_EstSes` FROM `sesiones` WHERE 1
			// $Res["Token"]		=$Token=$BD->Encriptar($Fecha.$Hora.rand(1,9999));
			
		}
		//var_dump($Res);
		 return json_encode($Res);
	}
	// function Comprobar($Token){#comprueba que el token este activo
	// 	$BD = new IMEC();
	// 	$Res["Est"]=0;#no existe el token
	// 	$DatosCom=$BD->Consultar("sesiones","token_Ses='".$Token."'");#consulta token
	// 	if ($DatosCom["id_Ses"]) {
	// 		$Res["Est"]=2;#sesion cerrada
	// 		if ($DatosCom["id_EstSes"]==1) {
	// 			$Res["Est"]=1;#sesion activa
	// 			$Res["Id_Us"]=$DatosCom["id_Usu"];#sesion activa
	// 		}
	// 	}
	// 	return json_encode($Res);
	// }
	// function Contabilizar($Token,$id){#Comprueba la cantidad de sesiones abiertas pregunta si desea abrir mas y cerrar las anteriores 
	// 	$BD = new IMEC();
	// 	$Res["Est"]=0;#no hay sesiones abiertas
		
	// 	if($Token){
	// 		$DatosSes=$BD->Consultar("sesiones","token_Ses='".$Token."'");#consulta token
	// 		$idUsu=$DatosSes["id_Usu"];
	// 	}
	// 	if($id){
	// 		$idUsu=$id;
	// 	}
		
	// 	$DatosCon=$BD->ConLista("sesiones","id_EstSes=1 AND id_Usu=".$idUsu);#consulta token
	// 	$Cant=$DatosCon->num_rows;
	// 	if ($Cant>0) {
	// 		$Res["Est"]=1;#tiene sesiones abiertas
	// 		$Res["Cant"]=$Cant;#tiene sesiones abiertas
	// 	}
	// 	return json_encode($Res);
	// }
	// function Cerrar($Token){#Modifica el estado del token a desactivo
	// 	$BD = new IMEC();
	// 	$Res["Est"]=false;#error
	// 	if ($BD->Actualizar("sesiones","id_EstSes=2","token_Ses='".$Token."'")) {
	// 		$Res["Est"]=true;#realizado
	// 	}
	// 	return json_encode($Res);
	// }
// 	function CerrarAnteriores($Token){#Modifica el estado de los token anteriores al token enviado a desactivo
// 		$BD = new IMEC();
// 		$Res["Est"]=0;#error
// 		$DatosTok=$BD->Consultar("sesiones","token_Ses='".$Token."'");#consulta token
// 		if ($BD->Actualizar("sesiones","id_EstSes=2","token_Ses!='".$Token."' AND id_Usu=".$DatosTok["id_Usu"])) {
// 			$Res["Est"]=1;#realizado
// 		}
// 		return json_encode($Res);
// 	}
 }
		$Accesos= new accesos();

// // require_once("usuarios.php");
// // $B=new usuarios();
// // $B->Modificar("23",false,"123456",false,false,false,false,false,false,false,false);
// $A= new accesos();
// echo $A->Ingresar($_POST["correo"],$_POST["clave"]);
// // $B=json_decode($A->ConLista(3));
//  // print_r($B->Usu[0]);
// // foreach ($B->Usu[0] as $key => $value) {
// // echo $value;
// // echo "<br>";
// // }


?>