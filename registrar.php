<?php

include("conexion.php");

/*
	se puede colocar 
	require("conexion.php");
	indicando que es necesaria para esta clase
*/

/* BASE DE DATOS
   NOMBRE BASE DE DATOS: reg-users
   TABLA: registro 
   CAMPOS: 
   ID - int(11), 
   nombre - varchar(30), 
   username - varchar(30),
   password - varchar(40),
   email - varchar(30)
*/

//REGISTRAR EL USUARIO

if(isset($_POST['nombreR']) && isset($_POST['usernameR']) && isset($_POST['passwordR']) && isset($_POST['confirmpasswordR']) && isset($_POST['emailR']) && !empty($_POST['nombreR']) && !empty($_POST['usernameR']) && !empty($_POST['passwordR']) && !empty($_POST['confirmpasswordR']) && !empty($_POST['emailR']))
{
	// conectarBaseDeDatos viene de conexion.php
	$mysqli = conectarBaseDeDatos("localhost", "root", "", "reg-users");

	if( $_POST['passwordR'] == $_POST['confirmpasswordR'] )
	{
	    /*
	    Al insertar la contraseña ejecutamos la funcion SHA1 para encriptarla

	    La función SHA y SHA1 son sinónimos, por lo que hacen el mismo efecto, al igual que MD5 no 
	    puede ser revertido y este necesita un campo de 40 caracteres para su almacenamiento, 
	    es más seguro que MD5 ya que calcula el cheksum SHA de 160 bits de una cadena, mientras 
	    que MD5 la calcula de 128.

	    Se vera algo como esto en el campo password de la tabla:
	    8063ffdbb0872cc44922798855e305821374e032
	    */
		if ($mysqli->query("INSERT INTO registro(nombre,username,password,email) 
			                VALUES ('$_POST[nombreR]','$_POST[usernameR]',SHA1('$_POST[passwordR]'),'$_POST[emailR]')") === TRUE) 
		{
	    	echo "REGISTRAR USUARIO => Datos de " . $_POST['nombreR'] .  " se han insertados correctamente. <br/>";
		}
		else
		{
			echo "REGISTRAR USUARIO => No se pudo ingresar los datos <br/>";
		}
	}
	else
	{
		echo "REGISTRAR USUARIO => Verificar que las contrasenas coinciden <br/>";
	}

}


// LOGUEAR AL USUARIO

if(isset($_POST['usernameL']) && isset($_POST['passwordL']) && !empty($_POST['usernameL']) && !empty($_POST['passwordL']))
{
	/*
      bool session_start ( void )

	  session_start() creates a session or resumes the current one based on a session 
	  identifier passed via a GET or POST request, or passed via a cookie.
		
		http://php.net/manual/en/function.session-start.php
	*/
	session_start();

	$mysqli = conectarBaseDeDatos("localhost", "root", "", "reg-users");

	$result = $mysqli->query("SELECT username,password FROM registro WHERE username = '$_POST[usernameL]'");

	if($result == false)
	{
		echo "LOGUEAR USUARIO => Error en consulta de base de datos";
	}
	else
	{
		$sesion = $result->fetch_array();
	    
	    //MYSQLI_ASSOC Usando un array Asociativo
		if( $_POST['passwordL'] == $sesion['password'] )
		{
			/*
			  $_SESSION: This is a 'superglobal', or automatic global, variable. 
			  This simply means that it is available in all scopes throughout a script. 
			*/
			$_SESSION['username'] = $_POST['usernameL'];
			echo "LOGUEAR USUARIO => sesion exitosa <br/>";

			if(isset($_SESSION['username']))
			{
				echo "LOGUEAR USUARIO => Puedes ver esta pagina <br/>";
				echo '<br/><a href="destruirsesion.php">Cerrar Sesion</a>';
			}
			else
			{
				echo "LOGUEAR USUARIO => No puedes ver esta pagina, registrate e inicia sesion";
			}
		}
		else
		{
			echo "LOGUEAR USUARIO => Combinacion erronea: username - password";
		}
	}
}
/*else
{
	echo "LOGUEAR USUARIO => llene todos los campos! <br/>";
}*/
?>