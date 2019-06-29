<?php

if(isset($_POST['submit'])){
	
	$to = "email@gmail.com";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = "Email arrived from ".$name." \n Stating the following: \n\n".$_POST['message'];
	
	$header = "From: " .$email;
	
	email($to,$subject,$message,$header);
	echo "thanks for your invaluable feedback!!";
	header('Location: contactus.html');
}
?>