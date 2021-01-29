 <?php
$cn=mysql_connect("localhost","root","");
if(!$cn)
{
	echo "error: " . mysql_error();
}
mysql_select_db("greenvideo1", $cn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>List Classified: Forgot Password</title>
  <link rel="SHORTCUT ICON" href="images/weblogo.jpg" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {color: #000000}
-->
</style>
</head>
<body>
<div id="header">
	<div id="logo">
		<img src="images/logo.png" width="143" height="120" />
	</div>

<div id="search">
	<form method="get" action="">
	<fieldset class="style2">
	 Welcome Guest, (<a href="login.php">Login</a> | <a href="register.php">Register</a> )	
	</fieldset>
	</form>
</div>
</div>

<center>
	<div id="menu">
		<ul>
			<li><a href="index.php"><b>Home</b></a></li>
			<li><a href="chkpost.php"><b>Place An Ad</b></a></li>
			<li><a href="search.php"><b>Search</b></a></li>
			<li><a href="about.php"><b>About Us</b></a></li>
			<li><a href="contact.php"><b>Contact Us</b></a></li>
			<li><a href="help.php"><b>Help</b></a></li>
			<li><a href="faq.php"><b>FAQ</b></a></li>
			<?php
				if(isset($_SESSION['login_user']))
				{
			?>
					<li><a href="userprofile.php"><b>Profile</b></a></li>
			<?php
				}
			?>
		</ul>
	</div>

	<div id="page">
  		<div class="two-cols">
      		<div class="box-orange">
        		<h2 class="section"><strong>FORGOT PASSOW0RD </strong></h2>
        	<div class="content">
			<form method="post" name="form1" action="forgotpass1.php">
			Please Enter Your Email Address: <input type="text" name="emailaa" />
			<input type="submit" class="button orange" value="Submit" name="Submit" />
			
			</form>
			</div>
      </div>
    </div>
</div>
</center>
		</div>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<div style="clear: both;"></div>

</div>

<div id="footer">

	<p id="legal"><span class="style1">Copyright &copy; List Classified 2012.</span></p>

</div>
</body>
</html>