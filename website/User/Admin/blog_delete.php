<?php
$con=mysqli_connect('localhost','root','','greenvideo1');

$sql="DELETE FROM blog WHERE name='$_GET[name]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=blogdata.php");
else
	echo "NOT DELETED";


?>