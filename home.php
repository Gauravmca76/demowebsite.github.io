<html>
<head>
<title> Registration form</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="jquery.min.js"></script>
<script src="valid.js"></script>
<script language="javascript">
function login()
{
location.href="login.html";
}

function myClear()
{
  document.getElementById("email").value= "";
}
</script>
<style>
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

.btnLogin
{
    border:none;
    border-radius:1.5rem;
    width: 20%;
    padding: 1%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>
</head>
<body>
<span id="message"></span>
<form name="form1" id="form1" action="index.php" method="POST">
<div class="container register-form">
<div class="form">
<div class="note">
<h3>This is a simpleRegister Form</h3>
</div>
<div class="form-content">

<div class="row">
<div class="col-md-6">

<div class="form-group">
<input type="text" id="fname" name="fname" class="form-control" placeholder="Your Full Name *" title="Enter Name Only e.g. Bill Gates" pattern="[A-Z a-z]+\s[A-Z a-z]+" value="" required/>
</div>

<div class="form-group">
<input type="tel" id="contact" name="contact" class="form-control" maxlength="10" placeholder="Your Phone Number *" pattern="^\d{10}$" title="Enter 10 digit Mobile Numer" value="" onchange="checkemobileAvailability()" required/></div>

<div class="form-group">
<input type="email" id="email" name="email" class="form-control" placeholder="Your Email Address *" value="" onchange="checkemailAvailability()" required/>
</div>

<div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Your Password *" value="" required/>
</div>

<div class="form-group">
<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password *" value="" required/>
</div>

</div>
</div>
<input type="submit" name="submit" class="btnSubmit" value="Register">
</div>
</div>
</div>
</form>
<div col align="center" class="row container"> 
<input type="submit" name="login" class="btnLogin" value="Login" onClick="login()"/>
<input type="submit" name="login" class="btnLogin" value="Reset" onClick="myClear()"/>
</div>

</body>
</html>