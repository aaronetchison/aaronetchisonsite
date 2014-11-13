<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
	$refer = $_POST['refer'];
	$referOther = $_POST['referOther'];
	$comments = $_POST['comments'];

	$to = 'etch@aaronetchison.com, ' . $email;
	$from = 'etch@aaronetchison.com';
	$subject = 'Etchison Design and Web Development';

$message = 'Name: ' . $name . "\n\n
";
$message .= 'E-mail: ' . $email . "\n\n
";
$message .= 'Refer: ' . $refer . "\n\n
";
$message .= 'Refer Other: ' . $referOther . "\n\n
";
$message .= 'Comments: ' . $comments . "\n\n
";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: ' . '<' . $from . '>' . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";

$message .= "

<table cellspacing='0' cellpadding='8' border='0' width='500'>
<tr>
<td colspan='2'></td>
</tr>
<tr bgcolor='#eeeeee'>
<td width='154' style='font-family:Verdana, Arial; font-size:11px; color:#333333;'><strong>Name</strong></td>
<td width='314' style='font-family:Verdana, Arial; font-size:11px; color:#333333;'>".$name."</td>
</tr>
<tr bgcolor='#eeeeee'>
<td style='font-family:Verdana, Arial; font-size:11px; color:#333333;'><strong>E-mail address:</strong></td>
<td style='font-family:Verdana, Arial; font-size:11px; color:#333333;'>".$email."</td>
</tr>
<tr bgcolor='#eeeeee'>
<td style='font-family:Verdana, Arial; font-size:11px; color:#333333;'><strong>Referred By</strong></td>
<td style='font-family:Verdana, Arial; font-size:11px; color:#333333;'>".$refer."</td>
</tr>
<tr bgcolor='#eeeeee'>
<td style='font-family:Verdana, Arial; font-size:11px; color:#333333;'><strong>Referred By Other</strong></td>
<td style='font-family:Verdana, Arial; font-size:11px; color:#333333;'>".$referOther."</td>
</tr>
<tr bgcolor='#eeeeee'>
<td colspan='2' style='font-family:Verdana, Arial; font-size:11px; color:#333333;'><strong>Message</strong></td>
</tr>
<tr bgcolor='#eeeeee'>
<td colspan='2' style='font-family:Verdana, Arial; font-size:11px; color:#333333;'>".$comments."</td>
</tr>
<tr><td colspan='2' style='padding: 0px;'></td></tr>
</table>

";

	$mail_sent = mail($to, $subject, $message, $headers);
	
	if($mail_sent)
	{
		print "Thank you for your email. We will respond as soon as we can.";
	} else {
		print "Your email wasn't sent successfully.";
	}

?>

