//Usuario
function compararUsuario(){
	var usuario = document.getElementById("usuario");

	$.get("../public/verificarUsuario.php",{"usuario":usuario.value},recibirUsuario);
}

function recibirUsuario(respuesta){
	var elemento=document.getElementById("validarUser");
	elemento.innerHTML=respuesta;
	verificarUsuario();
}

function verificarUsuario(){
	var usuario = document.getElementById("usuario");
	var mensaje = document.getElementById("validarUser");
	var boton = document.getElementById("registrar");
    
	if(mensaje.innerHTML != ""){
		usuario.style.backgroundColor='#FF8888';
		mensaje.style.display='';
		boton.disabled=true;
	}else{
		usuario.style.backgroundColor='#FFF';
		mensaje.style.display='none';
		boton.disabled=false;
	}
}

//Correo Electronico
function compararCorreo(){
	var correo = document.getElementById("correo_electronico");

	$.get("../public/verificarCorreo.php",{"correo_electronico":correo.value},recibirCorreo);
}

function recibirCorreo(respuesta){
	var elemento=document.getElementById("validarCorreo");
	elemento.innerHTML=respuesta;
	verificarCorreo();
}

function verificarCorreo(){
	var correo = document.getElementById("correo_electronico");
	var mensaje = document.getElementById("validarCorreo");
	var boton = document.getElementById("registrar");
    
	if(mensaje.innerHTML != ""){
		correo.style.backgroundColor='#FF8888';
		mensaje.style.display='';
		boton.disabled=true;
	}else{
		correo.style.backgroundColor='#FFF';
		mensaje.style.display='none';
		boton.disabled=false;
	}
}