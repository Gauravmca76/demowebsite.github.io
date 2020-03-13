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
	$name=mysqli_real_escape_string($con,$_POST['fname']);
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$pass=mysqli_real_escape_string($con,$_POST['password']);
	$sql="UPDATE register SET name='$name',contact='$contact',email='$email',pass='$pass' WHERE email='$email'";
	mysqli_query($con,$sql);
	header("Location:index.php");
}
?>
</body>
</html>