function nombre_ok(){
	var nombre = document.getElementById('nombre');
	var nombre_valido = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
	var error_nombre= document.getElementById('error_nombre');
	let ok = false;

	if (nombre_valido.test(nombre.value)) {
		ok = true;
		error_nombre.innerHTML = "";
	}
	else if (nombre.value == 0) {
		error_nombre.innerHTML = "Rellene este campo";
	}
	else {
		error_nombre.innerHTML = "Nombre inválido";
	}
	return ok;
}

function apellido1_ok(){
	var nombre = document.getElementById('primer_apellido');
	var nombre_valido = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
	var error_nombre= document.getElementById('error_apellido');
	let ok = false;

	if (nombre_valido.test(nombre.value)) {
		ok = true;
		error_nombre.innerHTML = "";
	}
	else if (nombre.value == 0) {
		error_nombre.innerHTML = "Rellene este campo";
	}
	else {
		error_nombre.innerHTML = "Apellido inválido";
	}
	return ok;
}

function apellido2_ok(){
	var nombre = document.getElementById('segundo_apellido');
	var nombre_valido = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
	var error_nombre= document.getElementById('error_apellido');
	let ok = false;

	if (nombre_valido.test(nombre.value)) {
		ok = true;
		error_nombre.innerHTML = "";
	}
	else if (nombre.value == 0) {
		error_nombre.innerHTML = "Rellene este campo";
	}
	else {
		error_nombre.innerHTML = "Apellido inválido";
	}
	return ok;
}

function mail_ok() {
	var mail = document.getElementById('email');
	var mail_valido =  /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
	var error_mail = document.getElementById('error_mail');
	let ok = false;

	if (mail_valido.test(mail.value)) {
		error_mail.innerHTML = "";
		ok = true;
	}else if (mail.value == 0) {
		error_mail.innerHTML = "Rellene este campo";
	}
	else {
		error_mail.innerHTML = "Email inválido";
	}
	return ok;
} 


function contrasenia_ok() {
	var contrasenia = document.getElementById('password');
	var contrasenia_valida = /^[\s\S]{4,8}$/;
	var error_contrasenia = document.getElementById('error_contrasenia');
	let ok = false;

	
	if (contrasenia_valida.test(contrasenia.value) ) {
		error_contrasenia.innerHTML = "";
		ok = true
	}
	else if (contrasenia.value == 0) {
		error_contrasenia.innerHTML = "Rellene este campo";
	}
	else {	
		error_contrasenia.innerHTML = "Debe tener entre 4 y 8 caracteres";
	}

	return ok;
}

function todo_ok() {
	var formulario = document.getElementById("form");
	let nombreok = nombre_ok();
	let apellido1ok = apellido1_ok();
	let apellido2ok = apellido2_ok();
	let mailok = mail_ok();
	let contraseniaok = contrasenia_ok();
	
	if (nombreok && apellido1ok && apellido2ok && mailok && contraseniaok) {
		alert('Registro completado con éxito!')
		formulario.reset();
		return true;
	}
	else {
		return false;
	}
}