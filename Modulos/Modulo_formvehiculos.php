<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Vehiculo</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Placa</label>
                          <input type="text" id="placa" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Marca</label>
                          <input type="text" id="marca" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Modelo </label>
                          <input type="text" id="modelo" class="form-control">
                        </div>
                        
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Color</label>
                          <input type="text" id="color" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Vence SOAT</label>
                          <input type="date" id="vencesoat" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label class="bmd-label-floating">Vence seguro</label>
                          <input type="date" id="venceseguro" class="form-control">
                        </div>
                        
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Vence bimestral </label>
                          <input type="date" id="vencebimestral" class="form-control">
                        </div>
                        
                      </div>
                      <!-- <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tipo</label>
                          <select class="form-select select form-select-sm" id="tipotransporte" aria-label=".form-select-sm example">
                            <option selected disabled>Seleccione..</option>
                            <option value="Transporte medio">Transporte medio </option>
                            <option value="Transporte completo">Transporte completo</option>
                          </select>
                        </div>
                      </div> -->
                    </div>
                    <div class="row">
                    
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Empresa</label>
                          <input type="text" id="empresa" class="form-control"  readonly>
                          <input type="hidden" id="idempresa" class="form-control">
                          <a href="javascript:buscarempresa()" id="empresacolab">	<i class="material-icons">add_box</i></a>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cantidas pasajeros </label>
                          <input type="text" id="cantpasajeros" class="form-control">
                        </div>
                        
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Matricula </label>
                          <input type="text" id="matricula" class="form-control">
                        </div>
                        
                      </div>
                      
                    </div>
                    <div class="row">
                    
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nro. extracto </label>
                          <input type="text" id="nroextracto" class="form-control">
                        </div>
                        
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fecha vencimiento extracto</label>
                          <input type="date" id="vencimientoextracto" class="form-control">
                        </div>
                        
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bus</label>
                          <input type="checkbox" id="checkbus" >
                        </div>
                        
                      </div>
                      
                    </div>
                
                  
                  
                   
                    <!-- <div class="clearfix"></div> -->
                  </form>

                  <div class="container-fluid">

<!-- Page Heading -->

<p class="mb-4">Gestione la <?php  echo $nom_mod?> de la empresa teniendo en cuenta que las características de procesamiento son las mas óptimas por el cual la plataforma utiliza una tecnología de ajuste de medidas y resolución sin necesidad de adecuarle manualmente el tamaño. </p>


<!-- INICIO SUBIR IMAGEN -->
<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-6 d-none d-lg-block" style=" background: url('img/imagen_vehiculos/WNP938vehiculo.png') 50% 50% no-repeat no-repeat;">

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Subir foto del vehículo </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="file" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-6 d-none d-lg-block" style=" background: url('img/emp-<?php echo $_SESSION["id_emp"]?>/logo.png') 50% 50% no-repeat no-repeat;">

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Matricula </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filematricula" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-6 d-none d-lg-block" style=" background: url('img/emp-<?php echo $_SESSION["id_emp"]?>/logo.png') 50% 50% no-repeat no-repeat;">

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Tarjeta de operación </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filetarjetaoperacion" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-6 d-none d-lg-block" style=" background: url('img/emp-<?php echo $_SESSION["id_emp"]?>/logo.png') 50% 50% no-repeat no-repeat;">

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Certificado de revisión tecnomecánica y de gases </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filecertificadorevisiontecnomecanicaygases" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-6 d-none d-lg-block" style=" background: url('img/emp-<?php echo $_SESSION["id_emp"]?>/logo.png') 50% 50% no-repeat no-repeat;">

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Poliza extracontractual </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filepolizaextracontractual" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-6 d-none d-lg-block" style=" background: url('img/emp-<?php echo $_SESSION["id_emp"]?>/logo.png') 50% 50% no-repeat no-repeat;">

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">Certificado inspección gas natural </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filecertificadoinspecciongasnatural" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-6 d-none d-lg-block" style=" background: url('img/emp-<?php echo $_SESSION["id_emp"]?>/logo.png') 50% 50% no-repeat no-repeat;">

    </div>
    <div class="col-lg-6">
      <div class="p-5">
        <div class="text-center">
          <h3 class="h4 text-gray-900 mb-2">SOAT </h3>
            <p>Por favor elija un archivo en formato PNG
            </p> 
          </div>               
<hr>
<!-- <div class="form-group"> -->



        <div class="text-center">
          <h4 class="h4 text-gray-900 mb-2">Seleccionar desde mi pc</h4><br>

         <!-- <input id="Images" name="Images[]" type="file" class="btn-info" data-show-upload="false" data-show-caption="true">-->
        <!-- <input type="hidden" name="P" value="upload_doc">-->

<input type="file" class="form-control-file fa fa-icon" id="filesoat" accept="image/png">
<br>
        </div><hr>  
  <!-- <button type="button" class="btn boton" onclick="apload()" > Cargar archivo </button> -->

        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>
                  <button type="boton" id="estudiantes" class="btn btn-success pull-right">Crear vehiculo</button>
                </div>
              </div>
            </div>

          </div>
        </div>
        </div>
        <script>
