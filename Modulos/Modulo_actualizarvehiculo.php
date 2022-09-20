<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>

<?php
clearstatcache();
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
// header("Content-Type: application/xml; charset=utf-8");

include("../conexion/conexion.php");
$id_placa = $_REQUEST['id'];
$placaII = $_POST['placaI'];
$placaI = $_POST['placa'];
$marcaI = $_POST['marca'];
$modeloI = $_POST['modelo'];
$colorI = $_POST['color'];
$vencesoatI = $_POST['vencesoat'];
$venceseguroI = $_POST['venceseguro'];
$vencebimestralI = $_POST['vencebimestral'];
$tipotransporteI = $_POST['tipotransporte'];
$idempresaI = $_POST['idempresa'];
$cantpasajerosI = $_POST['cantpasajeros'];
$matriculaI = $_POST['matricula'];
$checkbusI = $_POST['checkbus'];


//  var_dump($usuario);
//  var_dump($idusuario);
//  function Encriptar($Variable){
// 	return sha1(md5('3@4gF$fTEm..'.$Variable));
// }
// $ClaveEnc=Encriptar($password);

if($placaII != ''){
	
		$queryI = "UPDATE vehiculos
		SET placa='".$placaI."', modelo='".$modeloI."', marca='".$marcaI."', color='".$colorI."', vencesoat='".$vencesoatI."' , venceseguro='".$venceseguroI."' , vencebimestral='".$vencebimestralI."' , tipotransporte='".$tipotransporteI."' , empresafkvehi='".$idempresaI."' , cantpasajeros='".$cantpasajerosI."' , matricula='".$matriculaI."', checkbus='".$checkbusI."'  WHERE placa ='".$placaII."'";
					   
				   

            //  if($checkbusI == 'on'){
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
         
            //  }else{
               
            //  }



							 //var_dump($queryI);
				 $stmt12 = mysqli_query($con,$queryI);


          	echo '<script type="text/javascript">
	window.opener.location.reload();
 	window.close();

 </script>';
	}



		
?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Vehiculos</title>	
		
	</head>
    
