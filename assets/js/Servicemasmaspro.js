var iCntA = 0;
var tinputA = 0;
var containerA="#contenedor_detll_pedido";



function elminarA(){
	// buscar = "infoA"+id;
	// divs = $("#div_items").val();
					
	// var patt = new RegExp(buscar);
	// var respuesta = patt.test(divs);
	
	// if(respuesta == true)
	// {
	// 	divs_final = divs.replace(","+buscar, "");
	// 	$("#div_items").val(divs_final);
	// }
	 	orden = $("#orden").val();
 	// console.log(orden);
	$('.masmas'+orden).remove();
	
	contarA = $('div[id^=div_detalle_pedido]').length;
	tcontarA = contarA;
	$('#totalA').html("Total "+tcontarA);
	$('#orden').val(tcontarA);
	$('#orden').val(tcontarA);
	console.log(tcontarA);
	if (tcontarA == 0) {
		$(containerA).empty();
		$('#totalA').empty();
		$('#btAddA').removeAttr('disabled');
		
	}

	if (tcontarA<50) {
		$('#btAddA').removeAttr('disabled');
		$('#limiteA').remove();
	}
	
	
}

// var campos_max   = 10;   //max de 10 campos

// var x = 0;
// $('#add_field').click (function(e) {
// 		e.preventDefault();     //prevenir novos clicks
// 		if (x < campos_max) {
// 				$('#listas').append('<input type="text" id="campo'+x+'" name="campo[]">\
// 						<a href="#" class="remover_campo">Remover</a>\
// 						');
// 				x++;
// 		}
// 	});
// Remover o div anterior
// $('#listas').on("click",".remover_campo",function(e) {
// 		e.preventDefault();
// 		$(this).parent('div').remove();
// 		x--;
// });

function Agregaropcion(e){
//opcion_num = x + 1 ;
	//if (x < campos_max) {
		// console.log(e);
			o='';
			if(e >= 10){
				o =  'd'+e;
				input = $('input[id^=campod'+e+']').length;
			}
			else{
				o=e; 
				input = $('input[id^=campo'+e+']').length;
			}
		
		inputI = input + 1;
		// console.log('me va a contar '+  inputI);
		buscarcampo = "infoCampo"+'-'+o+'-'+inputI;
				divscampo = $("#div_itemscampos"+e+"").val();
				var pattcampo = new RegExp(buscarcampo);
				var respuestacampo = pattcampo.test(divs);
			
				if(respuestacampo == false)
				{
					divs_finalcampo = divscampo + "," + buscarcampo;
					$("#div_itemscampos"+e+"").val(divs_finalcampo);
				}
		$("#x"+e+"").val(tinputA);
			$('#listas'+e+'').append('<div id="divcampo'+e+'-'+inputI+'" style="float: left;   background-color: #04a98a54; padding: 15px; margin: 15px; display: inline-block; float: left;"><label>Opcion '+inputI+'</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="sincheck'+e+'" id="correcta'+e+'-'+inputI+'" onchange="correcta(this.id , this.value);" value=""><input type="hidden"  id="correctaI'+e+'-'+inputI+'"  value="0"><label>Correcta</label><input type="text" id="campo'+o+'-'+inputI+'" name="campo[]"></div>');
			//x++;
	//}
	
}



function Eliminaropcion(e){
	if(e > 9){
		input = $('input[id^=campod'+e+']').length;
	}else{
		input = $('input[id^=campo'+e+']').length;
	}
		
	
		// console.log('me va a mostrar eliminada '+  input+' e'+ e);
	// e.preventDefault();
	 el = document.getElementById('divcampo'+e+'-'+input+'');
el.remove();
	// x--;
}


function correcta(id, value){

	var valores = id.split('-');
  nombreimagen = valores[0];
  operador = valores[1];
 
  checkC = $('input[id^='+nombreimagen+']').length;
  nombreimagenI = nombreimagen.replace("correcta","clase");
  nombreimagenII = nombreimagenI.replace("clase","");
  nombreimagenIII = id.replace("correcta","correctaI");
  checkeados = $(".sincheck"+nombreimagenII+":checked").length;
  valSelecM = $("#"+nombreimagenI).val();
//   console.log(nombreimagenI);
//   console.log(checkeados);
 // console.log(nombreimagenIII);

	check = document.getElementById(id);
	 if (check.checked == true)
	 {
		
	 	$("#"+nombreimagenIII).val("1");

	 	}
	 else if(check.checked  == false)
	 {
	 	$("#"+nombreimagenIII).val("0");

	 }	




  if(checkeados > 1 && valSelecM == 'No'){
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: "No es seleccion multiple, solo debe elegir una opción correcta. Debe cambiar la opción de selección multiple o deseleccione  opciones correctas hasta quedar unica",
	   // footer: '<a href>Why do I have this issue?</a>'
	  })
	  //alert("Tiene que seleccionar una opción de la pregunta"+ordenpreguntax+"");	  
	  
	  $("#btAddA").prop('disabled', true);
	  $("#formC").prop('disabled', true);

  }else{
	$("#btAddA").prop('disabled', false);
	$("#formC").prop('disabled', false);
  }
	//console.log(nombreimagenII);
	
	
	
	
  
  }

function correctaI(id, value){

	var valores = id.split('-');
  nombreimagen = valores[0];
  operador = valores[1];
  nombreimagenI = nombreimagen.replace("clase","");
  //console.log(nombreimagenI);
  checkeados = $(".sincheck"+nombreimagenI+":checked").length;
  valSelecM = $("#"+id).val();
   //console.log(checkeados);
   

  if(checkeados > 1 && valSelecM == 'No'){
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: "No es seleccion multiple, solo debe elegir una opción correcta. Debe cambiar la opción de selección multiple o deseleccione  opciones correctas hasta quedar unica",
	   // footer: '<a href>Why do I have this issue?</a>'
	  })
	  //alert("Tiene que seleccionar una opción de la pregunta"+ordenpreguntax+"");	  
	  
	  $("#btAddA").prop('disabled', true);
	  $("#formC").prop('disabled', true);

  }else{
	$("#btAddA").prop('disabled', false);
	$("#formC").prop('disabled', false);
  }

  
  }
