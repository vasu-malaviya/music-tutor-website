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
                <span class="sr-only">(curprice)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Instruments</a>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="video.php">All</a>
				  <a class="dropdown-item" href="g_flute.php">Flute</a>
				  <a class="dropdown-item" href="g_guitar.php">Guitar</a>
				  <a class="dropdown-item" href="g_horn.php">Horn</a>
				  <a class="dropdown-item" href="g_sexophone.php">Sexophone</a>
				  <a class="dropdown-item" href="g_violin.php">Violin</a>
				  <a class="dropdown-item" href="g_bassoon.php">Bassoon</a>
				  <a class="dropdown-item" href="g_cs.php">CS</a>
				  <a class="dropdown-item" href="g_euphonium.php">Euphonium</a>
				</div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Welcome to Music Tutor Online
        <small>Join Today</small>
      </h1>
	  	 <!-- search --> 
	 
	 				
				<form  method="post" action="search.php">
					<input type="text" name="search" placeholder="Search for Teacher here.." />
					<input type="submit" value="submit" name="submit" />
				</form>
		 <br>

	 
	  
<?php	
$con=mysqli_connect("localhost","root","","greenvideo1");


$res=mysqli_query($con,"select * from g_violin");
session_start();
if(isset($_SESSION['name']))
{
	echo "Welcome ".$_SESSION['name'];
	?>
	<br>
	(<a href="logout.php">Logout</a>)
	<?php
}
	else
	{
		?>
	Welcome Guest, (<a href="userlogin.html">Login</a> | <a href="register.html">Register</a> )
	<?php
	}
echo "<div class='row'>";
while ($row=mysqli_fetch_array($res))
{
     
     echo  "<div class='col-lg-4 col-md-4 col-sm-6 portfolio-item'>";
     echo    "<div class='card h-100'>";
	  echo "<img src='img/".$row['image']."'height='350' width='348' >";
     echo       "<div class='card-body'>";
     echo       "<h4 class='card-title'>";
     echo   $row["title"]; 
     echo         "</h4>";
     echo        "<p class='card-text'>" .$row["des"]; echo "</p>";
     echo   $row["price"]; echo "</p>";
	 echo "<center><td><form><a href=calendar.php?id=".$row['id']."><input type='button' name='price' value='Book' /></a></form></td></center>";
     echo "</div>";
     echo  "</div>";
     echo "</div>";
    
} 
 echo "</div>";   	  
?> 
    </div>


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
