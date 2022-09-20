
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Conductor</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Cédula</label>
                          <input type="text" id="cedulaconductor" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Dirección</label>
                          <input type="text" id="direccionconductor" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Licencia</label>
                          <input type="text" id="licenciaconductor" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Fecha vencimiento</label>
                          <input type="date" id="vencimientolicencia" class="form-control">
                        </div>
                        
                      </div>
                      </div>
                      <div class="row">
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
                
                  
                   
                   

                  </form>
                  <button type="boton" id="formconductor" class="btn btn-success pull-right">Crear conductor</button>

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

document.getElementById('vencimientolicencia').type= 'date';

});
});
$("#formconductor").click(function(event) {
      //event.preventDefault();
	  
      // if($("#usuario").val() == '' || $("#clave").val() == '' || $("#nom_completo").val() == '' ){
      //               Swal.fire({
      //                   icon: 'error',
      //                   title: 'Oops...',
      //                   text: 'Algunos campos  vacíos',
      //                  //footer: '<a href>Why do I have this issue?</a>'
      //                 })
      //   return;
      // }
    
            $.post('controladores/Peticiones_usuario.php',{
              form:'institucion',
              usuarioconductorI:$("#usuarioconductor").val(),
              cedulaconductor:$("#cedulaconductor").val(),
              direccionconductor:$("#direccionconductor").val(),
              licenciaconductor:$("#licenciaconductor").val(),
              vencimientolicencia:$("#vencimientolicencia").val(),
              vehiculoconductor:$("#vehiculoconductor").val(),
              opcion:'11'

            

            },function(res) {
                //DataJson=JSON.parse(res); 
               // 
             //  apload();
                 // if (DataJson['Est']) {
                    //window.location='./';
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Guardado',
                        showConfirmButton: false,
                        timer: 1700
                      })
                       setTimeout(function(){location.href="./?N=datosconductores"}, 1700);
                       
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
              
     });

      </script>