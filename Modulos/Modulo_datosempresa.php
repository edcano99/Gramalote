
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Tabla de datos </h4>
                  <p class="card-category"> Empresas</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="datosinstitucion" class="display" cellspacing="0" width="100%">
			<thead>
			<tr>

                        <th>
                          Nombre
                        </th>
                        <th>
                          Ciudad
                        </th>
                        <th>
                          Nit
                        </th>
                        <th>
                          Dirección
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
                          Ciudad
                        </th>
                        <th>
                          Nit
                        </th>
                        <th>
                          Dirección
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
id_emp_user = $('#id_emp_user').val();
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
     "url": "?P=empresa", 
     "method": 'POST', //usamos el metodo POST
     "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
     "dataSrc":""
 },

 "columns":[
     {"data": "empresa"},
     {"data": "ciudad"},
     {"data": "nit"},
     {"data": "direccion"},
     {
     sortable: false,
     "render": function ( data, type, fullI, meta ) {
          // var idcapacitacion = fullI.id_capacitacion;
          // var capacitacion = fullI.nom_capacitacion;
         return "<div class='text-center'><div class='btn-group'><button class='btn btn-link bi-trash btnBorrar' value='' id =''>Eliminar</button></div></div>";
     }
          },
 ],



}); 

});  

      </script>
     