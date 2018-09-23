<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'not connected to datbase';
	}
	if(!mysqli_select_db($con,'contacts'))
	{
		echo 'database not selected';
		}
		
		if(isset($_POST['submit']))
		{
$username =$_POST['username'];
$phone =$_POST['phoneno'];
$email =$_POST['email'];
$password =$_POST['password'];

$sql= "INSERT INTO users (name, phoneno, email, password) VALUES ('$username','$phone','$email','$password')";
		}
if(mysqli_query($con,$sql))
{
	echo ' register';
	}
else
{
	echo 'not Register';
	}
	header("url:index.html");
		
?>
</body>
</html>