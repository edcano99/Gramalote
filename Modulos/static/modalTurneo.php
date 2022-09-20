<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ordernar turnos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalI" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Turnos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table id="table" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
                <th>Turno</th>
				<th>Placa</th>
				<th>Inicio de turno</th>

			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Turno</th>
				<th>Placa</th>
				<th>Inicio de turno</th>
			</tr>
			</tfoot>

			<tbody>
      <?php

	$query = "SELECT * FROM vehiculos order by turno ASC";
  window.open('Modulos/Modulo_datosmodalservicioI.php?id='+id+'',  '_blank','width=800px,height=600px,top=30px,left=300px');


					// var_dump($query);
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						?>
						<tr>


							<td style="color:black !important;"><a href="javascript:asignarValor('<?php echo $rowGBI1['placa'];?>', '<?php echo $rowGBI1['marca'];?>');" id="id_img" style="color:#008000 !important;"><?php echo  $rowGBI1['turno']; ?>  </a>  </td>
							<td style="color:black;">  <?php echo $rowGBI1['placa']; ?></td>
							<td style="color:black;">  <input type="button" id="<?php echo $rowGBI1['placa'].','.$rowGBI1['turno']; ?>" class="servicios" value="Crear servicio"> </td>

						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>


  <!-- require_once ('static/modalTurneo.php'); -->
