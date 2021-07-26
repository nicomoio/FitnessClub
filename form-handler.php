<?php
$name = $_POST['nombre']
$visitor_email = $_POST['email']
$subject = $_POST['tema']
$message = $_POST['mensaje']

$email_from= 'nicolasmoio14@gmail.com'
$email_subject = 'Nuevo Mensaje'
$email_body = "Nombre de Usuario: $nombre.\n".
                "Email de Usuario: $visitor_email.\n".
                    "Tema: $subject.\n".
                        "Mensaje de Usuario: $message.\n";
 
$to = 'nicolasmoio14@outlook.com';
$headers = "From: $email_from \r\n"
$headers = "Reply To $visitor_email";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>