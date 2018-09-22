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
    background: black;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
	align : center;
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid black;
}

/* Set a style for the submit button */
.btn {
    background-color: black;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>

<script>
function myvalidate()
{
if(document.getElementById("fname").value=="")
{
alert("Name should not be empty");
document.getElementById('fname').focus();
return false;
}
else {
var name = document.getElementById("fname").value;
var pattern = /^[a-zA-Z\.]*$/;
if(!(pattern.test(name))){
	alert("Student Name: Only letters, whitespace and dot allowed");
		document.getElementById('fname').focus();
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

if(document.getElementById("address").value=="")
{
alert("Address should not be empty");
document.getElementById('address').focus();
return false;
}
if(isNaN(document.getElementById("contact").value)||(document.getElementById("contact").value.length!=10))
{
alert("contact number should not be empty, Its a 10 digit number");
document.getElementById('contact').focus();
return false;
}
if(document.getElementById("qual").value=="")
{
alert("Please select qualification");
document.getElementById('qual').focus();
return false;
}
if(document.getElementById("company").value=="")
{
alert("Please enter the company name");
document.getElementById('company').focus();
return false;
}
return true;
}
</script>
</head>
<body background="teal.jpg">
<center>
<form action="insertres.php" method="post" name="form" type="text/plain">
<h2>Candidate Data Form</h2>
<fieldset>
<legend>Details</legend>
<b>
<div class="input-container">
    <i class="fa fa-user icon"></i>
<input class="input-field" type='text' id='fname' name='fname'placeholder='First Name*'> <br />
</div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
<input class="input-field" type='text' id='lname' name='lname'placeholder='Last Name'> <br />
</div>
  <div class="input-container">
    <i class="fa fa-address-card-o icon"></i>
<textarea class="input-field" id='address' name='address' rows='5' cols='50'placeholder='Address*'></textarea> <br />
</div>
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
<input class="input-field" type='text' id='contact' name='contact'placeholder='Contact No* (Should be 10 digit number)' autofocus> <br />
</div>    
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
<input class="input-field" type='text' id='email' name='email' placeholder='e-mail id*'> <br />
</div>  
<div class="input-container">
<i class="fa fa-venus-mars icon"></i>
<input type='radio' id='gender1' name='gender' value='Male' checked>Male
<input type='radio' id='gender2' name='gender' value='Female'>Female <br/>
</div>
  <div class="input-container">
    <i class="fa fa-quora icon"></i>
<select class="input-field" id='qual' name='qual'placeholder='Qualification*'>
<option value=''>Select Qualification*</option>
<option value='SSLC'>SSLC</option>
<option value='HSC'>HSC</option>
<option value='UG'>UG</option>
<option value='PG'>PG</option>
</select>
</div>
  <div class="input-container">
    <i class="fa fa-quora icon"></i>
<select class="input-field" id='exp' name='exp'placeholder='Experience'>
<option value=''>Select Experience* </option>
<option value='Fresher'> 0 years</option>
<option value='1-2year'>1-2 years</option>
<option value='3-5years'>3-5 years</option>
<option value='more than 5 years'>More than 5 years</option>
</select>
</div>
<br>
  <div class="input-container">
    <i class="fa fa-pencil icon"></i>
<input type='checkbox' id='skill1' name='skill1' value='C'> C
<input type='checkbox' id='skill2' name='skill2' value='C++'> C++
<input type='checkbox' id='skill3' name='skill3' value='Java'> Java 
<input type='checkbox' id='skill4' name='skill4' value='Web Development'> Web Development languages <br />
<input type='checkbox' id='skill4' name='skill4' value='Python'> Python
<input type='checkbox' id='skill4' name='skill4' value='R'> R 

</div>
<div class="input-container">
    <i class="fa fa-address-card-o icon"></i>
<textarea class="input-field" id='achievements' name='achievements' rows='10' cols='50'placeholder='Achievements..... If  no achievements mention NIL'></textarea> <br />
</div>

<div class="input-container">
    <i class="fa fa-address-card-o icon"></i>
<textarea class="input-field" id='certifications' name='certifications' rows='3' cols='50'placeholder='Certifications..... If  no certifications mention NIL'></textarea> <br />
</div>

<div class="input-container">
    <i class="fa fa-handshake-o icon"></i>
<textarea class="input-field" id='company' name='company' rows='1' cols='50'placeholder='Company Name..... mention any one company to apply(TCS/CTS/INFOSYS).....All in Caps'></textarea> <br />
</div>
<p align='center'>
<input class='btn' type='submit' name='submit' onclick='return myvalidate()' value='Okay'>
</p><b>
</fieldset>
</form>
</center>
</body>
</html>
