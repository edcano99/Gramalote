<?php
include("../conexion/conexion.php");
$id_usuario = $_REQUEST['id'];
$usuario = $_POST['usuario'];
$idusuarioI = $_POST['idusuario'];
$password = $_POST['password'];

//  var_dump($usuario);
//  var_dump($idusuario);
 function Encriptar($Variable){
	return sha1(md5('3@4gF$fTEm..'.$Variable));
}
$ClaveEnc=Encriptar($password);
if($usuario != ''){
	
	if($password != ''){
		
		$queryI = "UPDATE usuarios
		SET usuario='".$usuario."', clave='".$ClaveEnc."' WHERE id_usuario='".$idusuarioI."'";
					   
				   
						//	var_dump($queryI);
				 $stmt12 = mysqli_query($con,$queryI);
	}else{
		$queryI = "UPDATE usuarios
		SET usuario='".$usuario."' WHERE id_usuario='".$idusuarioI."'";
					   
				   
							//var_dump($queryI);
				 $stmt12 = mysqli_query($con,$queryI);	
	}

 	echo '<script type="text/javascript">
	window.opener.location.reload();
	window.close();

 </script>';

		}
?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <title>Usuario</title>	
		
	</head>
    
<br />
<br />
<br />


		
      <?php
	
	$query = "SELECT * FROM usuarios where id_usuario='".$id_usuario."'";
				
			
					 //var_dump($query);
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {	
						$i++;		
						$usuario = $rowGBI1['usuario'];
		    }
	?>


	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">FORMULARIO</h4>
                  <p class="card-category">Editar usuario</p>
                </div>
                <div class="card-body">
                  <form id="myForm" method ="post" action="">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Usuario</label>
                          <input type="text" id="usuario" name="usuario" value="<?php echo $usuario ?>" class="form-control">
                          <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $id_usuario ?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contraseña</label>
                          <input type="password" id="password" name="password" class="form-control">
                          <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
          &nbsp;&nbsp;Mostrar Contraseña
                        </div>
                      </div>
            
                    </div>
                    <!-- <div class="clearfix"></div> -->
				
					<input type="button" onclick="myFunction()" value="Actualizar">

                  </form>

                </div>
              </div>
            </div>

          </div>
          </div>
          

	<script type="text/javascript">
      $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#password').attr('type', 'text');
    } else {
      $('#password').attr('type', 'password');
    }
  });
		function myFunction() {
  document.getElementById("myForm").submit();
}
		function asignarValor(nombre_bodega, id_bodega)
	{
		 
		
		window.opener.document.getElementById("padre").value = id_bodega;	
		window.opener.document.getElementById("idpadre").value = nombre_bodega;		
		window.close();
	}	
	</script>

<?php	
	die();
?>


