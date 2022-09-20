
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Geocerca</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Nombre geocerca</label>
                          <input type="text" id="nomgeocerca" class="form-control">
                        </div>
                        
                      </div>
                      </div>
                       
                
                  
                   
                   

                  </form>
                  <button type="boton" id="geocerca" class="btn btn-success pull-right">Crear geocerca</button>

                </div>
              </div>
            </div>

          </div>
        </div>
        <script>

$("#geocerca").click(function(event) {
  nomgeocerca = $('#nomgeocerca').val();

if(nomgeocerca == ''){
  Swal.fire(
    'Error!',
    'No pueden ir campos vacíos.',
    'warning'
  )

                    return;
}
            $.post('?P=geocerca',{
              form:'institucion',
              nomgeocerca:$("#nomgeocerca").val(),
              opcion:"2"
            

            },function(res) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Guardado',
                        showConfirmButton: false,
                        timer: 1700
                      })
                      setTimeout(function(){location.href="./?N=datosgeocerca"}, 1700);
                      
              });
     });

      </script>