<?php

if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "<html><h1>Form submitted</h1></html>";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


//Validate first
if(empty($name) || empty($visitor_email))
{
	echo '<html><h1>Name and email are mandatory!</h1></html>';
	exit;
}


$email_from = 'webmotowise@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a message from the user $name. \n".
		"email address: $visitor_email\n".
		"Here is the message:\n  $message".

$to = 'webmotowise@gmail.com';
$headers = "From: $email_from \r\n";


//Send the email!
mail($to, $email_subject, $email_body, $headers);

?>
