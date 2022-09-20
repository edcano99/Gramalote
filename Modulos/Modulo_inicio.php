<?php

?>
<style>
#log { border: 1px solid #c6c6c6; }
#no-results { display: none; }
#results-table { display: none; }
#doubleclick-hint { color: gray; }
#latlng.invalid { border-color: red; }
#unit-refresh-button { display: none; }

@media(max-width:767px){
  #mapadiv {
 
    margin-left: auto;
    margin-right: auto;
    align-content: center;
    width: 80%;

}
#map{
  height: calc(44vh - 70px) !important;
}

}
</style>
<br>
<br>
<br>

<center>
<div class="row">



<div class="col-lg-8 col-md-12">
              <div class="card">

                <div class="card-header card-header-success">
                  <h4 class="card-title">Información</h4>
                  <p class="card-category">Ruta monitoreo</p>
                </div>



<div id='logI'></div>
<div id='logII'></div>


<!-- <button id='onprueba'>Refresh</button> -->
   <p>Vehículo: <select id='units'><option value='0'>—</option>

</select> <button id='unit-refresh-button'>Refresh</button></p>

<div id="mapadiv" class="col-lg-12 col-md-12">
<div id="map" class="col-lg-10 col-md-12">

</div>
</div>


                </div>
              </div>
            

            <div class="col-lg-4 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-success">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                    
                      <span class="nav-tabs-title">Turnero:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                    
                         <li class="nav-item">
                          <a class="nav-link active show" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> Turnos
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li> 
                        <li class="nav-item">
                          <a class="nav-link" href="#servicios" data-toggle="tab">
                            <i class="material-icons">room</i> En servicios
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" id="messages" data-toggle="tab">
                            <i class="material-icons">code</i> Ordenador de turno
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                  <div class="tab-pane " id="servicios">
                   <!-- <p>prueba</p> -->
                   <table id="table" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
                <th>Turno</th>
				<th>Placa</th>

			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Turno</th>
				<th>Placa</th>
			</tr>
			</tfoot>

			<tbody>
      <?php
//       $_SESSION["id_usuario"];
// var_dump($_SESSION["tipousuario"]);
if($_SESSION["tipousuario"] == 'Conductor'){
  $query = "SELECT * FROM conductor inner join vehiculos on vehiculos.placa = conductor.vehiculoconductor where id_conductor = '".$_SESSION["id_usuario"]."' and vehiculos.turno = 'En servicio'  and activacion = '1' order by turno+0";
 // var_dump($query);
}else{

  $query = "SELECT * FROM vehiculos where vehiculos.turno = 'En servicio' and activacion = '1' order by turno+0 ";
}
	


					// var_dump($query);
					 //var_dump('prueba');
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						?>
						<tr>


							<td style="color:black !important;"><a href="javascript:asignarValor('<?php echo $rowGBI1['placa'];?>', '<?php echo $rowGBI1['marca'];?>');" id="id_img" style="color:#008000 !important;"><?php echo  $rowGBI1['turno']; ?>  </a>  </td>
							<td style="color:black;">  <?php echo $rowGBI1['placa']; ?></td>
							<!-- <td style="color:black;">  <input type="button" id="<?php echo $rowGBI1['placa'].','.$rowGBI1['turno']; ?>" class="servicios" value="Crear servicio"> </td> -->

						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>
                   </div>
                    <div class="tab-pane active show" id="profile">
                    <legend>Camionetas</legend>

                    <table id="table" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
                <th>Turno</th>
				<th>Placa</th>
				<th>Inicio de turno</th>

			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Turno</th>
				<th>Placa</th>
				<th>Inicio de turno</th>
			</tr>
			</tfoot>

			<tbody>
      <?php
//       $_SESSION["id_usuario"];
// var_dump($_SESSION["tipousuario"]);
if($_SESSION["tipousuario"] == 'Conductor'){
  $query = "SELECT * FROM conductor inner join vehiculos on vehiculos.placa = conductor.vehiculoconductor where id_conductor = '".$_SESSION["id_usuario"]."' and vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus <> 'on' order by turno+0";
}else{

  $query = "SELECT * FROM vehiculos where vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus <> 'on'  order by turno+0 ";
}
	


					//var_dump($query);
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						?>
						<tr>


							<td style="color:black !important;"><a href="javascript:asignarValor('<?php echo $rowGBI1['placa'];?>', '<?php echo $rowGBI1['marca'];?>');" id="id_img" style="color:#008000 !important;"><?php echo  $rowGBI1['turno']; ?>  </a>  </td>
							<td style="color:black;">  <?php echo $rowGBI1['placa']; ?></td>
							<td style="color:black;">  <input type="button" id="<?php echo $rowGBI1['placa'].','.$rowGBI1['turno']; ?>" class="servicios" value="Crear servicio"> </td>

						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>
    <legend>Buses</legend>
                    <table id="table" class="display tableb" cellspacing="0" width="100%">
			<thead>
			<tr>
                <th>Turno</th>
				<th>Placa</th>
				<th>Inicio de turno</th>

			</tr>
			</thead>
			<tfoot>
			<tr>
      <th>Turno</th>
				<th>Placa</th>
				<th>Inicio de turno</th>
			</tr>
			</tfoot>

			<tbody>
      <?php
