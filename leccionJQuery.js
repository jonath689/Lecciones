//**********************************************************************************
//**********************************************************************************

//							    JQUERY TUTORIAL

//**********************************************************************************
//**********************************************************************************

/* 
	Cuando se ha cargado el documento podemos usar JQuery, por ello se utilizam
	algunos statements vistos acontinuacion:
*/

//hasta la version 1.7 se hacia asi: 

$(document).ready(function(){
	//codigo
}); 


//Ahora se hace
$(document).on('ready',function(){

	//**********************************************************************************
	// SELECTORES
	//**********************************************************************************
	
	//Puedo seleccionar cualquier elemento HTML mediante los selectores CSS


	// selector # => id

	//.text() Cambiar texto dentro de HTML como ASCII (no es como .innerHTML)
	$("#p1").text("<p>Anadiendo Texto</p>"); //imprime incluso los tags!

	//.css() Cambiar css, no importa si no existia antes lo crea desde ceros
	$("#p1").css("font-family","verdana");
	$("#p1").css("color","red");
	$("#p1").css("font-size","20px");

	//añadir texto puro antes o despues de los tags
	$("#parrafo2").before("texto al comienzo");
	$("#parrafo2").after("texto al final");



	// selector . => class

	//.html() Cambia el texto e interpreta las etiquetas HTML (como en javascript .innerHTML)
	$(".a1").html("<strong>Google</strong>");
	
	//.attr() AÑADE o CAMBIA un atributo HTML
	$(".a1").attr("href","http://www.google.com");



	// selector div, p, aside.. => nombre elemento  +  selector . => class

	//Otra forma de usar css
	$("div.div1").css({
		'background-color':'rgb(81,213,170)',
	});

	//añade el elemento inmediatamente antes del elemento seleccionado (no como hijo)
	$("div.div1").prepend("<p>elemento anadido al comienzo</p>");
	//añade el elemento inmediatamente despues del elemento seleccionado (no como hijo)
	$("div.div1").append("<p>elemento anadido al final</p>");



	// selector div => nombre elemento  +  selector . => class + selector article => nombre elemento

	$("div.div2 article").css({
		'background-color':'rgb(95,214,98)',
	});


	// multiples selecciones

	//envolvemos los elementos con ciertos tags o texto, en este caso para que se vea cursivo
	$("#parrafo1, #parrafo2, span").wrap("<i></i>");



	//**********************************************************************************
	// VARIABLES / GESTIONANDO COLECCIONES CON JQUERY
	//**********************************************************************************

	// Guardar elemento(s) en una variable LOCAL, para usarlo en eventos se usa GLOBAL
	var seleccion = $(".div1, .div2, .div3, .div4");

	//si el elemento existe
	//if(seleccion)

	//si la seleccion tiene al menos un elemento
	if(seleccion.length > 0)
		console.log('Existen: ' + seleccion.length + " elemento(s) '.div[1-4]'");
	else
		console.log('No existe el elemento seleccionado');

	
	//Selecciona el/los elemento(s) de la variable donde se excluye lo que se especifica en el selector
	seleccion.not(".div1, .div2, .div3").text("No soy .div1 ni .div2 ni .div3!");

	//Selecciona el/los elemento(s) de la variable donde se contenga lo que se especifica en el selector
	seleccion.has("#paragraph").text("este elemento tiene un #paragraph en su contenido");



	var seleccionLista = $(".lista");

	//Primer elemento que contiene la variable
	seleccionLista.first().html("<strong>Primer elemento en lista</strong>");

	//Segundo de la lista
	seleccionLista.eq(1).text("Segundo!");

	//Tercero
	seleccionLista.eq(2).text("Tercero!");

	//Ultimo elemento que contiene la variable
	seleccionLista.last().text("Ultimo elemento en lista");



	//**********************************************************************************
	// GETTERS / SETTERS (ATTR 7 HTML)
	//**********************************************************************************
	
	// ASIGNAR el contenido de un elemento a una variable (eso incluye los subelementos y sus tags HTML!)
	var textoParrafo = $("#p2").html(); //<strong>Hola nuevamente!</strong>
	console.log("Contenido de #p2 es: " + textoParrafo);

	/* OBTENER el texto de una propiedad especifica de un elemento (si el selector arroja varios 
	  se selecciona el primer elemento de los resultados) */
	var textoAtributoClass = $("#p2").attr("class");
	console.log("Contenido del atributo class de #p2 es: " + textoAtributoClass);

	//ASIGNAR el contenido de una propiedad, class="" en #p2, exista o no exista
	$("#p2").attr("class","changed_class");

	//REMOVER una propiedad especifica
	$("#p2").removeAttr('class');



	//**********************************************************************************
	// CSS
	//**********************************************************************************
	
	//Objeto JSON
	var cssDIV6 = {
		'background-color' : 'rgb(142,221,164)',
		'color' : 'rgb(49,159,80)',
		'padding' : '15px',
	}

	//Usar el objeto JSON para agregar varias propiedades CSS
	$("#div6").css(cssDIV6);

	//OBTENER el valor de una propiedad CSS
	var backgroundColorDIV5 = $("#div5").css('background-color');

	//Comparar el valor de una variable
	// IMPORTANTE: A pesar de que el color en CSS se ha guardado en HEXADECIMAL
	//             la variable ha leido el color en formato RGB
	if(backgroundColorDIV5 === 'rgb(255, 255, 255)')
		console.log("background de div5 es un blanco puro");
	else
		console.log("background de div5 no es un blanco puro");



	//**********************************************************************************
	// Dimensiones
	//**********************************************************************************
	
	// guarda en enteros
	var altoImagen = $("#imagen1").height();
	var anchoImagen = $("#imagen1").width();

	console.log("alto: " + altoImagen + ", ancho: " + anchoImagen);

	// guarda en string
	var altoImagenUnidad = $("#imagen1").css("height");
	var anchoImagenUnidad = $("#imagen1").css("width");
  
	console.log("alto: " + altoImagenUnidad + ", ancho: " + anchoImagenUnidad);

	// modifica altura / ancho
	$("#imagen1").height(altoImagen / 2);
	$("#imagen1").width(anchoImagen / 2);

	/*The .position() method allows us to retrieve the current position of an element 
	relative to the offset parent. Contrast this with .offset(), which retrieves the 
	current position relative to the document.*/
	var posicionP1 = $("#div10 p").position();
	var posLeft1 = posicionP1.left;
	var posTop1 = posicionP1.top;

	console.log("posX (#div10 p): " + posLeft1 + ", posY (#div10 p): " + posTop1);

	var posicionP2 = $("#div10 p").offset();
	var posLeft2 = posicionP2.left;
	var posTop2 = posicionP2.top;

	console.log("posX (#div10 p): " + posLeft2 + ", posY (#div10 p): " + posTop2);



	//**********************************************************************************
	// Eventos / Manejo de los class
	//**********************************************************************************

	//Existe un background-color definido para el class .div7, al hacer click sobre #div7
	//se le agrega este class y se define automaticamente su CSS gracias al class asignado
	$("#div7").click(function(){
		$("#div7").addClass("div7");
	});

	//doble click elimina el class
	$("#div7").dblclick(function(){
		$("#div7").removeClass();
	});

    //toggleClass agrega o elimina el class pasado por parametro dependiendo de si lo tiene o no
	$("#div8").click(function(){
		$("#div8").toggleClass("div8");

		if( $("#div8").hasClass("div8") )
			$("#div8").text("Ahora tengo la propiedad class (div8)");
		else
			$("#div8").text("No tengo la propiedad class (div8)");
	});

	$("#link1").click(function(evento){

		//preventDefault: the default action of the event will not be triggered.
		//Cancel the default action (navigation) of the click.
		evento.preventDefault();

		//$(this) hace referencia al objeto que lanzo este evento
		var link = $(this).attr("href");

		alert("Esta dejando el sitio...");

		//Returns and sets the entire URL
		location.href = link;
	});


	//**********************************************************************************
	// Crear, copiar y remover elementos
	//**********************************************************************************

	$("#boton1").click(function(){

		//Selecciono el elemento y selecciono su destino
		$("#lista1 li:first").appendTo("#lista1 li:last");
	});

	$("#boton2").click(function(){

		//Selecciono el elemento y le agrego al final otro elemento
		$("#lista1 li:last").append($("#lista1 li:first"));
	});
	http://www.youtube.com/watch?v=jtml39Mb7BU
	$("#boton3").click(function(){
		$("#div13").append("<ol id='lista1'>");
		$("#div13").append("<li class='elementos1'>Elemento 1</li>");
		$("#div13").append("<li class='elementos2'>Elemento 2</li>");
		$("#div13").append("<li class='elementos3'>Elemento 3</li>");
		$("#div13").append("<li class='elementos4'>Elemento 4</li>");
		$("#div13").append("</ol>");
	});
});


//forma comprimida
$(function(){
	//Codigo
});