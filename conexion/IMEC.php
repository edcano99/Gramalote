<?php 

class IMEC { 
	
	function __construct(){}
	function Valores($val){
		require("conexion_bbdd_mysql.php");
		return $mysqli->real_escape_string($val);
	
	 //var_dump(  $mysqli->real_escape_string($val));
	}
	 function Encriptar($Variable){
	 	return sha1(md5('3@4gF$fTEm..'.$Variable));
	 }
	 function ArrSerialize($Var){
	 	if (strlen($Var)>3){
	 		$Arr1 = explode("&", $Var);
	 		foreach ($Arr1 as $value) {
	 			$Arr2 = explode("=", $value);
	 			$Arr3[]=$Arr2[1];
	 		}
	 		return $Arr3;
	 	}else{
	 		return $Var;
	 	}
	 }
	function Insertar($tabIns,$valIns,$contIns,$condIns){
		  require("conexion_bbdd_mysql.php");
		if ($condIns=="" || $condIns==null) {
		    $SQLI="INSERT INTO $tabIns($valIns) values($contIns)";
			// var_dump($SQLI);
			$mysqli->query($SQLI);
		}else{
			$SQLI="INSERT INTO $tabIns ($valIns) values ($contIns) WHERE ($condIns)";
			//var_dump($SQLI);
			$mysqli->query($SQLI);

		}
		return($mysqli->insert_id);
	}

    function InsertNoti($userid,$id_noti){
		  require("conexion_bbdd_mysql.php");
		
	  $SQLI="INSERT INTO `notificaciones_mensajes` ( `id_noti_men`, `usr`) VALUES ('$id_noti', '$userid')";



			$mysqli->query($SQLI);
		return($mysqli->insert_id);
	}

	 function Consultar($tab,$cond){
	 	  require("conexion_bbdd_mysql.php");
	 	if ($cond=="" || $cond==null) {
	 		$SQL="SELECT * FROM $tab";
	 		$Row=$mysqli->query($SQL);
			// var_dump($Row);
	 	}else{
	 		$SQL="SELECT * FROM $tab WHERE ($cond)";
	 		$Row=$mysqli->query($SQL);
			 //var_dump($SQL);
	 	}
	 	return($Row->fetch_array());
	 }
	function ConLista($tab,$cond){
		  require("conexion_bbdd_mysql.php");
		if ($cond=="" || $cond==null) {
		 $SQL="SELECT * FROM $tab";
		// var_dump($SQL);
		}else{
	     $SQL="SELECT * FROM $tab WHERE $cond";
		 
		 //var_dump($SQL);
		}
		return($mysqli->query($SQL));
	}
	function Actualizar($tabAct,$datAct,$condAct){	
		  require("conexion_bbdd_mysql.php");
		if ($condAct=="" || $condAct==null) {
		  $SQLA="UPDATE $tabAct SET $datAct";
		 // var_dump($SQLA);
		}else{
		$SQLA="UPDATE $tabAct SET $datAct WHERE($condAct)";
		//var_dump($SQLA);
		}
			if ($Row=$mysqli->query($SQLA)) {
				return true;
			}
				return false;
	}
	function Eliminar($tabEli,$condEli){
		  require("conexion_bbdd_mysql.php");
		if ($condEli=="" || $condEli==null) {
			// DELETE FROM `tecnicos_asignados` WHERE 0
		 // $SQLA="DELETE FROM $tabAct";
		}else{
		     $SQLE="DELETE FROM $tabEli WHERE($condEli)";
		}
			if ($Row=$mysqli->query($SQLE)) {
				return true;
			}
				return false;
	}
	function Manual($Conten)
	{
		require("conexion_bbdd_mysql.php");
		$SQLI=$Conten;	
		return($mysqli->query($SQLI));
	}	

	function validar_fecha($fecha){
	$valores = explode('-', $fecha);
	if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
		return true;
    }
		return false;
	}
	

}
$DB= new IMEC();
//$DBI= new IMEC();
?>