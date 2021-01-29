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

</head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Music Tutor</a>
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
			<li class="nav-item">
              <a class="nav-link" href="video.php">Teachers</a>
            </li>
            <li class="nav-item">
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
	  
	  
	  <br>
	  
<center>


	  <?php
	  $con=mysqli_connect("localhost","root","","greenvideo1");
		session_start();
		if(isset($_SESSION['name']))
{
	echo "Welcome ".$_SESSION['name'];
	?>
	<br>
	(<a href="logout.php">Logout</a>) <br>
	<?php
}
	else
	{
		?>
	Welcome Guest, (<a href="userlogin.html">Login</a> | <a href="register.html">Register</a> )
	<?php
	}
		$id=$_SESSION['image_id'];
		//echo $id; 
		$res=mysqli_query($con,"select title,price from image where id='$id'");
		echo"THANKS FOR TAKING MEMBERSHIP FROM OUR WEBSITE.";
		echo "</br>";
				echo "YOU HAVE BOOKED CLASS SUCCESSFULLY FROM"; echo "</br>";
		echo $_SESSION['start']; echo "</br>";
		echo "TO"; echo "</br>";echo $_SESSION['end']; echo "</br>"; echo "User Name:-"; echo $_SESSION['name']; echo "</br>";
			$un=$_SESSION['name'];
			$st=$_SESSION['start'];
			$ed=$_SESSION['end'];
			
		while ($row=mysqli_fetch_array($res))
		{
			echo "Teacher Name:-";echo $row['title'];
			echo "</br>";
			echo $row['price'];
			echo "</br>";
			
			$mv=$row['title'];
			$rt=$row['price'];
			
			
		}
		$sql="INSERT INTO acl(name,title,start,end,price)VALUES('$un','$mv','$st','$ed','$rt')";
	if(mysqli_query($con,$sql))
	{
		echo "Successfully rented movie for selected time period.";
	}
	
?>
<br>
<form action="blog.php">
	<input type="submit" value="Ok" name="submit" align="center">
</form>
	</center>  

	  
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
    </div>

		<br>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">VASU MALAVIYA</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>