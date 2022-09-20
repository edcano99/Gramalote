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



$(function() { // Ojo! uso jQuery, recuerda añadirla al html
        cron(); // Lanzo cron la primera vez
        function cron() {

          $( document ).ready(function() {
        console.log( "document loaded" );
    });
 
    $( window ).on( "load", function() {
        console.log( "window loaded" );
    });

    console.log("adentro");
$(document).ready(function () {

 
console.log("adentro del nuevo");

        


        
// Print message to log
function msg(text) { $("#log").prepend(text + "<br/>"); }

// function init() { // Execute after login succeed
	var sess = wialon.core.Session.getInstance(); // get instance of current Session
	// flags to specify what kind of data should be returned
	var flags = wialon.item.Item.dataFlag.base | wialon.item.Unit.dataFlag.lastMessage;

    sess.loadLibrary("itemIcon"); // load Icon Library	
    sess.updateDataFlags( // load items to current session
	[{type: "type", data: "avl_unit", flags: flags, mode: 0}], // Items specification
		function (code) { // updateDataFlags callback
    		// if (code) { msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code

            // get loaded "avl_unit"s items  
	    	var units = sess.getItems("avl_unit");
	    	var unitszones = sess.getItems("avl_resource");

    //		if (!units || !units.length){ msg("Units not found"); return; } // check if units found
  
            // bind action to select change event
           // console.log(units);
           // prueba = wialon.core.Session.getInstance();
           // units.forEach(element => console.log(element.getPosition().x));
           placa=[]; 
           posicionx=[]; 
           posiciony=[]; 
      units.forEach(element => 
      
     placa.push(element.getId())
           
           );
     units.forEach(element => 
      
     posicionx.push(element.getPosition().x)
           
           );
     units.forEach(element => 
      
     posiciony.push(element.getPosition().y)
           
           );

  var str = placa.join(",");
var cont = str.split(",");
  // console.log(cont);
  var strI = posicionx.join(",");
var contI = strI.split(",");
// console.log(contI);
  var strII = posiciony.join(",");
var contII = strII.split(",");
// console.log(contII);
  console.log(unitszones);
//  sess.getItems('avl_resource').forEach(function(resource) {
//       requestZoneId[resource.getId()] = [];
//     });
var resourcesToLoadData = [];
data = '24498331';
 for (i = 0; i < contII.length; i++) {





  for (var resourceId in data)  {
    var foundZonesIds = data[24498331];
    console.log(resourceId);

    //resourceId = parseInt('24498331');
    var resource = sess.getItem('24498331');
    
    var resourceToLoadData = {
      resource: resource,
      zonesIds: [],
      zonesElements: []
    };
    resourcesToLoadData.push(resourceToLoadData);
           
       
      console.log(data[resourceId]+ ' aqui');
      console.log(resource);

      
      
    foundZonesIds.forEach(function(zoneId) {
       
      var zone = resource.getZone(zoneId);
       console.log(zone);
        //console.log(zoneId);
      // zone data format:
      // https://sdk.wialon.com/wiki/en/sidebar/remoteapi/apiref/resource/get_zone_data
     
      var zoneType;
      switch (zone.t) {
          case 1: zoneType = 'Line'; break;
          case 2: zoneType = 'Polygon'; break;
          case 3: zoneType = 'Circle'; break;
          default: zoneType = 'Unknown';
      }
      
    //  var tr = $('<tr>');
      
    
      console.log(zone.n);
     // tr.append('<td>' + (++zoneI) + '</td>'); // #
      //tr.append('<td>' + zone.n + '</td>'); // Name
      //tr.append('<td>' + zoneType + '</td>'); // Type
        
      //tr.append(zoneElements.area); // Area
     // tr.append(zoneElements.perimeter); // Perimeter
      
      //tr.append('<td>' + resource.getName() + '</td>'); // Resource name
      
    //  resultsTableBodyEl.append(tr);
    });
  }





  // console.log(contII[i]);
  // console.log(contI[i]);
  //  console.log(cont[i]);
  // var resource = session.getItem(cont[i]);
// console.log(resource);

resourceId = parseInt(cont[i]);
    var resource = sess.getItem(resourceId);
    
    var resourceToLoadData = {
      resource: resource,
      zonesIds: [],
      zonesElements: []
    };
    resourcesToLoadData.push(resourceToLoadData);
           
   

  wialon.util.Gis.getLocations([{lon:contI[i], lat:contII[i]}], function(code, address){ 
 			if (code) { msg(wialon.core.Errors.getErrorText(code)); return; } // exit if error code
 			// console.log(code);
       //msg(text + "<br/><b>Location of unit</b>: "+ address+"</div>"); // print message to log
 		});
 }

//  console.log(resourcesToLoadData);


$.ajax({
                 method: "POST",
                url: "controladores/EjecutadorTareP.php", // Podrías separar las funciones de PHP en un fichero a parte
                 data: 
                     JSON.stringify({"json" : JSON.stringify(cont),"jsonI" : JSON.stringify(contI),"jsonII" : JSON.stringify(contII), "opcion":2})
                 
             }).done(function(msg) {
                 console.log(msg);
             });


	    }
	);
// }
});   
        }
        setInterval(function() {


          wialon.core.Session.getInstance().initSession("https://hst-api.wialon.com"); // init session
    // For more info about how to generate token check
    // http://sdk.wialon.com/playground/demo/app_auth_token
	wialon.core.Session.getInstance().loginToken("2d173bd3d493b49fc5ecfe7d1586d13aEC1618355EAC137F63607EB1082DB8A1D51CC360", "", // try to login
		function (code) { // login callback
		    // if error code - print error message
			if (code){ msg(wialon.core.Errors.getErrorText(code)); return; }
			msg("Logged successfully"); init(); // when login suceed then run init() function
	});


            cron();

        }, 10000); // Lanzará la petición cada 10 segundos
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