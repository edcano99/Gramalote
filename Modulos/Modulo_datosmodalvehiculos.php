<?php
include("../conexion/conexion.php");
$id_placa = $_REQUEST['id'];
$turno = $_POST['turno'];
$placaII = $_POST['placa'];

// Multiple recipients

/*
$to = "jhamith16@gmail.com";
$subject = "Asunto del email";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n" ."From: mi@cuentadeemailII.com";
$message = "
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>";
 
mail($to, $subject, $message, $headers);

*/
  
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
<META HTTP-EQUIV="REFRESH" CONTENT="25">
<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="//hst-api.wialon.com/wsdk/script/wialon.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.2/leaflet.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.2/leaflet.js"></script>
<link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <title>Turnero</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style type="text/css">
/* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
/* End Fonts */
/* Start Global rules */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
/* End Global rules */

/* Start body rules */




/* |||||||||||||||||||||||||||||||||||||||||||||*/
/* //////////////////////////////////////////// */




/* End body rules */

/* Start form  attributes */
input{
  border-radius: 8px !important;
  text-align: center;
  width: 100px;
}
form {
    width: 100%;
     min-height: 800px; 
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-image: linear-gradient(-225deg, #1fab2575 50%, #00df08b0 50%);
    color: black;
    
}
/* form Container */
form .con {
    display: -webkit-flex;
    display: flex;
  
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}

/* the header form form */
header {
    margin: 2% auto 10% auto;
    text-align: center;
}
/* Login title form form */
header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}
/*  A welcome message or an explanation of the login form */
header p {letter-spacing: 0.05em;}



/* //////////////////////////////////////////// */
/* //////////////////////////////////////////// */


.input-item {
    background: black;
    color: black;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}



/* Show/hide password Font Icon */

/*
#eye {
    background: black;
    color: black;
  
    margin: 5.9px 0 0 0;
    margin-left: -20px;
    padding: 15px 9px 19px 0px;
    border-radius: 0px 5px 5px 0px;
  
    float: right;
    position: relative;
    right: 1%;
    top: -.2%;
    z-index: 5;
    
    cursor: pointer;
}
/* inputs form  */
input[class="form-input"]{
    width: 240px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: black;
  
    outline: none;
    border: none;
    transition: 0.2s linear;
   
}
input[id="txt-input"] {width: 50px;
 }

/* focus  */
input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}

/* //////////////////////////////////////////// */
/* //////////////////////////////////////////// */

/* input[type="text"] {min-width: 250px;} */
/* buttons  */
button {
    display: inline-block;
    color: black;
  
    width: 280px;
    height: 50px;
  
    padding: 0 20px;
    background: #fff;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
}
/* Submits */
.submits {
    width: 48%;
    display: inline-block;
    float: left;
    margin-left: 2%;
}

/*       Forgot Password button FAF3DD  */


/* .frgt-pass {background: transparent;} */

/*     Sign Up button  */
/* .sign-up {background: #B8F2E6;} */


/* buttons hover */
button:hover {
    transform: translatey(3px);
    box-shadow: none;
}

/* buttons hover Animation */
button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}
/* @keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100% {
        transform: translateY(5px);
    }
} */

table { 
        border-spacing: 1150px !important;} 

        .containerdos {  
          display: grid;  
    grid-template-columns: 1fr 1fr 1fr;  
    grid-template-rows: 50px 50px;   
}

#mapadiv {
 
 margin-left: auto;
 margin-right: auto;
 align-content: center;
 width: 100%;

}
#map{
height: calc(40vh - 70px) !important;
}

/* @keyframes tipsy {
  0 {
    transform: translateX(-50%) translateY(-50%) rotate(0deg);
  }
  100% {
    transform: translateX(-50%) translateY(-50%) rotate(360deg);
  }
} */

/* body {
  font-family: helvetica, arial, sans-serif;
  background-color: #2e2e31;
} */

