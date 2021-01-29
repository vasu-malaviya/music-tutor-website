<?php

$conn=mysqli_connect("localhost","root","");

if(!$conn)

{

                                die("Not connected to server");

}

if(!mysqli_select_db($conn,"greenvideo1"))

{

                                die("Not connected to server");

}

$msg = "";

 

  if (isset($_POST['upload'])) {

 

                $image = $_FILES['image']['name'];

               

                $target = "image/".basename($image);

                $t = $_POST['title'];

                $d = $_POST['disc'];
				
                $r = $_POST['rent'];


 

                $sql = "INSERT INTO image(image,title,des,rent) VALUES ('$image','$t','$d','$r')";

                mysqli_query($conn, $sql);

 

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

                                echo "Image uploaded successfully";

                }else{

                                echo "Failed to upload image";

                }

  }

  $result = mysqli_query($conn, "SELECT * FROM image");

?>