
<?php
// session_start();
//  var_dump($_SESSION["id_emp"]);
//  var_dump($_FILES["file"]["type"]);
//  exit();
  //  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  //   header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
  // clearstatcache();
  //var_dump('adentro');
 //if (is_array($_FILES) && count($_FILES) > 0) {
  //var_dump('adentro');

session_start();

//nueva forma
        //ruta de imagen con nombre de la sesion
        // var_dump($_POST['e']);
//condicion de form de origen de archivo
        //  $patch="../img/emp-".$_SESSION["id_emp"]."/";
        //  $name="logo.png";
         $dir="../img/imagen_vehiculos/";
        // @mkdir($dir, 0777);
         $dirmatricula="../img/matricula/";
        //  @mkdir($dirmatricula, 0777);
        // $dirmatricula="../img/matricula/";
        //  @mkdir($dirmatricula, 0777);
         $dirtarjetadeoperacion="../img/tarjetadeoperacion/";
        //  @mkdir($dirtarjetadeoperacion, 0777);
         $dircertificadoderevisiontecnomecanicaydegases="../img/certificadoderevisiontecnomecanicaydegases/";
        //  @mkdir($dircertificadoderevisiontecnomecanicaydegases, 0777);
         $dirpolizaextracontractual="../img/polizaextracontractual/";
        //  @mkdir($dirpolizaextracontractual, 0777);
         $dircertificadoinspecciongasnatural="../img/certificadoinspecciongasnatural/";
        //  @mkdir($dircertificadoinspecciongasnatural, 0777);
         $dirsoat="../img/soat/";
        //  @mkdir($dirsoat, 0777);
         


        /***************FOTO VEHICULO**************** */

         $nombre_fichero = "../img/imagen_vehiculos/".$_POST['placa']."vehiculo.png";
         $nombre_ficheroI = "../img/imagen_vehiculos/".$_POST['placa']."vehiculo.jpg";
         $nombre_ficheroII = "../img/imagen_vehiculos/".$_POST['placa']."vehiculo.jpeg";
        

