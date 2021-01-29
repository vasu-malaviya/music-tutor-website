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
$image = $_GET['image'];
$title = $_GET['title'];
$des = $_GET['des'];
$rent = $_GET['rent'];
$query = mysqli_query( $connection,"update image set
image='$image',title='$title',des='$des',rent='$rent' where id='$id'");
}
$query = mysqli_query($connection,"select * from image");
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='updatevid.php?update={$row['id']}'>{$row['title']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysqli_query($connection,"select * from image where id=$update");
while ($row = mysqli_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='id' value='{$row['id']}' />";
echo "<br />";
echo "<label>" . "Image Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='image' value='{$row['image']}' />";
echo "<br />";
echo "<label>" . "Title:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='title' value='{$row['title']}' />";
echo "<br />";
echo "<label>" . "Description:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='des' value='{$row['des']}' />";
echo "</br>";
echo "<label>" . "Rent:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='rent' value='{$row['rent']}' />";
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