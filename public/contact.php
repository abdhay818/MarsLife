<?php 
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "naveen@cultureguru.asia";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $formcontent) or die("Error!");
echo "Thank You!";
?>