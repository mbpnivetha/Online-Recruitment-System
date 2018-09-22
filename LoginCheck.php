<html>
<head>
</head>
<?php
if(isset($_POST['SignIn']))
{
session_start();
include "Db.php";

$a=trim($_POST["uid"]);
$b=trim($_POST["pid"]);
$x="select * from login where username='$a' and BINARY password='$b'";
$y=$conn->query($x);
if($y->num_rows==1)
{
	$row = $y->fetch_assoc();
	$_SESSION["uid"] = $row["username"];
	$_SESSION["pwd"]=$row["password"];
		
	
	echo "<script type='text/javascript'>window.location.href='homepage.html';</script>";
	exit();
}

else
{
	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "log.php";
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>
