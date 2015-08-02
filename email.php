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
    <body leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0' style='-webkit-text-size-adjust:none;margin:0;padding:0;background-color:#666666;width:100%;'>
    	<center>
        	<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='backgroundTable' style='margin: 0;padding: 0;background-color: #666666;height: 100% !important;width: 100% !important;'>
            	<tr>
                	<td align='center' valign='top' style='border-collapse: collapse;'>
                    	<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer' style='border: 1px solid #262626;background-color: #262626;'>
                        	<tr>
                            	<td align='center' valign='top' style='border-collapse: collapse;'>
                                  <!-- // Begin Template Header  -->
                                	<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateHeader' style='background-color: #262626;border-bottom: 0;'>
	                                    <tr>
	                                        <td class='headerContent' style='border-collapse: collapse;color: #CCCCCC;font-family: Arial;font-size: 34px;font-weight: bold;line-height: 100%;padding: 0;text-align: center;vertical-align: middle;'>
	                                        
	                                        	<!-- // Begin Module: Standard Header Image  -->
	                                        	<img src='http://www.aaronetchison.com/images/emailheader.jpg' style='max-width: 600px;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;' id='headerImage campaign-icon'>
	                                        	<!-- // End Module: Standard Header Image  -->
	                                        
	                                        </td>
	                                    </tr>
                                  </table>
                                  <!-- // End Template Header -->
                              </td>
                          </tr>
                        	<tr>
                            	<td align='center' valign='top' style='border-collapse: collapse;'>
                                  <!-- // Begin Template Body  -->
                                	<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateBody'>
                                    	<tr>
                                          <td valign='top' class='bodyContent' style='border-collapse: collapse;background-color: #262626;'>
                                
                                              <!-- // Begin Module: Standard Content -->
                                              <table border='0' cellpadding='20' cellspacing='0' width='100%'>
                                                  <tr>
                                                      <td valign='top' style='border-collapse: collapse;'>
                                                          <div mc:edit='std_content00' style='color: #CCCCCC;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;'>

																															<table cellspacing='0' cellpadding='10' border='0' width='100%'>
																																<tr>
																																<td colspan='2' style='border-collapse: collapse;'>
																																<p style='color: #cccccc;display: block;font-family: Arial;font-size: 18px;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>Thank you for your email. I will reply as soon as I can. The following is the information you provided:</p>
																																</td>
																																</tr>

																																<tr>
																																<td width='140' style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><h2 style='color: #b01817;display: block;font-family: Arial;font-size: 18px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>Name:</h2></td>
																																<td width='300' style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><p style='color: #cccccc;display: block;font-family: Arial;font-size: 18px;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>".$name."</p></td>
																																</tr>

																																<tr>
																																<td style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><h2 style='color: #b01817;display: block;font-family: Arial;font-size: 18px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>E-mail address:</h2></td>
																																<td style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><p style='color: #cccccc;display: block;font-family: Arial;font-size: 18px;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>".$email."</p></td>
																																</tr>

																																<tr>
																																<td style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><h2 style='color: #b01817;display: block;font-family: Arial;font-size: 18px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>Referred By:</h2></td>
																																<td style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><p style='color: #cccccc;display: block;font-family: Arial;font-size: 18px;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>".$refer."</p></td>
																																</tr>

																																<tr>
																																<td style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><h2 style='color: #b01817;display: block;font-family: Arial;font-size: 18px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>Referred By Other:</h2></td>
																																<td style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><p style='color: #cccccc;display: block;font-family: Arial;font-size: 18px;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>".$referOther."</p></td>
																																</tr>

																																<tr>
																																<td colspan='2' style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><h2 style='color: #b01817;display: block;font-family: Arial;font-size: 18px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>Message:</h2></td>
																																</tr>

																																<tr>
																																<td colspan='2' style='font-family: Verdana, Arial;font-size: 16px;color: #CCCCCC;border-collapse: collapse;'><p style='color: #cccccc;display: block;font-family: Arial;font-size: 18px;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;'>".$comments."</p></td>
																																</tr>
																															</table>
                                                            </div>
																												</td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Content -->
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body-->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top' style='border-collapse: collapse;'>
                                    <!-- // Begin Template Footer-->
                                	<table border='0' cellpadding='10' cellspacing='0' width='600' id='templateFooter' style='background-color: #262626;border-top: 0;'>
                                    	<tr>
                                        	<td valign='top' class='footerContent' style='border-collapse: collapse;'>
                                            
                                                <!-- // Begin Module: Standard Footer  -->
                                                <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                                                    <tr>
                                                        <td colspan='2' valign='middle' id='social' style='border-collapse: collapse;background-color: #666666;border: 0;'>
                                                            <div mc:edit='std_social' style='color: #B01817;font-family: Arial;font-size: 12px;line-height: 125%;text-align: center;'>
                                                                &nbsp;<a href='http://www.twitter.com/aaronetchison' style='color: #Bo1817;font-weight: normal;text-decoration: underline;'>follow on Twitter</a> | <a href='http://www.linkedin.com/pub/aaron-etchison/41/210/906' style='color: #Bo1817;font-weight: normal;text-decoration: underline;'>follow on LinkedIn</a> | <a href='http://etch83.deviantart.com/gallery' style='color: #Bo1817;font-weight: normal;text-decoration: underline;'>follow on DeviantArt</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign='top' width='350' style='border-collapse: collapse;'>
                                                            <div mc:edit='std_footer' style='color: #B01817;font-family: Arial;font-size: 12px;line-height: 125%;text-align: center;'>
																															<em>Copyright &copy; 2015 Aaron Etchison, All rights reserved.</em>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Footer  -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Footer -->
                                </td>
                            </tr>
                        </table>
                        <br>
                    </td>
                </tr>
            </table>
        </center>
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

