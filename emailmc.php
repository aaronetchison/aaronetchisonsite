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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <!-- Facebook sharing information tags -->
        <meta property="og:title" content="*|MC:SUBJECT|*" />
        
        <title>*|MC:SUBJECT|*</title>
		<style type="text/css">
			/* Client-specific Styles */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
			body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */
			/* Reset Styles */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}
			/* Template Styles */
			body, #backgroundTable{
				/*@editable*/ background-color:#666666;
			}
	
			#templateContainer{
				/*@editable*/ border: 1px solid #262626;
			}

			h1, .h1{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:34px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}
	
			h2, .h2{
				/*@editable*/ color:#b01817;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:18px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			h3, .h3{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:26px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			h4, .h4{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:22px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			p, .p{
				/*@editable*/ color:#cccccc;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:18px;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: PREHEADER /\/\/\/\/\/\/\/\/\/\ */

			#templatePreheader{
				/*@editable*/ background-color:#262626;
			}
			/**
			* @tab Header
			* @section preheader text
			* @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
			*/
			.preheaderContent div{
				/*@editable*/ color:#CCCCCC;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:10px;
				/*@editable*/ line-height:100%;
				/*@editable*/ text-align:left;
			}

			.preheaderContent div a:link, .preheaderContent div a:visited, /* Yahoo! Mail Override */ .preheaderContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */

			#templateHeader{
				/*@editable*/ background-color:#262626;
				/*@editable*/ border-bottom:0;
			}
	
			.headerContent{
				/*@editable*/ color:#CCCCCC;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:34px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ padding:0;
				/*@editable*/ text-align:center;
				/*@editable*/ vertical-align:middle;
			}

			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#bo1817;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			#headerImage{
				height:auto;
				max-width:600px !important;
			}
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */

			#templateContainer, .bodyContent{
				/*@editable*/ background-color:#262626;
			}

			.bodyContent div{
				/*@editable*/ color:#CCCCCC;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}

			.bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#B01817;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			.bodyContent img{
				display:inline;
				height:auto;
			}
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */

			#templateFooter{
				/*@editable*/ background-color:#262626;
				/*@editable*/ border-top:0;
			}

			.footerContent div{
				/*@editable*/ color:#B01817;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:12px;
				/*@editable*/ line-height:125%;
				/*@editable*/ text-align:center;
			}

			.footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#Bo1817;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			.footerContent img{
				display:inline;
			}

			#social{
				/*@editable*/ background-color:#666666;
				/*@editable*/ border:0;
			}

			#social div{
				/*@editable*/ text-align:center;
			}

			#utility{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border:0;
			}

			#utility div{
				/*@editable*/ text-align:center;
			}
			#monkeyRewards img{
				max-width:190px;
			}
		</style>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
            	<tr>
                	<td align="center" valign="top">
                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                  <!-- // Begin Template Header \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
	                                    <tr>
	                                        <td class="headerContent">
	                                        
	                                        	<!-- // Begin Module: Standard Header Image \\ -->
	                                        	<img src="http://www.aaronetchison.com/images/emailheader.jpg" style="max-width:600px;" id="headerImage campaign-icon"/>
	                                        	<!-- // End Module: Standard Header Image \\ -->
	                                        
	                                        </td>
	                                    </tr>
                                  </table>
                                  <!-- // End Template Header \\ -->
                              </td>
                          </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                  <!-- // Begin Template Body \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                    	<tr>
                                          <td valign="top" class="bodyContent">
                                
                                              <!-- // Begin Module: Standard Content \\ -->
                                              <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                  <tr>
                                                      <td valign="top">
                                                          <div mc:edit="std_content00">

																															<table cellspacing='0' cellpadding='10' border='0' width='100%'>
																																<tr>
																																<td colspan='2'>
																																<p>Thank you for your email. I will reply as soon as I can. The following is the information you provided:</p>
																																</td>
																																</tr>

																																<tr>
																																<td width='140' style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><h2>Name:</h2></td>
																																<td width='300' style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><p>".$name."</p></td>
																																</tr>

																																<tr>
																																<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><h2>E-mail address:</h2></td>
																																<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><p>".$email."</p></td>
																																</tr>

																																<tr>
																																<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><h2>Referred By:</h2></td>
																																<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><p>".$refer."</p></td>
																																</tr>

																																<tr>
																																<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><h2>Referred By Other:</h2></td>
																																<td style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><p>".$referOther."</p></td>
																																</tr>

																																<tr>
																																<td colspan='2' style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><h2>Message:</h2></td>
																																</tr>

																																<tr>
																																<td colspan='2' style='font-family:Verdana, Arial; font-size:16px; color:#CCCCCC;'><p>".$comments."</p></td>
																																</tr>
																															</table>
                                                            </div>
																												</td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Content \\ -->
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Footer \\ -->
                                	<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                    	<tr>
                                        	<td valign="top" class="footerContent">
                                            
                                                <!-- // Begin Module: Standard Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="social">
                                                            <div mc:edit="std_social">
                                                                &nbsp;<a href="http://www.twitter.com/aaronetchison">follow on Twitter</a> | <a href="http://www.linkedin.com/pub/aaron-etchison/41/210/906">follow on LinkedIn</a> | <a href="http://etch83.deviantart.com/gallery">follow on DeviantArt</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" width="350">
                                                            <div mc:edit="std_footer">
																															<em>Copyright &copy; 2015 Aaron Etchison, All rights reserved.</em>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Footer \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </table>
                        <br />
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

