<?php
// Fill up array with names
$nombres[]="Anna";
$nombres[]="Brittany";
$nombres[]="Cinderella";
$nombres[]="Diana";
$nombres[]="Eva";
$nombres[]="Fiona";
$nombres[]="Gunda";
$nombres[]="Hege";
$nombres[]="Inga";
$nombres[]="Johanna";
$nombres[]="Kitty";
$nombres[]="Linda";
$nombres[]="Nina";
$nombres[]="Ophelia";
$nombres[]="Petunia";
$nombres[]="Amanda";
$nombres[]="Raquel";
$nombres[]="Cindy";
$nombres[]="Doris";
$nombres[]="Eve";
$nombres[]="Evita";
$nombres[]="Sunniva";
$nombres[]="Tove";
$nombres[]="Unni";
$nombres[]="Violet";
$nombres[]="Liza";
$nombres[]="Elizabeth";
$nombres[]="Ellen";
$nombres[]="Wenche";
$nombres[]="Vicky";

//get the dato parameter from URL
$dato=$_GET["dato"];

/*
  If there is any text sent from the JavaScript (strlen($dato) > 0), the following happens:

  Find $nombres name matching the characters sent from the JavaScript
  If no match were found, set the response string to "no suggestion"
  If one or more matching names were found, set the response string to all these names
  The response is sent to the "txtHint" placeholder
*/

//lookup all hints from array if length of dato>0
if (strlen($dato) > 0)
{
  $hint="";
  for($i=0; $i<count($nombres); $i++)
    {
    if ( strtolower($dato) == strtolower(substr( $nombres[$i],0,strlen($dato) )) )
      {
      if ($hint=="")
        {
        $hint=$nombres[$i];
        }
      else
        {
        $hint=$hint." , ".$nombres[$i];
        }
      }
    }
 }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
{
  $response="no suggestion";
}
else
{
  $response=$hint;
}

//output the response
echo $response;
?>