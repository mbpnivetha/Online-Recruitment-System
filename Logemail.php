<html>
<head>
</head>
<?php
if(isset($_POST['signin']))
{
session_start();
include_once "db.php";
$username=$_POST['n'];
$password=$_POST['p'];
$z=trim($_POST["n"]);
$a=trim($_POST["e"]);
$b=trim($_POST["p"]);
$x="select * from ecsignupp where Name='$z' and  Email='$a' and BINARY Password='$b'";
$y=$conn->query($x);
if($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["n"] = $row["Name"];
	$_SESSION["e"] = $row["Email"];
	$_SESSION["p"]=$row["Password"];
mysqli_query($conn,"INSERT into signin values('$username','$password')");
echo "<script type='text/javascript'>alert('Signed In successfully..!!');</script>";
include "homepage.html";
exit();
}
elseif(empty($a&&$b&&$z))
{
echo "<script type='text/javascript'>alert('Fill all the Details..!!');</script>";
include "signin.php";
}
else
{
echo "<script type='text/javascript'>alert('Wrong Username or Password or Mail ID!!!');</script>";
include "signin.php";
}
$conn->close();
}
else
echo"<scripttype='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?>
<body>
</body>
</html>
