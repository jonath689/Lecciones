//**********************************************************************************
//**********************************************************************************

//							JAVASCRIPT TUTORIAL

//**********************************************************************************
//**********************************************************************************


//**********************************************************************************
// VARIABLES
//**********************************************************************************

algo = ":)"; // sin var la variable automaticamente pasa a ser GLOBAL
var vacio; // var indica variables LOCALES
vacio = "algo";
var texto = 'texto1';
var numero = 5;
var flotante = 3.14;
var notacionCientifica1 = 123e5;  // 12300000 (5 ceros)
var notacionCientifica2 =123e-5;  // 0.00123
var verdadero = true;
var falso = false;

//document es el objeto de Javascript que contiene a todos los elementos que se han creado con HTML
var elementoHTML = document.getElementById("demo1"); 

// Declaracion de multiples variables
var apellido = "Perez", edad=25, trabajo="Ingeniero";

var apellido = "Sanchez", 
    edad=20, 
    trabajo="Secretaria";

// Declarando el tipo de variable como objeto
var nombre = new String;
var x =      new Number;
var y =      new Boolean;
var carros = new Array;
var persona = new Object;

// Concatenar y salto de linea
texto = texto + " texto2 " + 2 + "\n";

// Declarando comilla sencilla o doble dentro de un string, document.write imprime
var comillaSimple = "Se llama 'Johnny'";
	document.write(comillaSimple + "<br>");
var comillaDoble = 'Se llama "Johnny"';
	document.write(comillaDoble + "<br>");

//aritmetica
var num = 10;
var suma = num + 3;
var resta = num - 1;
var division = 90 / num;
var multiplicacion = num * num;

// incremento / decremento en uno
suma++;
resta--;

//asignaciones
numero += 3;
numero -= 3;
numero *= 2;
numero /= 2;

// set null
elementoHTML = null;



//**********************************************************************************
// IMPRIMIR
//**********************************************************************************

//Imprimir o crear un elemento HTML
document.write("<h3>Titulo imprimido</h3>");
document.write("<p>Parrafo imprimido</p>");

//Imprimir en la consola (en Chrome F12 -> Console, en Firefox click derecho -> Inspeccionar elemento)
console.log("Imprimiendo en la consola!");



//**********************************************************************************
// CONDICIONALES
//**********************************************************************************
var edad = 45;

if (edad > 0 && edad < 16) 
	x = "Muy joven";
else if(edad > 16 && edad <= 40)
	x = "Bien!"; 
else
	x = "Muy Viejo";

// Otra forma de asignacion, si (condicion = true) ? haced esto : de lo contrario esto
voteable = ( edad < 18 ) ? "Muy joven" : "Nada mal";



//**********************************************************************************
// ARRAYS
//**********************************************************************************

//Representaciones de los Arrays

//Representacion 1: declarandolo y agregandole elementos
var carros = new Array();
carros[0] = "Mazda";
carros[1] = "Volvo";
carros[2] = "BMW";

//Representacion 2: creandolo y agregandole elementos directamente
var carros = new Array("Mazda","Volvo","BMW");

//Representacion 3: crear el arreglo y asignarle todos los elementos al tiempo
var carros = new Array();
carros = ["Mazda","Volvo","BMW"];

//Representacion 4: Crear array en una variable global
numeros = [1,2,3,4];

//Representacion 5: Crear array y agregarle los elementos como una pila
var ciudades = new Array();
ciudades.push("Londres");
ciudades.push("Nueva York");
ciudades.push("Paris");
ciudades.push("Tokyo");

//Representacion 6: Arreglo bidimensional o n-mensional
var elementosB = [[10,14,17,19],[23,26,29],[37,37,39],4,5,"6","7",['a','b','c']];



//**********************************************************************************
// OBJETOS
//**********************************************************************************

//NOTA: No exite polimorfismo ni herencia en javascript pero se puede simular


//Crear objeto con atributos definidos
Persona = new Object( );
Persona.nombre = "Maria";
Persona.apellido = "Perez";
Persona.edad = 30;
Persona.colorOjos = "azules";

//Representaciones del mismo objeto
var Persona = {nombre:"Juan", apellido:"Reyes", id:5566};
var Persona = {
		nombre : "John",
		apellido  : "Doe",
		id        :  5566
};

//acceso a atributos
nombre = Persona.nombre;
nombre = Persona["nombre"];



//Crear un objeto con una metodo costructor
var Gato = new Gato( "Tom", "Blanco", 2 );

function Gato( nombreG, colorG, edadG )
{
	this.nombreG = nombreG;
	this.colorG = colorG;
	this.edadG = edadG;
	this.maullar = function(intensidad){
		document.write(this.nombreG + " acaba de hacer miauuu!!, el gato maulla " + intensidad);
	};
}

