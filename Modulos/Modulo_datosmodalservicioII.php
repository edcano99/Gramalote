<?php
include("../conexion/conexion.php");
$id_placa = $_REQUEST['id'];
$id_servicio = $_REQUEST['service'];
$turno = $_POST['turno'];
$placaII = $_POST['placa'];



 // var_dump($turno.'pruebaI');
//  var_dump($idusuario);
//  function Encriptar($Variable){
// 	return sha1(md5('3@4gF$fTEm..'.$Variable));
// }
// $ClaveEnc=Encriptar($password);
/*
if($placaI != ''){

		$queryI = "UPDATE vehiculos
		SET turno='".$turno."'  WHERE placa ='".$placaI."'";


							 //var_dump($queryI);
				 $stmt12 = mysqli_query($con,$queryI);


          	echo '<script type="text/javascript">
	window.opener.location.reload();
 	window.close();

 </script>';
	}

*/


?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="//hst-api.wialon.com/wsdk/script/wialon.js"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Turnero</title>
  <style>

.select {
  width: 100%;
  min-width: 15ch;
  max-width: 16ch;
  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;
  font-size: 15px;
  cursor: pointer;
  line-height: 1.1;
  background-color: #fff;
  background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
}
      </style>
	</head>

<br />
<br />
<br />



      <?php

	$query = "SELECT * FROM vehiculos inner join empresas on empresas.nit = vehiculos.empresafkvehi where placa = '".$id_placa."' ";


					// var_dump($query);
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
           // var_dump($tipo_transporte);
		    }
	?>


	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Servicio Fin ruta <?php echo $placa;?></p>
                </div>
                <div class="card-body">
                  <form id="myForm" method ="post" action="">

                  <!-- <center><h4><span style="color:#286C95; font-size:34px;  text-align: center;">Vehículos</span></h4></center> -->
 <!-- <br />
 <br /> -->
	<div id="respuesta">
	<div class="row">
                       
					   <div class="col-md-3">
						 <div class="form-group">
						   <!-- <label class="bmd-label-floating">Fin ruta</label>
						   <select class="form-select select form-select-sm" id="zones" aria-label=".form-select-sm example">
							 <option selected disabled>Seleccione..</option>
               <?php

$query = "SELECT * FROM geocerca order by idgeocerca ASC";


        // var_dump($query);
        $stmt1 = mysqli_query($con,$query);
    $totalval = mysqli_num_rows($stmt1);
  //   var_dump($totalval);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          ?>

<option value="<?php echo $rowGBI1['nombregeocerca']; ?>" ><?php echo $rowGBI1['nombregeocerca']; ?></option>
          

        <?php
      }
?>
						   </select> -->
						 </div>
					   </div>
					  
					 </div>
	
					 
		<br><br>
	</div>
	<input type="hidden" id="service" value="<?php echo $id_servicio; ?>" class="form-control">
	<input type="hidden" id="id_placa" value="<?php echo $id_placa; ?>" class="form-control">
	<input type="hidden" id="tipousuario" value="<?php echo $_SESSION["tipousuario"]  ?>" class="form-control">
					<input type="button" id="<?php echo $placa; ?>"  class="servicios" value="Finalizar turno placa <?php echo $placa;?>">

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
	// var id_cliente =  $('#id_cliente').val();  /GramaloteBe/controladores/Peticiones_turno.php
	window.open('Modulo_datosmodalempresa.php', '_blank', 'width=800px,height=600px');
}


$(".servicios").click(function(event) {
	//console.log(this.id);
  tipousuario = $('#tipousuario').val();
	$.post('/GramaloteBeta/controladores/Peticiones_servicios.php',{
              form:'institucion',
              placa:$('#id_placa').val(),
              zonesI:$('#zones').val(),
              service:$('#service').val(),
              opcion:"7"
            

            },function(res) {
                //DataJson=JSON.parse(res); 
               // 
             //  apload();
                 // if (DataJson['Est']) {
                    //window.location='./';
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Guardado',
                        showConfirmButton: false,
                        timer: 1700
                      })
       opener.location.reload();
       window.close();
                      // setTimeout(function(){location.href="./?N=datosservicios"}, 1700);
                  
                   //swal("¡Atención!", DataJson['Men'], "success");
                  // }else{
                    //alert('error');
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: 'Oops...',
                    //     text: DataJson['Men'],
                        //footer: '<a href>Why do I have this issue?</a>'
                      // })
                   //swal("¡Atención!", DataJson['Men'], "error");
                  // }
              });	
		});
		function asignarValor()
	{


		window.close();
	}

	function msg(text) { $("#log").prepend(text + "<br/>"); }

function init() { // Execute after login succeed
    var sess = wialon.core.Session.getInstance(); // get instance of current Session
    //specify what kind of data should be returned    
    var flags = wialon.item.Item.dataFlag.base | wialon.item.Resource.dataFlag.zones;
    sess.loadLibrary("resourceZones"); // load Geofences Library 
    sess.updateDataFlags( // load items to current session
      [{type: "type", data: "avl_resource", flags: flags, mode: 0}], // Items specification
      function (code) { // updateDataFlags callback
        if (code) { msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code 
        var res = sess.getItems("avl_resource"); // get loaded 'avl_resource's items
        if (!res || !res.length){ msg("No resources found"); return; } // check if resources found
        
        for (var i = 0; i< res.length; i++) // construct Select list using found resources
            $("#res").append("<option value='"+ res[i].getId() +"'>"+ res[i].getName() +"</option>");
        // bind acion to select change
         
        $("#resI").val( getZones(this.value) );
      }
    );
}

function getZones(  ){ // get geofences by resource id
    res_id = 52913983520767;
 /* $("#zones").empty(); */// clean 'zones' select list
  if(res_id){ // check if resource id exists
    var res = wialon.core.Session.getInstance().getItem(24498331); // get resource by id
      console.log(res);
  //  if(!res){ msg("Unknown resource id: "+res_id); return; } // exit if resource not found
    var zones = res.getZones(); // get resource's zones
    var index = 0; // init variable
    for (var i in zones) { // construct Select list using found zones
      $("#zonesII").append("<option value='" + zones[i].id + "'>" + zones[i].n + "</option>");
      $("#zonesI").append("<option value='" + zones[i].id + "'>" + zones[i].n + "</option>");
      index++;
    }
    // if no Zones was appended to select list			
    if(!index) // print no Geofences found message
        msg("Geofences not found for '"+ res.getName() +"'. Create it first");
    else // print found Geofences count
        msg(index + " geofences found for '"+ res.getName() +"'.");
  }
}

// execute when DOM ready
$(document).ready(function () {
    $("#resI").change( function(){ getZones(); } );
    
    wialon.core.Session.getInstance().initSession("https://hst-api.wialon.com"); // init session
    // For more info about how to generate token check
    // http://sdk.wialon.com/playground/demo/app_auth_token
	wialon.core.Session.getInstance().loginToken("2d173bd3d493b49fc5ecfe7d1586d13aB6873CA4645F3768959431168245310C21A280AB", "", // try to login
	    function (code) { // login callback
	    	if (code){ msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code
	    	msg("Logged successfully"); init(); // when login suceed then run init() function
	});
});
	</script>

<?php
	die();
?>


