
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


</head>

<body>

<div align="center" style="background-color:#8B61AF ; width:450px " >

<h1 align="center">LOGIN</h1>

<form name="contactlogin" method="post" action="login.php">

<table width="450px">

<tr>
<td><label>Name:</label></td> 
<td><input type="text" placeholder="your name" name="username" required></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" placeholder="your password " name="password" required></td>
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
session_start();
require_once('db.php');
 $error='';
 if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password=$_POST['password'];
}
 
 
  $Query = "Select * FROM users WHERE name = '. $username.' AND password = '.$password.' ";
$res=mysqli_query($con,$Query);
 $rows = mysqli_fetch_array($res);

 
 if ($rows['username']== $username && $rows['password'] == $password)
        {
        header("location:profile.php");
  }
  
  else
  {
   $gerror='ID or Password you used is found wrong please try Again!';

    }
 
?>
