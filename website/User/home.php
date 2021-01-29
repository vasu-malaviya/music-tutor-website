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
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 10000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
              <a class="nav-link" href="contact.html">Contact   | </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="register.html">Student Login  |</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="admin/index.html">Admin Login  |</a>
            </li>
			<!--<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Instruments</a>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="home.php">All</a>
				  <a class="dropdown-item" href="g_flute.php">Flute</a>
				  <a class="dropdown-item" href="g_guitar.php">Guitar</a>
				  <a class="dropdown-item" href="g_horn.php">Horn</a>
				  <a class="dropdown-item" href="g_sexophone.php">Sexophone</a>
				  <a class="dropdown-item" href="g_violin.php">Violin</a>
				  <a class="dropdown-item" href="g_bassoon.php">Bassoon</a>
				  <a class="dropdown-item" href="g_cs.php">CS</a>
				  <a class="dropdown-item" href="g_euphonium.php">Euphonium</a>
				</div>
            </li>-->
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
	  
	  
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/111.jpg" style="width:100%">
  <div class="text">Join Today</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/222.jpg" style="width:100%">
  <div class="text">World Learns Music</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/333.jpg" style="width:100%">
  <div class="text">Heal Yourself</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>	  
<br>
	

<?php	
$con=mysqli_connect("localhost","root","","greenvideo1");


$res=mysqli_query($con,"select * from image");

echo "<div class='row'>";
while ($row=mysqli_fetch_array($res))
{
     
     echo  "<div class='col-lg-4 col-md-4 col-sm-6 portfolio-item'>";
     echo    "<div class='card h-100'>";
     echo      "<a href='register.html'>";
	  echo "<img src='img/".$row['image']."'height='350' width='348' >";
     echo       "<div class='card-body'>";
     echo       "<h4 class='card-title'>";
     echo        "<a href='register.html'>" .$row["title"]; echo"</a>";
     echo         "</h4>";
     echo        "<p class='card-text'>" .$row["des"]; echo "</p>";
     //echo   $row["price"]; echo "</p>";
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
