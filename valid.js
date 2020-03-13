function checkemailAvailability()
{
jQuery.ajax({
url: "checkemail.php",
data: 'email='+$("#email").val(),
type: "POST",
success:function(data)
{
$("#email").html(data);
},
error:function() {}
});
document.getElementById("email").focus();
}

function checkemobileAvailability()
{
jQuery.ajax({
url: "checkmobile.php",
data: 'contact='+$("#contact").val(),
type: "POST",
success:function(data)
{
$("#contact").html(data);
},
error:function() {}
});

document.getElementById("contact").focus();
}

