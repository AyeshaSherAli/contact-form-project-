<?php
$server = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'contacts';
$con = mysqli_connect($server, $user, $pass) 
 or die ("Could not connect to server\n" . mysqli_error ());
 mysqli_select_db($con,$db) 
 or die ("Could not connect to database\n" . mysqli_error ());
?>