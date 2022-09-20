
<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
// header("Content-Type: application/xml; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="manifest" href="Modulos/static/js14kpwa.webmanifest">
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
  <title>
  Gramalote
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->

  <script src="assets/js/Servicemasmaspro.js" language="javascript" type="text/javascript"></script>

<link rel= "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"/>
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="//hst-api.wialon.com/wsdk/script/wialon.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.2/leaflet.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.2/leaflet.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
<script src="DATATABLE/jquery.js" type="text/javascript"></script>
	<script src="DATATABLE/jquery.ui.draggable.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
	<script type="text/javascript" src="DATATABLE/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal"><img style="width: 108px; filter: drop-shadow(0px 0px 3px rgba(0,0,0,0.5));" src="img/faviconGramalote.png">

        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="?N=inicio">
              <i class="material-icons">dashboard</i>
              <p>Inicio</p>
            </a>
          </li>
          <?php

if($_SESSION["tipousuario"] != 'Conductor'){
?>

          <li class="nav-item dropdown ">
          <a class="nav-link" href="javascript:;" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">business</i>
              <p style="color: black;">Empresas</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?N=datosempresa">Listado de Empresas</a></li>
            <li><a class="dropdown-item" href="?N=formempresa">Nueva Empresa</a></li>
          </ul>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="javascript:;" id="navbarDropdownrepresentantes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">directions_bus</i>
              <p style="color: black;">Vehiculos</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownrepresentantes">
            <li><a class="dropdown-item" href="?N=datosvehiculos">Listado de vehículos</a></li>
            <li><a class="dropdown-item" href="?N=formvehiculos">Nuevo vehiculo </a></li>
          </ul>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="javascript:;" id="navbarDropdownrepresentantes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">assessment</i>
              <p style="color: black;">Informes</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownrepresentantes">
            <li><a class="dropdown-item" href="?N=forminformes">Generar informes </a></li>
          </ul>
          </li>
          <!-- <li class="nav-item ">
          <a class="nav-link" href="javascript:;" id="navbarDropdownrepresentantes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">location_on</i>
              <p style="color: black;">Rutas</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownrepresentantes">
            <li><a class="dropdown-item" href="?N=datosrutas">Listado de rutas</a></li>
            <li><a class="dropdown-item" href="?N=formrutas">Nueva ruta </a></li>
          </ul>
          </li> -->
          <?php 
}
            ?>
          <li class="nav-item ">
          <a class="nav-link" href="javascript:;" id="navbarDropdownrepresentantes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">add_location</i>
              <p style="color: black;">Servicios</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownrepresentantes">
            <li><a class="dropdown-item" href="?N=datosservicios">Listado de servicios</a></li>
         <!--   <li><a class="dropdown-item" href="?N=formrutas">Nueva ruta </a></li>-->
          </ul>
          </li>
          <?php

if($_SESSION["tipousuario"] != 'Conductor'){
?>
          <li class="nav-item ">
          <a class="nav-link" href="javascript:;" id="navbarDropdownrepresentantes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">map</i>
              <p style="color: black;">Geocerca</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownrepresentantes">
            <li><a class="dropdown-item" href="?N=datosgeocerca">Listado de geocercas</a></li>
            <li><a class="dropdown-item" href="?N=formgeocerca">Nueva geocerca </a></li>
          </ul>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="javascript:;" id="navbarDropdownrepresentantes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">assignment</i>
              <p style="color: black;">Area</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownrepresentantes">
            <li><a class="dropdown-item" href="?N=datosarea">Listado de áreas</a></li>
            <li><a class="dropdown-item" href="?N=formarea">Nueva área </a></li>
          </ul>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="javascript:;" id="navbarDropdownrepresentantes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">class</i>
              <p style="color: black;">Programador</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownrepresentantes">
            <li><a class="dropdown-item" href="">Programas</a></li>
            <li><a class="dropdown-item" href="?N=formprograma">Nuevo programa </a></li>
          </ul>
          </li>
 
          <li class="nav-item ">
          <a class="nav-link" href="javascript:;" id="navbarDropdownrepresentantes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="material-icons">contacts</i>
              <p>Conductores</p>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownrepresentantes">
            <li><a class="dropdown-item" href="?N=datosconductores">Conductores</a></li>

             <li><a class="dropdown-item" href="?N=formconductor">Nuevo conductor</a></li>
             <?php 
}
            ?>
          </ul>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <!-- <a class="navbar-brand" href="javascript:;">Dashboard</a> -->
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">

            </form>
            <ul class="navbar-nav">
<li class="nav-item dropdown">
<a class="nav-link" href="?N=datossemaforo" id="" >
<?php
$inicio = date("Y-m-01");
$final = date("Y-m-t");

$query = "SELECT COUNT(vencebimestral) as bimestral FROM vehiculos where vencebimestral BETWEEN '".$inicio."' AND '".$final."';
";
        $stmt1 = mysqli_query($con,$query);
        $rowGBI1 = mysqli_fetch_array($stmt1);
                // var_dump($rowGBI1[0]['bimestral']);
         //var_dump('prueba');
        ?>
                  <i style="color:red !important" class="material-icons">traffic</i>10
                </a>
</li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Cuenta
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <?php

if($_SESSION["tipousuario"] != 'Conductor'){
?>
    <a class="dropdown-item" href="?N=formusuario">Perfil</a>
    <?php

}
?>
                  <a class="dropdown-item" href="#">Configuración</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="conexion/CierreSesion.php">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <style>

.select {
  width: 100%;
  min-width: 15ch;
  max-width: 16ch;
  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;
  font-size: 15px;
  cursor: pointer;
  line-height: 1.1;
  background-color: #fff;
  background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
}
      </style>