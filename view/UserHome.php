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
<h1><div><p class="small">Manager Panel </p></div></h1>
<script>
document.write(Date());
</script> 
<h2><p class="small">Welcome   <?php echo $_SESSION["name"]; ?></p></h2>

<table>
<tr>
<td><li><a href="../view/GroupInfo.html"><p class="p1">Flight Number</a><a href="../view/changeInfo.html"></a></td>
<td><li><a href="../view/GroupInfo.html"><p class="p1">Stations Name</a><a href="../view/changeInfo.html"></a></td>
<td><li><a href="../view/GroupInfo.html"><p class="p1">Flight Schedule</a><a href="../view/changeInfo.html"></a></td>
<td><li><a href="../view/GroupInfo.html"><p class="p1">Flight Cost</a><a href="../view/changeInfo.html"></a></td>
<td><li><a href="../view/GroupInfo.html"><p class="p1">Ticket Info</a><a href="../view/ticketlist.php"></a></td>
<td><li><a href="../view/AdminList.php"> <p class="p1"> View Administartion</a></td>
<td><li><a href="../controller/logout.php"><p class="p1"> logout</li></p></a></td>
</tr>
</table>

</ul> 
</body> 
</html>
