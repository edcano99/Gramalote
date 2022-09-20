<?php
include("../conexion/conexion.php");
$id_placa = $_REQUEST['id'];
$turno = $_POST['turno'];
$placaII = $_POST['placa'];



  //var_dump($turno.'pruebaI');
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
<script src="../assets/js/ServicemasmaspedidosIII.js" language="javascript" type="text/javascript"></script>
    <script type="text/javascript" src="//hst-api.wialon.com/wsdk/script/wialon.js"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript"
    src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
			$( document ).ready(function() {
    $('#tabla').DataTable({
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
} );
        </script>
  <title>Turnero</title>
  <style>



.select {
  width: 110%;
  min-width: 18ch;
  max-width: 16ch;
  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.40em 0.5em;
  font-size: 15px;
  cursor: pointer;
  line-height: 1.1;
  background-color: #fff;
  background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
}

table{
	border:2px solid #00ae90;
  font: caption;
  
}

table th{
	text-align: center;
	background-color: green;
	color: white;
	width: 1% !important;
	border:none;
    font-size: 16px !important;
    
}

table td{
	font-size: 15px !important;
  color: black;
}

table td a {
    color: #00ae90;
}
      </style>
	</head>

<br />




      <?php

	$query = "SELECT * FROM vehiculos left join empresas on empresas.nit = vehiculos.empresafkvehi where placa = '".$id_placa."' ";


					 
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
						$turno = $rowGBI1['turno'];
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
                  
                  <p class="card-category">Servicio <?php echo $placa;?></p>
                </div>
                <div class="card-body">
                  <form id="myForm" method ="post" action="">

                  <!-- <center><h4><span style="color:#286C95; font-size:34px;  text-align: center;">Vehículos</span></h4></center> -->

	<div id="respuesta">
<br>
  <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Herramientas </label>
                          <input type="checkbox" id="herramientas" class="form-control">
                        </div>

                      </div> 

  <div class="row">

  <br>
                       
					   <div class="col-md-9">
						 <div class="form-group">
						   <label class="bmd-label-floating">Puntos ruta</label>
						   <div id="zones">
               <table class="table table-bordered display nowrap" id="tabla" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Geocercas</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
  
               <?php
              // var_dump($query);
 $queryI = "SELECT * FROM servicios where id_servicio =  '".$id_servicio."' ";
 //var_dump($queryI);
 $stmt1I = mysqli_query($con,$queryI);
 while ($rowGBI1I = mysqli_fetch_array($stmt1I)) {
 $otros = $rowGBI1I['otros'];
}
$separada = explode(',', $otros);
//var_dump($separada);
//var_dump(count($separada));


$query = "SELECT * FROM geocerca order by idgeocerca ASC";


        // var_dump($query);
        $stmt1 = mysqli_query($con,$query);
    $totalval = mysqli_num_rows($stmt1);
  //   var_dump($totalval);

        $i=0;
        
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          $checked = '';
          foreach ($separada as &$valor) {
           // var_dump( $valor );
          
          ?>

<?php 

if($valor == $rowGBI1['nombregeocerca'] ){
  $checked = 'checked';

 ?>

        <?php
        }
      }
      
      echo "<td>".$rowGBI1['nombregeocerca']."".'     '."<input name='punto[]' type='checkbox' value='".$rowGBI1['nombregeocerca']."' ".$checked."></td> </tr>";
/*echo $rowGBI1['nombregeocerca']; ?><input name='punto[]' type='checkbox' value='<?php echo $rowGBI1['nombregeocerca']; ?>'<?php echo $checked; ?>><br/>*/ 

      //  <?php
      
      }
?>
 </tbody>
                </table>
               </div>
						 </div>
					   </div>
					  
					 </div>
	<div class="row">

					   <div class="col-md-3">
						 <div class="form-group">
						   <!-- <label class="bmd-label-floating">Inicio ruta</label>
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
					   <!-- <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cantidad </label>
                          <input type="text" id="cantidad" class="form-control">
                        </div>

                      </div> -->
					   <!-- <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Funcionario </label>
                          <input type="text" id="funcionario" class="form-control">
                        </div>

                      </div> -->
					 </div>

					 <div class="row">

					 

					 </div>

           <div id="botones_dtll_pdd" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									 <i class="fas fa-plus" id="eliminar_item" name="eliminar_item"  onclick="Agregaropcion('');" style="cursor:pointer;margin-top: -100%; color: red;">Agregar Funcionario</i> <!-- <i class="fas fa-minus-circle" id="eliminar_item" name="eliminar_item"  onclick="Eliminaropcion();" style="cursor:pointer;margin-top: -100%">Eliminar opcion</i> -->
									<div id="contenido" style="display: flex; align-content: stretch; justify-content: center; flex-direction: row;"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" >
									<p id="listas"  > </p>
									<input type="hidden"   id="x" name="cual[]" >
									<input type="hidden"   id="div_itemscampos" name="div_itemscampos[]" ></div>
									</div>



		<br><br>
		<br><br>
	</div>
	<input type="hidden" id="placaI4" value="<?php echo $placa; ?>" class="form-control">
	<input type="hidden" id="turno" value="<?php echo $turno; ?>" class="form-control">
					<input type="button" id="<?php echo $id_placa; ?>"  class="servicios" value="Iniciar">

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
  var divs = document.getElementsByClassName("hola").length;
  if(divs <= 0){
  Swal.fire(
    'Error!',
    'No pueden ir sin funcionarios.',
    'warning'
  )

                    return;
 }
//console.log("Hay " + divs + " elementos");
const funcionarios = [];
const areas = [];
//const centrocostos = [];
//count='';
turno = $('#turno').val();
herramientas = $("#herramientas:checked").val();
// herramientas = $('#herramientas').val();
 if(turno == '' || turno == 'En servicio'){
  Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Sin turno o vehículo en servicio',
              footer: ''
                    })
                    return;
 }
