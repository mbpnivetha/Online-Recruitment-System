<?php
include_once 'db.php';
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$addr=$_POST['address'];
$cont=$_POST['contact'];
$mail=$_POST['email'];
$gend=$_POST['gender'];
$qua=$_POST['qual'];
$exper=$_POST['exp'];
$skilla=$_POST['skill1'];
$skillb=$_POST['skill2'];
$skillc=$_POST['skill3'];
$skilld=$_POST['skill4'];
$ach=$_POST['achievements'];
$cert=$_POST['certifications'];
$company=$_POST['company'];

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
mysqli_query($conn,"INSERT into rescandi values('$firstname','$lastname','$addr','$cont','$mail','$gend','$qua','$exper','$skilla','$skillb','$skillc','$skilld','$ach','$cert','$company')");
echo "<script type='text/javascript'>alert('Resume Uploaded Sucessfully..!!');</script>";
//include "signupp1.php";
//}

?>
