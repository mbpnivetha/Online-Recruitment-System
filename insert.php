<?php
include_once 'db.php';
$Name=$_POST['n'];
$Password=$_POST['p'];
$Email=$_POST['e'];
$a=$_POST['n'];
$c=$_POST['p'];
$b=$_POST['e'];
//$res=mysqli_query($conn,"INSERT into ecsignupp values('$Name','$Password','$Email')");
if(empty($a&&$c&&$b))
{
echo "<script type='text/javascript'>alert('Fill all the Details..!!');</script>";
include "signupp.php";
}
else
{
mysqli_query($conn,"INSERT into ecsignupp values('$Name','$Password','$Email')");
echo "<script type='text/javascript'>alert('Signed Up Sucessfully..!!');</script>";
include "signupp.php";
}

?>