.titulo {
  color: #fffbf1;
  text-shadow: 0 20px 25px #2e2e31, 0 40px 60px #2e2e31;
  font-size: 160px;
  font-weight: bold;
  text-decoration: none;
  letter-spacing: -3px;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
}
/* 
.titulo:before,
.titulo:after {
  content: '';
  padding: .9em .4em;
  position: absolute;
  left: 50%;
  width: 100%;
  top: 50%;
  display: block;
  border: 15px solid red;
  transform: translateX(-50%) translateY(-50%) rotate(0deg);
  animation: 10s infinite alternate ease-in-out tipsy;
}

.titulo:before {
  border-color: #0080005e  #0080005e  rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  z-index: -1;
}

.titulo:after {
  border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #0080005e  #0080005e ;
  box-shadow: 25px 25px 25px rgba(46, 46, 49, .8);
} */

</style>
	</head>

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
      
           
              <div class="card">
                
                <div class="card-header card-header-success">
                  <h4 class="card-title">Información</h4>
                  
                  <p class="card-category">Turnos,servicios y unidades en el mapa</p>
                </div>
                <center>

                <div class="card-body">


<div class="containerdos">  
  <div>
    <legend>Turno de camionetas</legend><table id="exampl" style="color:#212529 !important;" class="display tableb"  width="50%">
			<thead>
			<tr>
                <th>Placa</th>
				<th>Turno</th>

			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Placa</th>
				<th>Turno</th>
			</tr>
			</tfoot>

			<tbody>
      <?php

	$query = "SELECT * FROM vehiculos where  activacion = '1' and vehiculos.turno  <> 'En servicio' and checkbus <> 'on' order by turno+0";


					// var_dump($query);
          $stmt1 = mysqli_query($con,$query);
		  $totalval = mysqli_num_rows($stmt1);
		//   var_dump($totalval);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						?>
						<tr>


							<td style="color:black !important; "><a href="javascript:asignarValor('<?php echo $rowGBI1['placa'];?>', '<?php echo $rowGBI1['marca'];?>');" id="id_img" style="color:#212529 !important;"><?php echo  $rowGBI1['placa']; ?>  </a>  </td>
							<td style="color:black;"> <span>
<?php
if($rowGBI1['turno'] == '2'){


?>
    <input class="basic-slide" style="color:white; background-color:red; "  id="turno" name="turno[]" type="text" value="<?php echo $rowGBI1['turno']; ?>" placeholder="Turno" />
    <?php

}else if ($rowGBI1['turno'] == '3'){


?> 
      <input class="basic-slide" style="color:white; background-color:orange; "  id="turno" name="turno[]" type="text" value="<?php echo $rowGBI1['turno']; ?>" placeholder="Turno" />
  
      <?php
    }else if ($rowGBI1['turno'] == '1'){


      ?> 
            <input class="basic-slide" style="color:white; background-color:green; "  id="turno" name="turno[]" type="text" value="<?php echo $rowGBI1['turno']; ?>" placeholder="Turno" />
        
            <?php
          } else{
?>
      <input class="basic-slide"   id="turno" name="turno[]" type="text" value="<?php echo $rowGBI1['turno']; ?>" placeholder="Turno" />

<?php
    } 
