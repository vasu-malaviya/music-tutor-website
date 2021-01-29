<?php
$conn=mysqli_connect("localhost","root","");
		
if(!$conn)	
{
	die("Not connected to server");
}
		
if (!mysqli_select_db($conn,"greenvideo1"))
{
	die("Database not selected");
}
		
if(isset($_POST['btnsubmit']))
{	
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	$sql="INSERT INTO user_register1(name,email,psw
	) values('$name','$email','$psw')";
	if(mysqli_query($conn,$sql))
	{
		header("location:userlogin.html"); 
	}
	else{
		echo "fail"; 
		}
}
?>

