<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['lname']) 		||
   empty($_POST['country']) 	||
   empty($_POST['state']) 		||
   empty($_POST['number']) 		||
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$state = $_POST['state'];
$number = $_POST['number'];
$email_address = $_POST['email'];

	
// Create the email and send the message
$to = 'facustrauch@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nLname: $lname\n\nCountry: $country\n\nState: $state\n\nNumber: $number\n\nEmail: $email_address";
$headers = "From: noreply@tacticalunlimited.io\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>