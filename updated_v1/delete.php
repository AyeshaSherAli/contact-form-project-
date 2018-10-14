<?php
session_start();
$uid= $_SESSION['uid'];
include('db.php');
$sql="delete from contact where id='$uid'";
$res=mysqli_query($con,$sql);
echo "contact deleted";
?>