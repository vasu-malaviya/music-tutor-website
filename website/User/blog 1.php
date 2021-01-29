<?php
$con=mysqli_connect('localhost','root','','greenvideo');

if(!$con)	
{
	die('not connected ');
}
if(isset($_POST['submit']))
{
	session_start();
	$un=$_POST['name'];
	$m=$_POST['mail'];
	$ms=$_POST['blog'];
	$d = date("Y/m/d");
	$t = date("h:i:sa");
	$sql = "INSERT INTO blog(user_name, email_id, blog, date, time)VALUES('$un','$m','$ms','$d','$t')";
	if(mysqli_query($con,$sql))
	{
		header("location:blog.php");
	}
}
?>
<html>

<head>
  <title>Blog</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="home.html">Green<span class="logo_colour">Video</span></a></h1>
          <h2 align="center">Watch Anywhere, Anytime.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.html">Home</a></li>
		  <li><a href="login.php">Login</a></li>
          <li><a href="registration.php">Registration</a></li>
          <li><a href="contact.html">Contact Us</a></li>
		  <li  class="selected"><a href="blog.php">Blog</a></li>
        </ul>
      </div>
    </div>

    <div id="site_content">
<div class="sidebar">
<h3>Blog</h3>
	<?php
$con=mysqli_connect("localhost","root","","greenvideo");
$res=mysqli_query($con,"select * from blog");



while($row=mysqli_fetch_array($res))
{
echo"<h4>"; echo $row["user_name"]; echo"</h4>"; echo"<br>";
echo $row["blog"]; echo"<br>";
echo $row["date"]; echo"<br>";
echo $row["time"]; echo"<br>";
echo "<hr/>";
echo "<hr/>";
}



?> 
	</div>
	   <font size="6" color="black"><center>Blog</center></font>
      <div id="content">  
        <form action="" method="POST">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="name" value="" required/></p>
            <p><span>Email Address</span><input class="contact" type="mail" name="mail" value="" required/></p>
            <p><span>Blog</span><textarea class="contact textarea" rows="8" cols="50" name="blog"required></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Submit" /></p>
          </div>
        </form>
      </div>
    </div>
      </div>
    </div>
     <div id="footer">
     Green Video
    </div>
  </div>
</body>
</html>
