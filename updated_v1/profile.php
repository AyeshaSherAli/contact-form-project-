<?php
session_start();
include('db.php');

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
 $sqlQuery="Select * from contact where id='$uid'";
 
  $result=mysqli_query($con,$sqlQuery); 
					 $number=mysqli_num_rows($result);
					  echo "<table border=1> ";
					  					  echo "<tr><th>First name</th><th>Last name</th>
							
										  <th>Phone number</th></tr>";
										  if($number>1)
				    while($number>0)
				 {
				 
 
 
                   $fname=mysql_result($result,$number-1,"f_name");			
                   $lname=mysql_result($result,$number-1,"l_name");			
				   $phone=mysql_result($result,$number-1,"phone_number");			
                      					  echo "<tr><th>$fname</th><th>$lname</th>
										  <th>$phone</th></tr>";
     
	 
                 $number--;
				}	
					 else
					 {
					  echo "<table>";
					 echo " <br/> The contacts list is empty  !  ";
					 }
					 					 
 ?>
 
 </div>
</body>
</html>