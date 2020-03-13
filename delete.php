<html>
<body>

<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die('Could not connect'.mysqli_error());
}
mysqli_select_db($con,"sample");
if(isset($_POST['submit']))
{
	$email=mysqli_real_escape_string($con,$_POST['email12']);
	$sql="DELETE FROM register WHERE email='$email'";
	mysqli_query($con,$sql);
	header("Location:index.php");
}
?>

</body>
</html>