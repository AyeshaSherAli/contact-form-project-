<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();

// connect to database
$con = mysqli_connect('localhost','root','');

//for checking the connection of database
if(!$con)
{
	echo 'not connected to datbase';
	}
	if(!mysqli_select_db($con,'contacts'))
	{
		echo 'database not selected';
		}

//for registration of user		
if(isset($_POST['submit']))
		{
//storing all the data of the form into the variables			
$username = trim(strip_tags($_POST['username']));
$phone =trim(strip_tags($_POST['phoneno']));
$email =trim(strip_tags($_POST['email']));
$password =trim(strip_tags($_POST['password']));
		}
		
//for checking wether the user already exist or not
$email_check="select * from users where email='$email'";
$phone_check="select * from users where phoneno='$phone'";

$res_E=mysqli_query($con,$email_check);
$res_p=	mysqli_query($con,$phone_check);
if(mysqli_num_rows($res_E)>0){
	echo'email already taken';
	}
	elseif(mysqli_num_rows($res_p)>0){
		echo'phone no already taken';
		}else{
//for register the user		
$sql= "INSERT INTO users (name, phoneno, email, password) VALUES ('$username','$phone','$email','$password')";
		
if(mysqli_query($con,$sql))
{
	echo ' register';
	header("location:profile.php");
	}
else
{
	echo 'not Register';
		header("location:index.html");

	}
	
		}
//	header("location:index.html");
		
?>
</body>
</html>