//       $_SESSION["id_usuario"];
// var_dump($_SESSION["tipousuario"]);
if($_SESSION["tipousuario"] == 'Conductor'){
  $query = "SELECT * FROM conductor inner join vehiculos on vehiculos.placa = conductor.vehiculoconductor where id_conductor = '".$_SESSION["id_usuario"]."' and vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus = 'on' order by turno+0";
}else{

  $query = "SELECT * FROM vehiculos where vehiculos.turno <> 'En servicio' and activacion = '1' and checkbus = 'on'  order by turno+0 ";
}
	


					//var_dump($query);
          $stmt1 = mysqli_query($con,$query);

					$i=0;
					while ($rowGBI1 = mysqli_fetch_array($stmt1)) {
						$i++;
						?>
						<tr>


							<td style="color:black !important;"><a href="javascript:asignarValor('<?php echo $rowGBI1['placa'];?>', '<?php echo $rowGBI1['marca'];?>');" id="id_img" style="color:#008000 !important;"><?php echo  $rowGBI1['turno']; ?>  </a>  </td>
							<td style="color:black;">  <?php echo $rowGBI1['placa']; ?></td>
							<td style="color:black;">  <input type="button" id="<?php echo $rowGBI1['placa'].','.$rowGBI1['turno']; ?>" class="servicios" value="Crear servicio"> </td>

						</tr>
			    <?php
		    }
	?>
			</tbody>
		</table>
                       
                    </div>
                   
                    <div class="tab-pane" id="messagesI">
                     
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            </div>



            </center>

<script type="text/javascript">


$("#onprueba").click(function(event) {
  //$(location).attr('href','http://wwww.google.com');
  window.close();
 // window.opener.document.location="https://www.gpsmoviltrack.net/GramaloteBe/?N=datosconductores";
});


