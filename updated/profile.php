<?php
include('db.php');
session_start();
if(!isset($_SESSION['uid'])){
header('location:index.php');
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div>
<h1 align="center">User profile</h1>
<?php
$uid= $_SESSION['uid'];

$query=mysqli_query($con,"select *from users where id = '$uid'");
$res=mysqli_fetch_assoc($query);
$usid=$res['id'];
$uname=$res['name'];
echo'Welcome' .$usid." ".$uname."!";
?>

<table bgcolor="#BCA0CF" width="550px" align="center">
<tr><td>username</td><td>phone no</td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>

</table></div>

<div>

<a href="logout.php">Logout</a>

 </div>
</body>
</html>