document.write("Nombre: " + Gato.nombreG + ",  Color: " + Gato.colorG + ",  Edad: " + Gato.edadG + "</br>");
Gato.maullar("fuerte");

document.write("</br></br>");



//Objeto String
var ObjetoString = new String("Hola Mundo"); document.write("String => " + ObjetoString + "</br>");

// Atributo del objeto String
document.write("Tamano String => " + ObjetoString.length + "</br>");

//Metodo del objeto String
document.write("Posicion primer 'n' => " + ObjetoString.indexOf("n") + "</br>");
/*The indexOf() method returns the position of the first occurrence of a specified 
  value in a string.*/



// Ejemplos de funciones con la clase String

//MAYUSCULAS
document.write("MAYUS => " + ObjetoString.toUpperCase() + "</br>");

//minuscula
document.write("minus => " + ObjetoString.toLowerCase() + "</br>");

//split, divide el string entre las ocurrencias del caracter pasado por parametro
var split = ObjetoString.split(' ');
document.write("split => [0] = " + split[0] + " [1] = " + split[1] + "</br>");

//join, une el string entre las ocurrencias del caracter pasado por parametro
document.write("join => " + split.join(' ') + "</br></br>");

//**********************************************************************************
// FUNCIONES
//**********************************************************************************

//Manipulacion de elementos HTML
function cambiarTexto()
{
	document.getElementById("demo1").innerHTML = "texto cambiado";
}

//Manipulacion del estilo de un elemento HTML
function cambiarEstilo()
{
	var elem = document.getElementById("demo1");
	elem.style.color = "#ff0000";
}

function esNumerico()
{
	var elem = document.getElementById("demo2").value;

	if( elem == "" || isNaN(elem) )
	{
	  alert("No es numerico");
	}
	else
	{
	  alert("Es numerico");
	}
}

//Funcion con parametros
function concatenar( a, b )
{
	alert("Concatenacion => " + a + ' ' + b);
}

function factorial(num)
{
	var factorial = 1;
	for( num; num > 0; num-- )
		factorial = factorial * num;
	return factorial;
}

//Una variable como funcion
var factorial = function factorial(num){
	var factorial = 1;
	for( num; num > 0; num-- )
		factorial = factorial * num;
}

//Guardar el resultado de una funcion en una variable
var resultadoFactorial = factorial(5);

//En cualquier momento se llama la funcion con un parametro definido
document.write("Factorial de 8 es => " + factorial(8) );



//**********************************************************************************
// SWITCH
//**********************************************************************************
function diaHoy()
{
	var dia = new Date().getDay();
	switch (dia)
	{
	case 0:
	  x ="Domingo";
	  break;
	case 1:
	  x ="Lunes";
	  break;
	case 2:
	  x ="Martes";
	  break;
	case 3:
	  x ="Miercoles";
	  break;
	case 4:
	  x ="Jueves";
	  break;
	case 5:
	  x ="Viernes";
	  break;
	case 6:
	  x ="Sabado";
	  break;
	}

	alert("Hoy es " + x);
}

//Uso de DEFAULT
function finDeSemana()
{
	var day = new Date().getDay();
	switch (day)
	{
		case 6:
		  x = "Hoy es Sabado";
		  break;
		case 0:
		  x = "Hoy es Domingo";
		  break;
		//Si no se llegara a cumplir ninguno de los anteriores casos
		default:
		  x = "Esperando con ansias el fin de semana";

		alert(x);
	}
}


//**********************************************************************************
// CICLOS
//**********************************************************************************

document.write("</br></br> Ciclos </br></br>");

//Maneras de hacer un for
for ( var i = 0; i < carros.length; i++ )
{ 
	document.write( carros[i] + "<br>" );
}
document.write("<br>");



var i = 2, length = carros.length;
//se puede omitir el primer parametro ya que la variable esta inicializada
for (; i < length; i++)
{ 
	document.write(carros[i] + "<br>");
}
document.write("<br>");



//Se puede omitir tambien el tercer paramatro pues el avance de la variable esta en el cuerpo
var i = 0,len = carros.length;
for (; i<len; )
{ 
	document.write(carros[i] + "<br>");
	i++;
}
document.write("<br>");



//recorrer todos los elementos de un array
var i = 0;
for (;carros[i];)
{
	document.write(carros[i] + "<br>");
	i++;
}
document.write("<br>");



for ( i = 0; i <= 10; i++ )
{
	if ( i == 3 ) continue;
	x = x + "El numero es " + i + "<br>";
}