if ($_FILES["file"]["name"] != '') {

         if (file_exists($nombre_fichero)) {
          ?>
        
          <?php echo "El fichero $nombre_fichero existe";
          unlink($nombre_fichero);
          if ($_FILES["file"]["type"] == "image/png") {
            move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.png');
         //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
        }
        if ($_FILES["file"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.jpeg');
        }
        if ($_FILES["file"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.jpg');
        }

        } elseif(file_exists($nombre_ficheroI)){
          ?>
        
          <?php echo "El fichero $nombre_ficheroI existe";
          unlink($nombre_ficheroI);
          if ($_FILES["file"]["type"] == "image/png") {
            move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.png');
         //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
        }
        if ($_FILES["file"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.jpeg');
        }
        if ($_FILES["file"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.jpg');
        }
         
       
      }elseif(file_exists($nombre_ficheroII)){
          
          ?>
        
          <?php echo "El fichero $nombre_ficheroII existe";
          unlink($nombre_ficheroII);
          if ($_FILES["file"]["type"] == "image/png") {
            move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.png');
         //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
        }
        if ($_FILES["file"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.jpeg');
        }
        if ($_FILES["file"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.jpg');
        }

        } 
        else{
//echo "El fichero no existe";
          if ($_FILES["file"]["type"] == "image/png") {
           move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.png');
          //  var_dump($_FILES["file"]["type"], $dir.'logo.png');
            // echo $dir.$_POST['placa'].'vehiculo.png';
        }
        if ($_FILES["file"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.jpeg');
        }
        if ($_FILES["file"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$_POST['placa'].'vehiculo.jpg');
        }

        }
      }

/*************** FIN FOTO VEHICULO **************** */

        /***************FOTO MATRICULA**************** */

        if ($_FILES["filesmatricula"]["name"] != '') {
         $nombre_matricula = "../img/matricula/".$_POST['placa']."matriculavehiculo.png";
         $nombre_matriculaI = "../img/matricula/".$_POST['placa']."matriculavehiculo.jpg";
         $nombre_matriculaII = "../img/matricula/".$_POST['placa']."matriculavehiculo.jpeg";
        
         if (file_exists($nombre_matricula)) {
          ?>
        
          <?php //echo "El fichero $nombre_fichero existe";
          unlink($nombre_matricula);
          if ($_FILES["filesmatricula"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.png');
        //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
        }
        if ($_FILES["filesmatricula"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.jpeg');
        }
        if ($_FILES["filesmatricula"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.jpg');
        }

        } elseif(file_exists($nombre_matriculaI)){
          ?>
        
          <?php //echo "El fichero $nombre_ficheroI existe";
          unlink($nombre_matriculaI);
          if ($_FILES["filesmatricula"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.png');
        //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
        }
        if ($_FILES["filesmatricula"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.jpeg');
        }
        if ($_FILES["filesmatricula"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.jpg');
        }
         
       
      }elseif(file_exists($nombre_matriculaII)){
          
          ?>
        
          <?php //echo "El fichero $nombre_ficheroII existe";
          unlink($nombre_matriculaII);
          if ($_FILES["filesmatricula"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.png');
        //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
        }
        if ($_FILES["filesmatricula"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.jpeg');
        }
        if ($_FILES["filesmatricula"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.jpg');
        }

        } 
        else{
            //echo "El fichero no existe";
            if ($_FILES["filesmatricula"]["type"] == "image/png") {
              move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.png');
            //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
              // echo "empresalogo";
            }
            if ($_FILES["filesmatricula"]["type"] == "image/jpeg") {
            move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.jpeg');
            }
            if ($_FILES["filesmatricula"]["type"] == "image/jpg") {
            move_uploaded_file($_FILES["filesmatricula"]["tmp_name"], $dirmatricula.$_POST['placa'].'matriculavehiculo.jpg');
            }

        }
       }


/*************** FIN FOTO MATRICULA **************** */


        /***************FOTO TARJETA OPERACION**************** */

        if ($_FILES["filestarjetaoperacion"]["name"] != '') {

         $nombre_tarjetaoperacionvehiculo = "../img/tarjetadeoperacion/".$_POST['placa']."tarjetaoperacionvehiculo.png";
         $nombre_tarjetaoperacionvehiculoI = "../img/tarjetadeoperacion/".$_POST['placa']."tarjetaoperacionvehiculo.jpg";
         $nombre_tarjetaoperacionvehiculoII = "../img/tarjetadeoperacion/".$_POST['placa']."tarjetaoperacionvehiculo.jpeg";
        
         if (file_exists($nombre_tarjetaoperacionvehiculo)) {
          ?>
        
          <?php //echo "El fichero $nombre_fichero existe";
          unlink($nombre_tarjetaoperacionvehiculo);
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.jpeg');
          }
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.jpg');
          }
          
        } elseif(file_exists($nombre_tarjetaoperacionvehiculoI)){
          ?>
        
          <?php //echo "El fichero $nombre_ficheroI existe";
          unlink($nombre_tarjetaoperacionvehiculoI);
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.jpeg');
          }
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.jpg');
          }
          
         
       
      }elseif(file_exists($nombre_tarjetaoperacionvehiculoII)){
          
          ?>
        
          <?php //echo "El fichero $nombre_ficheroII existe";
          unlink($nombre_tarjetaoperacionvehiculoII);
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.jpeg');
          }
          if ($_FILES["filestarjetaoperacion"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.jpg');
          }
          

        } 
        else{
            //echo "El fichero no existe";
            if ($_FILES["filestarjetaoperacion"]["type"] == "image/png") {
              move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.png');
            //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
              // echo "empresalogo";
            }
            if ($_FILES["filestarjetaoperacion"]["type"] == "image/jpeg") {
            move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.jpeg');
            }
            if ($_FILES["filestarjetaoperacion"]["type"] == "image/jpg") {
            move_uploaded_file($_FILES["filestarjetaoperacion"]["tmp_name"], $dirtarjetadeoperacion.$_POST['placa'].'tarjetaoperacionvehiculo.jpg');
            }
            

        }
      }


/*************** FIN FOTO TARJETA OPERACION **************** */

        /***************FOTO CERTIFICADO REVISION TECNOMECANICA Y GASES**************** */

        if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["name"] != '') {

         $nombre_certificadoderevisiontecnomecanicaydegasesvehiculo = "../img/certificadoderevisiontecnomecanicaydegases/".$_POST['placa']."certificadoderevisiontecnomecanicaydegasesvehiculo.png";
         $nombre_certificadoderevisiontecnomecanicaydegasesvehiculoI = "../img/certificadoderevisiontecnomecanicaydegases/".$_POST['placa']."certificadoderevisiontecnomecanicaydegasesvehiculo.jpg";
         $nombre_certificadoderevisiontecnomecanicaydegasesvehiculoII = "../img/certificadoderevisiontecnomecanicaydegases/".$_POST['placa']."certificadoderevisiontecnomecanicaydegasesvehiculo.jpeg";
        
         if (file_exists($nombre_certificadoderevisiontecnomecanicaydegasesvehiculo)) {
          ?>
        
          <?php //echo "El fichero $nombre_fichero existe";
          unlink($nombre_certificadoderevisiontecnomecanicaydegasesvehiculo);
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.jpeg');
          }
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.jpg');
          }
          
        } elseif(file_exists($nombre_certificadoderevisiontecnomecanicaydegasesvehiculoI)){
          ?>
        
          <?php //echo "El fichero $nombre_ficheroI existe";
          unlink($nombre_certificadoderevisiontecnomecanicaydegasesvehiculoI);
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.jpeg');
          }
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.jpg');
          }
          
         
       
      }elseif(file_exists($nombre_certificadoderevisiontecnomecanicaydegasesvehiculoII)){
          
          ?>
        
          <?php //echo "El fichero $nombre_ficheroII existe";
          unlink($nombre_certificadoderevisiontecnomecanicaydegasesvehiculoII);
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.jpeg');
          }
          if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.jpg');
          }
          

        } 
        else{
            //echo "El fichero no existe";
            if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/png") {
              move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.png');
            //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
              // echo "empresalogo";
            }
            if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/jpeg") {
            move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.jpeg');
            }
            if ($_FILES["filescertificadorevisiontecnomecanicaygases"]["type"] == "image/jpg") {
            move_uploaded_file($_FILES["filescertificadorevisiontecnomecanicaygases"]["tmp_name"], $dircertificadoderevisiontecnomecanicaydegases.$_POST['placa'].'certificadoderevisiontecnomecanicaydegasesvehiculo.jpg');
            }
            

        }
      }


/*************** FIN CERTIFICADO REVISION TECNOMECANICA Y GASES **************** */


        /***************FOTO POLIZA EXTRACONTRACTUAL**************** */

        if ($_FILES["filespolizaextracontractual"]["name"] != '') {

         $nombre_polizaextracontractualvehiculo = "../img/polizaextracontractual/".$_POST['placa']."polizaextracontractualvehiculo.png";
         $nombre_polizaextracontractualvehiculoI = "../img/polizaextracontractual/".$_POST['placa']."polizaextracontractualvehiculo.jpg";
         $nombre_polizaextracontractualvehiculoII = "../img/polizaextracontractual/".$_POST['placa']."polizaextracontractualvehiculo.jpeg";
        
         if (file_exists($nombre_polizaextracontractualvehiculo)) {
          ?>
        
          <?php //echo "El fichero $nombre_fichero existe";
          unlink($nombre_polizaextracontractualvehiculo);
          if ($_FILES["filespolizaextracontractual"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filespolizaextracontractual"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.jpeg');
          }
          if ($_FILES["filespolizaextracontractual"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.jpg');
          }

        } elseif(file_exists($nombre_polizaextracontractualvehiculoI)){
          ?>
        
          <?php //echo "El fichero $nombre_ficheroI existe";
          unlink($nombre_polizaextracontractualvehiculoI);
 if ($_FILES["filespolizaextracontractual"]["type"] == "image/png") {
  move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.png');
//  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
  // echo "empresalogo";
}
if ($_FILES["filespolizaextracontractual"]["type"] == "image/jpeg") {
move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.jpeg');
}
if ($_FILES["filespolizaextracontractual"]["type"] == "image/jpg") {
move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.jpg');
}
          
         
       
      }elseif(file_exists($nombre_polizaextracontractualvehiculoII)){
          
          ?>
        
          <?php //echo "El fichero $nombre_ficheroII existe";
          unlink($nombre_polizaextracontractualvehiculoII);
          if ($_FILES["filespolizaextracontractual"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filespolizaextracontractual"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.jpeg');
          }
          if ($_FILES["filespolizaextracontractual"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.jpg');
          }
          

        } 
        else{
            //echo "El fichero no existe";
            if ($_FILES["filespolizaextracontractual"]["type"] == "image/png") {
              move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.png');
            //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
              // echo "empresalogo";
            }
            if ($_FILES["filespolizaextracontractual"]["type"] == "image/jpeg") {
            move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.jpeg');
            }
            if ($_FILES["filespolizaextracontractual"]["type"] == "image/jpg") {
            move_uploaded_file($_FILES["filespolizaextracontractual"]["tmp_name"], $dirpolizaextracontractual.$_POST['placa'].'polizaextracontractualvehiculo.jpg');
            }
            

        }
      }


/*************** FIN POLIZA EXTRACONTRACTUAL **************** */


        /***************FOTO INSPECCIÓN GAS NATURAL**************** */

        if ($_FILES["filescertificadoinspecciongasnatural"]["name"] != '') {

         $nombre_certificadoinspecciongasnaturalvehiculo = "../img/certificadoinspecciongasnatural/".$_POST['placa']."certificadoinspecciongasnaturalvehiculo.png";
         $nombre_certificadoinspecciongasnaturalvehiculoI = "../img/certificadoinspecciongasnatural/".$_POST['placa']."certificadoinspecciongasnaturalvehiculo.jpg";
         $nombre_certificadoinspecciongasnaturalvehiculoII = "../img/certificadoinspecciongasnatural/".$_POST['placa']."certificadoinspecciongasnaturalvehiculo.jpeg";
        
         if (file_exists($nombre_certificadoinspecciongasnaturalvehiculo)) {
          ?>
        
          <?php //echo "El fichero $nombre_fichero existe";
          unlink($nombre_certificadoinspecciongasnaturalvehiculo);
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.jpeg');
          }
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.jpg');
          }

        } elseif(file_exists($nombre_certificadoinspecciongasnaturalvehiculoI)){
          ?>
        
          <?php //echo "El fichero $nombre_ficheroI existe";
          unlink($nombre_certificadoinspecciongasnaturalvehiculoI);
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.jpeg');
          }
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.jpg');
          }
          
         
       
      }elseif(file_exists($nombre_certificadoinspecciongasnaturalvehiculoII)){
          
          ?>
        
          <?php //echo "El fichero $nombre_ficheroII existe";
          unlink($nombre_certificadoinspecciongasnaturalvehiculoII);
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.jpeg');
          }
          if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.jpg');
          }
          

        } 
        else{
            //echo "El fichero no existe";
            if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/png") {
              move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.png');
            //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
              // echo "empresalogo";
            }
            if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/jpeg") {
            move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.jpeg');
            }
            if ($_FILES["filescertificadoinspecciongasnatural"]["type"] == "image/jpg") {
            move_uploaded_file($_FILES["filescertificadoinspecciongasnatural"]["tmp_name"], $dircertificadoinspecciongasnatural.$_POST['placa'].'certificadoinspecciongasnaturalvehiculo.jpg');
            }
            

        }
      }