<br />
<br />
<br />


		
      <?php
	
	$query = "SELECT * FROM vehiculos left  join empresas on empresas.nit = vehiculos.empresafkvehi where placa = '".$id_placa."' ";
				
			
					
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {	
						$i++;		
						$placa = $rowGBI1['placa'];
						$modelo = $rowGBI1['modelo'];
						$marca = $rowGBI1['marca'];
						$color = $rowGBI1['color'];
            $vencesoat = $rowGBI1['vencesoat'];
            $venceseguro = $rowGBI1['venceseguro'];
						$vencebimestral = $rowGBI1['vencebimestral'];
						$tipotransporte = $rowGBI1['tipotransporte'];
						$empresafkvehi = $rowGBI1['empresafkvehi'];
						$cantpasajeros = $rowGBI1['cantpasajeros'];
						$matricula = $rowGBI1['matricula'];
						$empresa = $rowGBI1['empresa'];
						$checkbus = $rowGBI1['checkbus'];
            $checked = '';
            if($checkbus == 'on'){
              $checked = 'checked';
            }
            
		    }
	?>


	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Editar vehiculo</p>
                </div>
              
                <div class="card-body">
                  <form id="myForm" method ="post" action="">

                  <div class="row">
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Placa </label>
                          <input type="text" id="placa" name="placa" value="<?php echo $placa ?>" class="form-control" >
                      </div>
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Marca </label>
                          <input type="text" id="marca" name="marca" value="<?php echo $marca ?>" class="form-control" >
                        
                      </div>
                    
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Modelo</label>
                          <input type="text" id="modelo" name="modelo" value="<?php echo $modelo ?>" class="form-control">
                      </div>
                    </div>

                    <div class="row">
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Color </label>
                          <input type="text" id="color" name="color" value="<?php echo $color ?>" class="form-control" >
                        
                      </div>
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Vence SOAT </label>
                          <?php 
                   $fechaActual = date('Y-m-d');
   
                  // echo $fechaActual.' ';
                   //$fecha1= new DateTime($fechaActual);
                  $fecha1= new DateTime($fechaActual);
                  $fecha2= new DateTime($vencesoat);
                  $diff = $fecha1->diff($fecha2);
                  
                  // El resultados sera 3 dias
                  if($diff->invert == 1){
                   $diasvencesoat = '-' . $diff->days .' dias';
                  }else{
                    $diasvencesoat = $diff->days . ' dias ';

                  }
                  //echo ($diff->invert == 1) ? ' - ' . $diff->days .' dias'  : $diff->days .' dias';
            //   echo $diasfec_ven_operacion;
                  if($diasvencesoat == 2){
                    $stylevencesoat = 'style="background: #ffa50085;"';
                  } elseif($diasvencesoat < 0){
                    $stylevencesoat = 'style="background: #ff00007a;"';
                  }elseif($diasvencesoat < 30){
                    $stylevencesoat = 'style="background: #00800061;"';

                  }
                  ?>
                          <input type="date" id="vencesoat" name="vencesoat" <?php echo $stylevencesoat ?> value="<?php echo $vencesoat ?>"  class="form-control" >
                        
                      </div>
                    
                      <div class="col-md-4">

                      <?php 
                   $fechaActualI = date('Y-m-d');
   
                  // echo $fechaActual.' ';
                   //$fecha1= new DateTime($fechaActual);
                  $fecha1I= new DateTime($fechaActualI);
                  $fecha2I= new DateTime($vencesoat);
                  $diffI = $fecha1I->diff($fecha2I);
                  
                  // El resultados sera 3 dias
                  if($diffI->invert == 1){
                  $diasvenceseguro = '-' . $diffI->days .' dias';
                  }else{
                  $diasvenceseguro = $diffI->days . ' dias ';

                  }
                  //echo ($diff->invert == 1) ? ' - ' . $diff->days .' dias'  : $diff->days .' dias';
            //   echo $diasfec_ven_operacion;
                  if($diasvenceseguro == 2){
                    $stylevenceseguro = 'style="background: #ffa50085;"';
                  } elseif($diasvenceseguro < 0){
                    $stylevenceseguro = 'style="background: #ff00007a;"';
                  }elseif($diasvenceseguro < 30){
                    $stylevenceseguro = 'style="background: #00800061;"';

                  }
                  ?>
                          <label class="bmd-label-floating">Vence seguro </label>
                          <input type="date" id="venceseguro" name="venceseguro" <?php echo $stylevenceseguro ?> value="<?php echo $venceseguro ?>" class="form-control">
                      </div>
                    </div>
                    
                    <div class="row">
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Vence bimestral </label>
                          <?php 
                   $fechaActualI = date('Y-m-d');
   
                  // echo $fechaActual.' ';
                   //$fecha1= new DateTime($fechaActual);
                  $fecha1I= new DateTime($fechaActualI);
                  $fecha2II= new DateTime($vencebimestral);
                  $diffII = $fecha1I->diff($fecha2II);
                  
                  // El resultados sera 3 dias
                  if($diffII->invert == 1){
                  $diasvencebimestral = '-' . $diffII->days .' dias';
                  }else{
                  $diasvencebimestral = $diffII->days . ' dias ';

                  }
                  //echo ($diff->invert == 1) ? ' - ' . $diff->days .' dias'  : $diff->days .' dias';
            //   echo $diasfec_ven_operacion;
                  if($diasvencebimestral == 2){
                    $stylevencebimestral = 'style="background: #ffa50085;"';
                  } elseif($diasvencebimestral < 0){
                    $stylevencebimestral = 'style="background: #ff00007a;"';
                  }elseif($diasvencebimestral < 30){
                    $stylevencebimestral = 'style="background: #00800061;"';

                  }
                  ?>
                          <input type="date" id="vencebimestral" name="vencebimestral" <?php echo $stylevencebimestral ?> value="<?php echo $vencebimestral ?>" class="form-control" >
                        
                      </div>
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Tipo </label>
                          <select class="form-select select form-select-sm" id="tipotransporte" name="tipotransporte" aria-label=".form-select-sm example">
                            <option selected disabled>Seleccione..</option>
                            <option value="Transporte medio">Transporte medio </option>
                            <option value="Transporte completo">Transporte completo</option>
                          </select>
                      </div>
                    
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Empresa</label>
                          <input type="text" id="empresa" class="form-control"  name="empresa" value="<?php echo $empresa ?>"  readonly>
                          <input type="hidden" id="idempresa"  name="idempresa" value="<?php echo $empresafkvehi ?>" class="form-control">
                          <input type="hidden" id="tipotransporteI"  name="tipotransporteI" value="<?php echo $tipotransporte ?>" class="form-control">
                          <input type="hidden" id="placaI"  name="placaI" value="<?php echo $placa ?>" class="form-control">
                          <a href="javascript:buscarempresa()" id="empresacolab">	seleccionar empresa</a>
                      </div>
                    </div>

                    
                    <div class="row">
                       <div class="col-md-6">
                          <label class="bmd-label-floating">Cantidad pasajeros </label>
                          <input type="text" id="cantpasajeros" name="cantpasajeros" value="<?php echo $cantpasajeros ?>" class="form-control" >
                        
                      </div>
                       <div class="col-md-6">
                          <label class="bmd-label-floating">Matricula </label>
                          <input type="text" id="matricula" name="matricula" value="<?php echo $matricula ?>" class="form-control" >
                        
                      </div>
                       <div class="col-md-6">
                         <br>
                          <label class="bmd-label-floating">Bus </label>
                          <input type="checkbox" id="checkbus" name="checkbus" <?php echo $checked ?> >
                        
                      </div>
                   <!-- INICIO SUBIR IMAGEN -->
