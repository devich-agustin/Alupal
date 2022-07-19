<?php

$nombre = $_POST ['name']; 
$email = $_POST ['email']; 
$telefono = $_POST['tel'];
$fecha = $_POST['date']; 
$comentario = $_POST['coments']; 

$mensaje = "Este mensaje fue enviado por " . $nombre . ",/r/n";
$mensaje = "El correo electronico es " . $email . ",/r/n";
$mensaje = "El número de teléfono es " . $telefono . ",/r/n";
$mensaje = "Fecha del mensaje " . date("d/m/Y, time" ());
$mensaje = "Y dejo este mensaje en la pagina: " . $comentario . ",/r/n";

$destinatario = 'adevich22@gmail.com';
$asunto = 'Mensaje enviado desde la pagina web de Alupal';

mail($destinatario, $asunto, utf8_decode ($mensaje), $header); 

header('Location:exito.html'); 

?>