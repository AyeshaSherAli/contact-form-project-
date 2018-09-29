<?php include('db.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


</head>

<body>

<div align="center" style="background-color:#8B61AF ; width:450px " >

<h1 align="center">LOGIN</h1>

<form name="contactlogin" method="post" action="">

<table width="450px">

<tr>
<td><label>Name:</label></td> 
<td><input type="text" placeholder="your name" name="username"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" placeholder="your password " name="password" ></td>
</tr>

<tr>
<td colspan="2" style="text-align:center"><input type="submit" value="Login" name="submit"></td>
</tr>

</table>

</form>

</div>

</body>

</html>

<?php
include('db.php');
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$result=mysqli_query($con,"select * from users where name = '$username' and password = '$password'")or die(mysqli_error());
	
	if(!$result){
		header('location:index.php');
		}
		else{
			$res=mysqli_fetch_assoc($result);
			session_start();
			$_SESSION['uid']=$res['id'];
			
			header('location:profile.php');
			}
	} 
?>