<?php
// Email Submit

  $name = @trim(stripslashes($_POST['Nombre'])); 
  $email = @trim(stripslashes($_POST['Email']));
  $message = @trim(stripslashes($_POST['Mensaje'])); 

  $email_from = $email;
  $email_to = 'pinillosrubio@gmail.com'; //replace with your email

  $message = 'Nombre: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Mensaje: ' . $message;

  $success = @mail($email_to, "[KasCo Landing] ".$name, $message);

  $noreply = @mail($email_from, "[KasCo Landing] Gracias por contactarnos.", "¡Le responderemos pronto!");
?>