<html>
<head>
<title>LOGIN</title>
</head>
<style type="text/css">

li a {
  display:block;
  width: 80px;
  background-color:#B0E0E6;
}

.login-form-title {
    font-size: 30px;
    font-weight: 700;
    padding-bottom: 10px;
    text-align: center;
    filter: drop-shadow(5px 3px 5px black);
    -webkit-filter: drop-shadow(5px 3px 5px black);
}
.login-form-container {
    position: relative;
     padding-top: 10px;
     padding-right:30px;
     padding-bottom: 10px;
     padding-left: 30px;
     width: 350px;
	margin-top:2px;
    margin-right:100px;
    margin-bottom:30px;
    margin-left:450px;
    color:lavenderblush;
  border-radius: 15px;
  background-color: rgb(255 240 245/ 55%);
  box-shadow: rgb(0 0 0 / 30%) 0 5px 15px;
}
.p1 {
  font-family: 'Trebuchet MS', sans-serif;
}
.p2 {
  font-family: 'Times New Roman', serif;
}
p.small {
  font-variant: small-caps;
}
p.thick {
  font-weight: bold;
}
body {
  margin:20px;
  background-image:url("../asset/flight.jpg");
}

  h1{
	  
     color:lightpink;
	 font-size:30px;
  }
h2{
	  color:black;
	  font-size:15px;
  } 

h3{
	  color:blue;
	  font-size:15px;
  }  
  </style>
<body align = "center">
<!--<form method="post" action="../controller/logintest.php" enctype="">-->
<form method="post" action="../controller/logintest.php" enctype="" name = "myform" onsubmit="return validateForm()">
<legend><div class="login-form-container"><h1 class="login-form-title">Login</h1></legend>
<table>
<tr>
<!--<td>Email</td>
<tr></tr>
<td><input type="text" name="email" placeholder="example123@gmail.com" ></td>
</tr> -->
<td>Phone Number</td>
<tr></tr>
<td><input type="text" id="phonenumber" name="phonenumber" value="" pattern= "(?=.*\d).{11}" 
title="In Bangladesh Phone Number contains 11 digits"  required></td>
</tr>
<tr>
<td>Username</td>
<tr></tr>
<td><input type="text" name="name" value="" ></td>
</tr>
<tr>
<td>Password</td>
<tr></tr>
<td><input type="password" id ="pass" name="pass" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, 
and at least 8 or more characters" required></td>
</tr>
<tr>
<td>User Type</td>
<tr></tr>
<td>
<input type="radio" name="gender" value="" > Admin<br>
<input type="radio" name="gender" value="" > Manager<br>
<input type="radio" name="gender" value="" > Worker<br>
<input type="radio" name="gender" value="" > Public<br>
</td>
<tr>
<td>
<input type="submit" name="Login" value="Login"><a href="../view/UserHome.php">
<a href="../view/Cover.php"><input type="button" name="" value="Cancel"></a>
</td>
</tr>
</table>
</div>
<form action="/action_page.php">
<script>
var Email= document.getElementById("email");
///var Phone= document.getElementById("phonenumber");
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

 
///// Phone Number Validation/////
var Phone= document.getElementById("phonenumber");
Phone.onkeyup = function() {
var numbers = /[0-9]/g;
  if(Phone.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
   // Validate length
  if(Phone.value.length <=11) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
 }
 
</script>

</form>
</body>
</html>


