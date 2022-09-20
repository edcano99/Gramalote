<?php
include("../conexion/conexion.php");
$id_placa = $_REQUEST['id'];
$id_servicio = $_REQUEST['service'];
$turno = $_POST['turno'];
$placaII = $_POST['placa'];



  var_dump($turno.'pruebaI');
//  var_dump($idusuario);
//  function Encriptar($Variable){
// 	return sha1(md5('3@4gF$fTEm..'.$Variable));
// }
// $ClaveEnc=Encriptar($password);
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


      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <title>Empresas</title>
         <link rel="shortcut icon" type="image/icon" href="../images/favicon.png" />
		
		<script src="js/jquery_3.2.1.min.js"></script>
   

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/4.0.1/css/fixedColumns.dataTables.min.css"/>
		<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
		<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
		
		<script type="text/javascript">
			$( document ).ready(function() {
				$('#exampl').dataTable( {
				"language": {
					"sProcessing":     "Procesando...",
					"sLengthMenu":     "Mostrar _MENU_ registros",
					"sZeroRecords":    "No se encontraron resultados",
					"sEmptyTable":     "Ningún dato disponible en esta tabla",
					"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
					"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					"sInfoPostFix":    "",
					"sSearch":         "Buscar:",
					"sUrl":            "",
					"sInfoThousands":  ",",
					"sLoadingRecords": "Cargando...",
					"oPaginate": {
						"sFirst":    "Primero",
						"sLast":     "Último",
						"sNext":     "Siguiente",
						"sPrevious": "Anterior"
					},
					"oAria": {
						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
					}
				},
				responsive: true
				} );
			});
        </script>
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

	//$query = "SELECT * FROM vehiculos inner join empresas on empresas.nit = vehiculos.empresafkvehi where placa = '".$id_placa."' ";
	$query = "SELECT * FROM servicios  where id_servicio = '".$id_servicio."' ";


					// var_dump($query);
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						//$placa = $rowGBI1['placa'];
						$fecha_servicio = $rowGBI1['fecha_servicio'];
						$placa_servicio = $rowGBI1['placa_servicio'];
						$puntofinal = $rowGBI1['puntofinal'];
            $inicio_servicio = $rowGBI1['inicio_servicio'];
            $otros = $rowGBI1['otros'];
            $hora_inicio = $rowGBI1['hora_inicio'];
            $hora_fin = $rowGBI1['hora_fin'];
            //$funcionario = $rowGBI1['funcionario'];
						//$centro_costos = $rowGBI1['vencebimestral'];
	
           // var_dump($tipo_transporte);
		    }
	?>


	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <!-- <h4 class="card-title">FORMULARIO</h4> -->
                  <p class="card-category">Servicio  ruta <?php echo $placa;?></p>
                </div>
                <div class="card-body">
                  <form id="myForm" method ="post" action="">

                  <!-- <center><h4><span style="color:#286C95; font-size:34px;  text-align: center;">Vehículos</span></h4></center> -->
 <br />
 <br />
	<div id="respuesta">

           <div class="row">
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Fecha de servicio </label>
                          <p><?php echo $fecha_servicio ?> </p>
                        
                      </div>
                       <div class="col-md-2">
                          <label class="bmd-label-floating">Placa </label>
                          <p><?php echo $placa_servicio ?> </p>
                        
                      </div>
                    
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Punto inicial</label>
                          <p><?php echo $inicio_servicio ?> </p>
                      </div>
                      <div class="col-md-2">
                          <label class="bmd-label-floating">Hora de inicio </label>
                          <p><?php echo $hora_inicio ?> </p>
                        
                      </div>
                      
                    </div>
                   
                    <br />
 <br />
 <br />
	<div id="respuesta">
	
		<table id="exampl" class="display tableb" style="color: black;" cellspacing="0" width="100%">
			<thead>
			<tr>
      <th>Funcionario</th>
				<th>Centro de costo</th>
				<th>Área</th>
			
			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Funcionario</th>
				<th>Centro de costo</th>
				<th>Área</th>
			</tr>
			</tfoot>
			
			<tbody>	
      <?php
	
	$query = "SELECT * FROM funcionariosFK where id_servicioFK ='".$id_servicio."'";
				
			
					// var_dump($query);
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {	
						$i++;		
						?>	
						<tr>
						

							<td><a style="color: #212529 !important;" href="javascript:asignarValor('<?php echo $rowGBI1['nit'];?>', '<?php echo $rowGBI1['empresa'];?>');" id="id_img"><?php echo $rowGBI1['funcionario']; ?>  </a>  </td>
							
							<td> <?php echo $rowGBI1['centrocosto']; ?>  </td>
							<td> <?php echo $rowGBI1['area']; ?>  </td>

						
						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>
		<br><br>
    <div class="row">
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Punto final </label>
                          <p><?php echo $puntofinal ?> </p>
                        
                      </div>
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Hora final </label>
                          <p><?php echo $hora_fin ?> </p>
                        
                      </div>
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Puntos adicionales </label>
                          <p><?php echo $otros ?> </p>
                        
                      </div>
            
                      
                    </div>
    <div class="row">
                       <div class="col-md-4">
                          <label class="bmd-label-floating">conductor </label>
                          <?php
if($placa_servicio != ''){
  $query = "SELECT * FROM conductor 
  inner join usuarios on usuarios.id_usuario = conductor.id_conductor
    where vehiculoconductor = '".$placa_servicio."' ";
  
  
          // var_dump($query);
          $stmt1 = mysqli_query($con,$query);
}
//$query = "SELECT * FROM vehiculos inner join empresas on empresas.nit = vehiculos.empresafkvehi where placa = '".$id_placa."' ";


        $i=0;
        while ($row2 = mysqli_fetch_array($stmt1)) {
          $i++;
          //$placa = $rowGBI1['placa'];
          $nombre_completo = $row2['nombre_completo'];
          //$funcionario = $rowGBI1['funcionario'];
          //$centro_costos = $rowGBI1['vencebimestral'];
          echo $nombre_completo; 
         // var_dump($tipo_transporte);
      }
?>
                        
                      </div>
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Vencimiento licencia </label>
                          <?php

//$query = "SELECT * FROM vehiculos inner join empresas on empresas.nit = vehiculos.empresafkvehi where placa = '".$id_placa."' ";

if($placa_servicio != ''){
$query = "SELECT * FROM conductor 
left join usuarios on usuarios.id_usuario = conductor.id_conductor
  where vehiculoconductor = '".$placa_servicio."' ";


        // var_dump($query);
        $stmt1 = mysqli_query($con,$query);
}
        $i=0;
        while ($row2 = mysqli_fetch_array($stmt1)) {
          $i++;
          //$placa = $rowGBI1['placa'];
          $vencimientolicencia = $row2['vencimientolicencia'];
          //$funcionario = $rowGBI1['funcionario'];
          //$centro_costos = $rowGBI1['vencebimestral'];
          echo $vencimientolicencia; 
         // var_dump($tipo_transporte);
      }
?>
                        
                      </div>
                       <div class="col-md-4">
                          <label class="bmd-label-floating">Tiempo transcurrido </label>
                          <p><?php
                    $apertura = new DateTime($hora_inicio);
                    $cierre = new DateTime($hora_fin);
                    $tiempo = $apertura->diff($cierre);  
                    echo $tiempo->format('%H horas %i minutos');


?>
                         
                        </p>
                        
                      </div>
            
                      
                    </div>
		<br><br>
	</div>

                    <?php

//$query = "SELECT * FROM vehiculos inner join empresas on empresas.nit = vehiculos.empresafkvehi where placa = '".$id_placa."' ";
$query = "SELECT * FROM servicios  where id_servicio = '".$id_servicio."' ";


        // var_dump($query);
        $stmt1 = mysqli_query($con,$query);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          //$placa = $rowGBI1['placa'];
          $fecha_servicio = $rowGBI1['fecha_servicio'];
          $placa_servicio = $rowGBI1['placa_servicio'];
          $puntofinal = $rowGBI1['puntofinal'];
          $inicio_servicio = $rowGBI1['inicio_servicio'];
          //$funcionario = $rowGBI1['funcionario'];
          //$centro_costos = $rowGBI1['vencebimestral'];

         // var_dump($tipo_transporte);
      }
?>
                   
					 
		<br><br>
	</div>
	<input type="hidden" id="service" value="<?php echo $id_servicio; ?>" class="form-control">
					<!-- <input type="button" id="<?php echo $placa; ?>"  class="servicios" value="Finalizar"> -->

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
	console.log(this.id);

	$.post('/GramaloteBe/controladores/Peticiones_servicios.php',{
              form:'institucion',
              placa:this.id,
              zonesI:$('#zones').val(),
              service:$('#service').val(),
              opcion:"4"
            

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
      $("#zones").append("<option value='" + zones[i].id + "'>" + zones[i].n + "</option>");
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


