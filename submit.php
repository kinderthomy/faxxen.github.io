<?php
	$name = $_POST['name'];
	$email = $_POST['email'];

	$to = "yumiruun@gmail.com";
	$subject = "Neue Formulardaten";
	$message = "Name: " . $name . "\r\n" . "E-Mail: " . $email;
	$headers = "From: webmaster@example.com";

	mail($to, $subject, $message, $headers);

	echo "Vielen Dank für Ihre Daten!";
?>