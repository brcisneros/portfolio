<?php

$name = $ _POST['name'];
$email = $ _POST['email'];
$message = $ _POST['message'];
$to = 'brcisneros@hotmail.com.ar';
$title = 'Hola - La Webera';
 
$msjCorreo = "Name: $name\n E-Mail: $email\n Message:\n $message";
 
if ($ _POST['submit']) {
if (mail ($to, $title, $msjCorreo)) {
echo 'Message sent';
} else {
echo 'Message failed';
}
}
?>