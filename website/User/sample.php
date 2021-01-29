<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Video</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Green Video</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
			<li class="nav-item">
					  <a class="nav-link">Profile</a>
					<li class="nav-item dropdown no-arrow">
					  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user-circle fa-fw"></i>
					  </a>
					  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="insert file/profileupdate.php">Update Profile</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
					  </div>
					</li>
				  </ul>
            </li>
          </ul>
        </div>
      </div> 
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Welcome to Green Video Preview
        <small>Join Today</small>
      </h1>

	

<?php	
$con=mysqli_connect("localhost","root","","greenvideo1");


$res=mysqli_query($con,"select * from image");

echo "<div class='row'>";
while ($row=mysqli_fetch_array($res))
{
     
     echo  "<div class='col-lg-3 col-md-4 col-sm-6 portfolio-item'>";
     echo    "<div class='card h-100'>";
     echo      "<a href='register.html'>";
	  echo "<img src='img/".$row['image']."'height='350' width='253' >";
     echo       "<div class='card-body'>";
     echo       "<h4 class='card-title'>";
     echo        "<a href='register.html'>" .$row["title"]; echo"</a>";
     echo         "</h4>";
     echo        "<p class='card-text'>" .$row["des"]; echo "</p>";
     echo   $row["rent"]; echo "</p>";
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
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
