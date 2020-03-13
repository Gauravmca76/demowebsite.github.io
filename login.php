<html>
<head>
</head>
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
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$pass=mysqli_real_escape_string($con,$_POST['pass']);
	$sql="SELECT * FROM register WHERE email='$email' AND pass='$pass'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		header("Location:index.php");
	}
	
}
?>
</body>
</html>