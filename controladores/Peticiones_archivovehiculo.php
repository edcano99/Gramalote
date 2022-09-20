
<?php
// session_start();
//  var_dump($_SESSION["id_emp"]);
//  var_dump($_FILES["file"]["type"]);
//  exit();
  //  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  //   header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
  // clearstatcache();
  var_dump('adentro');
if (is_array($_FILES) && count($_FILES) > 0) {
  

session_start();

//nueva forma
        //ruta de imagen con nombre de la sesion
        // var_dump($_POST['e']);
//condicion de form de origen de archivo
        //  $patch="../img/emp-".$_SESSION["id_emp"]."/";
        //  $name="logo.png";
         $dir="../img/imagen_vehiculos/";
         @mkdir($dir, 0777);
         $dirmatricula="../img/matricula/";
         @mkdir($dirmatricula, 0777);
         $dirtarjetadeoperacion="../img/tarjetadeoperacion/";
         @mkdir($dirtarjetadeoperacion, 0777);
         $dircertificadoderevisiontecnomecanicaydegases="../img/certificadoderevisiontecnomecanicaydegases/";
         @mkdir($dircertificadoderevisiontecnomecanicaydegases, 0777);
         $dirpolizaextracontractual="../img/polizaextracontractual/";
         @mkdir($dirpolizaextracontractual, 0777);
         $dircertificadoinspecciongasnatural="../img/certificadoinspecciongasnatural/";
         @mkdir($dircertificadoinspecciongasnatural, 0777);
         $dirsoat="../img/soat/";
         @mkdir($dirsoat, 0777);
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


      /**************MATRICULA**************** */
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

      /**************FIN MATRICULA**************** */
/**************TARJETA OPERACION**************** */
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

/**************FIN TARJETA OPERACION**************** */

/**************CERTIFICADO REVISION TECNOMECANICA Y GASES**************** */
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

/**************FIN CERTIFICADO REVISION TECNOMECANICA Y GASES**************** */

/**************POLIZA EXTRACONTRACTUAL**************** */
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

/**************FIN POLIZA EXTRACONTRACTUAL**************** */

/**************INSPECCIÓN GAS NATURAL**************** */
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

/**************FIN INSPECCIÓN GAS NATURAL**************** */
/**************SOAT**************** */
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

/**************FIN SOAT**************** */
     
      //  else {
      //     echo 0;
      // }








    } 
  else {
    echo 0;
}



?>


