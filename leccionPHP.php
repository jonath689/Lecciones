<?php

//**********************************************************************************
//**********************************************************************************

//							    PHP TUTORIAL

//**********************************************************************************
//**********************************************************************************



//**********************************************************************************
//CONSTANTE define(name,value)
//**********************************************************************************
define("SALUDO", "hola, como estas?");
define("NUMERO_X", 25);
$existeConstante = defined( 'SALUDO' ); //va a dar true



//**********************************************************************************
//CONSTANTES PREDEFINIDAS
//**********************************************************************************
echo 'Linea actual en el fichero: ' . __LINE__ . '<br/>';
echo 'Ruta completa y nombre del fichero: ' . __FILE__ . '<br/>';
echo 'Directorio del fichero: ' . __DIR__ . '<br/>';
echo 'Nombre del trait: ' . __TRAIT__ . '<br/>';
echo 'Nombre del espacio de nombres actual: ' . __NAMESPACE__ . '<br/>';



//*********************************************************************************
//VARIABLES, MANEJO DE STRING Y CONCATENACIONES
//**********************************************************************************
$numero = (200 / 2) - 10;
$texto = 'Ejemplo de Texto';
$booleanTrue = true;
$booleanFalse = false;
$existeVariable = isset( $texto ); //va a dar true

// &nbsp espacio en html
echo '</br> &nbsp; hola mundo';

echo '</br>' . (100 + ($numero + 10));
$texto .= ' numero '; //agrega a la variable texto con .=
echo '</br>' . $texto . 01; //se borra el cero
echo '</br> booleanTrue: ' . $booleanTrue . ' booleanFalse: ' . $booleanFalse; //false no se visualiza

echo '</br></br>';

echo 'Constante SALUDO: ' . SALUDO . '</br>';
echo 'Constante NUMERO_X: ' . NUMERO_X . '<br/><br/>';
echo 'CONVERTIR A MAYUSCULAS => ' . strtoupper($texto) . '</br>';
echo 'CONVERTIR A MINUSCULAS => ' . strtolower($texto) . '</br>';
echo 'CONVERTIR A MODO TITULO => ' . ucwords($texto) . '</br>';
echo 'TAMANO DEL STRING => ' . strlen($texto) . '</br>';

echo 'QUITAR ESPACIOS DEL COMIENZO Y EL FIN => ' . trim("\t\tEstas son algunas palabras ...  ") . '</br>';

//Parametros de str_replace: 1)Buscar 2)Reemplazar con... 3)Texto o variable a editar
echo 'REEMPLAZAR EN TEXTO (1 por 2) => ' . str_replace("1","2","10101010111", $reemplazados) . ', ';
echo 'NUMERO DE REEMPLAZADOS => ' . $reemplazados . '</br>';
echo 'FORMATO NUMERO (1) => ' . number_format(350000) . '</br>'; //350,000
echo 'FORMATO NUMERO (2) => ' . number_format(350000000,2) . '</br>'; //350,000,000.00



//**********************************************************************************
//ARRAY PREDEFINIDO
//**********************************************************************************
echo '</br></br> ARRAYS </br>';

$array1 = array('elemento1',2,'elemento3',4);
echo '</br>' . $array1[0];
echo '</br>' . $array1[1];
echo '</br>' . $array1[2];
echo '</br>' . $array1[3] . '</br></br>';

echo 'ELEMENTOS CAMBIADOS ALEATORIAMENTE';

// This function shuffles (randomizes the order of the elements in) an array.
shuffle($array1);

echo '</br>' . $array1[0];
echo '</br>' . $array1[1];
echo '</br>' . $array1[2];
echo '</br>' . $array1[3] . '</br>';

//Funcion EXPLODE
$pizza = "pieza1:pieza2:pieza3:pieza4:pieza5:pieza6";
$piezas = explode(":", $pizza);
echo 'EXPLODE PIEZA [0] => ' . $piezas[0] . '</br>'; // pieza1
echo 'EXPLODE PIEZA [1] => ' . $piezas[1] . '</br>'; // pieza2
echo 'EXPLODE PIEZA [2] => ' . $piezas[2] . '</br>'; // pieza3
echo 'EXPLODE PIEZA [3] => ' . $piezas[3] . '</br>'; // pieza4