<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
                <?php
$nombre_fichero = "../img/imagen_vehiculos/".$placa."vehiculo.png";
$nombre_ficheroI = "../img/imagen_vehiculos/".$placa."vehiculo.jpg";
$nombre_ficheroII = "../img/imagen_vehiculos/".$placa."vehiculo.jpeg";

if (file_exists($nombre_fichero)) {
  ?>
      <div class="col-lg-6 d-none d-lg-block">
      <img src="<?php echo $nombre_fichero?>" alt="..." class="img-thumbnail">

  <?php //echo "El fichero $nombre_fichero existe";
} elseif(file_exists($nombre_ficheroI)){
  ?>
        <div class="col-lg-6 d-none d-lg-block" >
        <img src="<?php echo $nombre_ficheroI?>" alt="..." class="img-thumbnail">

  <?php
 
}elseif(file_exists($nombre_ficheroII)){
  
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <img src="<?php echo $nombre_ficheroII?>" alt="..." class="img-thumbnail">
  <?php
} else{
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <?php
}
?>

                      

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Subir foto del vehículo </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="file" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
  <?php
$nombre_matricula = "../img/matricula/".$placa."matriculavehiculo.png";
$nombre_matriculaI = "../img/matricula/".$placa."matriculavehiculo.jpg";
$nombre_matriculaII = "../img/matricula/".$placa."matriculavehiculo.jpeg";

if (file_exists($nombre_matricula)) {
  ?>
      <div class="col-lg-6 d-none d-lg-block">
      <img src="<?php echo $nombre_matricula?>" alt="..." class="img-thumbnail">

  <?php //echo "El fichero $nombre_fichero existe";
} elseif(file_exists($nombre_matriculaI)){
  ?>
        <div class="col-lg-6 d-none d-lg-block" >
        <img src="<?php echo $nombre_matriculaI?>" alt="..." class="img-thumbnail">

  <?php
 
}elseif(file_exists($nombre_matriculaII)){
  
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <img src="<?php echo $nombre_matriculaII?>" alt="..." class="img-thumbnail">
  <?php
} else{
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <?php
}
?>

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Matricula </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filematricula" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
  <?php
 $nombre_tarjetaoperacionvehiculo = "../img/tarjetadeoperacion/".$placa."tarjetaoperacionvehiculo.png";
 $nombre_tarjetaoperacionvehiculoI = "../img/tarjetadeoperacion/".$placa."tarjetaoperacionvehiculo.jpg";
