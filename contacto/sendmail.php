<?php
if(isset($_POST['message']) && isset($_POST['email']) && isset($_POST['name']) )
{
    $to = "contacto@espaciorigel.com.ar";
    $subject = $_POST['subject']; 
	$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
	$message .= "Nombre y Apellido: ".filter_var($_POST['name'], FILTER_SANITIZE_STRING)."\n\n";
	$message .= "Email: ".filter_var($_POST['email'], FILTER_SANITIZE_STRING)."\n\n";
	$message .= "Telefono: ".filter_var($_POST['phone'], FILTER_SANITIZE_STRING)."\n\n";
	$message .= "Mensaje: ".filter_var($_POST['message'], FILTER_SANITIZE_STRING)."\n\n";
    $header = "From: contacto@espaciorigel.com.ar\nReply-To:".$_POST["email"]."\n";
	$header .= "Mime-Version: 1.0\n";
	$header .= "Content-Type: text/plain";
    if(mail($to, $subject, $message ,$header)) 
        echo json_encode(['success'=>'¡Gracias hemos recibido su mensaje!']); 
    else 
        echo json_encode(['success'=>'Falló el envio.']);
    exit;
 }
?>