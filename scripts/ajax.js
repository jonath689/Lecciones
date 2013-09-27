//**********************************************************************************
//USANDO AJAX (JAVASCRIPT)
//**********************************************************************************

function mostrarSugerencia(textoEscrito)
{
	/* 
	If the input field is empty (textoEscrito.length==0), the function clears the content of the 
	campoSugerencia placeholder and exits the function.
	*/
	if (textoEscrito.length==0)
	 { 
	  document.getElementById("campoSugerencia").innerHTML="";
	  return;
	 }
	
	/*
	If the input field is not empty, the mostrarSugerencia() function executes the following:

	1. Create an XMLHttpRequest object
	2. Create the function to be executed when the server response is ready
	3. Send the request off to a file on the server
	4. Notice that a parameter (dato) is added to the URL (with the content of the input field)
	*/
	if (window.XMLHttpRequest)
	 {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	 }
	else
	 {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	
	xmlhttp.onreadystatechange=function()
	{
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    	document.getElementById("campoSugerencia").innerHTML=xmlhttp.responseText;
	    }
	}
	xmlhttp.open("GET","sugerenciaAJAX.php?dato=" + textoEscrito,true);
	xmlhttp.send();
}