window.addEventListener('load',function(){

document.getElementById('venceseguro').type= 'text';

document.getElementById('venceseguro').addEventListener('blur',function(){

document.getElementById('venceseguro').type= 'text';

});

document.getElementById('venceseguro').addEventListener('focus',function(){

document.getElementById('venceseguro').type= 'date';

});

document.getElementById('vencesoat').type= 'text';

document.getElementById('vencesoat').addEventListener('blur',function(){

document.getElementById('vencesoat').type= 'text';

});

document.getElementById('vencesoat').addEventListener('focus',function(){

document.getElementById('vencesoat').type= 'date';

});

document.getElementById('vencebimestral').type= 'text';

document.getElementById('vencebimestral').addEventListener('blur',function(){

document.getElementById('vencebimestral').type= 'text';

});

document.getElementById('vencebimestral').addEventListener('focus',function(){

document.getElementById('vencebimestral').type= 'date';

});
document.getElementById('vencimientoextracto').type= 'text';

document.getElementById('vencimientoextracto').addEventListener('blur',function(){

document.getElementById('vencimientoextracto').type= 'text';

});

document.getElementById('vencimientoextracto').addEventListener('focus',function(){

document.getElementById('vencimientoextracto').type= 'date';

});

});
  function buscarempresa()
{			
	// var id_cliente =  $('#id_cliente').val(); 
	window.open('Modulos/Modulo_datosmodalempresa.php', '_blank', 'width=800px,height=600px');
}

$("#estudiantes").click(function(event) {
 
  var files = $("#file")[0].files[0];
  // console.log(placa);
 
   if(files == '' || files == undefined){
     Swal.fire({
                   icon: 'error',
                   title: 'Oops...',
                   text: 'Debe seleccionar un archivo',
                   //footer: '<a href>Why do I have this issue?</a>'
                 })
                 return;
   }

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
            $.post('?P=estudiantes',{
              form:'institucion',
              placa:$("#placa").val(),
              marca:$("#marca").val(),
              modelo:$("#modelo").val(),
              color:$("#color").val(),
              vencesoat:$("#vencesoat").val(),
              venceseguro:$("#venceseguro").val(),
              vencebimestral:$("#vencebimestral").val(),
              tipotransporte:$("#tipotransporte").val(),
              idempresa:$("#idempresa").val(),
              cantpasajeros:$("#cantpasajeros").val(),
              matricula:$("#matricula").val(),
              nroextracto:$("#nroextracto").val(),
              vencimientoextracto:$("#vencimientoextracto").val(),
              checkbus:$("#checkbus").val(),
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
                      apload();
                  
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

     function apload(e) {
     placa= $("#placa").val()
 var files = $("#file")[0].files[0];
 var filesmatricula = $("#filematricula")[0].files[0];
 var filestarjetaoperacion = $("#filetarjetaoperacion")[0].files[0];
 var filescertificadorevisiontecnomecanicaygases = $("#filecertificadorevisiontecnomecanicaygases")[0].files[0];
 var filespolizaextracontractual = $("#filepolizaextracontractual")[0].files[0];
 var filescertificadoinspecciongasnatural = $("#filecertificadoinspecciongasnatural")[0].files[0];
 var filessoat = $("#filesoat")[0].files[0];
  // console.log(placa);

   if(files == '' || files == undefined){
     Swal.fire({
                   icon: 'error',
                   title: 'Oops...',
                   text: 'Debe seleccionar un archivo',
                   //footer: '<a href>Why do I have this issue?</a>'
                 })
                 return;
   }

   var formData = new FormData();
   
   formData.append('file',files);
   formData.append('placa',placa);
   formData.append('filesmatricula',filesmatricula);
   formData.append('filestarjetaoperacion',filestarjetaoperacion);
   formData.append('filescertificadorevisiontecnomecanicaygases',filescertificadorevisiontecnomecanicaygases);
   formData.append('filespolizaextracontractual',filespolizaextracontractual);
   formData.append('filescertificadoinspecciongasnatural',filescertificadoinspecciongasnatural);
   formData.append('filessoat',filessoat);
   
   $.ajax({
       url: '?P=archivovehiculo',
       type: 'post',
       data: formData,files,placa,filesmatricula,filestarjetaoperacion,filescertificadorevisiontecnomecanicaygases,filespolizaextracontractual,filescertificadoinspecciongasnatural,filessoat,
       contentType: false,
       processData: false,
       success: function(response) {
         // console.log(response);
            if (response != 0) {

                           let timerInterval
             Swal.fire({
               title: 'Subiendo...',
               html: 'Redimensionando imagen, subiendo al servidor, categorizando archivo, trabajando...<strong></strong>.',
               timer: 3000,
               timerProgressBar: true,
               didOpen: () => {
                 Swal.showLoading()
                 timerInterval = setInterval(() => {
                   const content = Swal.getHtmlContainer()
                   if (content) {
                     const b = content.querySelector('b')
                     if (b) {
                       b.textContent = Swal.getTimerLeft()
                     }
                   }
                 }, 100)
               },
               willClose: () => {
                 clearInterval(timerInterval)
               }
             }).then((result) => {
               /* Read more about handling dismissals below */
               if (result.dismiss === Swal.DismissReason.timer) {
                 // location.href ='?N=form_subirarchivos';
                 // console.log('I was closed by the timer')
               }
             })

             setTimeout(function(){location.href="./?N=datosvehiculos"}, 1700);
            } else {
            Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Su imagen no es válida.',
                  //footer: '<a href>Why do I have this issue?</a>'
                })
     // alert('Formato de imagen incorrecto.');
     }
       }
   });
return false;
}


      </script>