//recorriendo las propiedades de un objeto
var persona1 = { nombre:"Juan", apellido:"Perez", edad:25, telefono:3445677 }; 
var texto3;


for( variable in persona1 )
{
  	texto3 = texto3 + persona1[variable];
}



//Recorriendo un array
var numeros = [1,4,6,8,10,17];

for(i in numeros)
	document.write(numeros[i] + "<br>");

document.write("<br>");



// Recorriendo un array bidimensional (bonus: join & split)
var elementosB = [[10,14,17,19],[23,26,29],[37,37,39],4,5,"6","7",['a','b','c']];

//se recorre elementosB desde el ultimo hasta el primero, y los subelementos en orden ascendente
for (var i = elementosB.length - 1; i >= 0; i--) 
{
	for (var j = 0; j < elementosB[i].length; j++) {
		document.write(elementosB[i][j] + "<br>");
	};
};
document.write("<br>");



// The continue statement breaks one iteration (in the loop), if a specified condition occurs, 
// and continues with the next iteration in the loop.
//This example skips the value of 3:
for (i=0;i<=10;i++)
 {
 if (i==3) continue;
  x=x + "The number is " + i + "<br>";
  }


// WHILE
var texto4;
while( i < 5 )
{
	texto4 = texto4 + "El numero es " + i + "<br>";
	i++;
}

//recorrer todos los elementos de un array
var i = 0;
while ( carros[i] )
{
	document.write(carros[i] + "<br>");
	i++;
}
document.write("<br>");


// DO WHILE
var texto5;
do
{
	texto5 = texto5 + "El numero es " + i + "<br>";
	i++;
}
while( i < 5 );


//**********************************************************************************
// MENSAJES DE ERROR
//**********************************************************************************

//Algunos navegadores como Chrome no lanzan la excepcion, simplemente la ignoran.
//Internet Explorer en este caso si lanza el mensaje de error
function mensajeError()
{
	try
	{
		adddlert("Welcome guest!");
	}
	catch( err )
	{
		txt="Hubo un error en esta pagina.\n\n";
		txt+="Descripcion del error: " + err.message + "\n\n";
		txt+="Click OK para continuar.\n\n";
		alert(txt);
	}
}

function throwException()
{
	try
	{
		var x = document.getElementById("demo3").value;
		if( x == "" )  throw "vacio";
		if( isNaN(x) ) throw "no es un numero";
		if( x > 10 )   throw "mayor que 10";
		if( x < 5 )    throw "menor que 10";
	}
	catch( err )
	{
		alert("Error: " + err + ".");
	}
}


//**********************************************************************************
// EVENTOS
//**********************************************************************************

//>Se le puede añadir un evento a window (ventana principal) o un elemento HTML
// primer parametro: load indica que se ha cargado
// segundo parametro: la funcion a ejecutar cuando se dispara el evento
window.addEventListener("load", function(){
	alert("Bienvenido a las lecciones PHP + Javascript + JQuery + Ajax");
})

//Llamada a funcion externa
window.addEventListener("keydown",tecla_presionada);

function tecla_presionada(evento)
{
	document.getElementById("demo4").innerHTML = "</br> <h4>Codigo ASCII de la tecla => " + evento.keyCode + "</h4></br></br>";
}

// primer parametro: click indica que se ha hecho click sobre el elemento
var boton1 = document.getElementById("boton_evento");
boton1.addEventListener("click", eventoBoton);

function eventoBoton()
{
	alert("Evento disparado!");
	//Se remueve un evento 
	boton1.removeEventListener("click", eventoBoton);
}

//**********************************************************************************
// BROWSER OBJECTS
//**********************************************************************************

/*
	THE WINDOW OBJECT

	The window object represents an open window in a browser.

	If a document contain frames (<frame> or <iframe> tags), the browser creates 
	one window object for the HTML document, and one additional window object for 
	each frame.
*/

//Returns a Boolean value indicating whether a window has been closed or not
console.log("window.closed: " + window.closed);

//Sets or returns the default text in the statusbar of a window
console.log("window.defaultStatus: " + window.defaultStatus);

//Returns the Document object for the window (See Document object)
console.log("window.document: " + window.document);

//Returns an array of all the frames (including iframes) in the current window
console.log("window.frames: " + window.frames);

//Returns the History object for the window (See History object)
console.log("window.history: " + window.history);

//Sets or returns the inner height of a window's content area
console.log("window.innerHeight: " + window.innerHeight);

//Sets or returns the inner width of a window's content area
console.log("window.innerWidth: " + window.innerWidth);

//Sets or returns the outer height of a window, including toolbars/scrollbars
console.log("window.outerHeight: " + window.outerHeight);