?> 
  </span> 
							<input type="hidden" name="placaI[]" id="placaI<?php echo $i ?>" value="<?php echo $rowGBI1['placa']; ?>" class="form-control"></td>
							<input type="hidden" id="turno1" value="<?php echo $i ?>" class="form-control"></td>
							<input type="hidden" id="totalval" value="<?php echo $totalval ?>" class="form-control"></td>

						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>
    <br>
    <br>
    

		</div>  
  <div><legend  style="color: !important;">Camionetas en servicios</legend><table id="exampl" style="color:#212529 !important;" class="display tableb"  width="50%">
			<thead>
			<tr>
                <th>Placa</th>
				<th>Turno</th>

			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Placa</th>
				<th>Turno</th>
			</tr>
			</tfoot>

			<tbody>
      <?php

	$query = "SELECT * FROM vehiculos where  activacion = '1' and vehiculos.turno  = 'En servicio' and checkbus <> 'on' order by turno+0";


					// var_dump($query);
          $stmt1 = mysqli_query($con,$query);
		  $totalval = mysqli_num_rows($stmt1);
		//   var_dump($totalval);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						?>
						<tr>


							<td style="color:black !important;"><a href="javascript:asignarValor('<?php echo $rowGBI1['placa'];?>', '<?php echo $rowGBI1['marca'];?>');" id="id_img" style="color:#212529 !important;"><?php echo  $rowGBI1['placa']; ?>  </a>  </td>
							<td style="color:black;"> <span>
    <input class="basic-slide"  style="color:white; background-color:orange; "  id="turno" name="turno[]" type="text" value="<?php echo $rowGBI1['turno']; ?>" placeholder="Turno" />
  </span> 
							<input type="hidden" name="placaI[]" id="placaI<?php echo $i ?>" value="<?php echo $rowGBI1['placa']; ?>" class="form-control"></td>
							<input type="hidden" id="turno1" value="<?php echo $i ?>" class="form-control"></td>
							<input type="hidden" id="totalval" value="<?php echo $totalval ?>" class="form-control"></td>

						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>
    
  </div>  
  <div>
  
  <legend>Turno de Buses</legend><table id="exampl" style="color:#212529 !important;" class="display tableb"  width="50%">
			<thead>
			<tr>
                <th>Placa</th>
				<th>Turno</th>

			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Placa</th>
				<th>Turno</th>
			</tr>
			</tfoot>

			<tbody>
      <?php

	$query = "SELECT * FROM vehiculos where  activacion = '1' and vehiculos.turno  <> 'En servicio' and checkbus = 'on' order by turno+0";


					// var_dump($query);
          $stmt1 = mysqli_query($con,$query);
		  $totalval = mysqli_num_rows($stmt1);
		//   var_dump($totalval);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						?>
						<tr>


							<td style="color:black !important;"><a href="javascript:asignarValor('<?php echo $rowGBI1['placa'];?>', '<?php echo $rowGBI1['marca'];?>');" id="id_img" style="color:#212529 !important;"><?php echo  $rowGBI1['placa']; ?>  </a>  </td>
							<td style="color:black;"> <span>
    <input class="basic-slide"  style="color:white; background-color:green; " id="turno" name="turno[]" type="text" value="<?php echo $rowGBI1['turno']; ?>" placeholder="Turno" />
  </span> 
							<input type="hidden" name="placaI[]" id="placaI<?php echo $i ?>" value="<?php echo $rowGBI1['placa']; ?>" class="form-control"></td>
							<input type="hidden" id="turno1" value="<?php echo $i ?>" class="form-control"></td>
							<input type="hidden" id="totalval" value="<?php echo $totalval ?>" class="form-control"></td>

						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>

    <br>
    <br>
    <legend  style="color: !important;">Buses en servicios</legend><table id="exampl" style="color:#212529 !important;" class="display tableb"  width="50%">
			<thead>
			<tr>
                <th>Placa</th>
				<th>Turno</th>

			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Placa</th>
				<th>Turno</th>
			</tr>
			</tfoot>

			<tbody>
      <?php

	$query = "SELECT * FROM vehiculos where  activacion = '1' and vehiculos.turno  = 'En servicio' and checkbus = 'on' order by turno+0";


					// var_dump($query);
          $stmt1 = mysqli_query($con,$query);
		  $totalval = mysqli_num_rows($stmt1);
		//   var_dump($totalval);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						?>
						<tr>


							<td style="color:black !important;"><a href="javascript:asignarValor('<?php echo $rowGBI1['placa'];?>', '<?php echo $rowGBI1['marca'];?>');" id="id_img" style="color:#212529 !important;"><?php echo  $rowGBI1['placa']; ?>  </a>  </td>
							<td style="color:black;"> <span>
    <input class="basic-slide"  id="turno" name="turno[]" style="color:white; background-color:orange; " type="text" value="<?php echo $rowGBI1['turno']; ?>" placeholder="Turno" />
  </span> 
							<input type="hidden" name="placaI[]" id="placaI<?php echo $i ?>" value="<?php echo $rowGBI1['placa']; ?>" class="form-control"></td>
							<input type="hidden" id="turno1" value="<?php echo $i ?>" class="form-control"></td>
							<input type="hidden" id="totalval" value="<?php echo $totalval ?>" class="form-control"></td>

						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>

<br>
<br>



  
  <legend  style="color: !important;">Mapa unidades</legend>
  <p class="titulo">  <img style="width: 208px; filter: drop-shadow(0px 0px 3px rgba(0,0,0,0.5));  opacity: 0.7; filter:  alpha(opacity=20);" src="../img/faviconGramalote.png">    </p>
  <div id='logI'></div>
