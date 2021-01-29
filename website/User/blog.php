<?php
$con=mysqli_connect('localhost','root','','greenvideo1');

if(!$con)	
{
	die('not connected ');
}
if(isset($_POST['submit']))
{
	session_start();
	$nm=$_POST['name'];
	$bg=$_POST['blog'];
	$d = date("Y/m/d");
	$t = date("h:i:sa");
	$sql = "INSERT INTO blog(name,blog,date,time)VALUES('$nm','$bg','$d','$t')";
	if(mysqli_query($con,$sql))
	{
		header("location:blog.php");
	}
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Music Tutor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">	

<style>
.vl {
  border-left: 6px solid green;
  height: 500px;
}
</style>

</head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.php">Music Tutor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Don’t Just Learn. Learn Standard
        <small>Music Tutor </small>
      </h1>
		<form method="POST"> 
          <div class="form_settings">
		  
            <p><span>Name: &nbsp;</span><input type="text" name="name" placeholder="" value="" required /></p>
			<p><span>Blog:&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea class="contact textarea" rows="8" cols="50" name="blog" required></textarea></p>
			
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="Submit" name="submit" value="submit" /></p>
			</div>
		</form>
		
		<hr>
		<hr>
		<br>
		
		<h3>Review Blogs</h3>
		
		               <?php

					$res=mysqli_query($con,"select * from blog");

					while($row=mysqli_fetch_array($res))

					{

						echo"<h4>"; echo $row["name"]; echo"</h4>"; 

						echo $row["blog"]; echo"<br>";

						echo $row["date"]; echo"<br>";

						echo $row["time"]; echo"<br>";

						echo "<hr/>";

						echo "<hr/>"; echo"<br>";

					}

				?>
				
				
</div>


<br>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Music Tutor </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>