for (var i = 1; i <= divs; i++) {
 //console.log($('#funcionario'+i).val());

 zones = $('#zones').val();
 valorfuncionario = $('#funcionario'+i).val();
 if(valorfuncionario == '' || valorfuncionario == null ){
  Swal.fire(
    'Error!',
    'No puede ir el campo funcionario vacio.',
    'warning'
  )

                    return;
 }
 //valorcentrocosto = $('#centrocosto'+i).val();
 valorarea = $('#area'+i).val();
 funcionarios.push(valorfuncionario);
 //centrocostos.push(valorcentrocosto);
 if(valorarea == '' || valorarea == null ){
  Swal.fire(
    'Error!',
    'No puede ir el campo area vacio.',
    'warning'
  )

                    return;
 }
 areas.push(valorarea);
 //console.log(valorarea);
 
}
// const animals = ['pigs', 'goats', 'sheep'];
var arr = $('[name="punto[]"]:checked').map(function(){
	return this.value;

  }).get();
  var str = arr.join(',');
var cont = str.split(',');
console.log(cont);
var arrI = $('[name="puntkjo[]"]').map(function(){

	return this.value;

  }).get();
  var strI = arrI.join(',');
var contI = strI.split(',');
// const count = animals.push('cows');
//  console.log(funcionarios);
//  console.log(centrocostos);
//  console.log(areas);
jQuery.ajax({
	   url: "/GramaloteBe/controladores/Peticiones_servicios.php",
	   type: "POST",
	   data: JSON.stringify({'jsonI' : JSON.stringify(cont),'json' : JSON.stringify(funcionarios),'areas' : JSON.stringify(areas),'zones':zones, 'turno':turno, 'herramientas':herramientas, 'opcion':2,'placa':this.id}),
	   contentType: "application/json; charset=utf-8",
	   success : function(data){
		   // alert(data);
	 alert('Registro exitoso!!!');
	   window.opener.location.reload();
 	   window.close();
	 //setTimeout(function(){location.href="./?N=vehiculos"}, 1700);
		   //  location.reload();
	 // $('form#pqrsform').submit();

	   }
   });
return;
	$.post('/GramaloteBe/controladores/Peticiones_servicios.php',{
              form:'institucion',
              placa:this.id,
              zones:$('#zones').val(),
              cantidad:$('#cantidad').val(),
              funcionario:$('#funcionario').val(),
              area:$('#area').val(),
              centrocostos:$('#centrocostos').val(),
              turno:$('#turno').val(),
              opcion:"2"


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

function Agregaropcion(e){
//opcion_num = x + 1 ;
	//if (x < campos_max) {
		 
   
  $.post('/GramaloteBe/controladores/Peticiones_servicios.php',{
              form:'institucion',
              placa:this.id,
              zones:$('#zones').val(),
              cantidad:$('#cantidad').val(),
              funcionario:$('#funcionario').val(),
              area:$('#area').val(),
              centrocostos:$('#centrocostos').val(),
              opcion:"9"


            },function(res) {
              
                DataJson=JSON.parse(res);
               // console.log(DataJson.length);
                //console.log(DataJson);
                //console.log(DataJson[0 ]['placa_servicio']);
                
//                 const miles = DataJson.map(function(element) {
//   //return element ;
//   console.log(element['placa_servicio']);
// });
                var divs = document.getElementsByClassName("hola").length;
    divsI = divs + 1;
//console.log("Hay " + divsI + " elementos");
			o='';
			if(e >= 10){
				o =  'd'+e;
				input = $('input[id^=campod]').length;
			}
			else{
				o=e;
				input = $('input[id^=campo]').length;
			}

		inputI = input + 1;
		// console.log('me va a contar '+  inputI);
		buscarcampo = "infoCampo";
				divscampo = $("#div_itemscampos").val();
				var pattcampo = new RegExp(buscarcampo);
				var respuestacampo = pattcampo.test();

				if(respuestacampo == false)
				{
					divs_finalcampo = divscampo + "," + buscarcampo;
					$("#div_itemscampos").val(divs_finalcampo);
				}
		$("#x").val(tinputA);
   // const miles = DataJson.map(function(element) {  element['placa_servicio'] 
//prueba=for (var i = 0; i < DataJson.length; i++) {console.log(i);};
if(divsI>1){
      Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Limite alcanzado',
                        // footer: '<a href>Why do I have this issue?</a>'
                       });
                       return;
              }
			$('#listas').append('<div id="divcampo'+divsI+'" class="hola" style="float: left; border-radius: 5px;  background-color: #00800094; color:white !important; padding: 15px; margin: 15px; display: inline-block; float: left;">Funcionario<input type="text" class="form-control" id="funcionario'+divsI+'" value=""><br><select class="form-select select form-select-sm" id="area'+divsI+'" aria-label=".form-select-sm example"><option selected disabled>Seleccione el área..</option> </select></label>');
   // });
   for (var i = 0; i < DataJson.length; i++) {
    

    
   $('#area'+divsI+'').append('<option value="'+DataJson[i]['nomarea']+'">'+DataJson[i]['nomarea']+'</option>');
  }
  //}
               //
             //  apload();
                 // if (DataJson['Est']) {
                    //window.location='./';
                    // Swal.fire({
                    //     position: 'top-end',
                    //     icon: 'success',
                    //     title: 'Guardado',
                    //     showConfirmButton: false,
                    //     timer: 1700
                    //   })
    //                   opener.location.reload();
    // window.close();
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

}
	</script> 

<?php
	die();
?>


