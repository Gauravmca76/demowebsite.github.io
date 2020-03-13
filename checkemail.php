<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die('Could not connect'.mysqli_error());
}
mysqli_select_db($con,"sample");
if(!empty($_POST["email"]))
{
$email=mysqli_real_escape_string($con,$_POST['email']);
$sql = "SELECT email FROM register WHERE email = '$email'";
$select = mysqli_query($con, $sql);
if (mysqli_num_rows($select)>0)
{
echo '<script language="javascript">';
echo 'alert("Email ID Already Exist!!!")';
echo '</script>';	
}
else
{
echo '<script language="javascript">';
echo 'alert("Email ID Avaliable For Registration!!!")';
echo '</script>';	

}
}
?>