<!--
The <header> tag specifies a header for a document or section.
The <header> element should be used as a container for introductory content or set of 
navigational links.

You can have several <header> elements in one document. 
Note: A <header> tag cannot be placed within a <footer>, <address> or another <header> 
element.
-->
<header>

<!--
  IMG => defines an image in an HTML page.
         it has two REQUIRED attributes: src and alt.
         Note: Images are not technically inserted into an HTML page, images are 
         linked to HTML pages. The <img> tag creates a holding space for the 
         referenced image.

		In HTML the <img> tag has no end tag.

		alt: Specifies an alternate text for an image
		crossorigin: Allow images from third-party sites that allow cross-origin 
					 access to be used with canvas
	    height: Specifies the height of an image
	    width: Specifies the width of an image
	    src: Specifies the URL of an image
	    ismap: Specifies an image as a server-side image-map
-->
<center><img src="images/welcome.png" alt="CF"/></center>

	<!--
	The <nav> tag defines a set of navigation links.
	Not all links of a document must be in a <nav> element. The <nav> element is intended 
	only for major block of navigation links.
	-->
	<nav>
		<!--
		The <ul> tag defines an unordered (bulleted) list.
		Use the <ul> tag together with the <li> tag to create unordered lists.
		-->
		<ul>
			<!-- 
			The <a> tag defines a hyperlink, The most important attribute of the <a> 
			element is the href attribute, which indicates the link’s destination.

			An unvisited link is underlined and blue
			A visited link is underlined and purple
			An active link is underlined and red
			-->
			<li><a href="#metodo_post">Metodo Post</a></li>
			<li><a href="#metodo_get">Metodo Get</a></li>
			<li><a href="#calculadora">Calculadora</a></li>
			<li><a href="#guardar_archivos">Guardar Archivos</a></li>
			<li><a href="#eliminar_archivos">Eliminar Archivos</a></li>
			<li><a href="#insertar_bd">Insertar en la BD</a></li>
			<li><a href="#consultar_bd">Consultar en la BD</a></li>
			<li><a href="#eliminar_bd">Eliminar de la BD</a></li>
			<li><a href="#reg_usuario">Registro de Usuario</a></li>
			<li><a href="#login_usuario">Login de usuario</a></li>
			<li><a href="#reg_usuario">Registro de Usuario</a></li>
			<li><a href="#enviar_correo">Enviar Correo</a></li>
			<li><a href="#leccion_ajax">Leccion Ajax</a></li>
			<li><a href="#leccion_javascript">Leccion Javascript</a></li>
			<li><a href="#leccion_jquery">Leccion JQuery</a></li>
		</ul>
	</nav>
</header>