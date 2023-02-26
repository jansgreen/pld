<?php


  if (isset($_POST['enviar'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['cedula']) && !empty($_POST['email']) 
    && !empty($_POST['address']) && !empty($_POST['provincia']) && !empty($_POST['municipios']) && !empty($_POST['zip']) && !empty($_POST['Empadronador']) ) {
  // Recibe los datos del formulario
  $nombre = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $cedula = $_POST['cedula'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $provincia = $_POST['provincia'];
  $municipios = $_POST['municipios'];
  $zip = $_POST['zip'];
  $Empadronador = $_POST['Empadronador'];
  
  // Configuración del correo electrónico
  $destinatario = 'jansgreen@gmail.com';
  $asunto = "Aqui te envio mis datos para registrarme" + [$nombre, $lastName,  $cedula, $email,  $address, $provincia, $municipios,  $zip,  $Empadronador ];
  $cuerpo = "Nombre: $nombre, $lastName \n Email: $email\nMensaje: $mensaje";
  $headers = "From: $email\r\nReply-To: $email\r\n";    }else {
      echo 'Error al enviar el mensaje';
    } 
  }else {
    echo 'no se registro el evento';
  } 
  

?>
