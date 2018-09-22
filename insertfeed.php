<?php
include_once 'db.php';
$name=$_POST['uname'];
$mail=$_POST['mail'];
$positive_feedback=$_POST['pf'];
$negative_feedback=$_POST['nf'];

//$a=$_POST['n'];
//$c=$_POST['p'];
//$b=$_POST['e'];

//$res=mysqli_query($conn,"INSERT into ecsignupp values('$Name','$Password','$Email')");
//if(empty($a&&$c&&$b))
//{
//echo "<script type='text/javascript'>alert('Fill all the Details..!!');</script>";
//include "signupp1.php";
//}
//else
//{
mysqli_query($conn,"INSERT into feedback values('$name','$mail','$positive_feedback','$negative_feedback')");
echo "<script type='text/javascript'>alert('Thank you for your valuable feedback..!!');</script>";
//include "signupp1.php";
//}

?>