<div id='logII'></div>


<!-- <button id='onprueba'>Refresh</button> -->
   <p>Vehículo: <select id='units'><option value='0'>—</option>

</select> 
                  <div id="mapadiv" class="col-lg-12 col-md-12">
<div id="map" class="col-lg-10 col-md-12">

</div>
</div>
 
</div>  
 
</div>
    

                  
                

<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <audio id="myAudio"  loop>
  <!-- <source src="../static/turno.ogg" type="audio/ogg"> -->
  <source src="static/turno.mp3" type="audio/mp3">
  Your browser does not support the audio element.
</audio>
 <!-- <audio controls loop>
    <source src="../static/turno.mp3" type="audio/mp3" >
</audio> -->
	

				<input type="hidden" id="placaI4" value="<?php echo $placa; ?>" class="form-control">
					<input type="button" onclick="myFunction()" value="Actualizar">

          

                  </form>

              </div>
              </center>
              </div>
            </div>
          </div>
       

	<script type="text/javascript">
         $(document).ready(function() {
          // Swal.fire({
          //               icon: 'error',
          //              title: 'Oops...',
          //               text: 'Campo repetido o valor incorrecto ',
          //              //footer: '<a href>Why do I have this issue?</a>'
          //             })
      
          $.ajax({
            data: { opcion:1 },
            url:   '../controladores/Peticiones_notificacion.php',
            type:  'POST',

            beforeSend: function () 
            {
                $("#fecha").prop('disabled', true);
            },

          success: function(data)            
       {
        DataJson=JSON.parse(data);
       

// console.log( DataJson.sort() );
var doubles = DataJson.map(function(x) {
  console.log(x['placa']);
  Swal.fire({
title: "Aviso de turno",
text: "El siguiente turno es para el vehículo: "+x['placa'],
timer: 7000,
showConfirmButton: false
});
var x = document.getElementById("myAudio"); 
  //  var sonido = new Audio("static/turno.mp3");
   x.play();

   const myTimeout = setTimeout(myGreeting, 10000);

function myGreeting() {
  x.pause();
}
});



        $("#cat").prop('disabled', false);
        $("#fecha").prop('disabled', false);
        $("#selcat2").prop('disabled', false);
        $('#cat').html(data);  
        $('#selcat2').html(data);    

       },
            error: function()
            {
                alert('Ocurrio un error en el servidor ..');
                cat.prop('disabled', false);
                selcat2.prop('disabled', false);
            }
        });


          $.ajax({
            data: { opcion:2 },
            url:   '../controladores/Peticiones_notificacion.php',
            type:  'POST',

            beforeSend: function () 
            {
                $("#fecha").prop('disabled', true);
            },

          success: function(data)            
       {
        DataJson=JSON.parse(data);
       

// console.log( DataJson.sort() );
var doubles = DataJson.map(function(x) {
  console.log(x['placa']);
  Swal.fire({
title: "Aviso de turno",
text: "El tercer turno es para el vehículo: "+x['placa'],
timer: 7000,
showConfirmButton: false
});
var x = document.getElementById("myAudio"); 
  //  var sonido = new Audio("static/turno.mp3");
   x.play();

   const myTimeout = setTimeout(myGreeting, 10000);

function myGreeting() {
  x.pause();
}
});



        $("#cat").prop('disabled', false);
        $("#fecha").prop('disabled', false);
        $("#selcat2").prop('disabled', false);
        $('#cat').html(data);  
        $('#selcat2').html(data);    

       },
            error: function()
            {
                alert('Ocurrio un error en el servidor ..');
                cat.prop('disabled', false);
                selcat2.prop('disabled', false);
            }
        });
        // var x = document.getElementById("myAudio"); 
  //  var sonido = new Audio("static/turno.mp3");
  
         
});
 var TOKEN = '2d173bd3d493b49fc5ecfe7d1586d13aB71D2F73BEDABF69BBF05B5AF4D776DAA63B8705';

// global variables
var map, marker, markerByUnit = {},
    currentPoint = null,
    currentUnitId = null;