/*

var TOKEN = '2d173bd3d493b49fc5ecfe7d1586d13aE3E84B636552092113698208D06BFE476848B587';

// global variables
var map, marker, markerByUnit = {},
    currentPoint = null,
    currentUnitId = null;

// Unit markers constructor
function getUnitMarker(unit) {
  // check for already created marker
  var marker = markerByUnit[unit.getId()];
  if (marker) return marker;
    
  var unitPos = unit.getPosition();

  // don't create marker if unit haven't a position
  if (!unitPos) return null;
  
  marker = L.marker([unitPos.y, unitPos.x], {
    clickable: true,
    draggable: false,
    icon: L.icon({
      iconUrl: unit.getIconUrl(32),
      iconAnchor: [16, 16] // set icon center
    })
  });
  marker.on('click', function(e) {
    // select unit in UI
    $('#units').val(unit.getId());

    getGeofencesByUnitId(unit.getId());
  });

  // save marker
  markerByUnit[unit.getId()] = marker;
  
  return marker;
}

// Print message to log
function msg(text) { $('#log').prepend(text + '<br/>'); }


function onlyTwoSignsAfterComma(n) {
  return Math.round(n * 100) / 100;
}

// show area in feets or meters (miles or kilometers)
function prettyPrintArea(area, measureUnits) {
  if (typeof measureUnits !== 'number') measureUnits = 0;
  
  var multiplier, small, big;
  
  if (measureUnits === 1 || measureUnits === 2) { // feets/miles
    multiplier = 5280 * 5280;
    small = ' ft²';
    big = ' mi²';
  } else { // meters/kilometers
    multiplier = 1000;
    small = ' m²';
    big = ' km²';
  }

  if (area < multiplier) return Math.ceil(area) + small;
  else return onlyTwoSignsAfterComma(area / multiplier) + big;
}
// show distance in feets or meters (miles or kilometers)
function prettyPrintDistance(distance, measureUnits) {
  if (typeof measureUnits !== 'number') measureUnits = 0;
  
  var multiplier, small, big;
  
  if (measureUnits === 1 || measureUnits === 2) { // feets/miles
    multiplier = 5280;
    small = ' ft';
    big = ' mi';
  } else { // meters/kilometers
    multiplier = 1000;
    small = ' m';
    big = ' km';
  }
    
  if (distance < multiplier) return Math.ceil(distance) + small;
  else return onlyTwoSignsAfterComma(distance / multiplier) + big;
}

function init() { // Execute after login succeed
  // get instance of current Session
  var session = wialon.core.Session.getInstance();
    
  // load Geofences Library 
  session.loadLibrary('resourceZones');
  // load Icon Library
  session.loadLibrary('itemIcon');
    
  // specify what kind of data should be returned
  var unitFlags = wialon.item.Item.dataFlag.base | wialon.item.Unit.dataFlag.lastPosition,
      resourceFlags = wialon.item.Item.dataFlag.base | wialon.item.Resource.dataFlag.zones;
  
  // load items to the current session
  session.updateDataFlags(
    // Items specification, request unit list and resource list
    [{type: 'type', data: 'avl_unit', flags: unitFlags, mode: 0},
     {type: 'type', data: 'avl_resource', flags: resourceFlags, mode: 0}],
    function (error) { // updateDataFlags callback
      if (error) {
        // show error, if update data flags was failed
        msg(wialon.core.Errors.getErrorText(error));
      } else {
        msg('Units&Resources are loaded');
        
        initUIData();
      }
    }
  );
}

// will be called after updateDataFlags success
function initUIData() {
  var session = wialon.core.Session.getInstance();
  
  var units = session.getItems('avl_unit'),
      resources = session.getItems('avl_resource');
  
  var unitsEl = $('#units'),
      resourcesEl = $('#resources');
  
  units.forEach(function(unit) {
    // add option to the select with unit id and name
    unitsEl.append($('<option>').text(unit.getName()).val(unit.getId()));
      
    var unitMarker = getUnitMarker(unit);
    if (unitMarker) unitMarker.addTo(map);
    
    // listen for new messages
    unit.addListener('changePosition', function(event) {
      // event is qx.event.type.Data
      // extract message data
      var pos = event.getData();
      
      // move or create marker, if not exists
      if (pos) {
        if (unitMarker) {
          unitMarker.setLatLng([pos.y, pos.x]);
        } else {
          // create new marker
          unitMarker = getUnitMarker(unit);
          
          if (unitMarker) {
            unitMarker.addTo(map);
          } else {
            msg('Got message with pos, but unit don\'t have a position');
          }
        }
      }
    });
  });
  
  resources.forEach(function(resource) {
    // add options to the select with resource id and name
    resourcesEl.append($('<option>').text(resource.getName()).val(resource.getId()));
  });
  
  // on unit selected
  unitsEl.change(function() {
    getGeofencesByUnitId(unitsEl.val());
  });
  
  var positionEl = $('#latlng');
  
  $('#apply-location-button').click(function() {
    // extracts two numbers divided by non-digits
    var latlngRegex = /^[^\d]*?(-?\d+(?:\.\d+)?)[^\.\d]+?(-?\d+(?:\.\d+)?)[^\d]*$/;
    
    var groups = latlngRegex.exec(positionEl.val());
    if (!groups) { // invalid string
      positionEl.addClass('invalid');
      return;
    }
    
    var lat = parseFloat(groups[1]),
        lon = parseFloat(groups[2]);
    
    if (isFinite(lat) && isFinite(lon) && (-90 <= lat && lat <= 90) && (-180 <= lon && lon <= 180)) {
      // deselect unit, because we have selected location manually
      $('#units').val('0');
      
      getGeofencesByPoint(lat, lon);
    } else {
      positionEl.addClass('invalid');
    }
  });
  
  // refresh on resource selected
  resourcesEl.change(function() {
    if (currentUnitId !== null) {
      getGeofencesByUnitId(currentUnitId);
    } else if (currentPosition) {
      getGeofencesByPoint(currentPosition.lat, currentPosition.lon);
    }
  });
  
  // refresh unit
  $('#unit-refresh-button').click(function() {
    if (currentUnitId) getGeofencesByUnitId(currentUnitId);
  });
}

function getGeofencesByUnitId(unitId) {
  unitId = parseInt(unitId, 10);
  if (!isFinite(unitId)) {
      msg('Bad unit id');
      return;
  }
  
  // save for refreshes
  currentUnitId = unitId;
    
  if (unitId === 0) {
    $('#unit-refresh-button').hide();
    return;
  }
    
  var session = wialon.core.Session.getInstance();
          
  var unit = session.getItem(unitId);
  if (!unit) {
    msg('Unit not found');
    $('#unit-refresh-button').hide();
    return;
  }
  
  // Show button for refreshing data by current unit position
  $('#unit-refresh-button').show();
  
  var position = unit.getPosition();
  if (!position) {
    msg('Unit haven\'t a position');
    $('#results-table').hide();
    $('#no-results').hide();
    return;
  }

  _getGeofencesInPoint(position.y, position.x);
}
function getGeofencesByPoint(lat, lon) {
  // save for refreshes
  currentUnitId = null;
    
  // hide unit refresh button
  $('#unit-refresh-button').hide();

  _getGeofencesInPoint(lat, lon);
}

// implementation
function _getGeofencesInPoint(lat, lon) {
  currentPosition = {lat: lat, lon: lon};
    
  // center map at the point
  map.setView([lat, lon]);

  // move marker, or create, if not exists
  if (marker) {
    marker.setLatLng([lat, lon]);
  } else {
    marker = L.marker([lat, lon], {
      clickable: false,
      draggable: false,
      zIndexOffset: 1000
    });
    marker.addTo(map);
  }
  
  // five signs is precise enough
  var displayLat = Math.round(lat * 100000) / 100000,
      displayLon = Math.round(lon * 100000) / 100000;
  
  // show position
  $("#logI").empty();
  $("#logII").empty();
  $('#logI').prepend(displayLat + ', ' + displayLon +'<br/>');
  $('#latlng').val(displayLat + ', ' + displayLon);
  $('#latlng').removeClass('invalid');
  wialon.util.Gis.getLocations([{lon:displayLon, lat:displayLat}], function(code, address){ 
			if (code) { msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code
			// msg(unit.getName() + " Seleccionado<br/><b>Locación de la  unidad</b>: "+ address+"</div>"); // print message to log
      $('#logII').prepend("Locación de la  unidad</b>: "+ address);
  	});
  // get selected resource
  var resourceId = parseInt($('#resources').val());
  
  // object with requested resources to find zones in
  var requestZoneId = {};
  
  var session = wialon.core.Session.getInstance();
  
  if (resourceId === 0) {
    // add all resources to the search
    session.getItems('avl_resource').forEach(function(resource) {
      requestZoneId[resource.getId()] = [];
    });
  } else {
    // empty array means "search for all geofences in this resource"
    requestZoneId[resourceId] = [];
  }
  
  msg('Loading zones in point');
  
  // do a request
  wialon.util.Helper.getZonesInPoint({
    lat: lat, lon: lon,
    zoneId: requestZoneId
  }, function(error, data) {
    if (error) {
      msg(wialon.core.Errors.getErrorText(error));
      return;
    }
      
    msg('Zones have loaded');
    
    handleZonesInPointResult(data);
  });
}

function handleZonesInPointResult(data) {
  var session = wialon.core.Session.getInstance();

  var resultsTableBodyEl = $('#results-table-body');
  
  // remove old results
  resultsTableBodyEl.empty();

  // numerify result rows
  var zoneI = 0;
  
  // format of response: https://sdk.wialon.com/wiki/en/sidebar/remoteapi/apiref/resource/get_zones_by_point

  // Save zones to make a batch request for additional data
  // {resource: wialon.item.Resource,
  //  zonesIds: [<zoneId>, ...],
  //  zonesElements: [{
  //    area: <DOMElement>,
  //    perimeter: <DOMElement>
  //  }, ...]}
  var resourcesToLoadData = [];

  for (var resourceId in data) if (data.hasOwnProperty(resourceId)) {
    var foundZonesIds = data[resourceId];
    
    resourceId = parseInt(resourceId);
    var resource = session.getItem(resourceId);
    
    var resourceToLoadData = {
      resource: resource,
      zonesIds: [],
      zonesElements: []
    };
    resourcesToLoadData.push(resourceToLoadData);
    
    foundZonesIds.forEach(function(zoneId) {
      var zone = resource.getZone(zoneId);
      
      // zone data format:
      // https://sdk.wialon.com/wiki/en/sidebar/remoteapi/apiref/resource/get_zone_data
     
      var zoneType;
      switch (zone.t) {
          case 1: zoneType = 'Line'; break;
          case 2: zoneType = 'Polygon'; break;
          case 3: zoneType = 'Circle'; break;
          default: zoneType = 'Unknown';
      }
      
      var tr = $('<tr>');
      
      var zoneElements = {
        // Save elements to update them when area and perimeter will be loaded
        area: $('<td>Loading...</td>'),
        perimeter: $('<td>Loading...</td>')
      };
      resourceToLoadData.zonesIds.push(zoneId);
      resourceToLoadData.zonesElements.push(zoneElements);
      
      tr.append('<td>' + (++zoneI) + '</td>'); // #
      tr.append('<td>' + zone.n + '</td>'); // Name
      tr.append('<td>' + zoneType + '</td>'); // Type
        
      tr.append(zoneElements.area); // Area
      tr.append(zoneElements.perimeter); // Perimeter
      
      tr.append('<td>' + resource.getName() + '</td>'); // Resource name
      
      resultsTableBodyEl.append(tr);
    });
  }

  var remote = wialon.core.Remote.getInstance();
  // Start a batch to do all getZonesData in one HTTP request
  remote.startBatch();

  resourcesToLoadData.forEach(function(toLoad) {
    // request only area and perimeter
    var zoneFlags = wialon.item.MZone.flags.area | wialon.item.MZone.flags.perimeter;
    
    // all requests will be batched and executed only after finishBatch call
    toLoad.resource.getZonesData(toLoad.zonesIds, zoneFlags, function(error, data) {
      if (error) {
        msg(wialon.core.Errors.getErrorText(error));
        return;
      }
      
      // update all table rows
      data.forEach(function(zone, i) {
        toLoad.zonesElements[i].area.text(prettyPrintArea(zone.ar, toLoad.resource.getMeasureUnits()));
        toLoad.zonesElements[i].perimeter.text(prettyPrintDistance(zone.pr, toLoad.resource.getMeasureUnits()));
      });
    });
  });

  msg('Loading extra zones data (area & perimeter)');

  // perform all getZonesData requests
  remote.finishBatch(function(error) {
    if (error) msg(wialon.core.Errors.getErrorText(error));
    else msg('Extra zone data have loaded');
  });
  
  if (zoneI > 0) {
    $('#results-table').show();
    $('#no-results').hide();
  } else {
    $('#results-table').hide();
    $('#no-results').show();
  }
}

function initMap() {
  // create a map in the "map" div, set the view to a given place and zoom
  map = L.map('map', {
    // disable zooming, because we will use double-click to set up marker
    doubleClickZoom: false
  }).setView([6.51693, -74.9062], 10);

  // add an OpenStreetMap tile layer
  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    // copyrights
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors | &copy; <a href="http://gurtam.com">Gurtam</a>'
  }).addTo(map);
  
  // handle mouse double-click event
  map.on('dblclick', function(e) {
    // hide hint
    $('#doubleclick-hint').hide();
      
    // deselect unit, because we are selected location manually
    $('#units').val('0');
    
    getGeofencesByPoint(e.latlng.lat, e.latlng.lng);
  });
}

// execute when DOM ready
$(document).ready(function () {  
  // init session
  wialon.core.Session.getInstance().initSession("https://hst-api.wialon.com");

  wialon.core.Session.getInstance().loginToken(TOKEN, "", // try to login
    function (code) { // login callback
      // if error code - print error message
      if (code){ msg(wialon.core.Errors.getErrorText(code)); return; }
      msg('Logged successfully');
      initMap();
      init(); // when login suceed then run init() function
    }
  );
});

*/


$("#messages").click(function(event) {
	window.open('Modulos/Modulo_datosmodalvehiculos.php', '_blank', 'width=800px,height=600px,top=30px,left=300px');

});

$(".servicios").click(function(event) {
     var valoresI = this.id.split(',');
		 		id = valoresI[0];
		 	 turno = valoresI[1];
      //      if(turno != '1'  ){
      //               Swal.fire({
      //                  icon: 'error',
      //                  title: 'Oops...',
      //                   text: 'Tiene que ir en el primer turno',
      //                  //footer: '<a href>Why do I have this issue?</a>'
      //                })
      //  return;
      // }
		// 	 fecha = valoresI[2];
		// 	 console.log(valoresI);
  window.open('Modulos/Modulo_datosmodalservicioI.php?id='+id+'', '_blank', 'width=800px,height=600px,top=30px,left=300px');
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
      //console.log('aquie');
      return;
            $.post('?P=servicios',{
              form:'institucion',
              placa:this.id,
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
                       setTimeout(function(){location.href="./?N=datosservicios"}, 1700);
                  
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