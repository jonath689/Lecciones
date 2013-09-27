<!-- Documento HTML5 -->
<!DOCTYPE html> 
<html>

<head>
<title>Ejemplo HTML5 / PHP / Javascript / Ajax / JQuery</title>

<!--
IMPORTANTE!:

Cuando los cambios realizados en este documento o en cualquier otra documento relacionado
(css, js e imagenes) tarda en ser actualizado en el navegador cuando se refresca la pagina 
SE DEBE LIMPIAR LA CACHE

El cache es simplemente archivos almacenados que permiten funcione mas rapido ya que una 
vez almacenados, cada vez que se ingrese, estos ya no se descargaran de nuevo.

Cuando se hacen cambios en las Hojas de Estilo (CSS), archivos JS o Imagenes, por ejemplo 
cambiar el color del texto o poner otra imagen de logo pero con el mismo nombre se debe 
borrar el cache para que al ingresar el navegador descargue de nuevo la página completa.

El parámetro Pragma es valido para la mayoría de los navegadores (puede no funcionar en IE), 
y se le menciona al navegador que no guarde nada para futuras visitas.
El parámetro expires le dice al navegador que lo que tenga almacenado del sitio expira 
en 0 segundos, lo que significa que cuando vuelva a entrar deberá obtener lo mas nuevo.
-->
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="1">

<!--Define a description of your web page-->
<meta name="description" content="Tutorial de HTML, CSS, PHP, JavaScript, Ajax y JQuery">

<!--Define keywords for search engines-->
<meta name="keywords" content="HTML, CSS, PHP, JavaScript, Ajax, JQuery">

<!--Define the author of a page-->
<meta name="author" content="Jonathan Ballesteros">

<!--The charset attribute specifies the character encoding for the HTML document
The charset attribute is new in HTML5, and replaces the need for: 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
.-->
<meta charset="utf-8" /> 

<!--
Un script puede ser incluido dentro del <head> o dentro del <body>
-->
<script src="scripts/ajax.js"></script>

<!--
jQuery 2.x has the same API as jQuery 1.x, but does not support Internet Explorer 6, 7, or 8.
-->
<script src="jquery/jquery-2.0.3.js"></script>

<!--
Inclusion de la hoja de estilo
-->
<link rel="stylesheet" type="text/css" href="leccionCSS.css" />
</head>

<!--
El objetivo de incluir el header y el footer es el hecho de poder usarlos
en varias paginas, por eficiencia y reutilizacion de codigo.

En este caso no se usa el header en otro archivo por usarse un script exprasamente
para este archivo
-->
<?php include 'template/header.php' ?>


<body>

<!-- 
	 *****************************************************************************************
		LECCION HTML5
     ***************************************************************************************** 
 --> 

 <a name="leccion_html5">
 <h4>--------------------------------------------------------------------</h4>
<h1>Lecci&oacute;n HTML5</h1>
<h4>--------------------------------------------------------------------</h4>


 <!-- 
ISO-8859-1 is the default character set in most browsers.

The first 128 characters of ISO-8859-1 is the original ASCII character-set 
(the numbers from 0-9, the uppercase and lowercase English alphabet, and some special 
characters).

The higher part of ISO-8859-1 (codes from 160-255) contains the characters used in 
Western European countries and some commonly used special characters.

Reserved Characters in HTML:
&nbsp = espacio!!
" &quot;
' &apos;
& &amp;
< &lt;
> &gt;

Á &Aacute; á &aacute;
É &Eacute; é &eacute;
Í &Iacute; í &iacute;
Ó &Oacute; ó &oacute;
Ú &Uacute; ú &uacute;

Ñ &Ntilde; ñ &ntilde;

More: http://www.w3schools.com/tags/ref_entities.asp
 --> 
<p>A => &Aacute; &nbsp;&nbsp; E=> &Eacute; &nbsp;&nbsp;  
   I=> &Iacute;  &nbsp;&nbsp; O => &Oacute; &nbsp;&nbsp;  U=> &Uacute;</p>
<p>a => &aacute; &nbsp;&nbsp; e=> &eacute; &nbsp;&nbsp; i=> &iacute; 
	   &nbsp;&nbsp; o => &oacute; &nbsp;&nbsp; u=> &uacute;</p>
<p>" &quot; &nbsp;&nbsp; ' &apos; &nbsp;&nbsp; & &amp; &nbsp;&nbsp; < &lt; &nbsp;&nbsp; > &gt;</p></br>


<!-- 
	DIV => defines a division or a section in an HTML document.
 --> 