// Unit markers constructor
function getUnitMarker(unit) {
  // check for already created marker
  var marker = markerByUnit[unit.getId()];
  if (marker) return marker;
    
  var unitPos = unit.getPosition();

  // don't create marker if unit haven't a position
  if (!unitPos) return null;
  
  marker = L.marker([unitPos.y, unitPos.x], {
    clickable: true,
    draggable: false,
    icon: L.icon({
      iconUrl: unit.getIconUrl(32),
      iconAnchor: [16, 16] // set icon center
    })
  });
  marker.on('click', function(e) {
    // select unit in UI
    $('#units').val(unit.getId());

    getGeofencesByUnitId(unit.getId());
  });

  // save marker
  markerByUnit[unit.getId()] = marker;
  
  return marker;
}

// Print message to log
function msg(text) { $('#log').prepend(text + '<br/>'); }


function onlyTwoSignsAfterComma(n) {
  return Math.round(n * 100) / 100;
}

// show area in feets or meters (miles or kilometers)
function prettyPrintArea(area, measureUnits) {
  if (typeof measureUnits !== 'number') measureUnits = 0;
  
  var multiplier, small, big;
  
  if (measureUnits === 1 || measureUnits === 2) { // feets/miles
    multiplier = 5280 * 5280;
    small = ' ft²';
    big = ' mi²';
  } else { // meters/kilometers
    multiplier = 1000;
    small = ' m²';
    big = ' km²';
  }

  if (area < multiplier) return Math.ceil(area) + small;
  else return onlyTwoSignsAfterComma(area / multiplier) + big;
}
// show distance in feets or meters (miles or kilometers)
function prettyPrintDistance(distance, measureUnits) {
  if (typeof measureUnits !== 'number') measureUnits = 0;
  
  var multiplier, small, big;
  
  if (measureUnits === 1 || measureUnits === 2) { // feets/miles
    multiplier = 5280;
    small = ' ft';
    big = ' mi';
  } else { // meters/kilometers
    multiplier = 1000;
    small = ' m';
    big = ' km';
  }
    
  if (distance < multiplier) return Math.ceil(distance) + small;
  else return onlyTwoSignsAfterComma(distance / multiplier) + big;
}

function init() { // Execute after login succeed
  // get instance of current Session
  var session = wialon.core.Session.getInstance();
    
  // load Geofences Library 
  session.loadLibrary('resourceZones');
  // load Icon Library
  session.loadLibrary('itemIcon');
    
  // specify what kind of data should be returned
  var unitFlags = wialon.item.Item.dataFlag.base | wialon.item.Unit.dataFlag.lastPosition,
      resourceFlags = wialon.item.Item.dataFlag.base | wialon.item.Resource.dataFlag.zones;
  
  // load items to the current session
  session.updateDataFlags(
    // Items specification, request unit list and resource list
    [{type: 'type', data: 'avl_unit', flags: unitFlags, mode: 0},
     {type: 'type', data: 'avl_resource', flags: resourceFlags, mode: 0}],
    function (error) { // updateDataFlags callback
      if (error) {
        // show error, if update data flags was failed
        msg(wialon.core.Errors.getErrorText(error));
      } else {
        msg('Units&Resources are loaded');
        
        initUIData();
      }
    }
  );
}

