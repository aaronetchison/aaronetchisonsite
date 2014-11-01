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

$message = "

<html>
<head>
</head>
<body>
<table cellspacing='0' cellpadding='10' border ='0' width='480' bgcolor='#000000'>
<tr><td>
	<table cellspacing='0' cellpadding='10' border='0' width='460'>
		<tr bgcolor='#262626'>
		<td width='40'>
			<img src='http://www.aaronetchison.com/images/logo.png' />
		</td>
		<td width ='400'style='font-family:Verdana, Arial; font-size:32px; color:#CCCCCC;'>
			<p>Aaron Etchison</p>
		</td>
		</tr>

		<tr bgcolor='#262626'>
		<td colspan='2' style='font-family:Verdana, Arial; font-size:24px; color:#CCCCCC;'>
			<p>Design and Development</p>
		</td>
		</tr>
	</table>

	<table cellspacing='0' cellpadding='10' border='0' width='460'>
		<tr>
		<td colspan='2'></td>
		</tr>

		<tr bgcolor='#262626'>
		<td width='140' style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><strong>Name:</strong></td>
		<td width='300' style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'>".$name."</td>
		</tr>

		<tr bgcolor='#262626'>
		<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><strong>E-mail address:</strong></td>
		<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'>".$email."</td>
		</tr>

		<tr bgcolor='#262626'>
		<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><strong>Referred By:</strong></td>
		<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'>".$refer."</td>
		</tr>

		<tr bgcolor='#262626'>
		<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><strong>Referred By Other:</strong></td>
		<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'>".$referOther."</td>
		</tr>

		<tr bgcolor='#262626'>
		<td colspan='2' style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><strong>Message:</strong></td>
		</tr>

		<tr bgcolor='#262626'>
		<td colspan='2' style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'>".$comments."</td>
		</tr>

		<tr><td colspan='2' style='padding: 0px;'></td></tr>
	</table>
</td></tr>
</table>
</body>
</html>
";

	$mail_sent = mail($to, $subject, $message, $headers);
	
	if($mail_sent)
	{
		print "Thank you for your email. We will respond as soon as we can.";
	} else {
		print "Your email wasn't sent successfully.";
	}

?>

