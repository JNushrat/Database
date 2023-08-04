<?php 
    require_once "connect.php";
	
	 function signup($phonenumber,$name,$pass,$email,$cpassword){
        $connection = getconnection();
		$sql = "insert into public (phonenumber,name,pass,email,cpassword) values ('$phonenumber', '$name', '$pass','$email','$cpassword')";
		
        if(mysqli_query($connection, $sql)){
            return true;
        }else{
            return false;
        }
    }


    function signin($phonenumber,$name, $pass ){
        //$connection = getconnection();
		$sql = "select * from public where phonenumber='{$phonenumber}' and name = '{$name}' and pass='{$pass}'";
		$res= mysqli_query($connection,$sql);
		$count = mysqli_num_rows($res);

        if($count > 0)
		{
            return true;
        }
		else
		{
            return false;
        }
    }
	
	 function addSeller($email,$phonenumber,$username){
        $conn = getConnection();
		$sql = "insert into seller (email,phonenumber,username) values ('$email', '$phonenumber', '$username')";
		//$sql = "insert into seller (username, email, phonenumber) values ('$username','$email', '$phonenumber')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }
	
	 function addBuyer($email,$phonenumber,$username){
        $conn = getConnection();
		$sql = "insert into buyer (email,phonenumber,username) values ('$email', '$phonenumber', '$username')";
		//$sql = "insert into seller (username, email, phonenumber) values ('$username','$email', '$phonenumber')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }
	
	function addUser($email,$phonenumber,$username){
        $conn = getConnection();
		$sql = "insert into user (email,phonenumber,username) values ('$email', '$phonenumber', '$username')";
		//$sql = "insert into seller (username, email, phonenumber) values ('$username','$email', '$phonenumber')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }
	
	function showSeller($email,$phonenumber,$username){
        $conn = getConnection();
		$sql = "select * from seller where email='{$email}' and phonenumber = '{$phonenumber}' and username = '{$username}'";
		$res= mysqli_query($conn, $sql);
		$count = mysqli_num_rows($res);

        if($count > 0)
		{
            return true;
        }
		else
		{
            return false;
        }
    }
    function removeSeller($phonenumber){
        $conn = getConnection();
		$sql= "DELETE FROM seller WHERE phonenumber='$phonenumber'";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }
	
	function removeBuyer($phonenumber){
        $conn = getConnection();
		$sql= "DELETE FROM buyer WHERE phonenumber='$phonenumber'";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }
    function removeUser($phonenumber){
        $conn = getConnection();
		$sql= "DELETE FROM user WHERE number='{$phonenumber}'";
        $res= mysqli_query($conn, $sql);
		$count = mysqli_num_rows($res);

        if($count > 0)
		{
            return true;
        }
		else
		{
            return false;
        }
    }
	function viewProfile($phoneNumber,$username){
        $conn = getConnection();
	   $sql = "SELECT * FROM manager WHERE  and phonenumber='{$phoneNumber}' and username= '{$username}'";
       $res = mysqli_query($conn, $sql);
       $count = mysqli_num_rows($res);
	   $row=array();

        if($count > 0) {
			 return true;
            //$row = mysqli_fetch_assoc($res);
        }
        
        mysqli_close($conn);
        return $row;
    }



?> 