// will be called after updateDataFlags success
function initUIData() {
  var session = wialon.core.Session.getInstance();
  
  var units = session.getItems('avl_unit'),
      resources = session.getItems('avl_resource');
  
  var unitsEl = $('#units'),
      resourcesEl = $('#resources');
  
  units.forEach(function(unit) {
    // add option to the select with unit id and name
    unitsEl.append($('<option>').text(unit.getName()).val(unit.getId()));
      
    var unitMarker = getUnitMarker(unit);
    if (unitMarker) unitMarker.addTo(map);
    
    // listen for new messages
    unit.addListener('changePosition', function(event) {
      // event is qx.event.type.Data
      // extract message data
      var pos = event.getData();
      
      // move or create marker, if not exists
      if (pos) {
        if (unitMarker) {
          unitMarker.setLatLng([pos.y, pos.x]);
        } else {
          // create new marker
          unitMarker = getUnitMarker(unit);
          
          if (unitMarker) {
            unitMarker.addTo(map);
          } else {
            msg('Got message with pos, but unit don\'t have a position');
          }
        }
      }
    });
  });
  
  resources.forEach(function(resource) {
    // add options to the select with resource id and name
    resourcesEl.append($('<option>').text(resource.getName()).val(resource.getId()));
  });
  
  // on unit selected
  unitsEl.change(function() {
    getGeofencesByUnitId(unitsEl.val());
  });
  
  var positionEl = $('#latlng');
  
  $('#apply-location-button').click(function() {
    // extracts two numbers divided by non-digits
    var latlngRegex = /^[^\d]*?(-?\d+(?:\.\d+)?)[^\.\d]+?(-?\d+(?:\.\d+)?)[^\d]*$/;
    
    var groups = latlngRegex.exec(positionEl.val());
    if (!groups) { // invalid string
      positionEl.addClass('invalid');
      return;
    }
    
    var lat = parseFloat(groups[1]),
        lon = parseFloat(groups[2]);
    
    if (isFinite(lat) && isFinite(lon) && (-90 <= lat && lat <= 90) && (-180 <= lon && lon <= 180)) {
      // deselect unit, because we have selected location manually
      $('#units').val('0');
      
      getGeofencesByPoint(lat, lon);
    } else {
      positionEl.addClass('invalid');
    }
  });
  
  // refresh on resource selected
  resourcesEl.change(function() {
    if (currentUnitId !== null) {
      getGeofencesByUnitId(currentUnitId);
    } else if (currentPosition) {
      getGeofencesByPoint(currentPosition.lat, currentPosition.lon);
    }
  });
  
  // refresh unit
  $('#unit-refresh-button').click(function() {
    if (currentUnitId) getGeofencesByUnitId(currentUnitId);
  });
}

function getGeofencesByUnitId(unitId) {
  unitId = parseInt(unitId, 10);
  if (!isFinite(unitId)) {
      msg('Bad unit id');
      return;
  }
  
  // save for refreshes
  currentUnitId = unitId;
    
  if (unitId === 0) {
    $('#unit-refresh-button').hide();
    return;
  }
    
  var session = wialon.core.Session.getInstance();
          
  var unit = session.getItem(unitId);
  if (!unit) {
    msg('Unit not found');
    $('#unit-refresh-button').hide();
    return;
  }
  
  // Show button for refreshing data by current unit position
  $('#unit-refresh-button').show();
  
  var position = unit.getPosition();
  if (!position) {
    msg('Unit haven\'t a position');
    $('#results-table').hide();
    $('#no-results').hide();
    return;
  }

  _getGeofencesInPoint(position.y, position.x);
}
function getGeofencesByPoint(lat, lon) {
  // save for refreshes
  currentUnitId = null;
    
  // hide unit refresh button
  $('#unit-refresh-button').hide();

  _getGeofencesInPoint(lat, lon);
}

