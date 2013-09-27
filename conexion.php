<?php

	
/* BASE DE DATOS
   NOMBRE BASE DE DATOS: codigofacilito
   TABLA: codigof CAMPOS: ID - int(11), nombre - varchar(50), password - varchar(50)
*/

   // CON ISSET SE COMPRUEBA QUE EL OBJETO NO SEA NULL
   // CON !EMPTY SE COMPRUEBA QUE EL CAMPO SE HALLA LLENADO

function conectarBaseDeDatos( $host, $user, $password, $db_name )
{
	$mysqli_connect = new mysqli($host, $user, $password, $db_name);

    //check connection
	if ($mysqli_connect->connect_errno)
	{
	    echo "Fallo conexion! <br/>";
	    exit();
	}
	else
	{
		echo "CONECTAR BASE DE DATOS => Conexion a la base de datos exitosa! <br/>";
	}

	return $mysqli_connect;
}

if(isset($_POST['username']) && isset($_POST['clave']) && !empty($_POST['username']) && !empty($_POST['clave']))
{
  	$mysqli = conectarBaseDeDatos("localhost", "root", "", "codigofacilito");

	// Create table, insert into, etc
	if ($mysqli->query("INSERT INTO codigof(nombre,password) VALUES ('$_POST[username]','$_POST[clave]')") === TRUE) 
	{
    	echo "INSERTAR BASE DE DATOS => Nombre y password insertados correctamente. <br/>";
	}
	else
	{
		echo "INSERTAR BASE DE DATOS => No se pudo ingresar los datos <br/>";
	}

    //Mostrar todos los registros
    $result = $mysqli->query("SELECT * FROM codigof ORDER BY ID");

	$num = 1;
	//MYSQLI_ASSOC Usando un array Asociativo
	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		echo 'Username ' . $num . ': ' . $row['nombre'] . ', Password: ' . $row['password'] . '<br/>';
		$num++;
	}

	$mysqli->close();

	echo "<br/>";
}
/*else
{
	echo "INSERTAR BASE DE DATOS => llene todos los campos! <br/>";
}*/


//CONSULTA EN LA BASE DE DATOS

if(isset($_POST['usernameB']))
{
	$mysqli = conectarBaseDeDatos("localhost", "root", "", "codigofacilito");

	$result = $mysqli->query("SELECT nombre,password FROM codigof WHERE nombre = '$_POST[usernameB]'");

	if($result == false)
	{
		echo " CONSULTAR BASE DE DATOS => Error en consulta de base de datos";
	}
	else
	{
	    //MYSQLI_ASSOC Usando un array Asociativo
		while($row = $result->fetch_array(MYSQLI_ASSOC))
		{
			echo 'Username ' . ': ' . $row['nombre'] . ', Password: ' . $row['password'] . '<br/>';
		}
	}

	$mysqli->close();

	echo "<br/>";
}

if(isset($_POST['usernameD']))
{
	$mysqli = conectarBaseDeDatos("localhost", "root", "", "codigofacilito");

	$result = $mysqli->query("SELECT ID FROM codigof WHERE nombre = '$_POST[usernameD]'");

	if($result == false)
	{
		echo "CONSULTAR BASE DE DATOS => Error al comprobar registro " . $_POST['usernameD'] . " en la base de datos";
	}
	else
	{
		$result = $mysqli->query("DELETE FROM codigof WHERE nombre = '$_POST[usernameD]'");
		echo "ELIMINAR BASE DE DATOS => Registro eliminado" . '<br/>';
	}

	$mysqli->close();

	echo "<br/>";
}


/*
	$mysqli2 = new mysqli("localhost", "root", "", "codigofacilito");

    //check connection
	if ($mysqli2->connect_errno)
	{
	    echo "Fallo conexion! <br/>";
	    exit();
	}

	$sentencia = "SELECT * FROM codigof";
	$resultado = $mysqli2->query($sentencia);

	// Numeric array 
	$row = $resultado->fetch_array(MYSQLI_NUM);
	echo("CONSULTAR BASE DE DATOS => %s <br/>" . $row[0]);


	$mysqli2->close();
*/

    /*
	// mysql_connect: Conectar con el servidor - Opens or reuses a connection to a MySQL server.
	//                mysql_connect($host, $user, $pass)
	$conexion = mysql_connect("localhost", "root", "") or die("Conexion no establecida con el servidor!");

	// mysql_select_db: Seleccionar base de datos - Sets the current active database on the 
	// server that's associated with the specified link identifier. Every subsequent 
	// call to mysql_query() will be made on the active database.
	// mysql_select_db($dbname,$conexion)
	mysql_select_db("codigofacilito", $conexion) or die("Problemas al conectar la base de datos");

	// mysql_query: Hacer una consulta - sends a unique query (multiple queries are not supported) 
	// to the currently active database on the server that's associated with the specified link_identifier.
	mysql_query("INSERT INTO codigof(nombre,password) VALUES ('$_POST[username]','$_POST[clave]')", $conexion);

	*/

?>