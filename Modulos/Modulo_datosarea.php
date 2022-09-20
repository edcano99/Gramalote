<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Tabla de datos </h4>
                  <p class="card-category"> Geocerca</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="datosrutas" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
                        <th>
                          Nombre
                        </th>                     
                        <th>
                          Centro costo
                        </th>                     
                        <th>
                          Acciones
                        </th>
			</tr>
			</thead>
			<tfoot>
			<tr>
                        <th>
                          Nombre
                        </th>                     
                        <th>
                          Centro costo
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
opcion = 5;
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
     "url": "?P=area", 
     "method": 'POST', //usamos el metodo POST
     "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
     "dataSrc":""
 },

 "columns":[
     {"data": "nomarea"},
     {"data": "centrocosto"},
     {
     sortable: false,
     "render": function ( data, type, fullI, meta ) {
            var id_area = fullI.id_area;

          // var capacitacion = fullI.nom_capacitacion;
         return "<div class='text-center'><div class='btn-group'><button class='btn btn-link bi-trash btnBorrar ' value='"+id_area+"' id =''>Eliminar</button></div></div>";
     }
          },
 ],



}); 


$(document).on("click", ".btnBorrar", function(){
    fila = $(this);
    //console.log('borrar');
    id_area = this.value;		
    opcion = 3; //eliminar 
    $.ajax({
           url: "?P=area",
           type: "POST",
           datatype:"json",    
           data:  {opcion:opcion, id_area:id_area},    
           success: function() {
            datosrutas.row(fila.parents('tr')).remove().draw();                  
            }
         });
         return;
	Swal.fire({
  title: '¿Está seguro de eliminar ?',
  showDenyButton: true,
//   showCancelButton: true,
  confirmButtonText: `Eliminar`,
  denyButtonText: `Cancelar`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Eliminado!', '', 'success')


  } else if (result.isDenied) {
    Swal.fire('No fue eliminado', '', 'info')
  }
})


    //var respuesta = confirm('¿Está seguro de eliminar la capacitación '+capacitacionI+' ?');                
    //if (respuesta) {            
        // $.ajax({
        //   url: "Service/Information_Service_capacitacion.php",
        //   type: "POST",
        //   datatype:"json",    
        //   data:  {opcion:opcion, user_id:user_id},    
        //   success: function() {
		// 	capacitacion.row(fila.parents('tr')).remove().draw();                  
        //    }
        // });	
    //}
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