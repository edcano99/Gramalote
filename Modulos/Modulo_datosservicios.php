<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Tabla de datos </h4>
                  <p class="card-category"> Rutas</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="datosrutas" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
      <th>
                  ID servicio
                        </th>
                        <th>
                          Fecha
                        </th>
      <th>
                          Placa
                        </th>
                        <th>
                          Área
                        </th>
                        <th>
                          Centro de costos
                        </th>
                        <th>
                       N° de pasajeros
                        </th>
                        <th>
                          Inicio de servicio
                        </th>
                        <th>
                          Puntos anexados
                        </th>
                        <th>
                          Hora de salida
                        </th>
                        <th>
                          Hora de llegada
                        </th>
                        <th>
                        Tiempo total
                        </th>
                      <th>
                          Conductor
                        </th>  
                        <th>
                          Acciones
                        </th>
			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>
                  ID servicio
                        </th>
                        <th>
                          Fecha
                        </th>
      <th>
                          Placa
                        </th>
                        <th>
                          Área
                        </th>
                        <th>
                          Centro de costos
                        </th>
                        <th>
                       N° de pasajeros
                        </th>
                        <th>
                          Inicio de servicio
                        </th>
                        <th>
                          Puntos anexados
                        </th>
                        <th>
                          Hora de salida
                        </th>
                        <th>
                          Hora de llegada
                        </th>
                        <th>
                        Tiempo total
                        </th>
                      <th>
                          Conductor
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
    <input type="hidden" id="tipousuario" value="<?php echo $_SESSION["tipousuario"]?>">
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
tipousuario = $('#tipousuario').val();
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
        "columnDefs": [
            {
                "targets": [ 4,5,6,7,8,9,10,11],
                "visible": false
            }
        ],
        "order": [[ 1, "desc" ]], 
        dom: 'Bfrtip',
        buttons: [
                {
                    extend: 'excel',
                    footer: true,
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Exportar a excel',
                    className: 'btn btn-success',
                     exportOptions: {
                       columns: [ 1,2,3,4,5,6,7,8,9,10,11 ]
                     }
                }],
                

 "ajax":{            
     "url": "?P=servicios", 
     "method": 'POST', //usamos el metodo POST
     "data":{opcion:opcion,tipousuario:tipousuario}, //enviamos opcion 4 para que haga un SELECT
     "dataSrc":""
 },

 "columns":[
  {"data": "id_servicio"},
     {"data": "fecha_servicio"},
     {"data": "placa_servicio"},
     {"data": "area"},
     {"data": "centrocosto"},
     {"data": "funcionario"},
     {"data": "inicio_servicio"},
     {"data": "otros"},
     {"data": "hora_inicio"},
     {"data": "hora_fin"},
     {
     sortable: false,
     "render": function ( data, type, fullI, meta ) {
            var id_servicio = fullI.id_servicio;
            var placa_servicio = fullI.placa_servicio;
            var hora_fin = fullI.hora_fin;
  inicio = fullI.hora_inicio;
  fin =   hora_fin ;
  
  inicioMinutos = parseInt(inicio.substr(3,2));
  inicioHoras = parseInt(inicio.substr(0,2));
  
  finMinutos = parseInt(fin.substr(3,2));
  finHoras = parseInt(fin.substr(0,2));


  if(inicio>fin){
    transcurridoMinutos = inicioMinutos -  finMinutos;
  transcurridoHoras = inicioHoras -  finHoras;
  }else{
    transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  }

  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
  }
  
  horas = transcurridoHoras.toString();
  minutos = transcurridoMinutos.toString();
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  if(hora_fin == '00:00:00'){
  return "<td> no hay tiempo a calcular </td>";
  }else{
    return "<td> "+horas+":"+minutos+" </td>";
  }
  
//   var fecha1 = moment("2016-09-30 07:30:00", "YYYY-MM-DD HH:mm:ss");
// var fecha2 = moment("2016-10-03 07:30:00", "YYYY-MM-DD HH:mm:ss");

// var diffI = fecha2.diff(fecha1, 'd'); // Diff in days
// console.log(diff);

// var diff = fecha2.diff(fecha1, 'h'); // Diff in hours
// //console.log(diff);
// return "<td> "+diff+":"+diff+" </td>";
        
     }
          },
     {"data": "nombre_completo"},
     {
     sortable: false,
     "render": function ( data, type, fullI, meta ) {
            var id_servicio = fullI.id_servicio;
            var placa_servicio = fullI.placa_servicio;
            var hora_fin = fullI.hora_fin;

  //document.getElementById("resta").value = horas+":"+minutos;
          // var capacitacion = fullI.nom_capacitacion;
        // return "<div class='text-center'><div class='btn-group'><button class='btn btn-link bi-trash btnBorrar ' value='"+id_rutas+"' id =''>Eliminar</button></div><button class='btn btn-link bi-trash btnAnexarservicio' value='' id =''>Ver</button></div>";
        if(hora_fin == '00:00:00'){
          return "<div class='text-center'><div class='btn-group'><button style='color: red !important;' class='btn btn-link bi-trash btnFinalizarservicio '  value='"+id_servicio+"' id ='"+placa_servicio+"'>Finalizar servicio </button><button class='btn btn-link bi-trash btnAnexarservicio' value='"+id_servicio+"' id ='"+placa_servicio+"'>Anexar punto</button><button class='btn btn-link bi-trash btnVerservicio' value='"+id_servicio+"' id ='"+placa_servicio+"'>Ver </button></div></div>";

        }else{
          return "<div class='text-center'><div class='btn-group'><button style='color: green !important;' class='btn btn-link bi-trash btnReactivarservicio ' style='color: green !important;' value='"+id_servicio+"' id ='"+placa_servicio+"'>Reactivar servicio </button><button class='btn btn-link bi-trash btnVerservicio' value='"+id_servicio+"' id ='"+placa_servicio+"'>Ver </button></div></div>";

        }
        
     }
          },
 ],



}); 


