<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In Page</title>
</head>
<body>
	<style>
body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("back3.jpg");
   height: 100vh; 
/* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<nav>
<ul>
<li><a href="signupp1.php"  style="color: #99ffcc; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">SignUp</a></li></ul>
</nav>
<div  style="color: #99ffcc; font-family: 'Lucida Calligraphy', sans-serif;font-size: 22px;">
<center><h1>Please Sign In here..(Recruiter)!!!</h1></center>
<form action="logemail1.php" method="post" name="form" type="text/plain">
<center>Name : <input type="text" name="n" placeholder="Enter the Username.."></center><br>	
<center>Email : <input type="email" name="e" placeholder="Enter your Email id.."></center><br>
<center>Password : <input type="password" name="p" placeholder="Enter your Password.."></center><br>
<center><button type="submit" name="signin" class="button_1">SignIn</button><button>Cancel</button></center><br>
</div>
</form>
</body>
</html>
