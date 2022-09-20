
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">INFORMES</h4>
                  <p class="card-category">Generar informes</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Fecha 1</label>
                          <input type="date" id="fecha1" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Fecha 2</label>
                          <input type="date" id="fecha2" class="form-control">
                        </div>
                        
                      </div>
                      <div class="col-md-3">
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
                        <div class="col-md-3">
                        <div class="form-group">
                        <select class="form-control input-sm"  id="usuarioconductor">
							 <option selected disabled>Usuario...</option>
               <?php

$query = "SELECT * FROM usuarios ";


        // var_dump($query);
        $stmt1 = mysqli_query($con,$query);
    $totalval = mysqli_num_rows($stmt1);
  //   var_dump($totalval);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          ?>

<option value="<?php echo $rowGBI1['id_usuario']; ?>" ><?php echo $rowGBI1['nombre_completo']; ?></option>
          

        <?php
      }
?>
						   </select>
                        </div>
                        </div>
                      </div>
                       
                      <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <p class="card-category"> Seleccione los filtros para este informe</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="datosinformes" class="table table-striped" cellspacing="0" width="100%">
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
                  
                   
                   

                  </form>
                  <button type="boton" id="generarinfor" class="btn btn-success pull-right">Generar</button>

                </div>
              </div>
            </div>

          </div>
        </div>
        <script>
window.addEventListener('load',function(){

document.getElementById('fecha1').type= 'text';

document.getElementById('fecha1').addEventListener('blur',function(){

document.getElementById('fecha1').type= 'text';

});

document.getElementById('fecha1').addEventListener('focus',function(){

document.getElementById('fecha1').type= 'date';

});

document.getElementById('fecha2').type= 'text';

document.getElementById('fecha2').addEventListener('blur',function(){

document.getElementById('fecha2').type= 'text';

});

document.getElementById('fecha2').addEventListener('focus',function(){

document.getElementById('fecha2').type= 'date';

});
});
$('#generarinfor').click(function () {
  fecha1 = $('#fecha1').val();
fecha2 = $('#fecha2').val();
  if(fecha1 == '' || fecha2 == ''){
      Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Las fechas no pueden ir vacías',
                        // footer: '<a href>Why do I have this issue?</a>'
                       });
                       return;
              }


tabla();

informes.ajax.reload();
});


function tabla(){
var user_id, opcion;
opcion = 1;
fecha1 = $('#fecha1').val();
fecha2 = $('#fecha2').val();
vehiculoconductor = $('#vehiculoconductor').val();
usuarioconductor = $('#usuarioconductor').val();

informes = $('#datosinformes').DataTable({ 

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
      destroy: true,
   

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
                    customize: function(xlsx) {
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
 
                // Loop over the cells in column `C`
                $('rows', sheet).attr( 's', '42' )
            },
                     exportOptions: {
                       columns: [ 1,2,3,4,5,6,7,8,9,10,11 ]
                     }
                }],
 

"ajax":{            
   "url": "?P=informes", 
   "method": 'POST', //usamos el metodo POST
   "data":{opcion:opcion,fecha1:fecha1,fecha2:fecha2,vehiculoconductor:vehiculoconductor,usuarioconductor:usuarioconductor}, //enviamos opcion 4 para que haga un SELECT
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
  
 ],



}); 

}

      </script>