<?php
  // Recibe los datos del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  
  // Configuración del correo electrónico
  $destinatario = 'jansgreen@example.com';
  $asunto = 'Mensaje de formulario de contacto';
  $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  
  // Envía el correo electrónico
  if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo 'Mensaje enviado exitosamente';
  } else {
    echo 'Error al enviar el mensaje';
  }
?>
