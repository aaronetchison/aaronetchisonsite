<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$refer = $_POST['refer'];
	$referOther = $_POST['referOther'];
	$comments = $_POST['comments'];
	
	//where the email will be sent to.
	//to send to multiple addresses, separate each with a comma
	$to = "etch@aaronetchison.com, " . $email;
	$from = "etch@aaronetchison.com";
	$subject = "Contact Form";
	$message = "Thank you for contacting us. Below is the information you provided:\n\n";
	$message .= "Name: {$name} \n\n";
	$message .= "Email: {$email} \n\n";
	$message .= "Refer: {$refer} \n\n";
	$message .= "Refer Other: {$referOther} \n\n";
	$message .= "Comments: {$comments} \n\n";
	
	$mail_sent = @mail( $to, $subject, $message, "From: " . $from );
	
	if($mail_sent)
	{
		print "Thank you for your email. We will respond as soon as we can.";
	} else {
		print "Thank you for your email. We will respond as soon as we can.";
	}
?>