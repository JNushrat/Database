<?php 
	session_start();
	require_once("../model/connect.php");
	//require_once("../model/usersModel.php");

	
   if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	$phonenumber= ($_POST['phonenumber']);
	$name = ($_POST['name']);
	$pass = ($_POST['pass']);
	$email = ($_POST['email']);
	$cpassword=($_POST['cpassword']);
	
	}
	
	if($phonenumber== null || $name == null || $pass == null || $email == null|| $cpassword == null )
	{
		echo "null email/username/phoneNumber/password/confirmpassword";
	}
	else if($pass != $cpassword){
		echo " Confirm password doesn't match";}
		
		
   elseif(!empty($phonenumber) && !empty($name) && !empty($email))
   {
	   
	   
	   
	//$sql = "insert into public (phonenumber,name,pass,email) values ('$phonenumber', '$name', '$pass', '$email')";
    //$status = signup($phonenumber, $name, $pass, $email, $cpassword);
		
		//if($status){
			//$_SESSION['status'] = true;
            //setcookie('status', 'true', time()+3600, '/');
			sleep(2);
			echo"please Wait a Moment";
			header("Location: ../view/login.php");
			// echo "Account Created Successfully";


		//}
		//else 
		//{
			//echo "Something went wrong! or This Phone Number Already Exist";

		//}	
			
    } 
 else {
	      echo "Enter Valid Info!";
 }
		

?>