<div style="color:rgb(120,90,120)">
  <h3>Obama Weighs &apos;Limited&apos; Strikes Against Syrian Forces</h3>
  <p>President Obama is exploring a range of military actions against Syria designed to &quot;deter and degrade&quot; </p>
  <p>the ability of President Bashar al-Assad&apos;s regime to launch chemical weapons, officials said.</p>
</div></br>


<!-- 
	SPAN => is used to group inline-elements in a document
			provides no visual change by itself
			provides a way to add a hook to a part of a text or a part of a document
 --> 
<p>Ella tiene unos ojos <span style="color:blue">azules</span> y grandes.</p></br>


<!-- 
	UL => defines an unordered (bulleted) list.
		  Use the <ul> tag together with the <li> tag to create unordered lists.
 --> 
<ul>
  <li>Cafe</li>
  <li>Te</li>
  <li>Leche</li>
</ul>


<!-- 
	OL => defines an ordered list. An ordered list can be numerical or alphabetical.
		  Use the <li> tag to define list items.

		  The "start" and "type" attributes were deprecated in HTML 4.01, but IS supported in HTML5.
 --> 
<ol start="50">
  <li>Cafe</li>
  <li>Te</li>
  <li>Leche</li>
</ol><br><br>


<!--
The <form> tag is used to create an HTML form for user input.
The <form> element can contain one or more of the following form elements:

<input>
<textarea>
<button>
<select>
<option>
<optgroup>
<fieldset>
<label>

ATTRIBUTES: 
action	(URL)	
Specifies where to send the form-data when a form is submitted

target	(_blank: A new window or tab, 
         _self: The same frame (this is default), 
         _parent: The parent frame, 
         _top: The full body of the window)	
Specifies where to display the response that is received after submitting the form

autocomplete NEW (on, off)
Specifies whether a form should have autocomplete on or off
-->
<form>
	Nombres: <input type="text" name="firstname"><br>
	Apellidos: <input type="text" name="lastname"><br>
	Contrase&ntilde;a: <input type="password" name="pwd1"><br>
	Confirme Contrase&ntilde;a: <input type="password" name="pwd2"><br><br>
	Genero:<br>
	<input type="radio" name="sex" value="male">Hombre<br>
	<input type="radio" name="sex" value="female">Mujer<br><br>
	<input type="checkbox" name="vehicle" value="Bike">Tengo bicicleta<br>
	<input type="checkbox" name="vehicle" value="Car">Tengo un carro<br><br>
	En caso de poser carro, que marca usa: <br>
	<!--
	The <select> element is used to create a drop-down list.
	The <option> tags inside the <select> element define the available 
	options in the list.

	disabled="disabled" Desactivado no se despliega
	-->
	<select name="cars">
	<option value="volvo">Volvo</option>
	<option value="saab">Saab</option>
	<option value="fiat" selected>Fiat</option>
	<option value="audi">Audi</option>
	<option value="mercedes">Mercedes-Benz</option>
	<option value="bmw">BMW</option>
	</select><br><br>
	<textarea rows="10" cols="30">
	Deje sugerencia...
	</textarea>
	<br><br>
	<input type="submit" value="Submit">
</form>



<!-- 
	 *****************************************************************************************
		LECCION PHP
     ***************************************************************************************** 
 --> 

<a name="leccion_php">
<h4>--------------------------------------------------------------------</h4>
<h1>Lecci&oacute;n PHP</h1>
<h4>--------------------------------------------------------------------</h4>
<?php include 'leccionPHP.php' ?>
<a name="metodo_post">
<h3>POST</h3>

<form action="leccionPHP.php" method="post" name="frmpost">
	<label>Nombre:</label><br />
	<input type="text" name="nombre"/><br />
	<label>Apellido:</label><br />
	<input type="text" name="apellido"/><br />
	<label>Password:</label><br />
	<input type="password" name="password"/><br />
	<input type="submit" name="Enviar"/>
</form>
<br />
<a name="metodo_get">
<h3>GET</h3>
<form action="leccionPHP.php" method="get" name="frmget">
	<label>Nombre:</label><br />
	<input type="text" name="nombre"/><br />
	<label>Apellido:</label><br />
	<input type="text" name="apellido"/><br />
	<label>Password:</label><br />
	<input type="password" name="password"/><br />
	<input type="submit" name="Enviar"/>
