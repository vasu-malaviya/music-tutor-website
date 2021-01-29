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
<?php

$con=mysqli_connect('localhost','root','','greenvideo1');

if(!$con)              
{
                die('not');
}
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
?>	  
	  
	  
	  <h1 class="my-4">
	  <small>Please Choose the Date</small> 
		</h1>
<form name="start" method="post" action="">
	
<?php 
error_reporting(0);
$id=$_GET[id]; 
echo "<input type='hidden' name='id' value='$id'>";?>



Start Date: <input type="date" name="start" required="required">
<br>
<br>
<br>
End Date: <input type="date" name="end" required="required">
<br>
<br>
<br>
	<input type="submit" value="PayPal Now" name="submit" align="center">
	</form>

  
    </div>
	
	<br>
	<br>
	<br>
	<br>
	<br>

	

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

<?php

if(isset($_POST['submit']))
{
	            session_start();
                $start=$_POST['start'];
                $end=$_POST['end']; 
				$id=$_POST['id'];
                $sd= strtotime($start);
                $ed= strtotime($end);
                $diff = $ed - $sd;
                $days = $diff/(60*60*24);
				$_SESSION['start']=$start;
				$_SESSION['end']=$end;
				$_SESSION['image_id']=$id;
				if($days > 10)
				{
				$message="Invalid Dates  |   You can choose maximum only 10 days. Thank You";
				echo "<script type='text/javascript'>alert('$message');</script>";
				}
				else
				{
				$sql="INSERT INTO calendar(start,end,days,image_id)VALUES('$start','$end','$days','$id')";
                if(mysqli_query($con,$sql))
                {
                header("location:bill.php");
                }
                else
                {
                                echo "Not inserted";
                }
					
}
}

?>