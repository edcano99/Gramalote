
<style>
  p {
  line-height: 75%;
}
  legend {
  line-height: 75%;
  font: monospace 150%;
}
</style>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Información </h4>
                  <p class="card-category">Documentos a vencer</p>
                </div>
             
                <div class="card-body">
                  <div class="table-responsive">
                  <input type="hidden" id="id_usuario" value="<?php echo $_SESSION["id_usuario"]?>" class="form-control">
                  <input type="hidden" id="tipousu" value="<?php echo $_SESSION["tipousu"]?>" class="form-control">
                  
                  
                  <div class="row">
                   
                  <div class="col-md-3" style = "background-color:#FDD7AA;">
                        <div class="form-group">
            <ul class="navbar-nav"> 
            <li class="nav-item dropdown">   
            <center>
              <br>
<p style='line-height: 75%; font: monospace 150%;' >Vencimiento SOAT</p>

                  <?php
$inicio = date("Y-m-01");
$final = date("Y-m-t");
//var_dump ($inicio);
$query = "SELECT vencesoat as vencimiento_soat, placa as placa FROM vehiculos where vencesoat BETWEEN '".$inicio."' AND '".$final."';
";



        // var_dump($query);
         //var_dump('prueba');
        $stmt1 = mysqli_query($con,$query);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;

          $fechaActual = date('Y-m-d');
   
                  // echo $fechaActual.' ';
                   //$fecha1= new DateTime($fechaActual);
                  $fecha1= new DateTime($fechaActual);
                  $fecha2= new DateTime($rowGBI1['vencimiento_soat']);
                  $diff = $fecha1->diff($fecha2);
                  
                  // El resultados sera 3 dias
                  if($diff->invert == 1){
                   $diasvencesoat = '-' . $diff->days .' dias';
                  }else{
                    $diasvencesoat = $diff->days . ' dias ';

                  }
                 // echo ($diff->invert == 1) ? ' - ' . $diff->days .' dias'  : $diff->days .' dias';
            //   echo $diasvencesoat;
                  if($diasvencesoat == 2){
                    $stylevencesoat = 'style="color: #ffa50085;"';
                  } elseif($diasvencesoat < 0){
                    $stylevencesoat = 'style="color: #ff00007a;"';
                  }elseif($diasvencesoat < 30){
                    $stylevencesoat = 'style="color: #00800061;"';

                  }
          ?>


<p <?php echo $stylevencesoat ?>><?php echo $rowGBI1['vencimiento_soat'].' Placa '. $rowGBI1['placa'];?>  <i class="material-icons">error_outline</i></p>

        <?php
      }
?>
</center> 
</li>
</ul>
</div> 
</div>


<div class="col-md-3" style = "background-color:#FDD7AA;">
                        <div class="form-group">
            <ul class="navbar-nav"> 
            <li class="nav-item dropdown">  
              <center> 
            <br>
<p style='line-height: 75%; font: monospace 150%;'>Vencimiento Seguro</p>
                  <?php


$query = "SELECT venceseguro as vencimiento_seguro, placa as placa FROM vehiculos where venceseguro BETWEEN '".$inicio."' AND '".$final."';
";



        // var_dump($query);
         //var_dump('prueba');
        $stmt1 = mysqli_query($con,$query);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          $fechaActual = date('Y-m-d');
   
          // echo $fechaActual.' ';
           //$fecha1= new DateTime($fechaActual);
          $fecha1= new DateTime($fechaActual);
          $fecha2= new DateTime($rowGBI1['vencimiento_seguro']);
          $diff = $fecha1->diff($fecha2);
          
          // El resultados sera 3 dias
          if($diff->invert == 1){
           $diasvencesoat = '-' . $diff->days .' dias';
          }else{
            $diasvencesoat = $diff->days . ' dias ';

          }
         // echo ($diff->invert == 1) ? ' - ' . $diff->days .' dias'  : $diff->days .' dias';
    //   echo $diasvencesoat;
          if($diasvencesoat == 2){
            $stylevencesoat = 'style="color: #ffa50085;"';
          } elseif($diasvencesoat < 0){
            $stylevencesoat = 'style="color: #ff00007a;"';
          }elseif($diasvencesoat < 30){
            $stylevencesoat = 'style="color: #00800061;"';

          }
          ?>


<p <?php echo $stylevencesoat ?>><?php echo $rowGBI1['vencimiento_seguro'].' Placa '. $rowGBI1['placa'];?>  <i class="material-icons">error_outline</i></p>

        <?php
      }
?>
</center>
 </li>
