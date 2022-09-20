<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Tabla de datos </h4>
                  <p class="card-category"> Condcutores</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="datosrutas" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
      <th>
                          Nombre conductor
                        </th>                    
                        <th>
                          Licencia
                        </th>                     
                        <th>
                        Vencimiento licencia
                        </th>                     
                        <th>
                          Acciones
                        </th>
			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>
      Nombre conductor
                        </th>                    
                        <th>
                          Licencia
                        </th>                     
                        <th>
                        Vencimiento licencia 
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
opcion = 10;
id_emp_user = $('#id_emp_user').val();
datosrutas = $('#datosrutas').DataTable({ 
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
     "url": "?P=usuario", 
     "method": 'POST', //usamos el metodo POST
     "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
     "dataSrc":""
 },

 "columns":[
     {"data": "nombre_completo"},
     {"data": "licenciaconductor"},
     {"data": "vencimientolicencia"},
     {
     sortable: false,
     "render": function ( data, type, fullI, meta ) {
            var id_conductor = fullI.id_conductor;

          // var capacitacion = fullI.nom_capacitacion;
         return "<div class='text-center'><div class='btn-group'><button class='btn btn-link bi-trash btnEditar ' value='"+id_conductor+"' id =''>Editar</button><button class='btn btn-link bi-trash btnBorrar ' value='"+id_conductor+"' id =''>Eliminar</button></div></div>";
     }
          },
 ],



}); 

$(document).on("click", ".btnEditar", function(){
  id_usuario = this.value;
  //console.log(id_usuario);
	window.open('Modulos/Modulo_actualizarconductor.php?&id='+id_usuario+'', '_blank', 'width=800px,height=600px');


 });



$(document).on("click", ".btnBorrar", function(){
    fila = $(this);
    //console.log('borrar');
    id_conductor = this.value;		
    opcion = 12; //eliminar 


         eliminar=confirm("¿Deseas eliminar este registro?");
   if (eliminar){
     
    $.ajax({
           url: "?P=usuario",
           type: "POST",
           datatype:"json",    
           data:  {opcion:opcion, id_conductor:id_conductor},    
           success: function() {
            datosrutas.row(fila.parents('tr')).remove().draw();                  
            }
         });
    
   }

         
 });
  
$(document).on("click", ".btnver", function(){
    fila = $(this);
    var valoresI = this.value.split(',');
				bus = valoresI[0];
			 tipo = valoresI[1];
			 fecha = valoresI[2];
			 console.log(valoresI);
    opcion = 3; //eliminar 

    window.open('Modulos/Modulo_datosmodalrutasestudiantes.php?bus='+bus+'&tipo='+tipo+'&fecha='+fecha+'', '_blank', 'width=800px,height=600px');

 });
  


});  
 function isNewNotificationSupported() {  
    if (!window.Notification || !Notification.requestPermission)  
        return false;  
    if (Notification.permission == 'granted')  
      //  throw new Error('You must only call this \*before\* calling Notification.requestPermission(), otherwise this feature detect would bug the user with an actual notification!');  
    try {  
        new Notification('');  
    } catch (e) {  
        if (e.name == 'TypeError')  
            return false;  
    }  
    return true;  
}

      </script>