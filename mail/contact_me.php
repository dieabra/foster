<?php
// Check for empty fields
if(empty($_POST['empresa'])  		||
   empty($_POST['nombreDeContacto'])	||
   empty($_POST['telephone'])	||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$empresa = $_POST['empresa'];
$nombreDeContacto = $_POST['nombreDeContacto'];
$telephone = $_POST['telephone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'info@eleseg.net';
$email_subject = "Te ha llegado una mensaje de:  $empresa";
$email_body = "Nuevo mensaje de tu website eleseg.com.ar\n\n"."Detalles del contacto:\n\nNombre: $empresa\n\nNombre del contacto: $nombreDeContacto\n\nTeléfono: $telephone\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@eleseg.com.ar\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>