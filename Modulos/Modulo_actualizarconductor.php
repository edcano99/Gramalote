<?php
include("../conexion/conexion.php");
$id_usuario = $_REQUEST['id'];
$licenciaconductor = $_POST['licenciaconductor'];
$direccionconductor = $_POST['direccionconductor'];
$vencimientolicencia = $_POST['vencimientolicencia'];
$vehiculoconductor = $_POST['vehiculoconductorII'];
$id_conductor = $_POST['idusuario'];

//  var_dump($usuario);
  


if($id_conductor != ''){


	$queryI = "UPDATE conductor
SET direccionconductor='".$direccionconductor."',licenciaconductor='".$licenciaconductor."',vencimientolicencia='".$vencimientolicencia."',vehiculoconductor='".$vehiculoconductor."' WHERE id_conductor='".$id_conductor."'";
         
       
         // var_dump($queryI);
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
<link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <title>Conductor</title>	
		
	</head>
    
<br />
<br />
<br />


		
      <?php
	
	$query = "SELECT * FROM conductor 
  inner join usuarios on usuarios.id_usuario = conductor.id_conductor where id_conductor='".$id_usuario."'";
				
			
					 
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {	
						$i++;		
						$nombre_completo = $rowGBI1['nombre_completo'];
						$licenciaconductor = $rowGBI1['licenciaconductor'];
						$direccionconductor = $rowGBI1['direccionconductor'];
						$vencimientolicencia = $rowGBI1['vencimientolicencia'];
						$vehiculoconductorlec = $rowGBI1['vehiculoconductor'];
		    }
	?>


	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Editar conductor <?php  echo $nombre_completo ?></p>
                </div>
                <div class="card-body">
                  <form id="myForm" method ="post" action="">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Licencia conductor</label>
                          <input type="text" id="direccionconductor" name="direccionconductor" value="<?php  echo $direccionconductor ?>" class="form-control">
                          <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $id_usuario ?>" class="form-control">
                          <input type="hidden" id="vehiculoconductorI" name="vehiculoconductorI" value="<?php echo $vehiculoconductorlec ?>" class="form-control">
                          <input type="hidden" id="vehiculoconductorII" name="vehiculoconductorII"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Licencia conductor</label>
                          <input type="text" id="licenciaconductor" name="licenciaconductor" value="<?php echo $licenciaconductor ?>" class="form-control">
                          
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        <?php 
                   $fechaActual = date('Y-m-d');
   
                  // echo $fechaActual.' ';
                   //$fecha1= new DateTime($fechaActual);
                  $fecha1= new DateTime($fechaActual);
                  $fecha2= new DateTime($vencimientolicencia);
                  $diff = $fecha1->diff($fecha2);
                  
                  // El resultados sera 3 dias
                  if($diff->invert == 1){
                   $diasvencimientolicencia = '-' . $diff->days .' dias';
                  }else{
                    $diasvencimientolicencia = $diff->days . ' dias ';

                  }
                  //echo ($diff->invert == 1) ? ' - ' . $diff->days .' dias'  : $diff->days .' dias';
            //   echo $diasfec_ven_operacion;
                  if($diasvencimientolicencia == 2){
                    $stylevencimientolicencia = 'style="background: #ffa50085;"';
                  } elseif($diasvencimientolicencia < 0){
                    $stylevencimientolicencia = 'style="background: #ff00007a;"';
                  }elseif($diasvencimientolicencia < 30){
                    $stylevencimientolicencia = 'style="background: #00800061;"';

                  }
                  ?>
                          <label class="bmd-label-floating">vencimiento licencia</label>
                          <input type="date" id="vencimientolicencia" name="vencimientolicencia" <?php echo $stylevencimientolicencia ?> value="<?php echo $vencimientolicencia ?>" class="form-control">
                          
                        </div>
                      </div>
            
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <br>
                        <div class="form-group">
                        
                          <select class="form-control input-sm"  id="vehiculoconductor">
							 <option selected disabled>Vehículo...</option>
               <?php

$query = "SELECT * FROM vehiculos ";


        // var_dump($query);
        $stmt1 = mysqli_query($con,$query);
    $totalval = mysqli_num_rows($stmt1);
  //   var_dump($totalval);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          ?>

<option value="<?php echo $rowGBI1['placa']; ?>" ><?php echo $rowGBI1['placa']; ?></option>
          

        <?php
      }
?>
						   </select>         
                        </div>
                      </div>
                    </div>
                    <!-- <div class="clearfix"></div> -->
				
					<input type="button" onclick="myFunction()" value="Actualizar">

                  </form>

                </div>
              </div>
            </div>

          </div>
          </div>
          

	<script type="text/javascript">
    $( document ).ready(function() {
      $("#vehiculoconductor").val($("#vehiculoconductorI").val());
});

$( "#vehiculoconductor" ).change(function() {
  $("#vehiculoconductorII").val($("#vehiculoconductor").val());
});
    
      $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#password').attr('type', 'text');
    } else {
      $('#password').attr('type', 'password');
    }
  });
		function myFunction() {
  document.getElementById("myForm").submit();
}
		function asignarValor(nombre_bodega, id_bodega)
	{
		 
		
		window.opener.document.getElementById("padre").value = id_bodega;	
		window.opener.document.getElementById("idpadre").value = nombre_bodega;		
		window.close();
	}	
	</script>

<?php	
	die();
?>


