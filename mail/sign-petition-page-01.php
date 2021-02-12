<?php
// Check for empty fields
if(empty($_POST['fname'])  		||
   empty($_POST['lname']) 		||
   empty($_POST['country']) 	||
   empty($_POST['state']) 		||   
   empty($_POST['pnumber']) 	||
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$country = $_POST['country'];
$state = $_POST['state'];
$phone_number = $_POST['pnumber'];
$email_address = $_POST['email'];

	
// Create the email and send the message
$to = 'facustrauch@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details: \n\nFname: $first_name \n\nLname: $last_name \n\nCountry: $country \n\nState: $state \n\nPnumber: $phone_number \n\nEmail: $email_address";
$headers = "From: noreply@tacticalunlimited.io\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>