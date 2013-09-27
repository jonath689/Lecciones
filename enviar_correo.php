<?php

if(isset($_POST['correoDestino']) && isset($_POST['asunto']) && isset($_POST['mensaje']) && !empty($_POST['correoDestino']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']))
{
	/*bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )
	  to: Receiver, or receivers of the mail., user@example.com, anotheruser@example.com
	  subject: Subject of the email to be sent.
	  message: Each line should be separated with a CRLF (\r\n). Lines should not be larger than 70 characters.
	  additional_headers (optional): String to be inserted at the end of the email header.
                                     This is typically used to add extra headers (From, Cc, 
                                     and Bcc). Multiple extra headers should be separated with a 
                                     CRLF (\r\n).
      additional_parameters (optional): The additional_parameters parameter can be used to pass additional flags as command line 
      								    options to the program configured to be used when sending mail,
      								     as defined by the sendmail_path configuration setting. For example, 
      								     this can be used to set the envelope sender address when using sendmail 
      								     with the -f sendmail option.
	*/

	ini_set("SMTP","aspmx.l.google.com");
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: test@gmail.com" . "\r\n";

   if(mail($_POST['correoDestino'], $_POST['asunto'], $_POST['mensaje'], /*"From: codigofacilito"*/$headers) == true)
   	 echo "Correo Enviado";
   	else
   		echo "Correo no enviado";
}?>