//**********************************************************************************
//ARRAY ASOCIATIVO, acceso mendiante clave personalizada
//**********************************************************************************
$array2 = array('clave1' => 'elemento1', 'clave2' => 2, 'clave3' => 'elemento3');
echo '</br>' . $array2['clave1'];
echo '</br>' . $array2['clave2'];
echo '</br>' . $array2['clave3'] . '</br>';



//**********************************************************************************
//COMPARACION
//**********************************************************************************
echo '</br></br> COMPARACIONES </br>';
echo (6 >= 4);
echo '</br>' . (5 == 11); //Iguales? No sale nada, false no muestra nada
echo '</br>' . (8 != 7); //Diferentes?
echo '</br>' . (8 <> 7); //Diferentes?
echo '</br>' . (6 === 6); //Identicos?
echo '</br>' . (6 !== 6); //No Identicos?



//**********************************************************************************
//OCULTAR ERRORES
//**********************************************************************************
@ define(); //es un define sin parametros! es un error!



//**********************************************************************************
//Incrementar/decrecer en uno
//**********************************************************************************
$var1 = 10;
echo '</br>' . $var1;
echo '</br>' . ++$var1;// suma 1 solo a var1 en el momento de imprimir
$var1++; // suma 1 a var1
echo '</br>' . $var1;



//**********************************************************************************
//OPERADORES LOGICOS
//**********************************************************************************
echo '</br></br>' . (( 2 == 2 ) && ( 2 != 1 ));
echo '</br>' . (( 2 == 2 ) and ( 2 != 1 ));
echo '</br>' . (( 3 == 3 ) || ( 2 != 1 ));
echo '</br>' . (( 3 == 3 ) or ( 2 != 1 )) . '</br>';



//**********************************************************************************
//CONDICIONES
//**********************************************************************************
if ( 7 == 7 && 6 != 7 )
{
	echo '</br>' . 'Thats true';
} 
elseif( 7 > 6 )
{
	echo '</br>' . 'Thats false';
}
else
{
	echo '</br> None of them are true </br></br>';
}



//**********************************************************************************
//WHILE
//**********************************************************************************
$i = 5;
while ($i < 10) 
{
	echo '</br>' . $i;
	$i++;
}
echo '</br>';



//**********************************************************************************
//DO WHILE
//**********************************************************************************
$j = 5;

//Ejecuta al menos una vez un bloque de instrucciones
do
{
	echo '</br>' . $j;
	$j++;
}
while ($j < 9);

echo '</br>';



//**********************************************************************************
//FOR
//**********************************************************************************
for ($i=10; $i > 5; $i--) 
{ 
	echo '</br>' . $i;
}

echo '</br></br>';

$carros[]="BMW";
$carros[]="Mercedes Benz";
$carros[]="Toyota";
$carros[]="Renault";
$carros[]="Citroen";
$carros[]="Subaru";
$carros[]="Chevrolet";

//count() Counts all elements in an array, or something in an object.
echo 'NUMERO DE ELEMENTOS EN ARRAY (carros) => ' . count($carros) . '<br/>'; //7

for($i=0; $i<count($carros); $i++)
{
	echo $carros[$i] . '<br/>';
}



//**********************************************************************************
//FOR EACH
//**********************************************************************************

//Array predefinido o numerico
$miarray1 = array(1,2,3,'elem4','elem5');

foreach ($miarray1 as $elementos) 
{
	echo '</br>' . $elementos;
}
echo '</br>';

//Array asociativo
$miarray2 = array( 'clave1' => 'elemento1', 'clave2' => 2, 'clave3' => 3 );

foreach ($miarray2 as $claves => $elementos) 
{
	echo '</br>' . $claves . ' = ' . $elementos;
}
echo '</br>';



//**********************************************************************************
//SWITCH
//**********************************************************************************
$k = 7;
switch ($k) 
{
	//si $k vale 1, imprima vale 1...
	case 1: echo '</br>' . 'vale 1';
	break;
	case 7: echo '</br>' . 'vale 7';
	break;
	case 'hola': echo '</br>' . 'es hola';
	break;
	default: echo '</br>' . 'No es ninguna de las anteriores';
	break;
}
echo '</br>';



//**********************************************************************************
//FUNCIONES
//**********************************************************************************
function miFuncion( $p1, $p2, $p3 )
{
	$add = $p1 + $p2 + $p3;
	$multiply = $add * 2;

	return $multiply;
}

