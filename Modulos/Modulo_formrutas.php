
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Ruta</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Nombre ruta</label>
                          <input type="text" id="nomruta" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Dirección 1</label>
                          <input type="text" id="direccion1" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Dirección 2 </label>
                          <input type="text" id="direccion2" class="form-control">
                        </div>
                        
                      </div>
                    
                    </div>
                    <div class="row">
                       
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Desde</label>
                          <select class="form-select select form-select-sm" id="zones" aria-label=".form-select-sm example">
                            <option selected disabled>Seleccione..</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">hasta</label>
                          <select class="form-select select form-select-sm" id="zonesI" aria-label=".form-select-sm example">
                            <option selected disabled>Seleccione..</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    
                      
                     
                      
                      
                    </div>
                
                  
                   
                   
                    <!-- <div class="clearfix"></div> -->
                  </form>
                  <button type="boton" id="rutas" class="btn btn-success pull-right">Crear ruta</button>
                </div>
              </div>
            </div>

          </div>
        </div>
        </div>
        <script>
// Print message to log
function msg(text) { $("#log").prepend(text + "<br/>"); }

function init() { // Execute after login succeed
    var sess = wialon.core.Session.getInstance(); // get instance of current Session
    //specify what kind of data should be returned    
    var flags = wialon.item.Item.dataFlag.base | wialon.item.Resource.dataFlag.zones;
    sess.loadLibrary("resourceZones"); // load Geofences Library 
    sess.updateDataFlags( // load items to current session
      [{type: "type", data: "avl_resource", flags: flags, mode: 0}], // Items specification
      function (code) { // updateDataFlags callback
        if (code) { msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code 
        var res = sess.getItems("avl_resource"); // get loaded 'avl_resource's items
        if (!res || !res.length){ msg("No resources found"); return; } // check if resources found
        
        for (var i = 0; i< res.length; i++) // construct Select list using found resources
            $("#res").append("<option value='"+ res[i].getId() +"'>"+ res[i].getName() +"</option>");
        // bind acion to select change
         
        $("#resI").val( getZones(this.value) );
      }
    );
}

function getZones(  ){ // get geofences by resource id
    res_id = 52913983520767;
 /* $("#zones").empty(); */// clean 'zones' select list
  if(res_id){ // check if resource id exists
    var res = wialon.core.Session.getInstance().getItem(24498331); // get resource by id
      console.log(res);
  //  if(!res){ msg("Unknown resource id: "+res_id); return; } // exit if resource not found
    var zones = res.getZones(); // get resource's zones
    var index = 0; // init variable
    for (var i in zones) { // construct Select list using found zones
      $("#zones").append("<option value='" + zones[i].id + "'>" + zones[i].n + "</option>");
      $("#zonesI").append("<option value='" + zones[i].id + "'>" + zones[i].n + "</option>");
      index++;
    }
    // if no Zones was appended to select list			
    if(!index) // print no Geofences found message
        msg("Geofences not found for '"+ res.getName() +"'. Create it first");
    else // print found Geofences count
        msg(index + " geofences found for '"+ res.getName() +"'.");
  }
}

// execute when DOM ready
$(document).ready(function () {
    $("#resI").change( function(){ getZones(); } );
    
    wialon.core.Session.getInstance().initSession("https://hst-api.wialon.com"); // init session
    // For more info about how to generate token check
    // http://sdk.wialon.com/playground/demo/app_auth_token
	wialon.core.Session.getInstance().loginToken("2d173bd3d493b49fc5ecfe7d1586d13aBC6AA07CBF67C102E1CCD5E51B960A939D45D085", "", // try to login
	    function (code) { // login callback
	    	if (code){ msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code
	    	msg("Logged successfully"); init(); // when login suceed then run init() function
	});
});
 /* function buscarempresa()
{			
	// var id_cliente =  $('#id_cliente').val(); 
	window.open('Modulos/Modulo_datosmodalempresa.php', '_blank', 'width=800px,height=600px');
}*/

$("#rutas").click(function(event) {
      //event.preventDefault();
      // if($("#tipotransporte").val() == '' || $("#nombrecompleto").val() == '' || $("#grado").val() == '' || $("#idinstitucion").val() == '' || $("#direccionestudiante").val() == '' ){
      //               Swal.fire({
      //                   icon: 'error',
      //                   title: 'Oops...',
      //                   text: 'algunos campos  vacío',
      //                  //footer: '<a href>Why do I have this issue?</a>'
      //                 })
      //   return;
      // }
            $.post('?P=rutas',{
              form:'institucion',
              nomruta:$("#nomruta").val(),
              direccion1:$("#direccion1").val(),
              direccion2:$("#direccion2").val(),
              desde:$("#zones").val(),
              hasta:$("#zonesI").val(),
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
                       setTimeout(function(){location.href="./?N=datosvehiculos"}, 1700);
                  
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