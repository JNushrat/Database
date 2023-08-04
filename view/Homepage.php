<?php 
	session_start();
	if(isset($_COOKIE['status'])){
    require_once("../model/db.php");
	require_once("../model/usersModel.php");}
	///require_once("../asset/style.css");
?>
<!DOCTYPE html>
<html lang="en"> 
<head> 
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<style type="text/css">
ul {
  list-style-type:square;
  margin: 10;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom:0px;
  padding-left: 550px;
}

li a {
  display:block;
  width: 80px;
  background-color:#B0E0E6;
}
div {
  border: 1px dashed green;
  background-color:skyblue;
  padding-top: 10px;
  padding-right:10px;
  padding-bottom: 40px;
  padding-left: 10px;
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

<body align ="center">
<h1><div><p class="small">Home Page</p></div></h1>
<script>
document.write(Date());
</script> 
<h2><p class="small">Welcome   <?php echo $_SESSION["username"]; ?></p></h2>
<ul>

<li><a href="../view/Profile.php"><p class="p1">Profile</a><a href="../view/changeprofile.php"></li></p></a>
<li><a href="../view/GroupInfo.html"><p class="p1">Bus info</a><a href="../view/changeInfo.html"></li></p></a>
<li><a href="../view/ModeratorsList.php"><p class="p1">View Managers</li></p></a>
<li><a href="../view/AdminList.php"> <p class="p1"> View Administartion</li></p></a>
<li><a href="../view/Seller.php"> <p class="p1"> View Workers</li></p></a>
<li><a href="../view/Buyer.php"><p class="p1">  View Users</li></p></a>
<li><a href="../view/Memberadd.php"><p class="p1">  Add Members</li></p></a>
<li><a href="../view/Rmvmbr.php"><p class="p1">Remove Member</li></p></a>
<!--<li><a href="../view/rmvmmbr.php"><p class="p1">Remove Member</li></p></a>-->
<li><a href="../controller/logout.php"><p class="p1"> logout</li></p></a>
</ul> 
</body> 
</html>
