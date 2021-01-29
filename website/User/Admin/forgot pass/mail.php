<?php
require 'PHPMailerAutoload.php';

	$conn=mysqli_connect("localhost","root","");

	if(!$conn)
			{
				die("Not connected to server");
			}
			
			if(!mysqli_select_db($conn,"greenvideo1"))
			{
				die ("Database not selected");
			}	
		
$email=$_POST['email'];
$query=mysqli_query($conn,"select * from admin where email='$email'");
$row=mysqli_fetch_array($query);


$mail= new PHPMailer();

	$mail->SMTPDebug=1;
	
	$mail->isSNTp();
	
	$mail->HOST = "smtp.gmail.com";
	
	$mail->SMTPAuth=TRUE;
	
	$mail->Username="vasumalaviya3999@gmail.com";
	$mail->Password="123";
	
	$mail->SMTPSecure="false";
	$mail->Port=587;
	
	$mail->From="vasumalaviya3999@gmail.com";
	$mail->FromName="vasu";
	
	$mail->addAddress($row['email']);
	
	$mail->isHTML(TRUE);
	
	$mail->Subject='test mail';
	$mail->Body="<i>This is Your Password</i>".$row=["psw"];
	$mail->AltBody="This is the plain text version of the email content;"
	/*if(!$mail->send())
	{
		echo "Mailer Error:" .$mail->ErrorInfo;
	}
	else
	{
		echo "ok";
	}*/
	
	
?>
	
