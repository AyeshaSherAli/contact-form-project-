<?php
session_start();
include('db.php');
    $uid= $_SESSION['uid'];


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

<body bgcolor="#D9B6E7">
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
<div>
<div>
<?php
include('nav.php');
?>
</div>
</div>


 </div>
 <div>
 <?php
 
 $uid= $_SESSION['uid'];

					 					 
 ?>
 
 </div>
</body>
</html>