$nombre_tarjetaoperacionvehiculoII = "../img/tarjetadeoperacion/".$placa."tarjetaoperacionvehiculo.jpeg";

if (file_exists($nombre_tarjetaoperacionvehiculo)) {
  ?>
      <div class="col-lg-6 d-none d-lg-block">
      <img src="<?php echo $nombre_tarjetaoperacionvehiculo?>" alt="..." class="img-thumbnail">

  <?php //echo "El fichero $nombre_fichero existe";
} elseif(file_exists($nombre_tarjetaoperacionvehiculoI)){
  ?>
        <div class="col-lg-6 d-none d-lg-block" >
        <img src="<?php echo $nombre_tarjetaoperacionvehiculoI?>" alt="..." class="img-thumbnail">

  <?php
 
}elseif(file_exists($nombre_tarjetaoperacionvehiculoII)){
  
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <img src="<?php echo $nombre_tarjetaoperacionvehiculoII?>" alt="..." class="img-thumbnail">
  <?php
} else{
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <?php
}
?>

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Tarjeta de operación </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filetarjetaoperacion" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
  <?php
 $nombre_certificadoderevisiontecnomecanicaydegasesvehiculo = "../img/certificadoderevisiontecnomecanicaydegases/".$placa."certificadoderevisiontecnomecanicaydegasesvehiculo.png";
 $nombre_certificadoderevisiontecnomecanicaydegasesvehiculoI = "../img/certificadoderevisiontecnomecanicaydegases/".$placa."certificadoderevisiontecnomecanicaydegasesvehiculo.jpg";
$nombre_certificadoderevisiontecnomecanicaydegasesvehiculoII = "../img/certificadoderevisiontecnomecanicaydegases/".$placa."certificadoderevisiontecnomecanicaydegasesvehiculo.jpeg";

if (file_exists($nombre_certificadoderevisiontecnomecanicaydegasesvehiculo)) {
  ?>
      <div class="col-lg-6 d-none d-lg-block">
      <img src="<?php echo $nombre_certificadoderevisiontecnomecanicaydegasesvehiculo?>" alt="..." class="img-thumbnail">

  <?php //echo "El fichero $nombre_fichero existe";
} elseif(file_exists($nombre_certificadoderevisiontecnomecanicaydegasesvehiculoI)){
  ?>
        <div class="col-lg-6 d-none d-lg-block" >
        <img src="<?php echo $nombre_certificadoderevisiontecnomecanicaydegasesvehiculoI?>" alt="..." class="img-thumbnail">

  <?php
 
}elseif(file_exists($nombre_certificadoderevisiontecnomecanicaydegasesvehiculoII)){
  
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <img src="<?php echo $nombre_certificadoderevisiontecnomecanicaydegasesvehiculoII?>" alt="..." class="img-thumbnail">
  <?php
} else{
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <?php
}
?>


    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Certificado de revisión tecnomecánica y de gases </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filecertificadorevisiontecnomecanicaygases" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
  <?php
 $nombre_polizaextracontractualvehiculo = "../img/polizaextracontractual/".$placa."polizaextracontractualvehiculo.png";
 $nombre_polizaextracontractualvehiculoI = "../img/polizaextracontractual/".$placa."polizaextracontractualvehiculo.jpg";
$nombre_polizaextracontractualvehiculoII = "../img/polizaextracontractual/".$placa."polizaextracontractualvehiculo.jpeg";

