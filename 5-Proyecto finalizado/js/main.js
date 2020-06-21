$(buscar_datos());
$(buscar_asistencia());

function buscar_datos(consulta){
	$.ajax({
		url: 'buscar.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});

function buscar_asistencia(asistencia){
	$.ajax({
		url: 'buscar_asistencia.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {asistencia: asistencia},
	})
	.done(function(respuesta){
		$("#datos_asistencia").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(asis).on('keyup','#busqueda_asistencia', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_asistencia(valor);
	}else{
		buscar_asitencia();
	}
});