$existeFuncion = function_exists('miFuncion');
echo '</br>' . miFuncion(5,2,4) . '</br> </br>';



//**********************************************************************************
//PROCESAR FORMULARIOS
//**********************************************************************************

//POST envia datos internamente
$nombre='';
$apellido='';
$password='';

if(isset($_POST['nombre']))
{
	$nombre = $_POST['nombre'];
}

if(isset($_POST['apellido']))
{
	$apellido = $_POST['apellido'];
}

if(isset($_POST['password']))
{
	$password = $_POST['password'];
}

echo 'POST => Nombre Completo: ' . $nombre . ' ' . $apellido . ' pass: ' . $password . '</br>';


//GET a traves de la URL
if(isset($_GET['nombre']))
{
	$nombre = $_GET['nombre'];
}

if(isset($_GET['apellido']))
{
	$apellido = $_GET['apellido'];
}

if(isset($_GET['password']))
{
	$password = $_GET['password']; //inseguro!
}

echo 'GET => Nombre Completo: ' . $nombre . ' ' . $apellido .  ' pass: ' . $password . '</br>';


//Calculadora
$operacion = '';
$n1 = 0;
$n2 = 0;
$n3 = 0;

if(isset($_POST['lista']))//Que seleccione de la lista?
{
	$operacion = $_POST['lista'];
}
if(isset($_POST['c1']))
{
	$n1 = $_POST['c1'];
}
if(isset($_POST['c2']))
{
	$n2 = $_POST['c2'];
}
if(isset($_POST['c3']))
{
	$n3 = $_POST['c3'];
}


//ISSET: Returns TRUE if var exists and has value other than NULL, FALSE otherwise.
//EMPTY: Determine whether a variable is empty, se coloca empty
//       por que los campos no estan NULL pero si VACIOS al dejarlos campos sin rellenar!!
if(!empty($n1) && !empty($n2) && !empty($n3))
{
	switch ($operacion) 
    {
		case 'sumar': echo 'CALCULADORA => ' . ($n1 + $n2 + $n3);
			break;
		case 'restar': echo 'CALCULADORA => ' . ($n1 - $n2 - $n3);
			break;
		case 'multiplicar': echo 'CALCULADORA => ' . ($n1 * $n2 * $n3);
			break;
		case 'dividir': echo 'CALCULADORA => ' . ($n1 / $n2 / $n3);
			break;
	}
}
else
{
	echo 'CALCULADORA => Debes ingresar todos los campos!';
}
echo '<br/>';



//**********************************************************************************
//GUARDAR ARCHIVOS DE TEXTO
//**********************************************************************************
echo 'LECTURA DE ARCHIVOS =>';

/* 
fopen: Opens file or URL 
params: FILENAME,MODE

http://php.net/manual/en/function.fopen.php

'a'	 Open for writing only; place the file pointer at the end of the file. 
If the file does not exist, attempt to create it.
*/
$file1 = fopen('archivo.txt', 'a') 
or die('Problema al crear el archivo');

/* fwrite: Binary-safe file write
   params: (resource $handle , string $string)

   OJO: para que el carriage return funcione: \n va entre comillas "" => "\n"
*/
if(!empty($_POST['nombreP']) && !empty($_POST['comentario'])) 
{
	fwrite($file1, 'Datos:');
	fwrite($file1, "\n");
	fwrite($file1, $_POST['nombreP']);
	fwrite($file1, "\n");
	fwrite($file1, $_POST['comentario']);
	fwrite($file1, "\n");
	fwrite($file1, "------------------------------------------- \n\n");
	fclose($file1);
}



//**********************************************************************************
//LEER ARCHIVOS DE TEXTO
//**********************************************************************************

// 'r' Open for reading only; place the file pointer at the beginning of the file.
$file2 = fopen('archivo.txt', 'r')
or die('Problemas al leer el archivo');

// FEOF — Tests for end-of-file on a file pointer
while(!feof($file2))
{
	//FGETS — Gets line from file pointer. Returns a string of up to length - 1 bytes read from the file pointed to by handle.
	$linea = fgets($file2);
	//NL2BR — Inserts HTML line breaks before all newlines in a string (\r\n, \n\r, \n and \r)
	$saltos = nl2br($linea);

	echo '<br/>' . $saltos;
}