//Sets or returns the outer width of a window, including toolbars/scrollbars
console.log("window.outerWidth: " + window.outerWidth);

//Returns the number of frames (including iframes) in a window
console.log("window.length: " + window.length);

//Returns the Location object for the window (See Location object)
console.log("window.location: " + window.location);

//Sets or returns the name of a window
console.log("window.name: " + window.name);

//Returns the Navigator object for the window (See Navigator object)
console.log("window.navigator: " + window.navigator);

//Returns a reference to the window that created the window
console.log("window.opener: " + window.opener);

//Returns the pixels the current document has been scrolled (horizontally) from the upper left corner of the window
console.log("window.pageXOffset: " + window.pageXOffset);

//Returns the pixels the current document has been scrolled (vertically) from the upper left corner of the window
console.log("window.pageYOffset: " + window.pageYOffset);

//Returns the parent window of the current window
console.log("window.parent: " + window.parent);

//Returns the Screen object for the window (See Screen object)
console.log("window.screen: " + window.screen);

//Returns the x coordinate of the window relative to the screen
console.log("window.screenLeft: " + window.screenLeft);

//Returns the y coordinate of the window relative to the screen
console.log("window.screenTop: " + window.screenTop);

//Returns the x coordinate of the window relative to the screen
console.log("window.screenX: " + window.screenX);

//Returns the y coordinate of the window relative to the screen
console.log("window.screenY: " + window.screenY);

//Returns the current window
console.log("window.self: " + window.self);

//Sets the text in the statusbar of a window
console.log("window.status: " + window.status);

//Returns the topmost browser window
console.log("window.top: " + window.top);


/*
	THE NAVIGATION OBJECT

	The navigator object contains information about the browser.

	: 
	taintEnabled(): Specifies whether or not the browser has data tainting enabled
*/

//Returns the code name of the browser
console.log("navigator.appCodeName: " + navigator.appCodeName);

//Returns the name of the browser
console.log("navigator.appName: " + navigator.appName);

//Returns the version information of the browser
console.log("navigator.appVersion: " + navigator.appVersion);

//Determines whether cookies are enabled in the browser
console.log("navigator.cookieEnabled: " + navigator.cookieEnabled);

//Boolean, returns true if the browser is on line, otherwise false.
console.log("navigator.onLine: " + navigator.onLine);

//Returns for which platform the browser is compiled
console.log("navigator.platform: " + navigator.platform);

//Returns the user-agent header sent by the browser to the server
console.log("navigator.userAgent: " + navigator.userAgent);

//Specifies whether or not the browser has Java enabled
console.log("navigator.javaEnabled(): " + navigator.javaEnabled());

//Specifies whether or not the browser has Java enabled
//SOLO funciona en Internet Explorer y Opera
//console.log("navigator.taintEnabled(): " + navigator.taintEnabled());


/*
	THE SCREEN OBJECT

	The screen object contains information about the visitor's screen.
*/

//Returns the total height of the screen
console.log("screen.height: " + screen.height);

//Returns the total width of the screen
console.log("screen.width: " + screen.width);

//Returns the height of the screen (excluding the Windows Taskbar)
console.log("screen.availHeight: " + screen.availHeight);

//Returns the width of the screen (excluding the Windows Taskbar)
console.log("screen.availWidth: " + screen.availWidth);

//Returns the bit depth of the color palette for displaying images
console.log("screen.colorDepth: " + screen.colorDepth);

//Returns the color resolution (in bits per pixel) of the screen
console.log("screen.pixelDepth: " + screen.pixelDepth);



/*
	THE HISTORY OBJECT

	The history object contains the URLs visited by the user (within a browser 
	window).
	The history object is part of the window object and is accessed through 
	the window.history property.

	back(): Loads the previous URL in the history list
	forward(): Loads the next URL in the history list
	go(): Loads a specific URL from the history list
*/

//turns the number of URLs in the history list
console.log("history.hash: " + history.length);


/*
	THE LOCATION OBJECT
	
	The location object contains information about the current URL.
	The location object is part of the window object and is accessed through the 
	window.location property.
*/

//Returns the anchor portion of a URL
console.log("location.hash: " + location.hash);

//Returns the hostname and port of a URL
console.log("location.host: " + location.host);

//Returns the entire URL
console.log("location.href: " + location.href);

//Returns the hostname of a URL
console.log("location.hostname: " + location.hostname);

//Returns the entire URL
console.log("location.pathname: " + location.pathname);

//Returns the port number the server uses for a URL
console.log("location.port: " + location.port);

//Returns the protocol of a URL
console.log("location.protocol: " + location.protocol);

//Returns the query portion of a URL
console.log("location.search: " + location.search);