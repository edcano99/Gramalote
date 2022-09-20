<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Vehiculos</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre</label>
                          <input type="text" class="form-control">
                          <a href="javascript:buscarempresa()" id="empresacolab">	<i class="material-icons">add_box</i></a>
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Correo electronico</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contraseña</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Confirmar contraseña</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Institución</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Unidades asignada</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                
                  
                  
                   
                    <!-- <div class="clearfix"></div> -->
                  </form>
                  <button type="boton" class="btn btn-primary pull-right">Update Profile</button>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tabla de datos </h4>
                  <p class="card-category"> Representantes</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                          Correo
                        </th>
                        <th>
                          Institución
                        </th>
                        <th>
                          Unidades asignadas
                        </th>
                        <th>
                          Acciones
                        </th>
                       
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                          Aguirre Collazos, Tomas	
                          </td>
                          <td>
                          carolinacollazosbertini@hotmail.com	
                          </td>
                          <td>
                          Colegio Colombo Britanico	
                          </td>
                          <td>
                          BUS 8	
                          </td>
                          <td>
                         
                          </td>
                        </tr>
                     
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
  function buscarempresa()
{			
	// var id_cliente =  $('#id_cliente').val(); 
	window.open('view/modulo/Modulo_consultarempresaconvenio.php', '_blank', 'width=1300px,height=600px');
}

      </script>