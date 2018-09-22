
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
<script>
function myvalidate()
{
if(document.getElementById("uname").value=="")
{
alert("Name should not be empty");
document.getElementById('uname').focus();
return false;
}
else {
var name = document.getElementById("uname").value;
var pattern = /^[a-zA-Z\.]*$/;
if(!(pattern.test(name))){
	alert(" Name: Only letters, whitespace and dot allowed");
		document.getElementById('uname').focus();
		return false;
}
}

if(document.getElementById("email").value=="")
{
alert("Email should not be empty");
document.getElementById('email').focus();
return false;
}
else {
var email = document.getElementById("email").value;
var pattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
if(!(pattern.test(email))){
	alert("Email Id :Only letters with lowercase");
		document.getElementById('email').focus();
		return false;
}
}

</script>



</head>
<body>
<center>
<form action="insertfeed.php" method="post" name="form" type="text/plain" style="max-width:500px;margin:auto">
  <h2>Feedback Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname" id="uname">
  </div>
<br><br>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" id="email">
  </div>
<br><br>  
  <div class="input-container">
    <i class="fa fa-thumbs-up icon"></i>
    <input class="input-field" type="text" placeholder="Positive Feedback" name="pf" id="pf">
  </div>
<br><br>
  <div class="input-container">
    <i class="fa fa-thumbs-down icon"></i>
    <input class="input-field" type="text" placeholder="Negative Feedback" name="nf" id="nf">
  </div>
<br><br>
  <button type="submit"  name="submit"  value="Okay" onclick='return myvalidate()'> Register Feedback</button>
</form>
</center>
</body>
</html>