$(document).on("click", ".btnBorrar", function(){
    fila = $(this);
    //console.log('borrar');
    id_rutas = this.value;		
    opcion = 3; //eliminar 
    $.ajax({
           url: "?P=rutas",
           type: "POST",
           datatype:"json",    
           data:  {opcion:opcion, id_rutas:id_rutas},    
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
  
$(document).on("click", ".btnFinalizarservicio", function(){
    fila = $(this);
    // var valoresI = this.value.split(',');
		// 		bus = valoresI[0];
		// 	 tipo = valoresI[1];
		// 	 fecha = valoresI[2];
		// 	 console.log(valoresI);
    opcion = 3; //eliminar 
    window.open('Modulos/Modulo_datosmodalservicioII.php?id='+this.id+'&service='+this.value+'', '_blank', 'width=400px,height=400px,top=30px,left=300px');
    // window.open('Modulos/Modulo_datosmodalrutasestudiantes.php?bus='+bus+'&tipo='+tipo+'&fecha='+fecha+'', '_blank', 'width=800px,height=600px');

 });
$(document).on("click", ".btnReactivarservicio", function(){
    fila = $(this);
    // var valoresI = this.value.split(',');
		// 		bus = valoresI[0];
		// 	 tipo = valoresI[1];
		// 	 fecha = valoresI[2];
		// 	 console.log(valoresI);
    opcion = 3; //eliminar 
    window.open('Modulos/Modulo_datosmodalservicioV.php?id='+this.id+'&service='+this.value+'', '_blank', 'width=400px,height=400px,top=30px,left=300px');
    // window.open('Modulos/Modulo_datosmodalrutasestudiantes.php?bus='+bus+'&tipo='+tipo+'&fecha='+fecha+'', '_blank', 'width=800px,height=600px');

 });
$(document).on("click", ".btnAnexarservicio", function(){
    fila = $(this);
    // var valoresI = this.value.split(',');
		// 		bus = valoresI[0];
		// 	 tipo = valoresI[1];
		// 	 fecha = valoresI[2];
		// 	 console.log(valoresI);
    opcion = 3; //eliminar 
    window.open('Modulos/Modulo_datosmodalservicioIII.php?id='+this.id+'&service='+this.value+'', '_blank', 'width=400px,height=400px,top=30px,left=300px');

    // window.open('Modulos/Modulo_datosmodalrutasestudiantes.php?bus='+bus+'&tipo='+tipo+'&fecha='+fecha+'', '_blank', 'width=800px,height=600px');

 });
$(document).on("click", ".btnVerservicio", function(){
    fila = $(this);
    // var valoresI = this.value.split(',');
		// 		bus = valoresI[0];
		// 	 tipo = valoresI[1];
		// 	 fecha = valoresI[2];
		// 	 console.log(valoresI);
    opcion = 3; //eliminar 
    window.open('Modulos/Modulo_datosmodalservicioIV.php?id='+this.id+'&service='+this.value+'', '_blank', 'width=800px,height=800px,top=30px,left=300px');

    // window.open('Modulos/Modulo_datosmodalrutasestudiantes.php?bus='+bus+'&tipo='+tipo+'&fecha='+fecha+'', '_blank', 'width=800px,height=600px');

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