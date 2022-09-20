
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Programa</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Fecha </label>
                          <input type="datetime" id="vencimientolicencia" class="form-control">
                        </div>
                        
                      </div>
                      <!-- <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Turno</label>
                          <input type="text" id="direccionconductor" class="form-control">
                        </div>
                        
                      </div> -->
                       <!-- <div class="col-md-3">
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
                      </div> -->
                      <div class="row">

					 </div>

           <div id="botones_dtll_pdd" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <br>

									<h4> <i class="material-icons" id="eliminar_item" name="eliminar_item"  onclick="Agregaropcion('');" style="cursor:pointer;margin-top: -100%; color: green;">add_circle </i>Agregar placa &nbsp;&nbsp;&nbsp;&nbsp; <i class="material-icons" id="eliminar_item" name="eliminar_item"  onclick="Elimiopcion('');" style="cursor:pointer;margin-top: -100%; color: red;">delete </i>Eliminar placa</h4><!-- <i class="fas fa-minus-circle" id="eliminar_item" name="eliminar_item"  onclick="Eliminaropcion();" style="cursor:pointer;margin-top: -100%">Eliminar opcion</i> -->
									<div id="contenido" style="display: flex; align-content: stretch; justify-content: center; flex-direction: row;"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" >
									<p id="listas"  > </p>
									<input type="hidden"   id="x" name="cual[]" >
									<input type="hidden"   id="div_itemscampos" name="div_itemscampos[]" ></div>
									</div>
									</div>



		<br><br>
		<br><br>
                       
                
                  
                   
                   

                  </form>
                  <button type="boton" id="programa" class="btn btn-success pull-right">Crear programa</button>

                </div>
              </div>
            </div>

          </div>
        </div>
        <script>

window.addEventListener('load',function(){

document.getElementById('vencimientolicencia').type= 'text';

document.getElementById('vencimientolicencia').addEventListener('blur',function(){

document.getElementById('vencimientolicencia').type= 'text';

});

document.getElementById('vencimientolicencia').addEventListener('focus',function(){

document.getElementById('vencimientolicencia').type= 'datetime-local';

});
});

$("#programa").click(function(event) {
  vencimientolicencia = $('#vencimientolicencia').val();

  // if(area == '' || centrocosto == ''){
  //   Swal.fire(
  //     'Error!',
  //     'No pueden ir campos vacíos.',
  //     'warning'
  //   )

  //                     return;
  // }

  var divs = document.getElementsByClassName("hola").length;

  const placas = [];

  for (var i = 1; i <= divs; i++) {

 //console.log($('#funcionario'+i).val());

 zones = $('#zones').val();
 valorplaca = $('#placa'+i).val();
 if(valorplaca == '' || valorplaca == null ){
  Swal.fire(
    'Error!',
    'No puede ir el campo funcionario vacio.',
    'warning'
  )

                    return;
 }
 //valorcentrocosto = $('#centrocosto'+i).val();
 placas.push(valorplaca);
 //centrocostos.push(valorcentrocosto);

 //console.log(valorarea);
 
}
console.log(placas);

jQuery.ajax({
	   url: "/GramaloteBe/controladores/Peticiones_programa.php",
	   type: "POST",
	   data: JSON.stringify({'json' : JSON.stringify(placas), 'opcion':2,'fechapro':vencimientolicencia}),
	   contentType: "application/json; charset=utf-8",
	   success : function(data){
		   // alert(data);
	 alert('Registro exitoso!!!');
	   window.opener.location.reload();
 	   window.close();
	 setTimeout(function(){location.href="./?N=formprograma"}, 1700);
		     location.reload();
	 // $('form#pqrsform').submit();

	   }
   });
     });

     function Elimiopcion(e){
    
      var divs = document.getElementsByClassName("hola").length;
        $('#divcampo'+divs).remove();

     }

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
              opcion:"10"


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

/*
if(divsI>1){
      Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Limite alcanzado',
                        // footer: '<a href>Why do I have this issue?</a>'
                       });
                       return;
              }

              */
			$('#listas').append('<div id="divcampo'+divsI+'" class="hola" style="float: left; border-radius: 5px;  background-color: #00800094; color:white !important; padding: 15px; margin: 15px; display: inline-block; float: left;"><br><select class="form-select select form-select-sm" id="placa'+divsI+'" aria-label=".form-select-sm example"><option selected disabled>Vehículo..</option> </select></label>');
			//$('#listas').append('<div id="divcampo'+divsI+'" class="hola" style="float: left; border-radius: 5px;  background-color: #00800094; color:white !important; padding: 15px; margin: 15px; display: inline-block; float: left;">Turno<input type="text" class="form-control" id="funcionario'+divsI+'" value="'+divsI+'" readonly style="text-align:center;"><br><select class="form-select select form-select-sm" id="area'+divsI+'" aria-label=".form-select-sm example"><option selected disabled>Vehículo..</option> </select></label>');
   // });
   for (var i = 0; i < DataJson.length; i++) {
    

    
   $('#placa'+divsI+'').append('<option value="'+DataJson[i]['placa']+'">'+DataJson[i]['placa']+'</option>');
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