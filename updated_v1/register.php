<?php
session_start();
	unset($_SESSION['uid']);
	unset($_SESSION['id']);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

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
{		{
//storing all the data of the form into the variables			
$username = trim(strip_tags($_POST['username']));
$phone =trim(strip_tags($_POST['phoneno']));
$email =trim(strip_tags($_POST['email']));
$password =trim(strip_tags($_POST['password']));
		}
		
//for register the user		
$sql=mysqli_query($con, "INSERT INTO users (name, phoneno, email, password) VALUES ('$username','$phone','$email','$password')")or die(mysqli_error());
		
if($sql)
{
	echo "Successfully Registered! You can now " ?> <a href="login.php">LOGIN<a>;
	<?php
    }
else
{
	echo "not Register";
	}
}
?>
</body>
</html>