<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans);
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #6ED66B; background-image: -moz-linear-gradient(top, #6ED66B, #6ED66B); background-image: -ms-linear-gradient(top, #6ED66B, #6ED66B); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6ED66B), to(#6ED66B)); background-image: -webkit-linear-gradient(top, #6ED66B, #6ED66B); background-image: -o-linear-gradient(top, #6ED66B, #6ED66B); background-image: linear-gradient(top, #6ED66B, #6ED66B); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6ED66B, endColorstr=#6ED66B, GradientType=0); border-color: #6ED66B #6ED66B #6ED66B; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #6ED66B; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: black; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #6ED66B; background-image: -moz-linear-gradient(top, #6ED66B, #6ED66B); background-image: -ms-linear-gradient(top, #6ED66B, #6ED66B); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6ED66B), to(#6ED66B)); background-image: -webkit-linear-gradient(top, #6ED66B, #6ED66B); background-image: -o-linear-gradient(top, #6ED66B, #6ED66B); background-image: linear-gradient(top, #6ED66B, #6ED66B); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6ED66B, endColorstr=#4a77d4, GradientType=0);  border: 1px solid black; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #6ED66B; }
.btn-block { width: 100%; display:block; }

body {
    background: #76b852; /* fallback for old browsers */
    /* background: -webkit-linear-gradient(right, #76b852, #8DC26F);
    background: -moz-linear-gradient(right, #76b852, #8DC26F);
    background: -o-linear-gradient(right, #76b852, #8DC26F);
    background: linear-gradient(to left, #76b852, #8DC26F); */
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  input {
      width: 100%;
      margin-bottom: 10px;
      margin: 0 0 15px;
      background: rgba(0,0,0,0.3);
      border: none;
      outline: none;
      padding: 10px;
      font-size: 13px;
      color: black;
      text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
      border: 1px solid rgba(0,0,0,0.3);
      border-radius: 4px;
      box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
      -webkit-transition: box-shadow .5s ease;
      -moz-transition: box-shadow .5s ease;
      -o-transition: box-shadow .5s ease;
      -ms-transition: box-shadow .5s ease;
      transition: box-shadow .5s ease;
  }
  .form input {
    /* font-family: "Roboto", sans-serif; */
    /* outline: 0; */
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    /* padding: 15px; */
    box-sizing: border-box;
    font-size: 12px;
  }
/* .login h1 { font-family: Verdana; color: black; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; } */


input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

.messageI {
  margin: 15px 0 0;
  color: #020202;
  font-size: 12px;
}
.messageI a {
  color: #15a51a;
  text-decoration: none;
}
.message3 {
  margin: 15px 0 0;
  color: #020202;
  font-size: 12px;
}
.message3 a {
  color: #15a51a;
  text-decoration: none;
}
.message4 {
  margin: 15px 0 0;
  color: #020202;
  font-size: 12px;
}
.message4 a {
  color: #15a51a;
  text-decoration: none;
}
.messagecon {
  margin: 15px 0 0;
  color: #020202;
  font-size: 12px;
}
.messagecon a {
  color: #15a51a;
  text-decoration: none;
}

@import url(https://fonts.googleapis.com/css?family=Roboto:300);


/* .form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
} */

.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 63%;
  border: 0;
  padding: 7px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  border-radius:4px;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}

.form .register-form {
  display: none;
}
.form-con .register-form-con {
  display: none;
}



.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  /* background: #FFFFFF; */
  max-width: 360px;
  margin: 0 auto 100px;
  /* padding: 45px; */
  text-align: center;
  /* box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); */
}
.form-con {
  position: relative;
  z-index: 1;
  /* background: #FFFFFF; */
  max-width: 360px;
  margin: 0 auto 100px;
  /* padding: 45px; */
  text-align: center;
  /* box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); */
}


</style>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<script src="assets/js/plugins/sweetalert2.js"></script>
	<script src="assets/js/core/jquery.min.js"></script>
	<link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />


	<div class="login-page">
	<center>

