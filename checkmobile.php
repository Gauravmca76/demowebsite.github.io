<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die('Could not connect'.mysqli_error());
}
mysqli_select_db($con,"sample");
if(!empty($_POST["contact"]))
{
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$sql = "SELECT contact FROM register WHERE contact = '$contact'";
$select = mysqli_query($con, $sql);
if (mysqli_num_rows($select)>0)
{
echo '<script language="javascript">';
echo 'alert("Mobile Number Already Exist!!!")';
echo '</script>';	

}
else
{
echo '<script language="javascript">';
echo 'alert("Mobile Number Avaliable For Registration!!!")';
echo '</script>';	
}
}
?>