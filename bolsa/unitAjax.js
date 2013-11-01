// JavaScript Document

// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {

	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
    }

    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//Función para recoger los datos del formulario y enviarlos por post
function regPersona(){

  //div donde se mostrará lo resultados
  var divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  var nom=document.getElementById('name').value;
  var mail=document.getElementById('email').value;
  var atrab='2';//document.getElementById('areaTrab').value;
  var com=document.getElementById('comments').value;

  //instanciamos el objetoAjax
  ajax=objetoAjax();

  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registroPersona.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("name="+nom+"&email="+mail+"&areaTrab="+atrab+"&comments="+com)
    LimpiarCampos();
}



//función para limpiar los campos
function LimpiarCampos(){
  document.getElementById('name').value;
  document.getElementById('email').value;
  document.getElementById('areaTrab').value;
  document.getElementById('comments').value;
  }