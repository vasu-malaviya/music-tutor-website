<?php
$con=mysqli_connect('localhost','root','','greenvideo1');

$sql="DELETE FROM user_register1 WHERE id='$_GET[id]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=tables.php");
else
	echo "NOT DELETED";


?>