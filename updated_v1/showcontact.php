<?php
session_start();
$uid= $_SESSION['uid'];

?>
<body bgcolor="#D9B6E7">
<div>
<?php
include('nav.php');
?>
</div>
<?php
echo "<br> <b><u> Your contacts are :</u> </b><br><br>";
include('db.php');
$uid= $_SESSION['uid'];

$query=mysqli_query($con,"select *from contact where uid = (select id from users where id = $uid)");


if (mysqli_num_rows($query) > 0) 
{
	echo"<table><tr><th>Firstname</th><th>lastname</th><th>phoneno</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
        echo "<tr><td> " . $row["firstname"]. "</td><td> " . $row["lastname"]. "</td><td>" .$row["phoneno"]. "</td></tr>";
    } echo"</table>";
} else {
    echo "0 results";
}
 
				 
?>


</body>