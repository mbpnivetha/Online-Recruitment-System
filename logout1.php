<?php
if(isset($_POST['signin']))
{
include_once "db.php";
$Name=$_POST['p'];
$Password=$_POST['n'];
$a=$_POST['p'];
$b=$_POST['n'];
$p=mysqli_query($conn,"SELECT * FROM signin1 WHERE username='$a' AND password='$b'");
//$res=mysqli_query($conn,"SELECT * FROM signin WHERE username='$a' AND password='$b'") or die("Signed Out unSucessfully..!!");
if(empty($a&&$b))
{
echo "<script type='text/javascript'>alert('Fill all the Details..!!');</script>";
include "signout1.php";
}
elseif(mysqli_num_rows($p)!=0)
{
//mysqli_query($conn,"DELETE FROM signin WHERE username='$a' AND password='$b'");
echo "<script type='text/javascript'>alert('Signed Out Sucessfully..!!');</script>";
include "link.php";
}
else
{
echo "<script type='text/javascript'>alert('Signed Out UnSucessfully..!!');</script>";
include "signout1.php";
}
}
?>
