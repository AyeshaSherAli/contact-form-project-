<?php include('register.php') ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>

<body>

<div style="background-color:#8B61AF ; width:450px " >
<h1 align="center">Register</h1>
<form name="contactregister" method="post" action="register.php">
<table width="450px">
<tr><td><label>Name:</label></td> <td><input type="text" placeholder="your name" name="username" required></td></tr>
<tr><td>Phone No:</td><td> <input type="tel" placeholder="your phone no" name="phoneno" required></td></tr>
<tr><td>Email Address:</td><td><input type="email" placeholder="your email address" name="email" required></td></tr>
<tr><td>Password:</td><td><input type="password" placeholder="your password to set" name="password" required></td></tr>
<tr><td colspan="2" style="text-align:center"><input type="submit" value="Register" name="submit"></td></tr>
</table>
<h2>Already a member? <a href="login.php">Sign in </a></h2>
</form>
</div>

</body>
</html>
