<?php
		$conn=mysqli_connect("localhost","root","");
		
		if(!$conn)
		{
			die("Not connected to server");
		}
		
		if(!mysqli_select_db($conn,"greenvideo1"))
		{
			die ("Database not selected");
		}		
if (isset($_POST['submit']))
{	
	session_start();
	$name=$_POST['name'];
	$psw=$_POST['psw'];
	$_SESSION['name']=$name;
	$sel="select * from user_register1 where name='$name' and psw='$psw'";
	$row=mysqli_query($conn,$sel);
	$result=mysqli_num_rows($row);
	if($result > 0)
	{
		header("location:video.php");
	}
	else
	{
		header("location:opps.html");
	}
}
?>