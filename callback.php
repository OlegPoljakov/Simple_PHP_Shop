<?php

include_once 'config/init.php';


$template = new Template('templates/callbackpage.php');


$template->sent=false;
if(isset($_POST['submit'])){
    $to = "xyyzzz4343@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    if (mail($to,$subject,$message,$headers)){
    	//$sent=true;
    	$template->sent=true;
    	$template->feedback="Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    else 
    	{
		$template->sent=false;	
    	} 

    }

echo $template;

?>