//**********************************************************************************
//ELIMINAR ARCHIVOS
//**********************************************************************************
$filename = '';

if(isset($_POST['archivo']))
{
	$filename = $_POST['archivo'];
}

//UNLINK — Deletes a file, bool unlink( string $filename )
if(unlink($filename))
{
	echo 'El archivo ' . $filename . ' ha sido eliminado con exito';
}
else
{
	echo "Archivo no eliminado! <br/> <br/>";
}



//**********************************************************************************
//OBJETOS EN PHP
//**********************************************************************************
class ClaseA
{
  //Variable estatica para ser llamada desde metodo2() en la ClaseB
  public static $variableEstatica = "Hola!";

  public function metodo1()
  {
	 echo 'OBJETOS EN PHP => Nombre de la clase: ' . __CLASS__ . '<br/>';
  	 echo 'OBJETOS EN PHP => Nombre del metodo actual: ' . __METHOD__ . '<br/>';
     
  	 //Imprime "Hola!"
     echo ClaseB::metodo2() . '<br/>';

     //metodo3(): sin envio de parametro
     echo ClaseB::metodo3() . '<br/>';

     //metodo3(): con envio de parametro
     echo ClaseB::metodo3("Parametro definido 1") . '<br/>';

     //metodo4(): sin envio de parametro
     echo ClaseB::metodo4() . '<br/>';

     //metodo4(): con envio de parametro
     echo ClaseB::metodo4("Parametro definido 2") . '<br/>';

     //$claseA es instancia de ClaseA?
     $claseA = new ClaseA();
     echo 'OBJETOS EN PHP => Instanceof ' . ($claseA instanceof ClaseA)  . '<br/>';
  }
}

class ClaseB
{
  //Metodo estatico para ser llamado desde Clase A
  public static function metodo2() 
  {
     return 'OBJETOS EN PHP => ' . ClaseA::$variableEstatica;
  }

  //Meotod en el cual se puede o no recibir un parametro
  public static function metodo3($param1=null)
  {
  	if($param1 !== null)
    	return 'OBJETOS EN PHP => ' . $param1;

    return 'OBJETOS EN PHP => Sin envio de parametro o parametro nulo';
  }

//Metodo en el cual se puede o no recibir un parametro, al no recibir retorna un valor por defecto
  public static function metodo4($param1="Valor por defecto")
  {
  	  if($param1 !== "Valor por defecto")
         return 'OBJETOS EN PHP => ' . $param1;

     return 'OBJETOS EN PHP => ' . $param1;
  }
}

$clase_A = new ClaseA();
echo $clase_A->metodo1() . "<br/><br/>";



//**********************************************************************************
//PROPIEDADES ESTATICAS
//**********************************************************************************

class ClaseC
{
    public static $varEstatica = 'claseC';

    public function valorStatico()
    {
    	//self: este objeto
        return self::$varEstatica;
    }
}

class ClaseD extends ClaseC
{
    public function varEstaticaPadre() 
    {
    	//parent: el objeto padre
        return parent::$varEstatica;
    }
}


echo "PROPIEDAD ESTATICA => 1 " . ClaseC::$varEstatica . "<br/>";

//Acceso a propiedad estatica desde una clase instanciada
$claseC = new ClaseC();

//Solo se accede a la variable estatica si un metodo la retorna
echo "PROPIEDAD ESTATICA => 2 " . $claseC->valorStatico() . "<br/>";
echo "PROPIEDAD ESTATICA => 3  ERROR! " . $claseC->varEstatica . "<br/>"; // "Propiedad" varEstatica no definida ya que
                             // esta llamando a una propiedad estatica de una
                             // clase instanciada!! eso no e puede!

echo "PROPIEDAD ESTATICA => 4 " . $claseC::$varEstatica . "<br/>";

//Acceso a una propiedad estatica desde una variable que contiene el nombre
// de la clase
$nombreClase = 'ClaseD';
echo "PROPIEDAD ESTATICA => 5 " . $nombreClase::$varEstatica . "<br/>"; // A partir de PHP 5.3.0

echo "PROPIEDAD ESTATICA => 6 " . ClaseD::$varEstatica . "<br/>";
$claseD = new ClaseD();
echo "PROPIEDAD ESTATICA => 7 " . $claseD->varEstaticaPadre() . "<br/>";

?>