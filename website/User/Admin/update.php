<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h1>Green Video</h1>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu For Update</p>
<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $connection,"greenvideo1");
if (isset($_GET['submit'])) {
$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$psw = $_GET['psw'];
$query = mysqli_query( $connection,"update user_register1 set
name='$name',email='$email',psw='$psw' where id='$id'");
}
$query = mysqli_query($connection,"select * from user_register1");
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='update.php?update={$row['id']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysqli_query($connection,"select * from user_register1 where id=$update");
while ($row1 = mysqli_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='name' value='{$row1['name']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='email' value='{$row1['email']}' />";
echo "<br />";
echo "<label>" . "Password:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='psw' value='{$row1['psw']}' />";
echo "<br />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysqli_close($connection);
?>
</body>
</html>