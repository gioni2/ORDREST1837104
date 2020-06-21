function SoloNumeros(elEvento){
	var permitidos = "0123456789.,";
	var teclas_espaciales = [8, 37,39,3,13];
	var evento = elEvento || window.event;
	var codigoCaracter = evento.charCode || evento.KeyCode;
	var caracter = String.fromCharCode(codigoCaracter);
	var tecla_espacial = false; for (var i in teclas_espaciales){
		if (codigoCaracter == teclas_espaciales[i]) {
			tecla_espacial = true;
break;

		}
	}

	if(permitidos.indexOf(caracter) == -1){
		if (tecla_espacial == false){
			alert('Este campo solo acepta numeros, por favor verifique e intente nuevamente');
		}
	}

	return permitidos.indexOf(caracter) != -1 || tecla_espacial;
}


function SoloLetras(elEvento){
	var permitidos = "abcdefghijklmnñopkqrstuvwxyzABCDEFGHIJKLMNÑOPKRSTUVWYZ.,";
	var teclas_espaciales = [8, 37,39,3,13];
	var evento = elEvento || window.event;
	var codigoCaracter = evento.charCode || evento.KeyCode;
	var caracter = String.fromCharCode(codigoCaracter);
	var tecla_espacial = false; for (var i in teclas_espaciales){
		if (codigoCaracter == teclas_espaciales[i]) {
			tecla_espacial = true;
break;

		}
	}

	if(permitidos.indexOf(caracter) == -1){
		if (tecla_espacial == false){
			alert('Este campo solo acepta letras, por favor verifique e intente nuevamente');
		}
	}

	return permitidos.indexOf(caracter) != -1 || tecla_espacial;
}