if (file_exists($nombre_polizaextracontractualvehiculo)) {
  ?>
      <div class="col-lg-6 d-none d-lg-block">
      <img src="<?php echo $nombre_polizaextracontractualvehiculo?>" alt="..." class="img-thumbnail">

  <?php //echo "El fichero $nombre_fichero existe";
} elseif(file_exists($nombre_polizaextracontractualvehiculoI)){
  ?>
        <div class="col-lg-6 d-none d-lg-block" >
        <img src="<?php echo $nombre_polizaextracontractualvehiculoI?>" alt="..." class="img-thumbnail">

  <?php
 
}elseif(file_exists($nombre_polizaextracontractualvehiculoII)){
  
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <img src="<?php echo $nombre_polizaextracontractualvehiculoII?>" alt="..." class="img-thumbnail">
  <?php
} else{
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <?php
}
?>

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Poliza extracontractual </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filepolizaextracontractual" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

  <?php
 $nombre_certificadoinspecciongasnaturalvehiculo = "../img/certificadoinspecciongasnatural/".$placa."certificadoinspecciongasnaturalvehiculo.png";
 $nombre_certificadoinspecciongasnaturalvehiculoI = "../img/certificadoinspecciongasnatural/".$placa."certificadoinspecciongasnaturalvehiculo.jpg";
$nombre_certificadoinspecciongasnaturalvehiculoII = "../img/certificadoinspecciongasnatural/".$placa."certificadoinspecciongasnaturalvehiculo.jpeg";

if (file_exists($nombre_certificadoinspecciongasnaturalvehiculo)) {
  ?>
      <div class="col-lg-6 d-none d-lg-block">
      <img src="<?php echo $nombre_certificadoinspecciongasnaturalvehiculo?>" alt="..." class="img-thumbnail">

  <?php //echo "El fichero $nombre_fichero existe";
} elseif(file_exists($nombre_certificadoinspecciongasnaturalvehiculoI)){
  ?>
        <div class="col-lg-6 d-none d-lg-block" >
        <img src="<?php echo $nombre_certificadoinspecciongasnaturalvehiculoI?>" alt="..." class="img-thumbnail">

  <?php
 
}elseif(file_exists($nombre_certificadoinspecciongasnaturalvehiculoII)){
  
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <img src="<?php echo $nombre_certificadoinspecciongasnaturalvehiculoII?>" alt="..." class="img-thumbnail">
  <?php
} else{
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <?php
}
?>
    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Certificado inspección gas natural </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filecertificadoinspecciongasnatural" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
  <?php
 $nombre_soatvehiculo = "../img/soat/".$placa."soatvehiculo.png";
 $nombre_soatvehiculoI = "../img/soat/".$placa."soatvehiculo.jpg";
$nombre_soatvehiculoII = "../img/soat/".$placa."soatvehiculo.jpeg";

if (file_exists($nombre_soatvehiculo)) {
  ?>
      <div class="col-lg-6 d-none d-lg-block">
      <img src="<?php echo $nombre_soatvehiculo?>" alt="..." class="img-thumbnail">

  <?php //echo "El fichero $nombre_fichero existe";
} elseif(file_exists($nombre_soatvehiculoI)){
  ?>
        <div class="col-lg-6 d-none d-lg-block" >
        <img src="<?php echo $nombre_soatvehiculoI?>" alt="..." class="img-thumbnail">

  <?php
 
}elseif(file_exists($nombre_soatvehiculoII)){
  
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <img src="<?php echo $nombre_soatvehiculoII?>" alt="..." class="img-thumbnail">
  <?php
} else{
  ?>
          <div class="col-lg-6 d-none d-lg-block" >

  <?php
}
?>
    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">SOAT </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filesoat" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>
                    </div>
              <br>
                    <input type="button" onclick="myFunction()" value="Actualizar">

                      </div>
                   
                    <!-- <div class="clearfix"></div> -->
				

                  </form>

                </div>
              </div>
            </div>

          </div>
          </div>
          

	<script type="text/javascript">

