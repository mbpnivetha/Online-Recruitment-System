
<?php
include_once 'db.php';
$username=$_POST['uid'];
$password=$_POST['pid'];
$email = $_POST['eid'];

$res=mysqli_query($conn,"INSERT into signup values('$username','$password','$email')");
if($res)
{
echo "<script type='text/javascript'>alert('Signed up successfully..!!');</script>";
include "sucsig.php";
}
?>
