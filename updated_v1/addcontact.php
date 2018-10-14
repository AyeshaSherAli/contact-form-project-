<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body bgcolor="#D9B6E7">

<div>
<?php
include('nav.php');
?>
</div>

<div style="background-color:#8B61AF ; width:450px " >
<h1 align="center">Fill the following information to add a new contact:</h1>
<form name="addcontact" method="post" action="">
<table width="450px">
<tr><td><label>First Name:</label></td> <td><input type="text"  name="fname" ></td></tr>
<tr><td>Last Name:</td><td> <input type="text"  name="lname" ></td></tr>
<tr><td>Phone No:</td><td><input type="tel"  name="phoneno"></td></tr>
<tr><td colspan="2" style="text-align:center"><input type="submit" value="ADD Contact" name="submit"></td></tr>
</table>
</form>
</div>
</body>
</html>
<?php

       include('db.php');
	  if(isset($_POST['submit'])){
				  
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$phone=$_POST['phoneno'];
				
				 				$uid=$_SESSION['uid'];

			   
                 	 $result=mysqli_query($con,"Insert into contact (firstname , lastname, phoneno ) values('$fname','$lname','$phone')") or die(mysqli_error()); 
					 $res=mysqli_query($con,"select * from contact");
   $_SESSION['id'] = $res['cid'];

				  	if($result){
						echo "Added";
						}
						else{
							echo "not added";}
		  }
           ?>