/*************** FIN INSPECCIÓN GAS NATURAL **************** */


        /***************FOTO SOAT**************** */

        if ($_FILES["filessoat"]["name"] != '') {

         $nombre_soatvehiculo = "../img/soat/".$_POST['placa']."soatvehiculo.png";
         $nombre_soatvehiculoI = "../img/soat/".$_POST['placa']."soatvehiculo.jpg";
         $nombre_soatvehiculoII = "../img/soat/".$_POST['placa']."soatvehiculo.jpeg";
        
         if (file_exists($nombre_soatvehiculo)) {
          ?>
        
          <?php //echo "El fichero $nombre_fichero existe";
          unlink($nombre_soatvehiculo);
          if ($_FILES["filessoat"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filessoat"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.jpeg');
          }
          if ($_FILES["filessoat"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.jpg');
          }

        } elseif(file_exists($nombre_soatvehiculoI)){
          ?>
        
          <?php //echo "El fichero $nombre_ficheroI existe";
          unlink($nombre_soatvehiculoI);
          if ($_FILES["filessoat"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filessoat"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.jpeg');
          }
          if ($_FILES["filessoat"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.jpg');
          }
         
       
      }elseif(file_exists($nombre_soatvehiculoII)){
          
          ?>
        
          <?php //echo "El fichero $nombre_ficheroII existe";
          unlink($nombre_soatvehiculoII);
          if ($_FILES["filessoat"]["type"] == "image/png") {
            move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.png');
          //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
            // echo "empresalogo";
          }
          if ($_FILES["filessoat"]["type"] == "image/jpeg") {
          move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.jpeg');
          }
          if ($_FILES["filessoat"]["type"] == "image/jpg") {
          move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.jpg');
          }
          

        } 
        else{
            //echo "El fichero no existe";
            if ($_FILES["filessoat"]["type"] == "image/png") {
              move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.png');
            //  var_dump($_FILES["file"]["tmp_name"], $dir.'logo.png');
              // echo "empresalogo";
            }
            if ($_FILES["filessoat"]["type"] == "image/jpeg") {
            move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.jpeg');
            }
            if ($_FILES["filessoat"]["type"] == "image/jpg") {
            move_uploaded_file($_FILES["filessoat"]["tmp_name"], $dirsoat.$_POST['placa'].'soatvehiculo.jpg');
            }
            

        }
      }


/*************** FIN SOAT**************** */

        // unlink(/directorio/mi-imagen.jpg);
        //  exit();
       
      //  else {
           echo 'pr';
      // }








//      } 
//    else {
// }     echo 0;
// }



?>


