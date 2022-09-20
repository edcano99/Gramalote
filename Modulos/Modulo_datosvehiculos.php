
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Tabla de datos </h4>
                  <p class="card-category"> Vehiculos</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <input type="hidden" id="id_usuario" value="<?php echo $_SESSION["id_usuario"]?>" class="form-control">
                  <input type="hidden" id="tipousu" value="<?php echo $_SESSION["tipousu"]?>" class="form-control">

                  <table id="datosinstitucion" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
      <th>
                     Placa
                        </th>
                        <th>
                          Modelo
                        </th>
                        <th>
                          Marca
                        </th>
                        <th>
                          Acciones
                        </th>
			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>
                          Placa
                        </th>
                        <th>
                          Modelo
                        </th>
                        <th>
                          Marca
                        </th>
                        <th>
                          Acciones
                        </th>
			</tr>
			</tfoot>
			
			<tbody>	


			
			
       
            <!-- <td> <div class='text-center'><div class='btn-group'><button type="button" class="btn btn-link">Editar</button> <button type="button" class="btn btn-link">Eliminar</button></div></div></td> -->
			</tbody>
		</table>
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
     "url": "?P=estudiantes", 
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

  return "<div class='text-center'><button class='btn btn-link bi-trash btnActivar' style='color: green !important;' value='"+idvehiculo+"' id ='' >Activar</button><div class='btn-group'><button class='btn btn-link bi-trash btnBorrar' value='"+idvehiculo+"' id ='' >Eliminar</button><button class='btn btn-link bi-trash btnEditar' value='"+idvehiculo+"' id ='' >Editar</button><button  class=' btnfichatecnica btn btn-link bi-trash'>Ficha técnia</button><button  class=' btnfichatecnicaoio btn btn-link bi-trash'>Pruebas</button></div></div>";

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

$(document).on("click", ".btnfichatecnicaoio", function(){		        
  var valoresI = this.id.split(',');
      cedula = valoresI[0];
      emp = valoresI[1];
			 
 // console.log(placa);	  
 // href=?N=form_ficha_tecnica&id='"+placa_.replace("%", "")+"'          
//window.open('?N=form_ficha_tecnica&id='+placa+'&idplaca='+id_placa+'', '_blank', );
window.open('controladores/CerrarservicioTareP.php?id='+cedula+'&emp='+emp+'', '_blank', '');
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
	window.open('Modulos/Modulo_actualizarvehiculo.php?&id='+id_usuario+'', '_blank', '');


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