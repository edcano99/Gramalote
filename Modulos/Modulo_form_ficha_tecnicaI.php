<?php
//============================================================+
// File name   : example_003.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 003 for TCPDF class
//               Custom Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

require_once('../Modulos/tcpdf/tcpdf.php');
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
		// $imagen = urlencode($_GET["imagen"]);
		// $encodedData = str_replace('data%3Aimage%2Fpng%3Bbase64%2C','', $imagen);
		// $encodedDataI = str_replace('%2F','/', $encodedData);
		// $imgdata = base64_decode($encodedDataI);
		// if($_GET["imagen"] != ''){
		// $this->Image('@'.$imgdata, 20, 230, 70);
		// }
		// 	//prueba($idemp);
        // Logo
		// Example of Image from data stream ('PHP rules')
		$this->SetFont('helvetica', 'B', 12);
        // Title
        $this->Cell(0, 15, 'FICHA TÉCNICA DEL VEHÍCULO', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    
// The '@' character is used to indicate that follows an image data stream and not an image file name
// $this->Image('../../img/empresa/original.png', 50, 130, 120, 60, '', '#', 's', true, 70);	
		}
	
    // Page footer
    public function Footer() {
		
		//require('../../datos_conexion/conexion.php');
		
       // Position at 15 mm from bottom
	   $this->SetY(-35);
	   // Set font
	  $this->SetFont('helvetica', 'I', 8);
	   // Page number
	   
	   $this->Cell(0, 14, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');   
	 
	  
	 

				


    

	}

}

