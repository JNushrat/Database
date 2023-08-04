<?php 
	session_start();
	require_once("../model/connect.php");
	//require_once ("../model/usersModel.php");

	//print_r($_GET);  
	//$email = $_POST['email'];
	$phonenumber= $_POST['phonenumber'];
	$name = $_POST['name'];
	$pass = $_POST['pass'];

	if($phonenumber == null || $name == null ||$pass == null)
	{
		echo "null phonenumber/username/password";
	}
	elseif( !empty($phonenumber) && !empty($name))
	{
		
	//$status = signin($phonenumber, $name, $pass );
		
		//if($status){
			//$_SESSION['status'] = true;
			//setcookie('status', 'true', time()+3600, '/');
			sleep(2);
			$_SESSION['phonenumber']=$phonenumber ;
			$_SESSION['name']=$name;
			$_SESSION['pass']=$pass;
			header('location: ../view/UserHome.php');
		//}
		//else{
			//echo "Invalid Phone Number, Username or Password";
		//}
	}
	else{
		echo "Enter Valid Info";
	}


		/*if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/Home page.php');
		}else{
			echo "invalid user";
		}

		
		/*if($phoneNumber == "" && $password == "")
		{
			$_SESSION['status'] = true;
			header('location: ../view/Home page.php');
		}
	   else
	   {
		$file = fopen('../model/user.txt', 'r');
		
		while (!feof($file)) 
		{
			$data=fgets($file);
			$user = explode('|', $data);
			if($phoneNumber == trim($user[1]) && $password == trim($user[3]))
			{
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../view/Home page.php');
			}
		}
	  }	
	  
	  $status = login($phoneNumber, $password, $username,);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/Homepage.php');
		}else{
			echo "invalid user";
		}
		
		echo "invalid user";*/
	

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/
?>