</ul>
</div> 
</div>

<div class="col-md-3" style = "background-color:#F6FFA4;">
                        <div class="form-group">
            <ul class="navbar-nav"> 
            <li class="nav-item dropdown"> 
              <center>
            <br>  
<p style='line-height: 75%; font: monospace 150%;'>Vencimiento Bimestral</p>
                  <?php


$query = "SELECT vencebimestral as vencimiento_bimestral, placa as placa FROM vehiculos where vencebimestral BETWEEN '".$inicio."' AND '".$final."';
";



        // var_dump($query);
         //var_dump('prueba');
        $stmt1 = mysqli_query($con,$query);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          $fechaActual = date('Y-m-d');
   
          // echo $fechaActual.' ';
           //$fecha1= new DateTime($fechaActual);
          $fecha1= new DateTime($fechaActual);
          $fecha2= new DateTime($rowGBI1['vencimiento_bimestral']);
          $diff = $fecha1->diff($fecha2);
          
          // El resultados sera 3 dias
          if($diff->invert == 1){
           $diasvencesoat = '-' . $diff->days .' dias';
          }else{
            $diasvencesoat = $diff->days . ' dias ';

          }
         // echo ($diff->invert == 1) ? ' - ' . $diff->days .' dias'  : $diff->days .' dias';
    //   echo $diasvencesoat;
          if($diasvencesoat == 2){
            $stylevencesoat = 'style="color: #ffa50085;"';
          } elseif($diasvencesoat < 0){
            $stylevencesoat = 'style="color: #ff00007a;"';
          }elseif($diasvencesoat < 30){
            $stylevencesoat = 'style="color: #00800061;"';

          }
          ?>


<p <?php echo $stylevencesoat ?>><?php echo $rowGBI1['vencimiento_bimestral'].' Placa '. $rowGBI1['placa'];?>  <i class="material-icons">error_outline</i></p>

        <?php
      }
?>

</center>
</li>
</ul>
</div> 
</div>

<div class="col-md-3" style = "background-color:#B4E197;">
                        <div class="form-group">
            <ul class="navbar-nav"> 
            <li class="nav-item dropdown"> 
              <center>
            <br>
<p style='line-height: 75%; font: monospace 150%;'>Vencimiento Licencia</p>
                  <?php


$query = "SELECT vencimientolicencia as vencimiento_licencia, nombre_completo as nombre_completo FROM conductor inner join usuarios ON usuarios.id_usuario =  conductor.id_conductor where vencimientolicencia BETWEEN '".$inicio."' AND '".$final."';
";



        // var_dump($query);
         //var_dump('prueba');
        $stmt1 = mysqli_query($con,$query);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          $fechaActual = date('Y-m-d');
   
          // echo $fechaActual.' ';
           //$fecha1= new DateTime($fechaActual);
          $fecha1= new DateTime($fechaActual);
          $fecha2= new DateTime($rowGBI1['vencimiento_licencia']);
          $diff = $fecha1->diff($fecha2);
          
          // El resultados sera 3 dias
          if($diff->invert == 1){
           $diasvencesoat = '-' . $diff->days .' dias';
          }else{
            $diasvencesoat = $diff->days . ' dias ';

          }
         // echo ($diff->invert == 1) ? ' - ' . $diff->days .' dias'  : $diff->days .' dias';
    //   echo $diasvencesoat;
          if($diasvencesoat == 2){
            $stylevencesoat = 'style="color: #ffa50085;"';
          } elseif($diasvencesoat < 0){
            $stylevencesoat = 'style="color: #ff00007a;"';
          }elseif($diasvencesoat < 30){
            $stylevencesoat = 'style="color: #00800061;"';

          }
          ?>

<br>
<p <?php echo $stylevencesoat ?>><?php echo $rowGBI1['vencimiento_licencia'].' Conductor '. $rowGBI1['nombre_completo'] ;?> <i class="material-icons">error_outline</i></p>

        <?php
      }
?>
</center>
</li>
</ul>
</div> 
</div>
</div>

                  </div>
                </div>
              </div>
            </div>
            
            
            

          </div>
        </div>
      </div>

      <script>