<div ><a href="#" class="simple-text logo-normal"><img style="width: 240px; filter: drop-shadow(0px 0px 3px rgba(0,0,0,0.5));" src="img/faviconGramalote.png">

        </a></div></center>
		<br/>

    <div class="form">
	<div  class="register-form formI">
	<div class="card-body">
	<div class="row">
	<div class="col-md-6">
      <input type="text" id="usuario" placeholder="Usuario"/>
	</div>
	<div class="col-md-6">
      <input type="password" id="clave" placeholder="Contraseña"/>
	  </div>
	  </div>
	  <div class="row">
	<div class="col-md-6">
      <input type="text" id="nom_completo" placeholder="Nombre completo"/>
	  </div>
	  <div class="col-md-6">
    <select class="form-control input-sm"  id="id_afiliacion">
							 <option selected disabled>Empresa...</option>
               <?php

$query = "SELECT * FROM empresas ";


        // var_dump($query);
        $stmt1 = mysqli_query($con,$query);
    $totalval = mysqli_num_rows($stmt1);
  //   var_dump($totalval);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          ?>

<option value="<?php echo $rowGBI1['nit']; ?>" ><?php echo $rowGBI1['empresa']; ?></option>
          

        <?php
      }
?>
						   </select>
	  <!-- <input type="text" id="empresa" placeholder="Empresa"/> -->
	  </div>
	  </div>
	  <div class="row">
	<div class="col-md-6">
      <input type="text" id="telefono" placeholder="Telefono"/>
	  </div>
	  <div class="col-md-6">
      <input type="text" id="eps" placeholder="EPS"/>
	  </div>
	  </div>
	  <div class="row">
	<div class="col-md-6">
	  <input type="text" id="arl" placeholder="ARL"/>
	  </div>
	  <div class="col-md-6">
      <!-- <input type="text" id="rh" placeholder="RH"/> -->
      <select class="form-control input-sm"  id="rh">
      <option selected disabled>Grupo sanguineo...</option>
  <option value="O-">O-</option>
  <option value="O+">O+</option>
  <option value="A−">A−</option>
  <option value="A+">A+</option>
  <option value="B−">B−</option>
  <option value="B+">B+</option>
  <option value="AB−">AB−</option>
  <option value="AB+">AB+</option>
</select>
	  </div>
	  </div>
  
	  </div>
      <button id="formusuario">Crear</button>
      <p class="message4">¿Ya estás registrado? <a href="#">Iniciar sesión</a></p>
</div>
<div class="form-con">
	<div  class="register-form-con conductorform">
	<div class="card-body">
	<div class="row">
	<div class="col-md-6">
      <input type="text" id="usuarioconductor" placeholder="Usuario"/>
	</div>
	<div class="col-md-6">
      <input type="password" id="claveconductor" placeholder="Contraseña"/>
	  </div>
	  </div>
	<div class="row">
	<div class="col-md-6">
      <input type="text" id="cedulaconductor" placeholder="Cédula"/>
	</div>
	<div class="col-md-6">
      <input type="text" id="direccionconductor" placeholder="Dirección"/>
	  </div>
	  </div>
	  <div class="row">
	<div class="col-md-6">
      <input type="text" id="nom_completoconductor" placeholder="Nombre completo"/>
	  </div>
	  <div class="col-md-6">
    <select class="form-control input-sm"  id="empresaconductor">
							 <option selected disabled>Empresa...</option>
               <?php

$query = "SELECT * FROM empresas ";


        // var_dump($query);
        $stmt1 = mysqli_query($con,$query);
    $totalval = mysqli_num_rows($stmt1);
  //   var_dump($totalval);

        $i=0;
        while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
          $i++;
          ?>

<option value="<?php echo $rowGBI1['nit']; ?>" ><?php echo $rowGBI1['empresa']; ?></option>
          

        <?php
      }
?>
						   </select>
	  <!-- <input type="text" id="empresa" placeholder="Empresa"/> -->
	  </div>
	  </div>
	  <div class="row">
	<div class="col-md-6">
      <input type="text" id="telefonoconductor" placeholder="Telefono"/>
	  </div>
	  <div class="col-md-6">
    <!-- <input type="text" id="rhconductor" placeholder="RH"/> -->
    <select class="form-control input-sm"  id="rhconductor">
      <option selected disabled>Grupo sanguineo...</option>
  <option value="O-">O-</option>
  <option value="O+">O+</option>
  <option value="A−">A−</option>
  <option value="A+">A+</option>
  <option value="B−">B−</option>
  <option value="B+">B+</option>
  <option value="AB−">AB−</option>
  <option value="AB+">AB+</option>