</form>
<br />
<a name="calculadora">
<h3>CALCULADORA</h3>
<form action="leccionPHP.php" method="post" name="calculadora">
	<label>Introduzca los valores:</label><br/><br/>
	<input type="text" name="c1"/><br/><br/>
	<input type="text" name="c2"/><br/><br/>
	<input type="text" name="c3"/><br/><br/>
	<label>Selecciona la operacion: <br/>
		<select name="lista">
			<option value="sumar">Sumar</option>
			<option value="restar">Restar</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="dividir">Dividir</option>
		</select><br />
    </label><br />
    <input value="Calcular" type="submit"/>
</form>
<br />
<a name="guardar_archivos">
<h3>GUARDAR ARCHIVO</h3>
<form action="leccionPHP.php" method="post" name="arch">
	<input type="text" name="nombreP"/><br/><br/>
	<textarea name="comentario">comente aca...</textarea><br/><br/>
	<input type="submit" value="Guardar datos"/>
</form>
<br />
<a name="eliminar_archivos">
<h3>ELIMINAR ARCHIVO</h3>
<form action="leccionPHP.php" method="post" name="erase">
	<input type="file" name="archivo"/><br/>
	<input type="submit" value="Borrar"/>
</form>
<br />
<a name="insertar_bd">
<h3>INSERTAR DATOS EN LA BASE DE DATOS</h3>
<form action="conexion.php" method="post" name="db_ins">
	<label>Username:</label><br />
	<input type="text" name="username"/><br/>
	<label>Password:</label> <br/>
	<input type="password" name="clave"/><br/>
	<input type="submit" name="Insertar datos"/>
</form>
<br />
<a name="consultar_bd">
<h3>CONSULTAS EN LA BASE DE DATOS</h3>
<form action="conexion.php" method="post" name="db_cons">
	<input type="text" name="usernameB"/><br/>
	<input type="submit" name="Seleccionar" value="Consultar"/>
</form>
<a name="eliminar_bd">
<h3>ELIMINAR REGISTRO DE LA BASE DE DATOS</h3>
<form action="conexion.php" method="post" name="db_delete">
	<input type="text" name="usernameD"/><br/>
	<input type="submit" name="Borrar" value="Eliminar"/>
</form>
<a name="reg_usuario">
<h3>SISTEMA DE REGISTRO DE USUARIOS</h3>
<form action="registrar.php" method="post" name="db_registro">

<!--
The <table> tag defines an HTML table.

An HTML table consists of the <table> element and one or more <tr>, <th>, and <td> 
elements.
The <tr> element defines a table row, the <th> element defines a table header, and 
the <td> element defines a table cell.

A more complex HTML table may also include <caption>, <col>, <colgroup>, <thead>, 
<tfoot>, and <tbody> elements.
-->
<table border="1" bordercolor="#003399" style="background-color:#FFFFFF" width="400">
	<tr>
		<td>Nombre:</td>
		<td><input type="text" name="nombreR" /></td>
	</tr>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="usernameR"/></td>
	</tr>
	<tr>
		<td>Contrasena:</td>
		<td><input type="password" name="passwordR"/></td>
	</tr>
	<tr>
		<td>Confirmar Contrasena:</td>
		<td><input type="password" name="confirmpasswordR"/></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" name="emailR"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="registrar" value="Registrar"/></td>
	</tr>
</table>
</form>
<a name="login_usuario">
<h3>LOGIN DE USUARIOS</h3>
<form action="registrar.php" method="post" name="db_login">
	<label>Username:</label><br />
	<input type="text" name="usernameL"/><br/><br/>
	<label>Password:</label> <br/>
	<input type="password" name="passwordL"/><br/><br/>
	<input type="submit" name="login" value="Login"/>
</form>
<a name="enviar_correo">
<h3>ENVIAR CORREO</h3>
<form action="enviar_correo.php" method="post">
	<label>Correo:</label><br />
	<input type="text" name="correoDestino"/><br/><br/>
	<label>Asunto:</label><br />
	<input type="text" name="asunto"/><br/><br/>
	<label>Mensaje:</label> <br/>
	<textarea name="mensaje"></textarea><br/><br/>
	<input type="submit" value="Enviar Correo"/>
</form>



<!-- 
	 *****************************************************************************************
		LECCION AJAX
     ***************************************************************************************** 
 --> 

<a name="leccion_ajax">
<h4>--------------------------------------------------------------------</h4>
<h1>Lecci&oacute;n Ajax</h1>
<h4>--------------------------------------------------------------------</h4>
<p><b>Comience digitando un nombre en el recuadro:</b></p>
<form> 
Nombre: <input type="text" onkeyup="mostrarSugerencia(this.value)">
</form>
<p>Sugerencias: <span id="campoSugerencia"></span></p>



