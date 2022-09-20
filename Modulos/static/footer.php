
<!-- <div id="map"></div> -->
<p id='doubleclick-hint'></p>

<p id='no-results'>No geofences at this location</p>
<!--     
<table id='results-table'><thead><tr>
    <td>#</td>
    <td>Name</td>
    <td>Type</td>
    <td>Area</td>
    <td>Perimeter</td>
    <td>Resource</td>
</tr></thead><tbody id='results-table-body'></tbody></table>
-->
<!-- <p>Position: <input id='latlng' type='text' placeholder='latitude, longitude'> -->
   <!-- <button id='apply-location-button'>Apply</button></p> -->
<!-- <p>Units: <select id='units'><option value='0'>—</option></select> <button id='unit-refresh-button'>Refresh</button></p> -->
<!-- <p> <select id='resources'><option value='0'></option></select></p> -->

<!-- <div id='log'></div>  -->


<footer class="footer">
        <div class="container-fluid">
         <div class="copyright float-right">
            <!-- &copy; -->
            <script>
              // document.write(new Date().getFullYear())
            </script>
            <!-- , desarrollado por 
            GPSMoviltrack. -->
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
            <span class="badge filter badge-green active" data-color="green"></span>
            <span class="badge filter badge-azure " data-color="azure"></span>
              <!-- <span class="badge filter badge-purple" data-color="purple"></span> -->
              
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose " data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../img/faviconSigcompany.png" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
/*
 * Showing geofences that include the specified position
 *
 * Usage:
 *   set position in format "latitude, longitude" and press Apply button
 *   doubleclick on the map to set position of click
 *   choose unit from the list to set position of selected unit
 *   (click Refresh button to update matching position by current unit position)
 *
 * Implementation:
 *   
 *   1. Load library 'resourceZones' by:
 *
 *        var session = wialon.core.Session.getInstance();
 *        session.loadLibrary('resourceZones');
 *
 *   2. Subscribe for latest unit position,
 *                and resource list with their geofences:
 *
 *        var unitFlags     = wialon.item.Item.dataFlag.base | wialon.item.Unit.dataFlag.lastPosition,
 *            resourceFlags = wialon.item.Item.dataFlag.base | wialon.item.Resource.dataFlag.zones;
 *
 *        session.updateDataFlags([
 *          {type: 'type', data: 'avl_unit', flags: unitFlags, mode: 0},
 *          {type: 'type', data: 'avl_resource', flags: resourceFlags, mode: 0}
 *        ], callback);
 *
 *   3. To find geofences, that contains some point use wialon.util.Helper.getZonesInPoint:
 *
 *        wialon.util.Helper.getZonesInPoint({
 *          lat: lat, lon: lon,
 *          zoneId: {<resourceId>: [<zoneId>, ...], ...}
 *        }, callback);
 *
 *      If you want to find in all zones in the resource, pass an empty array, like that:
 *
 *        zoneId: {<resourceId>: [], <otherResourceId>: []}
 *
 *      To find in all resources you need pass all resources ids.
 *
 *      In callback you will receive error code in the first argument and the response in the second,
 *      response will be in format of get_zones_by_point Remote API call:
 *
 *        https://sdk.wialon.com/wiki/en/sidebar/remoteapi/apiref/resource/get_zones_by_point
 *
 *      So, it have the same format as your zoneId parameter, keys of object — resource ids, values — arrays of zone ids.
 *
 *   4. If you want get some additional data of geofences, you can use resource.getZonesData, example:
 *
 *        https://sdk.wialon.com/playground/demo/get_zone_params
 *
 *      API: https://sdk.wialon.com/wiki/en/sidebar/remoteapi/apiref/resource/get_zone_data
 *
 *      You also can pass flags to get only specified data:
 *
 *        var zoneFlags = wialon.item.MZone.flags.area | wialon.item.MZone.flags.perimeter;
 *
 *        resource.getZonesData([<zoneId>, ...], zoneFlags, callback);
 *
 *      If you are requesting perimeter or area,
 *      be accurate with values, cause it can be not only meters, but foots too, depends on resource settings,
 *      check resource.getMeasureUnits() and documentation for decoding values (general property "mu"):
 *
 *        https://sdk.wialon.com/wiki/en/sidebar/remoteapi/apiref/format/resource
 */

// Token that will be used for auth
// For more info about how to generate token check
// http://sdk.wialon.com/playground/demo/app_auth_token



// repetir con el intervalo de 2 segundos


// después de 5 segundos parar
//setTimeout(() => { clearInterval(timerId); alert('stop'); }, 15000);



var TOKEN = '2d173bd3d493b49fc5ecfe7d1586d13aB71D2F73BEDABF69BBF05B5AF4D776DAA63B8705';

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
 /* unitsEl.change(function() {
    getGeofencesByUnitId(unitsEl.val());
  });*/
    
         placa=[]; 
     Nombreplaca=[]; 
           posicionx=[]; 
           posiciony=[]; 
      units.forEach(element => 
      
     placa.push(element.getId()) 
           );
    
    units.forEach(element => 
      
     Nombreplaca.push(element.getName()) 
                  
           );
    
    var str = placa.join(",");
var cont = str.split(",");
     
    var strI = Nombreplaca.join(",");
var contI = strI.split(",");
    //console.log(cont);
   
    
    for (var i = 0; i < placa.length; i++) {
   //console.log(cont[i]);
        getGeofencesByUnitId(cont[i],contI[i]);
        
        /*n += i;
   mifuncion(n);*/
}
  
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

function getGeofencesByUnitId(unitId,placa) {
    
    
    
    //console.log(placa);
    
    
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

  _getGeofencesInPoint(position.y, position.x, placa);
}
function getGeofencesByPoint(lat, lon, placa) {
  // save for refreshes
  currentUnitId = null;
    
  // hide unit refresh button
  $('#unit-refresh-button').hide();

  _getGeofencesInPoint(lat, lon, placa);
}

// implementation
function _getGeofencesInPoint(lat, lon, placa) {
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
  $('#latlng').val(displayLat + ', ' + displayLon);
  $('#latlng').removeClass('invalid');
  
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
    
    handleZonesInPointResult(data,placa);
  });
}

function handleZonesInPointResult(data,placa) {
    
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
      
       
if(zone.n == 'Fin Turno Mina'){
   placafinturno=[]; 
         placafinturno.push(placa)
  console.log(placa);

  $.ajax({
                 method: "POST",
                url: "controladores/EjecutadorTareP.php", // Podrías separar las funciones de PHP en un fichero a parte
                 data: 
                     JSON.stringify({"placa":placa,"opcion":2})
                 
             }).done(function(msg) {
                // console.log(msg);
             });


}
        
      
    
    var strfin = placafinturno.join(",");
var contfin = strfin.split(",");
     
    var strI = Nombreplaca.join(",");
var contI = strI.split(",");
    

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
  }).setView([53.9, 27.55], 10);

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
      let timerId = setInterval(() => prueba(), 15000);
function prueba(){
      msg('Logged successfully');
     // console.log('asi mmismo');
      
      init(); // when login suceed then run init() function
    }
      initMap();
      }
  );
});



    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });








  </script>
</body>

</html>