// implementation
function _getGeofencesInPoint(lat, lon) {
  currentPosition = {lat: lat, lon: lon};
    
  // center map at the point
  map.setView([lat, lon]);

  // move marker, or create, if not exists
  if (marker) {
    marker.setLatLng([lat, lon]);
  } else {
    marker = L.marker([lat, lon], {
      clickable: false,
      draggable: false,
      zIndexOffset: 1000
    });
    marker.addTo(map);
  }
  
  // five signs is precise enough
  var displayLat = Math.round(lat * 100000) / 100000,
      displayLon = Math.round(lon * 100000) / 100000;
  
  // show position
  $("#logI").empty();
  $("#logII").empty();
  $('#logI').prepend(displayLat + ', ' + displayLon +'<br/>');
  $('#latlng').val(displayLat + ', ' + displayLon);
  $('#latlng').removeClass('invalid');
  wialon.util.Gis.getLocations([{lon:displayLon, lat:displayLat}], function(code, address){ 
			if (code) { msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code
			// msg(unit.getName() + " Seleccionado<br/><b>Locación de la  unidad</b>: "+ address+"</div>"); // print message to log
      $('#logII').prepend("Locación de la  unidad</b>: "+ address);
  	});
  // get selected resource
  var resourceId = parseInt($('#resources').val());
  
  // object with requested resources to find zones in
  var requestZoneId = {};
  
  var session = wialon.core.Session.getInstance();
  
  if (resourceId === 0) {
    // add all resources to the search
    session.getItems('avl_resource').forEach(function(resource) {
      requestZoneId[resource.getId()] = [];
    });
  } else {
    // empty array means "search for all geofences in this resource"
    requestZoneId[resourceId] = [];
  }
  
  msg('Loading zones in point');
  
  // do a request
  wialon.util.Helper.getZonesInPoint({
    lat: lat, lon: lon,
    zoneId: requestZoneId
  }, function(error, data) {
    if (error) {
      msg(wialon.core.Errors.getErrorText(error));
      return;
    }
      
    msg('Zones have loaded');
    
    handleZonesInPointResult(data);
  });
}

function handleZonesInPointResult(data) {
  var session = wialon.core.Session.getInstance();

  var resultsTableBodyEl = $('#results-table-body');
  
  // remove old results
  resultsTableBodyEl.empty();

  // numerify result rows
  var zoneI = 0;
  
  // format of response: https://sdk.wialon.com/wiki/en/sidebar/remoteapi/apiref/resource/get_zones_by_point

  // Save zones to make a batch request for additional data
  // {resource: wialon.item.Resource,
  //  zonesIds: [<zoneId>, ...],
  //  zonesElements: [{
  //    area: <DOMElement>,
  //    perimeter: <DOMElement>
  //  }, ...]}
  var resourcesToLoadData = [];

  for (var resourceId in data) if (data.hasOwnProperty(resourceId)) {
    var foundZonesIds = data[resourceId];
    
    resourceId = parseInt(resourceId);
    var resource = session.getItem(resourceId);
    
    var resourceToLoadData = {
      resource: resource,
      zonesIds: [],
      zonesElements: []
    };
    resourcesToLoadData.push(resourceToLoadData);
    
    foundZonesIds.forEach(function(zoneId) {
      var zone = resource.getZone(zoneId);
      
      // zone data format:
      // https://sdk.wialon.com/wiki/en/sidebar/remoteapi/apiref/resource/get_zone_data
     
      var zoneType;
      switch (zone.t) {
          case 1: zoneType = 'Line'; break;
          case 2: zoneType = 'Polygon'; break;
          case 3: zoneType = 'Circle'; break;
          default: zoneType = 'Unknown';
      }
      
      var tr = $('<tr>');
      
      var zoneElements = {
        // Save elements to update them when area and perimeter will be loaded
        area: $('<td>Loading...</td>'),
        perimeter: $('<td>Loading...</td>')
      };
      resourceToLoadData.zonesIds.push(zoneId);
      resourceToLoadData.zonesElements.push(zoneElements);
      
      tr.append('<td>' + (++zoneI) + '</td>'); // #
      tr.append('<td>' + zone.n + '</td>'); // Name
      tr.append('<td>' + zoneType + '</td>'); // Type
        
      tr.append(zoneElements.area); // Area
      tr.append(zoneElements.perimeter); // Perimeter
      
      tr.append('<td>' + resource.getName() + '</td>'); // Resource name
      
      resultsTableBodyEl.append(tr);
    });
  }

  var remote = wialon.core.Remote.getInstance();
  // Start a batch to do all getZonesData in one HTTP request
  remote.startBatch();

  resourcesToLoadData.forEach(function(toLoad) {
    // request only area and perimeter
    var zoneFlags = wialon.item.MZone.flags.area | wialon.item.MZone.flags.perimeter;
    
    // all requests will be batched and executed only after finishBatch call
    toLoad.resource.getZonesData(toLoad.zonesIds, zoneFlags, function(error, data) {
      if (error) {
        msg(wialon.core.Errors.getErrorText(error));
        return;
      }
      
      // update all table rows
      data.forEach(function(zone, i) {
        toLoad.zonesElements[i].area.text(prettyPrintArea(zone.ar, toLoad.resource.getMeasureUnits()));
        toLoad.zonesElements[i].perimeter.text(prettyPrintDistance(zone.pr, toLoad.resource.getMeasureUnits()));
      });
    });
  });

  msg('Loading extra zones data (area & perimeter)');

  // perform all getZonesData requests
  remote.finishBatch(function(error) {
    if (error) msg(wialon.core.Errors.getErrorText(error));
    else msg('Extra zone data have loaded');
  });
  
  if (zoneI > 0) {
    $('#results-table').show();
    $('#no-results').hide();
  } else {
    $('#results-table').hide();
    $('#no-results').show();
  }
}

function initMap() {
  // create a map in the "map" div, set the view to a given place and zoom
  map = L.map('map', {
    // disable zooming, because we will use double-click to set up marker
    doubleClickZoom: false
  }).setView([6.51693, -74.9062], 10);

  // add an OpenStreetMap tile layer
  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    // copyrights
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors | &copy; <a href="http://gurtam.com">Gurtam</a>'
  }).addTo(map);
  
  // handle mouse double-click event
  map.on('dblclick', function(e) {
    // hide hint
    $('#doubleclick-hint').hide();
      
    // deselect unit, because we are selected location manually
    $('#units').val('0');
    
    getGeofencesByPoint(e.latlng.lat, e.latlng.lng);
  });
}

