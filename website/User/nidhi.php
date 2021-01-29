<?php

$con=mysqli_connect('localhost','root','','greenvideos');

if(!$con)              

{

                die('not connected ');

}

if(isset($_POST['ok']))

{

                session_start();

                date_default_timezone_set("Australia/Sydney");

                $n=$_POST['name'];

                $e=$_POST['email'];

                $b=$_POST['blog'];

                $d = date("d/m/Y");

                $t = date("h:i:sa");

                $sql = "INSERT INTO blog(Name, Email, Blog, Date, Time)VALUES('$n','$e','$b','$d','$t')";

                if(mysqli_query($con,$sql))

                {

                                header("location:blog.php");

                }

}

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Blog</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
    
          <h1><a href="home.php">Green<span class="logo_colour">Videos</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="regi1.html">Registration Page</a></li>
		  <li class="selected"><a href="blog.php">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
	  <center><h2><b>Blog</b></h2></center>          <!-- Displaying blog -->

                <?php

					$res=mysqli_query($con,"select * from blog");

					while($row=mysqli_fetch_array($res))

					{

						echo"<h4>"; echo $row["Name"]; echo"</h4>"; 

						echo $row["Blog"]; echo"<br>";

						echo $row["Date"]; echo"<br>";

						echo $row["Time"]; echo"<br>";

						echo "<hr/>";

						echo "<hr/>"; echo"<br>";

					}

				?>
        <br><br><br><br><br><br><br><br><p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="home.php"><img src="GVlogo.jpg" width="100" height="100"></a></p>
      </div>
      <div id="content">
        <center><h1><b>Blog</b></h1></center>
        <form name="MyForm" method="POST"> 
          <div class="form_settings">
            <p><span>Name</span><input type="text" name="name" placeholder="Enter name" value="" required /></p>
			<p><span>Email</span><input type="email" name="email" placeholder="So we can get back to you." value="" required /></p>
			<p><span>Blog</span><textarea class="contact textarea" rows="8" cols="50" name="blog" required></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="Submit" name="ok" value="OK" /></p>
      </div>
	  </form>
      </div>
    </div>
    <div id="footer">
      
    </div>
  </div>
</body>
</html>