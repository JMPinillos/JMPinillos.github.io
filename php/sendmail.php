<?php
// Email Submit

  $name = @trim(stripslashes($_POST['name'])); 
  $email = @trim(stripslashes($_POST['email']));
  $message = @trim(stripslashes($_POST['message'])); 

  $email_from = $email;
  $email_to = 'pinillosrubio@gmail.com'; //replace with your email

  $message = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

  $success = @mail($email_to, "[KasCo Landing] ".$name, $message);

  $noreply = @mail($email_from, "[KasCo Landing] Gracias por contactarnos", "¡Le responderemos lo antes posible!");
?>