// create new PDF document
$pdf = new MYPDF('P', 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetHeaderMargin(20);
$pdf->SetAutoPageBreak(true, 37);
$pdf->AddPage();



$pdf->SetY(27);
$pdf->SetX(43,1);
$pdf->SetFont('helvetica','B',10);	
			$pdf->Cell(78, 0, 'DATOS DEL VEHÍCULO',0,0,'L');
 			$pdf->Ln(8);
$pdf->SetFont('helvetica','',7);	
	$pdf->Cell(7, 0, 'Placa: ',0,0,'L',0,1);
	$pdf->Ln(5);
 			$pdf->SetFont('helvetica','',7);
			$pdf->MultiCell(90,0 ,'Propietario: ',' ','L', 0,1);
 			$pdf->Ln(4);	
 $pdf->SetFont('helvetica','',7);	
 			$pdf->Cell(22, 0, 'No. Interno:',0,0,'L',0,1);
 			$pdf->Ln(6);
			 $pdf->SetFont('helvetica','',7);
 			$pdf->MultiCell(60,0 ,'Color: ',' ','L', 0,1);
 			$pdf->Ln(2);
			 $pdf->SetFont('helvetica','',7);
 			$pdf->MultiCell(60,0 ,'Nro Serie: ',' ','L', 0,1);
 			$pdf->Ln(2);
			 $pdf->SetFont('helvetica','',7);
 			$pdf->MultiCell(60,0 ,'Nro Chasis: ',' ','L', 0,1);
 			$pdf->Ln(2);
			 $pdf->SetFont('helvetica','',7);
 			$pdf->MultiCell(60,0 ,'Carroceria: ',' ','L', 0,1);
 			$pdf->Ln(2);
			 $pdf->SetFont('helvetica','',7);
 			$pdf->MultiCell(60,0 ,'Linea: ',' ','L', 0,1);
			 $pdf->SetY(47.5);
					$pdf->SetX(62,1);
					$pdf->SetFont('helvetica','',7);	
					$pdf->Cell(60, 0, 'Clase: ',0,0,'L');
					$pdf->Ln(6);
					$pdf->SetX(62,1);
					$pdf->Cell(60, 0, 'Marca: ',0,0,'L');
					$pdf->Ln(6);
					$pdf->SetX(62,1);
					$pdf->Cell(60, 0, 'Modelo: ',0,0,'L');
					$pdf->Ln(6);
					$pdf->SetX(62,1);
					$pdf->Cell(40, 0, 'Servicio: ',0,0,'L');
					$pdf->Ln(6);
					$pdf->SetX(62,1);
					$pdf->Cell(40, 0, 'Cap. Pasaj: ',0,0,'L');
					$pdf->Ln(6);
					$pdf->SetX(62,1);
					$pdf->Cell(60, 0, 'Combustible: ',0,0,'L');


					$existe = '../../img/emp-'.$datos["id_empresa"].'/FOTO VEHICULO/fotovehiculo'.$_REQUEST['id'].'.png';
					$existe1 = '../../img/emp-'.$datos["id_empresa"].'/FOTO VEHICULO/fotovehiculo'.$_REQUEST['id'].'.jpg';
					$existe2 = '../../img/emp-'.$datos["id_empresa"].'/FOTO VEHICULO/fotovehiculo'.$_REQUEST['id'].'.jpeg';
		   
							   if (file_exists($existe)) {
								   $html58 = 'FOTO VEHICULO<br><table width="100%" border="0.1"  >
				  
								   <tr>
								   <td  width="150" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/FOTO VEHICULO/fotovehiculo'.$_REQUEST['id'].'.png"  width="100"  height="70" >
								   <br/>
					   
								   <font size="7"></font> </td>	
								   
								   </tr>
								   
								   
								   </table>
								   
								   ';
								   
		   
							 }
							 elseif (file_exists($existe1)) {
							   $html58 = 'FOTO VEHICULO<br><table width="100%" border="0.1"  >
			  
							   <tr>
							   <td  width="150" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/FOTO VEHICULO/fotovehiculo'.$_REQUEST['id'].'.jpg"  width="100"  height="70" >
							   <br/>
				   
							   <font size="7"></font> </td>	
							   
							   </tr>
							   
							   
							   </table>
							   
							   ';
							   
		   
						 }elseif (file_exists($existe2)) {
						   $html58 = 'FOTO VEHICULO<br><table width="100%" border="0.1"  >
		   
						   <tr>
						   <td  width="150" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/FOTO VEHICULO/fotovehiculo'.$_REQUEST['id'].'.jpeg"  width="100"  height="70"  >
						   <br/>
			   
						   <font size="7"></font> </td>	
						   
						   </tr>
						   
						   
						   </table>
						   
						   ';
						   
		   
					 }else{
		   
							   $html58 = 'FOTO VEHICULO<br><table width="100%" border="0.1"  >
				  
								   <tr>
								   <td  width="150" align="center"><br/><br/><img src=""  width="100"  height="70" >
								   <br/>
								   <br/>
								   <br/>
								   <br/>
								   <br/>
								   <br/>
								   <br/>
								   <br/>
								   <br/>
								   
					   
								   <font size="7"></font> </td>	
								   
								   </tr>
								   
								   
								   </table>
								   
								   ';
							 }
							   
							   
							   $pdf->writeHTMLCell(
							   $w = 0, $h = 0, $x = '125', $y = '28',
							   $html58, $border = 0, $ln = 1, $fill = 0,
							   $reseth = true, $align = 'top', $autopadding = true);

							   $pdf->Ln(23);
					$pdf->SetX(68,1);
					$pdf->SetFont('helvetica','B',10);	
					$pdf->Cell(78, 0, 'VENCIMIENTOS DE DOCUMENTOS',0,0,'L');
					$pdf->Ln(12);
					$pdf->SetFont('helvetica','',7);	
					$pdf->Cell(78, 0, 'Tarjeta de operación: ',0,0,'L');
					$pdf->Ln(6);
					$pdf->SetFont('helvetica','',7);	
					$pdf->Cell(78, 0, 'Revisión Bimestra: ',0,0,'L');
					$pdf->Ln(-6.5);
					$pdf->SetX(88,1);
					$pdf->SetFont('helvetica','',7);	
					$pdf->Cell(78, 0, 'SOAT: ',0,0,'L');
					$pdf->Ln(6);
					$pdf->SetX(88,1);
					$pdf->SetFont('helvetica','',7);	
					$pdf->Cell(78, 0, 'CDA: ',0,0,'L');
					$pdf->Ln(-6.5);
					$pdf->SetX(150,1);
					$pdf->SetFont('helvetica','',7);	
					$pdf->Cell(78, 0, 'Poliza RCC: ',0,0,'L');
					$pdf->Ln(6);
					$pdf->SetX(150,1);
					$pdf->SetFont('helvetica','',7);	
					$pdf->Cell(78, 0, 'Poliza RCE: ',0,0,'L');

					$pdf->Ln(6);


					$existeI = '../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_1'.'.png';
					$existeI1 = '../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_1'.'.jpg';
					$existeI2 = '../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_1'.'.jpeg';
					if (file_exists($existeI)) {
					$html2 = 'Matricula<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="265" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_1.png"  width="180"  ></td>
					<td  width="265" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_2.png"  width="180"  >
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}
					else if (file_exists($existeI1)) {
						$html2I = 'Matricula<br><table width="100%" border="0.1"  >
		   
						<tr>
						<td  width="265" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_1.jpg"  width="180"  ></td>
						<td  width="265" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_2.jpg"  width="180"  >
						<br/>
			
						<font size="7"></font> </td>	
						
						</tr>
						
						
						</table>
						
						';
						}
						else if (file_exists($existeI2)) {
							$html2I = 'Matricula<br><table width="100%" border="0.1"  >
			   
							<tr>
							<td  width="265" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_1.jpeg"  width="180"  ></td>
							<td  width="265" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/MATRICULA/matricula'.$_REQUEST['id'].'_2.jpeg"  width="180"  >
							<br/>
				
							<font size="7"></font> </td>	
							
							</tr>
							
							
							</table>
							
							';
							}else{
						$html2I = 'Matricula<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="530" align="center"><br/><br/><img src=""  width="500"  >
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}
					$pdf->writeHTMLCell(
						$w = 0, $h = 0, $x = '', $y = '',
						$html2I, $border = 0, $ln = 1, $fill = 0,
						$reseth = true, $align = 'top', $autopadding = true);
				
						
						$pdf->Ln(2);
				$existeII = '../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_1.png';
				$existeII1 = '../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_1.jpg';
				$existeII2 = '../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_1.jpeg';
					if (file_exists($existeII)) {
					$html3 = 'Tarjeta de operación<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="265" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_1.png"  width="180"  ></td>
					<td  width="265" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_2.png"  width="180"  >
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}else if (file_exists($existeII1)) {
						$html3 = 'Tarjeta de operación<br><table width="100%" border="0.1"  >
		   
						<tr>
						<td  width="265" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_1.jpg"  width="180"  ></td>
						<td  width="265" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_2.jpg"  width="180"  >
						<br/>
			
						<font size="7"></font> </td>	
						
						</tr>
						
						
						</table>
						
						';
						}
						else if (file_exists($existeII2)) {
							$html3 = 'Tarjeta de operación<br><table width="100%" border="0.1"  >
			   
							<tr>
							<td  width="265" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_1.jpeg"  width="180"  ></td>
							<td  width="265" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/TARJETA DE OPERACION/tarjetaoperacion'.$_REQUEST['id'].'_2.jpeg"  width="180"  >
							<br/>
				
							<font size="7"></font> </td>	
							
							</tr>
							
							
							</table>
							
							';
							}else{
						$html3 = 'Tarjeta de operación<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="530" align="center"><br/><br/><img src=""  width="500"  >
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}
					$pdf->writeHTMLCell(
						$w = 0, $h = 0, $x = '', $y = '',
						$html3, $border = 0, $ln = 1, $fill = 0,
						$reseth = true, $align = 'top', $autopadding = true);

						$alturaActividades = $pdf->GetY();
						//var_dump($alturaActividades);	
						if($alturaActividades > 210){
							$pdf->AddPage();
							$pdf->Ln(20);

						}
				$existeIII = '../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO TECNOMECANICA Y DE GASES/tecnomecanicaygases'.$_REQUEST['id'].'.png';
				$existeIII1 = '../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO TECNOMECANICA Y DE GASES/tecnomecanicaygases'.$_REQUEST['id'].'.jpg';
				$existeIII2 = '../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO TECNOMECANICA Y DE GASES/tecnomecanicaygases'.$_REQUEST['id'].'.jpeg';
					if (file_exists($existeIII)) {
					$html4 = 'Certificado de revisión tecnomecánica y de gases<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="530" heigth="200" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO TECNOMECANICA Y DE GASES/tecnomecanicaygases'.$_REQUEST['id'].'.png"  width="200"  heigth="200" >
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}
					else if (file_exists($existeIII1)) {
						$html4 = 'Certificado de revisión tecnomecánica y de gases<br><table width="100%" border="0.1"  >
		   
						<tr>
						<td  width="530" heigth="200" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO TECNOMECANICA Y DE GASES/tecnomecanicaygases'.$_REQUEST['id'].'.jpg"  width="200"  heigth="200" >
						<br/>
			
						<font size="7"></font> </td>	
						
						</tr>
						
						
						</table>
						
						';
						}
						else if (file_exists($existeIII2)) {
							$html4 = 'Certificado de revisión tecnomecánica y de gases<br><table width="100%" border="0.1"  >
			   
							<tr>
							<td  width="530" heigth="200" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO TECNOMECANICA Y DE GASES/tecnomecanicaygases'.$_REQUEST['id'].'.jpeg"  width="200"  heigth="200" >
							
							<br/>
				
							<font size="7"></font> </td>	
							
							</tr>
							
							
							</table>
							
							';
							}else{
						$html4 = 'Certificado de revisión tecnomecánica y de gases<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="530" align="center"><br/><br/><img src=""  width="500"  >
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}
					$pdf->writeHTMLCell(
						$w = 0, $h = 0, $x = '', $y = '',
						$html4, $border = 0, $ln = 1, $fill = 0,
						$reseth = true, $align = 'top', $autopadding = true);
						
						$alturaActividadesI = $pdf->GetY();
						//var_dump($alturaActividades);	
						if($alturaActividadesI > 210){
							$pdf->AddPage();
							$pdf->Ln(20);

						}
						//$pdf->AddPage();	
						//$pdf->Ln(8);
						$existePOLIZA = '../../img/emp-'.$datos["id_empresa"].'/POLIZA EXTRACONTRACTUAL/polizaextracontractual'.$_REQUEST['id'].'.png';
						$existePOLIZAIV1 = '../../img/emp-'.$datos["id_empresa"].'/POLIZA EXTRACONTRACTUAL/polizaextracontractual'.$_REQUEST['id'].'.jpg';
						$existePOLIZAIV2 = '../../img/emp-'.$datos["id_empresa"].'/POLIZA EXTRACONTRACTUAL/polizaextracontractual'.$_REQUEST['id'].'.jpeg';
						// var_dump(file_exists($existePOLIZAIV2));
						if (file_exists($existePOLIZA)) {
							//var_dump($existePOLIZA);
							//var_dump('../../img/emp-'.$datos["id_empresa"].'/POLIZA EXTRACONTRACTUAL/polizaextracontractual'.$_REQUEST['id'].'.png');
						$html5 = 'Poliza extracontractual<br><table width="100%" border="0.1"  >
		   
						<tr>
						<td  width="530"  align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/POLIZA EXTRACONTRACTUAL/polizaextracontractual'.$_REQUEST['id'].'.png"  width="300"   >
						<br/>
			
						<font size="7"></font> </td>	
						
						</tr>
						
						
						</table>
						
						';
						}
						else if (file_exists($existePOLIZAIV1)) {
							$html5 = 'Poliza extracontractual<br><table width="100%" border="0.1"  >
			   
							<tr>
							<td  width="530" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/POLIZA EXTRACONTRACTUAL/polizaextracontractual'.$_REQUEST['id'].'.jpg"  width="400"  >
							<br/>
				
							<font size="7"></font> </td>	
							
							</tr>
							
							
							</table>
							
							';
							}
							else if (file_exists($existePOLIZAIV2)) {
								$html5 = 'Poliza extracontractual<br><table width="100%" border="0.1"  >
				   
								<tr>
								<td  width="530" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/POLIZA EXTRACONTRACTUAL/polizaextracontractual'.$_REQUEST['id'].'.jpeg"  width="400"  >
								<br/>
					
								<font size="7"></font> </td>	
								
								</tr>
								
								
								</table>
								
								';
								}
								else{
							$html5 = 'Poliza extracontractual<br><table width="100%" border="0.1"  >
		   
						<tr>
						<td  width="530" align="center"><br/><br/><img src=""  width="500"  >
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
			
						<font size="7"></font> </td>	
						
						</tr>
						
						
						</table>
						
						';
						}
						$pdf->writeHTMLCell(
							$w = 0, $h = 0, $x = '', $y = '',
							$html5, $border = 0, $ln = 1, $fill = 0,
							$reseth = true, $align = 'top', $autopadding = true);
						
							$existeV = '../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO INSPECCION GAS NATURAL/inpecciongasnatural'.$_REQUEST['id'].'.png';
							$existeV1 = '../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO INSPECCION GAS NATURAL/inpecciongasnatural'.$_REQUEST['id'].'.jpg';
							$existeV2 = '../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO INSPECCION GAS NATURAL/inpecciongasnatural'.$_REQUEST['id'].'.jpeg';
					
// var_dump($existeV2);
$alturaActividadesII = $pdf->GetY();
//var_dump($alturaActividades);	
if($alturaActividadesII > 210){
	$pdf->AddPage();
	$pdf->Ln(20);

}

							if (file_exists($existeV)) {
					$html5 = 'Certificado inspección gas natural<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="530" heigth="400" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO INSPECCION GAS NATURAL/inpecciongasnatural'.$_REQUEST['id'].'.png" width="200"  heigth="350"  >
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}else if (file_exists($existeIV1)) {
						$html5 = 'Certificado inspección gas natural<br><table width="100%" border="0.1"  >
		   
						<tr>
						<td  width="530" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO INSPECCION GAS NATURAL/inpecciongasnatural'.$_REQUEST['id'].'.jpg"  width="200"  >
						<br/>
			
						<font size="7"></font> </td>	
						
						</tr>
						
						
						</table>
						
						';
						}
						else if (file_exists($existeV2)) {
							$html5 = 'Certificado inspección gas natural<br><table width="100%" border="0.1"  >
			   
							<tr>
							<td  width="530" heigth="50" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/CERTIFICADO INSPECCION GAS NATURAL/inpecciongasnatural'.$_REQUEST['id'].'.jpeg"  width="200"  >
							<br/>
				
							<font size="7"></font> </td>	
							
							</tr>
							
							
							</table>
							
							';
							}else{
						$html5 = 'Certificado inspección gas natural<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="530" align="center"><br/><br/><img src=""  width="500"  >
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}
					$pdf->writeHTMLCell(
						$w = 0, $h = 0, $x = '', $y = '',
						$html5, $border = 0, $ln = 1, $fill = 0,
						$reseth = true, $align = 'top', $autopadding = true);

						// $pdf->AddPage();
						// var_dump($existeV2);
$alturaActividadesIII = $pdf->GetY();
//var_dump($alturaActividades);	
if($alturaActividadesIII > 210){
	$pdf->AddPage();
	$pdf->Ln(20);

}
						$existeVI = '../../img/emp-'.$datos["id_empresa"].'/SOAT/soat'.$_REQUEST['id'].'.png';
						$existeVII = '../../img/emp-'.$datos["id_empresa"].'/SOAT/soat'.$_REQUEST['id'].'.jpg';
						$existeVIII = '../../img/emp-'.$datos["id_empresa"].'/SOAT/soat'.$_REQUEST['id'].'.jpeg';
					if (file_exists($existeVI)) {
					$html6 = 'SOAT<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="530" heigth="400" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/SOAT/soat'.$_REQUEST['id'].'.png"  width="300"  heigth="300" >
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}
					
					else if(file_exists($existeVII)) {
						$html6 = 'SOAT<br><table width="100%" border="0.1"  >
		   
						<tr>
						<td  width="530" heigth="400" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/SOAT/soat'.$_REQUEST['id'].'.jpg"  width="300"  heigth="300" >
						<br/>
			
						<font size="7"></font> </td>	
						
						</tr>
						
						
						</table>
						
						';
						}
						else if(file_exists($existeVIII)) {
							$html6 = 'SOAT<br><table width="100%" border="0.1"  >
			   
							<tr>
							<td  width="530" heigth="400" align="center"><br/><br/><img src="../../img/emp-'.$datos["id_empresa"].'/SOAT/soat'.$_REQUEST['id'].'.jpeg"  width="300"  heigth="300" >
							<br/>
				
							<font size="7"></font> </td>	
							
							</tr>
							
							
							</table>
							
							';
							}
					else{
						$html6 = 'SOAT<br><table width="100%" border="0.1"  >
	   
					<tr>
					<td  width="530" align="center"><br/><br/><img src=""  width="500"  >
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
		
					<font size="7"></font> </td>	
					
					</tr>
					
					
					</table>
					
					';
					}
					$pdf->writeHTMLCell(
						$w = 0, $h = 0, $x = '', $y = '',
						$html6, $border = 0, $ln = 1, $fill = 0,
						$reseth = true, $align = 'top', $autopadding = true);
						// $pdf->Output('Fichatecnica'.$_REQUEST['id'].'.pdf', 'I');

$pdf->Output('example_003.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+