</select>
	  </div>
	  </div>
	  <div class="row">
	<div class="col-md-6">
	   <input type="text" id="arlconductor" placeholder="ARL"/>                    
	  </div>
	  <div class="col-md-6">
    <input type="text" id="epsconductor" placeholder="EPS"/>
	  </div>
	  </div>
	  <div class="row">
	<div class="col-md-6">
	  <input type="text" id="licenciaconductor" placeholder="Licencia"/>
	  </div>
	  <div class="col-md-6">
        <input type="date" id="vencimientolicencia" placeholder="Vencimiento licencia">
                      
	  </div>
	  </div>
    <div class="row">
	  <div class="col-md-6">
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
	  <!-- <input type="text" id="empresa" placeholder="Empresa"/> -->
	  </div>
    <div class="col-md-6">
      <!-- <input type="text" id="" placeholder="Nombre completo"/> -->
	  </div>
	  </div>
	  </div>
      <button id="formconductor">Crear</button>
      <p class="message3">¿Ya estás registrado? <a href="#">Iniciar sesión</a></p>
</div>
    <form id="frm_login" class="formI conductorform" method="post">
    	<input type="text" id="correo" placeholder="Username" required="required" />
        <input type="password" id="claveI" placeholder="Password" required="required" />
        <button type="submit">Iniciar sesión.</button>
		<p class="messageI">¿No estás registrado? <a href="#">Crea una cuenta</a></p>
    <p class="messagecon">¿Te quiere registrar cómo conductor? <a class="conductor" href="#">Crea una cuenta conductor</a></p>
</form>
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
	$('.messageI a').click(function(){
  $('.formI').animate({height: "toggle", opacity: "toggle"}, "slow");
});
	$('.message3 a').click(function(){
  $('.conductorform').animate({height: "toggle", opacity: "toggle"}, "slow");
});
	$('.message4 a').click(function(){
  $('.formI').animate({height: "toggle", opacity: "toggle"}, "slow");
});
	$('.messagecon a').click(function(){
   $('.conductorform').animate({height: "toggle", opacity: "toggle"}, "slow");

});
  $(function(){
    $("#frm_login").submit(function(event) {event.preventDefault();
             $.post('conexion/InicioSesion.php',{
               form:'login',
               correo:$("#correo").val(),
               clave:$("#claveI").val()},
               function(res) {
				// DataJson=JSON.stringify({ 'UserRegistration': res })
				DataJson = JSON.parse(res)
				    console.log(DataJson);

            if (DataJson['Est']) {

			  window.location='?N=inicio';
            }else{
    // //         //alert('error');
               Swal.fire({
                           icon: 'error',
                           title: 'Oops...',
                           text: "Error en la contraseña o usuario",
                          // footer: '<a href>Why do I have this issue?</a>'
                         })

    //         //swal("¡Atención!", "Error en la contraseña!", "error");
            }
         });
      });
  });

  $("#formusuario").click(function(event) {
      //event.preventDefault();
	  
      if($("#usuario").val() == '' || $("#clave").val() == '' || $("#nom_completo").val() == '' ){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algunos campos  vacíos',
                       //footer: '<a href>Why do I have this issue?</a>'
                      })
        return;
      }
            $.post('controladores/Peticiones_usuario.php',{
              form:'institucion',
              usuario:$("#usuario").val(),
              password:$("#clave").val(),
              nom_completo:$("#nom_completo").val(),
              empresa:$("#empresa").val(),
              telefono:$("#telefono").val(),
              eps:$("#eps").val(),
              arl:$("#arl").val(),
              rh:$("#rh").val(),
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
              usuarioconductor:$("#usuarioconductor").val(),
              claveconductor:$("#claveconductor").val(),
              cedulaconductor:$("#cedulaconductor").val(),
              direccionconductor:$("#direccionconductor").val(),
              nom_completoconductor:$("#nom_completoconductor").val(),
              empresaconductor:$("#empresaconductor").val(),
              telefonoconductor:$("#telefonoconductor").val(),
              rhconductor:$("#rhconductor").val(),
              arlconductor:$("#arlconductor").val(),
              epsconductor:$("#epsconductor").val(),
              licenciaconductor:$("#licenciaconductor").val(),
              vencimientolicencia:$("#vencimientolicencia").val(),
              vehiculoconductor:$("#vehiculoconductor").val(),
              opcion:'9'

            

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