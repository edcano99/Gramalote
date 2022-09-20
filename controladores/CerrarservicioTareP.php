<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<?php	
	//include("conexion_webservice.php");
	
	   
    
    // $consulta = "INSERT INTO rutas (
	// 	nomruta,
	// 	direccion1,
	// 	direccion2,
	// 	desde,
	// 	hasta
	// )
	// VALUES
	// 	(
	// 		'pruebarutaminutos',
	// 		'direccionrutanumero',
	// 		'direccionrutanumero2',
	// 		'desde',
	// 		'hasta'
			
	// 	);  ";	
		// var_dump($consulta);		
	 // $resultadoI = $conexion->prepare($consulta);
	//   $resultadoI->execute();
	

	
    // require_once("EjecutadorTareP.php");

			
?>
<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="//hst-api.wialon.com/wsdk/script/wialon.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <?php	
    echo 
    '
    <script>
    $( document ).ready(function() {
        console.log( "document loaded" );
    });
 
    $( window ).on( "load", function() {
        console.log( "window loaded" );
    });

    console.log("adentro");
$(document).ready(function () {
console.log("adentro");

        });


        
// Print message to log
function msg(text) { $("#log").prepend(text + "<br/>"); }

function init() { // Execute after login succeed
	var sess = wialon.core.Session.getInstance(); // get instance of current Session
	// flags to specify what kind of data should be returned
	var flags = wialon.item.Item.dataFlag.base | wialon.item.Unit.dataFlag.lastMessage;

    sess.loadLibrary("itemIcon"); // load Icon Library	
    sess.updateDataFlags( // load items to current session
	[{type: "type", data: "avl_unit", flags: flags, mode: 0}], // Items specification
		function (code) { // updateDataFlags callback
    		// if (code) { msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code

            // get loaded "avl_unit"s items  
	    	var units = sess.getItems("avl_unit");
    //		if (!units || !units.length){ msg("Units not found"); return; } // check if units found

            // bind action to select change event
           // console.log(units);
           // prueba = wialon.core.Session.getInstance();
           // units.forEach(element => console.log(element.getPosition().x));
           placa=[]; 
           posicionx=[]; 
           posiciony=[]; 
     units.forEach(element => 
      
     placa.push(element.getName())
           
           );
     units.forEach(element => 
      
     posicionx.push(element.getPosition().x)
           
           );
     units.forEach(element => 
      
     posiciony.push(element.getPosition().y)
           
           );
           // console.log(prueba);
        //    count = animals.push("cows");
//            var arr = $(animals).map(function(){
//  	return this.value;


//    }).get();

//    console.log(animals);
  var str = placa.join(",");
var cont = str.split("|");
console.log(cont);
  var strI = posicionx.join(",");
var contI = strI.split("|");
console.log(contI);
var arrI = $(units).map(function(){

	return this.value;

  }).get();
  var strI = arrI.join(",");
var contI = strI.split(",");
// const count = animals.push("cows");
//  console.log(funcionarios);
//  console.log(centrocostos);
//  console.log(areas);    	   data: JSON.stringify({"jsonI" : JSON.stringify(cont),"json" : JSON.stringify(funcionarios),"areas" : JSON.stringify(areas),"zones":zones, "turno":turno, "opcion":2,"placa":this.id}),

 jQuery.ajax({
 	   url: "../controladores/EjecutadorTareP.php",
 	   type: "POST",
 	   data: JSON.stringify({"jsonI" : JSON.stringify(cont),"json" : JSON.stringify(cont), "opcion":2}),
 	   contentType: "application/json; charset=utf-8",
 	   success : function(data){


 	   }
    });


           $.post("EjecutadorTareP.php",{
               area:"prueba",
               opcion:"2"
            

             },function(res) {
                    //  Swal.fire({
                    //      position: "top-end",
                    //      icon: "success",
                    //      title: "Guardado",
                    //      showConfirmButton: false,
                    //      timer: 1700
                    //    })
//                      // setTimeout(function(){location.href="./?N=datosarea"}, 1700);
                      
              });
		    // $("#units").change( getSelectedUnitInfo );
	    }
	);
}


// execute when DOM ready
$(document).ready(function () {
	wialon.core.Session.getInstance().initSession("https://hst-api.wialon.com"); // init session
    // For more info about how to generate token check
    // http://sdk.wialon.com/playground/demo/app_auth_token
	wialon.core.Session.getInstance().loginToken("2d173bd3d493b49fc5ecfe7d1586d13aEC1618355EAC137F63607EB1082DB8A1D51CC360", "", // try to login
		function (code) { // login callback
		    // if error code - print error message
			if (code){ msg(wialon.core.Errors.getErrorText(code)); return; }
			msg("Logged successfully"); init(); // when login suceed then run init() function
	});
});





    </script>
';
    ?>