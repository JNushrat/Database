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
div {
  border: 1px dashed green;
  background-color:skyblue;
  padding-top: 10px;
  padding-right:30px;
  padding-bottom: 10px;
  padding-left: 30px;
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
  border: 1px dotted black;
   background: linear-gradient(to bottom, #99ccff 20%, #ccccff 69%);
}

  h1{
	  
     color:darkblue;
	 font-size:30px;
  } 
  </style>
<body align = "center">
<!--<form method="post" action="../controller/logintest.php" enctype="">-->
<!--<form method="post" action="../controller/logintest.php" enctype="" name = "myform" onsubmit="return validateForm()">-->
<legend><h1>Ticket Form</h1></legend>
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
<td><input type="text" name="username" value="" ></td>
</tr>
<tr>
<td>From</td>
<tr></tr>
<td><input type="text" name="from" value="" ></td>
</tr>
<tr>
<td>To</td>
<tr></tr>
<td><input type="text" name="to" value="" ></td>
</tr>
<tr>
<td>Date</td>
<tr></tr>
<td><input type="date" name="date" value="" ></td>
</tr>
<td>Time</td>
<tr></tr>
<td><input type="time" name="time" value="" ></td>
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
<a href="../view/UserHome.php"><input type="submit" name="Submit" value="Submit">
<a href="../view/Cover.php"><input type="button" name="" value="Cancel"></a>
</td>
</tr>
</table>
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


