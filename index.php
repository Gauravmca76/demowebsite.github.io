<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><style>
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>
</head>
<body>
<h2><a href="home.php">Logout</a></h2>
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
	$pass2=mysqli_real_escape_string($con,$_POST['cpassword']);
	$sql3="SELECT * FROM register WHERE contact='$contact'";
	$sql4="SELECT * FROM register WHERE email='$email'";
	$dupraw=mysqli_query($con,$sql3);  $dupraw1=mysqli_query($con,$sql4);
	if(mysqli_num_rows($dupraw)==0)
	{
		if(mysqli_num_rows($dupraw1)==0)
		{
			$sql="INSERT INTO register(name,contact,email,pass) VALUES('$name','$contact','$email','$pass')";
			mysqli_query($con,$sql);	
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Email ID Already Exist!!!")';
			echo '</script>';	
		}	
	}
	else
	{	
		echo '<script language="javascript">';
		echo 'alert("Contact Number Already Exist!!!")';
		echo '</script>';
	}
}
?>
<table class="table table-striped">
<tr>
<th>Name</th>
<th>Contact</th>
<th>Email</th>
<th>Password</th>
</tr>
<?php
$sql2="SELECT * FROM register";
$result=mysqli_query($con,$sql2);
$num=mysqli_num_rows($result);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td> <?php echo $row['name']; ?></td>
<td> <?php echo $row['contact']; ?></td>
<td> <?php echo $row['email']; ?></td>
<td> <?php echo $row['pass']; ?></td>
</tr>
<?php
}
}

?>
<h2> <?php  echo "Number of Users: ".$num  ?> </h2>
</table><br><br>


<div class="container">
  <h2>Update Data</h2>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Update Data</button><br><br>
  
    <div class="form-group">
      <h2>Delete Data</h2>
     <form action="delete.php" method="POST">
     <input type="email" name="email12" class="form-control" placeholder="Your Email Address*" value="" required/><br><br>
     <input type="submit" class="btn btn-info btn-lg" name="submit" value="Delete Data"/></form>
   </div>
   
  <div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<form name="form1" action="update.php" method="POST">
<div class="container register-form">
<div class="form">
<div class="note">
<h3>This is a simpleRegister Form</h3>
</div>
<div class="form-content">

<div class="row">
<div class="col-md-6">

<div class="form-group">
<input type="text" name="fname" class="form-control" placeholder="Your Full Name *" value="" required/>
</div>

<div class="form-group">
<input type="number" name="contact" class="form-control" maxlength="10" placeholder="Your Phone Number *" value="" required/>
</div>

<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Your Email Address *" value="" required/>
</div>

<div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Your Password *" value="" required/>
</div>


</div>
</div>
<input type="submit" name="submit"class="btnSubmit" value="Update">
</div>
</div>
</div>
</form>
</div>  
</div>
</div>
</div> 
</div>
</body>
</html>