// execute when DOM ready
$(document).ready(function () {  
  // init session
  wialon.core.Session.getInstance().initSession("https://hst-api.wialon.com");

  wialon.core.Session.getInstance().loginToken(TOKEN, "", // try to login
    function (code) { // login callback
      // if error code - print error message
      if (code){ msg(wialon.core.Errors.getErrorText(code)); return; }
      msg('Logged successfully');
      initMap();
      init(); // when login suceed then run init() function
    }
  );
});

       
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
			totalval = $('#totalval').val();
			turnoI = $('#turno1').val();
			// console.log(totalval);
			
			// for (var i = 1; i < turnoI; i++) {
			// 	arrayI=[];
			// placa=$('#placaI').val()
			// arrayI.push(i);

			// }
			var arr = $('[name="placaI[]"]').map(function(){

	return this.value;

  }).get();
  var str = arr.join(',');
var cont = str.split(',');


var arrI = $('[name="turno[]"]').map(function(){

	return this.value;

  }).get();
  var strI = arrI.join(',');

var contI = strI.split(',');

for (var i = 1; i <= totalval; i++) {
//console.log(i)
//console.log(contI[i])
//valoruno = contI[i];
console.log('uno'+i)
esbien= '';

for (var ic = 0; ic < totalval; ic++) {
	//console.log(valoruno)
	console.log(contI[ic])
 	if(i == contI[ic]){
		esbien = 'bien';
 //console.log(esbien);

 	}
	// console.log('otro' + esbien);
	
}
console.log(esbien);
if(esbien == ''){
//console.log('hay uno distinto')
              Swal.fire({
                        icon: 'error',
                       title: 'Oops...',
                        text: 'Campo repetido o valor incorrecto ',
                       //footer: '<a href>Why do I have this issue?</a>'
                      })
        return;
}
}
//console.log(strI);
			// console.log('entro');
			// //arrayI=$('#placaI4').val();
			// arrayI=[];
			// placa=$('#placaI').val()
			// arrayI.push(placa);
			// console.log($('#placaI').val());

  //event.preventDefault();
      // if($("#tipotransporte").val() == '' || $("#nombrecompleto").val() == '' || $("#grado").val() == '' || $("#idinstitucion").val() == '' || $("#direccionestudiante").val() == '' ){
      //               Swal.fire({
      //                   icon: 'error',
      //                   title: 'Oops...',
      //                   text: 'algunos campos  vacío',
      //                  //footer: '<a href>Why do I have this issue?</a>'
      //                 })
      //   return;
      // }
	  jQuery.ajax({


	   url: "/GramaloteBe/controladores/Peticiones_turno.php",
	   type: "POST",
	   data: JSON.stringify({'json' : JSON.stringify(cont), 'jsonI' : JSON.stringify(contI)}),
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
	  return
	  $.post('/GramaloteBe/controladores/Peticiones_estudiantes.php',{
              form:'institucion',
			  arrayI: {'array': JSON.stringify(arrayI)},
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
                       setTimeout(function(){location.href="./?N=datosvehiculos"}, 1700);

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
		function asignarValor(nombre_bodega, id_bodega)
	{


		window.close();
	}
	</script>

<?php
	die();
?>


