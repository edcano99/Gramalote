<?php
include("../conexion/conexion.php");
?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <title>Madres</title>
		 <link rel="stylesheet" href="../css/estilos_emergente.css">
         <link rel="shortcut icon" type="image/icon" href="../images/favicon.png" />
		
		<script src="js/jquery_3.2.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
		<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
		
		<script type="text/javascript">
			$( document ).ready(function() {
				$('#exampl').dataTable( {
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
				responsive: true
				} );
			});
        </script>
	</head>
    
<br />
<br />


<br />
<center><h4><span style="color:#286C95; font-size:34px;  text-align: center;">Madres</span></h4></center>
 <br />
 <br />
	<div id="respuesta">
	
		<table id="exampl" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
                <th>Codigo</th>
				<th>Madre</th>
			
			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Codigo</th>
				<th>Madre</th>
			</tr>
			</tfoot>
			
			<tbody>	
      <?php
	
	$query = "SELECT * FROM usuarios where tipousu = 'madre'";
				
			
					// var_dump($query);
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {	
						$i++;		
						?>	
						<tr>
						

							<td><a href="javascript:asignarValor('<?php echo $rowGBI1['id_usuario'];?>', '<?php echo $rowGBI1['usuario'];?>');" id="id_img"><?php echo  $rowGBI1['id_usuario']; ?>  </a>  </td>
							
							<td> <?php echo $rowGBI1['usuario']; ?>  </td>

						
						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>
		<br><br>
		<br><br>
	</div>

	<script type="text/javascript">
		
		function asignarValor(nombre_bodega, id_bodega)
	{
		 
		
		window.opener.document.getElementById("madre").value = id_bodega;	
		window.opener.document.getElementById("idmadre").value = nombre_bodega;		
		window.close();
	}	
	</script>

<?php	
	die();
?>


