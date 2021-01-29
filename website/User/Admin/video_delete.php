<?php
$con=mysqli_connect('localhost','root','','greenvideo1');

$sql="DELETE FROM image WHERE id='$_GET[id]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=video_table.php");
else
	echo "NOT DELETED";


?>