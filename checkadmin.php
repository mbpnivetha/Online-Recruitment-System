<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Signin check Page</title>
</head>
<body>
<style>
body{
 background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("db.jpg");
height: 90vh; 
/* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<div style="color: #66ffff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 22px;">
<div class="table-title">
<h3>Signin details</h3>
</div>
<table class="table-fill" border="3px"  style=" center;">
<thead>
<tr>
<th class="text-left">Username</th>
<th class="text-left">Password</th>
</tr>
</thead>
<?php
if(isset($_POST['signin']))
{
include_once "db.php";
$t=mysqli_query($conn,"SELECT * FROM signin");
if(mysqli_num_rows($t)!=0)
{
while($r=mysqli_fetch_array($t))
{
$Username=$r['username'];
$Password=$r['password'];
    echo '<tr>
<td>'.$Username.'</td>
<td>'.$Password.'</td>
</tr>';
}
 exit();
}
}
?>
</table>
</body>
</html>