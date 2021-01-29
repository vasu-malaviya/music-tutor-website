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
      <h1 class="my-4">Welcome to Green Video Preview
        <small>Join Today</small>
      </h1>
    </div>
	  <?php

$con=mysqli_connect('localhost','root','','greenvideo1');

 

if(!$con)              

{

                die('hhhhh');

}

$set=$_POST['search'];

if($set)

{

$show="SELECT * FROM image where title='$set'";

$result=mysqli_query($con,$show);

$count=mysqli_num_rows($result);

                if($count==0)

                {

                                //$output='No result found';

                                echo"no res";

                }

                else

                {             

                                while($row=mysqli_fetch_array($result))

                                {
                                                echo"<table>";

                                                echo"<tr>";

                                                echo"<td>";

                                               // echo"<h1>";
												?><img src="img/<?php echo $row["image"];?>" height="350" width="253"> 
												<?php echo "</td>";
												echo "<td>";
												echo $row['des'];echo"</h1>"; echo"<br>";
													 echo "<center><form><a href=calendar.php?id=".$row['id']."><input type='button' name='rent' value='Book' /></a></form></center>";
													 echo"</td>";			
                                                
												echo "</tr>";
												echo "</table>";
											
												

                                }


                }

}

else

{

echo "not found" ;      

}
?>





<br>
<br>
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