<!-- 
	 *****************************************************************************************
		LECCION JAVASCRIPT
     ***************************************************************************************** 
 --> 

<a name="leccion_javascript">
<h4>--------------------------------------------------------------------</h4>
<h1>Lecci&oacute;n Javascript</h1>
<h4>--------------------------------------------------------------------</h4>

<script>
	document.write("<p>Script insertado dentro del body</p>");
</script>

<button type="button" onclick="alert('Hola mundo!')">Mensaje!</button>

<p id='demo1'>Texto</p>
<button type="button" onclick="cambiarTexto()">Cambiar texto</button>
<button type="button" onclick="cambiarEstilo()">Cambiar estilo</button>

<p>Por favor ingrese un dato:</p>
<input id="demo2" type="text">
<button type="button" onclick="esNumerico()">Es numerico?</button><br/>

<br/><button onclick="concatenar('La vida es','interesante')">Concatenar La vida es + interesante</button>

<br/><button type="button" onclick="diaHoy()">Que dia es hoy?</button>
<br/><button type="button" onclick="finDeSemana()">fin de semana?</button>
<br/><input type="button" value="Mensaje error" onclick="mensajeError()" />

<br/><p>Por favor ingrese un numero entre el 5 y el 10:</p>
<input id="demo3" type="text">
<button type="button" onclick="throwException()">Veamos...</button>

<form name="myForm" action="index.php" onsubmit="return validateForm()" method="post">
First name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>

<br/><button type="button" onclick="alert(factorial(50))">Factorial de 50</button>

<br/><br/><button id="boton_evento">Evento una vez! click!</button><br/>

<p id='demo4'></p>

<!--
	El proposito de llamar al script de ultimas es el de asegurarnos que todos los elementos
	ya se encuentran creados para asi poder usar los eventos correctamente
-->
<script src="leccionJavascript.js"></script>



<!-- 
	 *****************************************************************************************
		LECCION JQUERY
     ***************************************************************************************** 
 --> 


<a name="leccion_jquery">
<h4>--------------------------------------------------------------------</h4>
<h1>Lecci&oacute;n JQuery</h1>
<h4>--------------------------------------------------------------------</h4>

<!--
	PROBANDO SELECTORES
-->
<p id="p1"></p><br/>

<a class="a1"></a><br/>

<div class="div1">
	<article>
		<p id="parrafo1">Probando 1!</p>
	</article>
</div><br/>

<div class="div2">
	<article>
		<p id="parrafo2">Probando 2!</p>
	</article>
</div><br/>

<span>Texto del span</span><br/><br/>


<!--
	PROBANDO VARIABLES / GESTORES DE COLECCIONES
-->
<h4>---------------------------------------</h4>
<div class="div3">
	<p id="paragraph">div3</p>
</div><br/>

<div class="div4">
	<span>div4</span>
</div><br/>

<ul>
	<li class="lista"></li>
	<li class="lista"></li>
	<li class="lista"></li>
	<li class="lista"></li>
</ul><br/>

<p id="p2" class="extraer-este-texto">
	<strong>Hola nuevamente!</strong>
</p>


<!--
	PROBANDO METODO CSS
-->
<h4>---------------------------------------</h4>
<div id="div5">div5</div>
<div id="div6">div6</div>


<!--
	Dimensiones
-->
<h4>---------------------------------------</h4>
<img src="images/town.gif" alt="CF" id="imagen1"/><br/><br/>

<div id="div9"></div></br>

<div id="div10">
	<p>Hola amigos!</p>
</div>


<!--
	EVENTOS
--> 
<h4>---------------------------------------</h4>
<div id="div7">Clic en mi!! (div7)</div></br>
<div id="div8">Clic en mi!! (div8)</div></br>
<a id="link1" href="http://www.wikipedia.org">Wikipedia</a></br>


<!--
	CREAR COPIAR REMOVER ELEMENTOS
--> 
<h4>---------------------------------------</h4>
</br>
<div id="div13"></div>
<ol id="lista1">
	<li class="elementos1">Elemento 1</li>
	<li class="elementos1">Elemento 2</li>
	<li class="elementos1">Elemento 3</li>
	<li class="elementos1">Elemento 4</li>
</ol>
</br>
<button id="boton1">Test1</button>
<button id="boton2">Test2</button>
<button id="boton3">Reiniciar</button>
</br>
<div id="div11">
	<p>div 11</p>
</div>
</br>
<div id="div12">
	<p>div 12</p>
</div>

<script src="leccionJQuery.js"></script>


<br><br><?php include 'template/footer.php' ?>
</body>
</html>