$(document).ready(function() {


// $('#ciudad_persona').prop('disabled', true);
var user_id, opcion;
opcion = 4;
id_usuario = $('#id_usuario').val();
tipousu = $('#tipousu').val();
capacitacion = $('#datosinstitucion').DataTable({ 
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
				responsive: true,

 

 "ajax":{            
     "url": "?P=semaforo", 
     "method": 'POST', //usamos el metodo POST
     "data":{opcion:opcion, id_usuario:id_usuario, tipousu:tipousu}, //enviamos opcion 4 para que haga un SELECT
     "dataSrc":""
 },

 "columns":[
     {"data": "placa"},
     {"data": "modelo"},
     {"data": "marca"},
     {
     sortable: false,
     "render": function ( data, type, fullI, meta ) {
           var idvehiculo = fullI.placa;
           var activacion = fullI.activacion;
          // var capacitacion = fullI.nom_capacitacion;
if(activacion == '1'){
  return "<div class='text-center'><button class='btn btn-link bi-trash btnDesactivar' style='color: red !important;' value='"+idvehiculo+"' id ='' >Desactivar</button><div class='btn-group'><button class='btn btn-link bi-trash btnBorrar' value='"+idvehiculo+"' id ='' >Eliminar</button><button class='btn btn-link bi-trash btnEditar' value='"+idvehiculo+"' id ='' >Editar</button><button  class=' btnfichatecnica btn btn-link bi-trash'>Ficha técnia</button></div></div>";

}else{

  return "<div class='text-center'><button class='btn btn-link bi-trash btnActivar' style='color: green !important;' value='"+idvehiculo+"' id ='' >Activar</button><div class='btn-group'><button class='btn btn-link bi-trash btnBorrar' value='"+idvehiculo+"' id ='' >Eliminar</button><button class='btn btn-link bi-trash btnEditar' value='"+idvehiculo+"' id ='' >Editar</button><button  class=' btnfichatecnica btn btn-link bi-trash'>Ficha técnia</button></div></div>";

}
     }
          },
 ],



});

$(document).on("click", ".btnfichatecnica", function(){		        
  var valoresI = this.id.split(',');
      cedula = valoresI[0];
      emp = valoresI[1];
			 
 // console.log(placa);	  
 // href=?N=form_ficha_tecnica&id='"+placa_.replace("%", "")+"'          
//window.open('?N=form_ficha_tecnica&id='+placa+'&idplaca='+id_placa+'', '_blank', );
window.open('Modulos/Modulo_form_ficha_tecnicaI.php?id='+cedula+'&emp='+emp+'', '_blank', '');
}); 

$(document).on("click", ".btnActivar", function(){
    fila = $(this);
    placa = this.value;
   
    opcion = 1; //activar 
    $.ajax({
           url: "?P=estudiantes",
           type: "POST",
           datatype:"json",    
           data:  {opcion:opcion, placa:placa},    
           success: function() {
            setTimeout(function(){location.href="./?N=datosvehiculos"}, 1700);
 }   });
 });

 $(document).on("click", ".btnDesactivar", function(){
    fila = $(this);
    placa = this.value;
   
    opcion = 5; //desactivar 
    $.ajax({
           url: "?P=estudiantes",
           type: "POST",
           datatype:"json",    
           data:  {opcion:opcion, placa:placa},    
           success: function() {
            setTimeout(function(){location.href="./?N=datosvehiculos"}, 1700);
 }   });
 });

rutas = $('#rutas').DataTable({ 
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
				responsive: true,

 

 "ajax":{            
     "url": "?P=estudiantes", 
     "method": 'POST', //usamos el metodo POST
     "data":{opcion:opcion, id_usuario:id_usuario, tipousu:tipousu}, //enviamos opcion 4 para que haga un SELECT
     "dataSrc":""
 },

 "columns":[
     {"data": "nombre_completo"},
     {"data": "lunesrecogida"},
     {"data": "lunesdejada"},
     {"data": "martesrecogida"},
     {"data": "martesdejada"},
     {"data": "miercolesrecogida"},
     {"data": "miercolesdejada"},
     {"data": "juevesrecogida"},
     {"data": "juevesdejada"},
     {"data": "viernesrecogida"},
     {"data": "viernesdejada"},
 
 ],



}); 

$(document).on("click", ".btnEditar", function(){
  id_usuario = this.value;
  //console.log(id_usuario);
	window.open('Modulos/Modulo_actualizarvehiculo.php?&id='+id_usuario+'', '_blank', 'width=800px,height=600px,top=30px,left=300px');


 });
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);
    placa = this.value;

    opcion = 3; //eliminar 
    $.ajax({
           url: "?P=estudiantes",
           type: "POST",
           datatype:"json",    
           data:  {opcion:opcion, placa:placa},    
           success: function() {
		 	capacitacion.row(fila.parents('tr')).remove().draw();                  
            }
         });



 });
  


});  

      </script>