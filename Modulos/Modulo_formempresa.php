<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Crear Empresa</p>
                </div>
                <div class="card-body">
                  <form> 
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Empresa</label>
                          <input type="text" id="empresa" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ciudad</label>
                          <input type="email" id="ciudad" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIT</label>
                          <input type="text" id="nit" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Dirección</label>
                          <input type="text" id="direccion" class="form-control">
                        </div>
                      </div>
                    </div>
                
                  
                  
                    
                    <div class="clearfix"></div>
                  </form>
                  <button type="button" id="form" class="btn btn-success pull-right">Crear empresa</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <script>


$("#form").click(function(event) {
      //event.preventDefault();
      if($("#empresa").val() == '' || $("#ciudad").val() == '' || $("#nit").val() == '' || $("#direccion").val() == '' ){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algunos campos  vacíos',
                       //footer: '<a href>Why do I have this issue?</a>'
                      })
        return;
      }
            $.post('?P=empresa',{
              form:'institucion',
              empresa:$("#empresa").val(),
              ciudad:$("#ciudad").val(),
              nit:$("#nit").val(),
              direccion:$("#direccion").val(),
              opcion:"2"
            

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
                      setTimeout(function(){location.href="./?N=datosempresa"}, 1700);
                  
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