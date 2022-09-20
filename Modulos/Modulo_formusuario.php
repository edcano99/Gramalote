<style>
/* RESET RULES 
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --lightgray: #efefef;
  --blue: steelblue;
  --white: #fff;
  --black: rgba(0, 0, 0, 0.8);
  --bounceEasing: cubic-bezier(0.51, 0.92, 0.24, 1.15);
}

/* * {
  padding: 0;
  margin: 0;
} */

a {
  color: inherit;
  text-decoration: none;
}

button {
  cursor: pointer;
  background: transparent;
  border: none;
  outline: none;
  font-size: inherit;
}

/* body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  font: 16px/1.5 sans-serif;
} */

.btn-group {
  text-align: center;
}

.open-modal {
  font-weight: bold;
  background: var(--blue);
  color: var(--white);
  padding: 0.75rem 1.75rem;
  margin-bottom: 1rem;
  border-radius: 5px;
}


/* MODAL
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.modal {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1rem;
  background: var(--black);
  cursor: pointer;
  visibility: hidden;
  opacity: 0;
  transition: all 0.35s ease-in;
}

.modal.is-visible {
  visibility: visible;
  opacity: 1;
}

.modal-dialog {
  position: relative;
  max-width: 800px;
  max-height: 80vh;
  border-radius: 5px;
  background: var(--white);
  overflow: auto;
  cursor: default;
}

.modal-dialog > * {
  padding: 1rem;
}

.modal-header,
.modal-footer {
  background: var(--lightgray);
}

.modal-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.modal-header .close-modal {
  font-size: 1.5rem;
}

.modal p + p {
  margin-top: 1rem;
}


/* ANIMATIONS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
[data-animation] .modal-dialog {
  opacity: 0;
  transition: all 0.5s var(--bounceEasing);
}

[data-animation].is-visible .modal-dialog {
  opacity: 1;
  transition-delay: 0.2s;
}

[data-animation="slideInOutDown"] .modal-dialog {
  transform: translateY(100%);
}

[data-animation="slideInOutTop"] .modal-dialog {
  transform: translateY(-100%);
}

[data-animation="slideInOutLeft"] .modal-dialog {
  transform: translateX(-100%);
}

[data-animation="slideInOutRight"] .modal-dialog {
  transform: translateX(100%);
}

[data-animation="zoomInOut"] .modal-dialog {
  transform: scale(0.2);
}

[data-animation="rotateInOutDown"] .modal-dialog {
  transform-origin: top left;
  transform: rotate(-1turn);
}

[data-animation="mixInAnimations"].is-visible .modal-dialog {
  animation: mixInAnimations 2s 0.2s linear forwards;
}

[data-animation="slideInOutDown"].is-visible .modal-dialog,
[data-animation="slideInOutTop"].is-visible .modal-dialog,
[data-animation="slideInOutLeft"].is-visible .modal-dialog,
[data-animation="slideInOutRight"].is-visible .modal-dialog,
[data-animation="zoomInOut"].is-visible .modal-dialog,
[data-animation="rotateInOutDown"].is-visible .modal-dialog {
  transform: none;
}

@keyframes mixInAnimations {
  0% {
    transform: translateX(-100%);
  }

  10% {
    transform: translateX(0);
  }

  20% {
    transform: rotate(20deg);
  }

  30% {
    transform: rotate(-20deg);
  }

  40% {
    transform: rotate(15deg);
  }

  50% {
    transform: rotate(-15deg);
  }

  60% {
    transform: rotate(10deg);
  }

  70% {
    transform: rotate(-10deg);
  }

  80% {
    transform: rotate(5deg);
  }

  90% {
    transform: rotate(-5deg);
  }

  100% {
    transform: rotate(0deg);
  }
}


/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-footer {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
}

.page-footer span {
  color: #e31b23;
}
.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
          </style> 
<div class="content">
       
          <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Tabla de datos </h4>
                  <p class="card-category"> Usuarios</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="datosusuarios" class="display" cellspacing="0" width="100%">
                      <thead class=" text-primary">
                        <th>
                          Usuario
                        </th>
                     
                        <th>
                          Nombre completo
                        </th>
                        <th>
                          Acciones
                        </th>
                       
                      </thead>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
            

          </div>

     
      </div>
      </div>

          
        </div>
       

        <script>

$(document).ready(function() {

  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#password').attr('type', 'text');
    } else {
      $('#password').attr('type', 'password');
    }
  });
// $('#ciudad_persona').prop('disabled', true);
var user_id, opcion;
opcion = 4;
id_emp_user = $('#id_emp_user').val();
usuarios = $('#datosusuarios').DataTable({ 


 

 "ajax":{            
     "url": "?P=usuario", 
     "method": 'POST', //usamos el metodo POST
     "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
     "dataSrc":""
 },

 "columns":[
     {"data": "usuario"},
     {"data": "nombre_completo"},
     {
     sortable: false,
     "render": function ( data, type, fullI, meta ) {
           var id_usuario = fullI.id_usuario;
           var activar = fullI.activar;
          // var capacitacion = fullI.nom_capacitacion;
          // console.log('prueba');
          if(activar == ''){
            return "<div class='text-center'><div class='btn-group'><button class='btn btn-link bi-trash btnEditar' value='"+id_usuario+"' id ='' >Editar</button><button class='btn btn-link bi-trash btnActivar' style='color: green !important;' value='"+id_usuario+"' id ='' >Activar</button><button class='btn btn-link bi-trash btnEliminar' value='"+id_usuario+"' id ='' >eliminar</button></div></div>";

          }else{
            return "<div class='text-center'><div class='btn-group'><button class='btn btn-link bi-trash btnEditar' value='"+id_usuario+"' id ='' >Editar</button><button class='btn btn-link bi-trash btnDesactivar' style='color: red !important;' value='"+id_usuario+"' id ='' >Desactivar</button><button class='btn btn-link bi-trash btnEliminar' value='"+id_usuario+"' id ='' >eliminar</button></div></div>";

          }
     }
          },
 ],



}); 

$(document).on("click", ".btnActivar", function(){
    fila = $(this);
    usuario = this.value;
   
    opcion = 6; //activar 
    $.ajax({
           url: "?P=usuario",
           type: "POST",
           datatype:"json",    
           data:  {opcion:opcion, usuario:usuario},    
           success: function() {
            setTimeout(function(){location.href="./?N=formusuario"}, 1700);
 }   });



 });
$(document).on("click", ".btnDesactivar", function(){
    fila = $(this);
    usuario = this.value;
   
    opcion = 7; //desactivar 
    $.ajax({
           url: "?P=usuario",
           type: "POST",
           datatype:"json",    
           data:  {opcion:opcion, usuario:usuario},    
           success: function() {
            setTimeout(function(){location.href="./?N=formusuario"}, 1700);
 }   });



 });
$(document).on("click", ".btnEliminar", function(){
    fila = $(this);
    usuario = this.value;
   
    opcion = 8; //eliminar 

    eliminar=confirm("¿Deseas eliminar este registro?");
   if (eliminar){
     
     $.ajax({
            url: "?P=usuario",
            type: "POST",
            datatype:"json",    
            data:  {opcion:opcion, usuario:usuario},    
            success: function() {
              Swal.fire(
      'eliminado!',
      'Se eliminó el usuario.',
      'success'
    )
             setTimeout(function(){location.href="./?N=formusuario"}, 1700);
  }   });
    
   }
   //Redireccionamos si das a aceptar
 
//else{alert('No se ha podido eliminar el registro..')}
  //Y aquí pon cualquier cosa que quieras que salga si le diste al boton de cancelar
    

//     $.ajax({
//            url: "?P=usuario",
//            type: "POST",
//            datatype:"json",    
//            data:  {opcion:opcion, usuario:usuario},    
//            success: function() {
//             setTimeout(function(){location.href="./?N=formusuario"}, 1700);
//  }   });



 });

$(document).on("click", ".btnEditar", function(){
  id_usuario = this.value;
  //console.log(id_usuario);
	window.open('Modulos/Modulo_actualizarusuario.php?&id='+id_usuario+'', '_blank', 'width=800px,height=600px');


 });




}); 




$("#formusuario").click(function(event) {
      //event.preventDefault();
      if($("#usuario").val() == '' || $("#password").val() == '' || $("#tipousuario").val() == '' ){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algunos campos  vacíos',
                       //footer: '<a href>Why do I have this issue?</a>'
                      })
        return;
      }
            $.post('?P=usuario',{
              form:'institucion',
              usuario:$("#usuario").val(),
              password:$("#password").val(),
              tipousuario:$("#tipousuario").val(),
              opcion:'1'

            

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
                       setTimeout(function(){location.href="./?N=formusuario"}, 1700);
                  
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