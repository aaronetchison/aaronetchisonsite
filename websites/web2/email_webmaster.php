<?php
$to = "etch@aaronetchison.com";
$subject = "Contact Webmaster form";
$message = "Customer Name: " . $_POST['name'] . "\r\n" .
"Email:            " . $_POST['email'] . "\r\n" .
"Comments and Questions:   " . $_POST['comments'] . "\r\n" .
$_POST['contactwebmaster']; $from = $_POST['email'];
$headers = "From: $from" . "\r\n";
mail($to,$subject,$message,$header);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Synaptic Media - Thank you for your comments and questions</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="css/forms.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="pagecontainer">
  <div id="header"> <img src="images/header2.jpg" alt="Synapse Header" width="860" height="200" border="0" usemap="#Map" />
    <map name="Map" id="Map">
      <area shape="circle" coords="137,98,64" href="index.html" alt="Synaptic Media Home" />
    </map>
  </div>
  <div id ="navglobal">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="index.html">Home</a>      </li>
      <li><a href="services.html" class="MenuBarItemSubmenu">Services</a>
        <ul>
          <li><a href="webdeveloping.html">Web Developing</a></li>
          <li><a href="brandingmarketing.html">Branding &amp; Marketing</a></li>
          <li><a href="contentcreation.html">Content Creation</a></li>
        </ul>
      </li>
      <li><a href="aboutus.html">About Us</a>      </li>
      <li><a href="contactus.html">Contact Us</a></li>
    </ul> 
  </div>
  
  <div id="contentcontainer">
    <div class="boxexp">
    	<h2>Thank you for contacting us!</h2>
        <h3>One of our representatives will respond as soon as possible.</h3>
    </div>    
  </div>

  <div id="footer">
  	<p>Copyright &copy; 2011 Aaron Etchison</p>
  	<p><a href = "termsofuse.html">Terms of Use </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
  	<a href = "contactwebmaster.html">Contact Webmaster</a>
  	</p>
  </div>

</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {validateOn:["blur"]});
</script>
</body>
</html>