$( document ).ready(function() {
  tipo_transporteII = $('#tipotransporteI').val();
   $('#tipotransporte').val(tipo_transporteII); 

   
    //console.log(tipo_transporteI);

 });

  function buscarempresa()
{			
	// var id_cliente =  $('#id_cliente').val(); 
	window.open('Modulo_datosmodalempresa.php', '_blank', 'width=800px,height=600px');
}
		function myFunction() {
      
apload();

  //document.getElementById("myForm").submit();
}

function apload(e) {
  placa= $("#placaI").val()
 var files = $("#file")[0].files[0];
 var filesmatricula = $("#filematricula")[0].files[0];
 var filestarjetaoperacion = $("#filetarjetaoperacion")[0].files[0];
 var filescertificadorevisiontecnomecanicaygases = $("#filecertificadorevisiontecnomecanicaygases")[0].files[0];
 var filespolizaextracontractual = $("#filepolizaextracontractual")[0].files[0];
 var filescertificadoinspecciongasnatural = $("#filecertificadoinspecciongasnatural")[0].files[0];
 var filessoat = $("#filesoat")[0].files[0];

  //  console.log(files);
  // return;
  //  if(files == '' || files == undefined){
  //    Swal.fire({
  //                  icon: 'error',
  //                  title: 'Oops...',
  //                  text: 'Debe seleccionar un archivo',
  //                  //footer: '<a href>Why do I have this issue?</a>'
  //                })
  //                return;
  //  }

   var formData = new FormData();
   
   formData.append('file',files);
   formData.append('placa',placa);
   formData.append('filesmatricula',filesmatricula);
   formData.append('filestarjetaoperacion',filestarjetaoperacion);
   formData.append('filescertificadorevisiontecnomecanicaygases',filescertificadorevisiontecnomecanicaygases);
   formData.append('filespolizaextracontractual',filespolizaextracontractual);
   formData.append('filescertificadoinspecciongasnatural',filescertificadoinspecciongasnatural);
   formData.append('filessoat',filessoat);
   
   $.ajax({
     
       url: '../controladores/Peticiones_archivoactualizarvehiculo.php',
       type: 'post',
       data: formData,files,placa,filesmatricula,filestarjetaoperacion,filescertificadorevisiontecnomecanicaygases,filespolizaextracontractual,filescertificadoinspecciongasnatural,filessoat,
       contentType: false,
       processData: false,
       success: function(response) {
         // console.log(response);
            if (response != 0) {

                           let timerInterval
             Swal.fire({
               title: 'Subiendo...',
               html: 'Redimensionando imagen, subiendo al servidor, categorizando archivo, trabajando...<strong></strong>.',
               timer: 13000,
               timerProgressBar: true,
               didOpen: () => {
                 Swal.showLoading()
                 timerInterval = setInterval(() => {
                   const content = Swal.getHtmlContainer()
                   if (content) {
                     const b = content.querySelector('b')
                     if (b) {
                       b.textContent = Swal.getTimerLeft()
                     }
                   }
                 }, 100)
               },
               willClose: () => {
                 clearInterval(timerInterval)
               }
             }).then((result) => {
               /* Read more about handling dismissals below */
               if (result.dismiss === Swal.DismissReason.timer) {
                 // location.href ='?N=form_subirarchivos';
                  //console.log('I was closed by the timer')
                  document.getElementById("myForm").submit();
               }
             })
                          //document.getElementById("myForm").submit();
           //  setTimeout(function(){location.href="./?N=datosvehiculos"}, 1700);
            } else {
            Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Su imagen no es válida.',
                  //footer: '<a href>Why do I have this issue?</a>'
                })
     // alert('Formato de imagen incorrecto.');
     }
       }
   });
return false;
}
		function asignarValor(nombre_bodega, id_bodega)
	{
		 

		window.close();
	}	
	</script>

<?php	
	die();
?>


