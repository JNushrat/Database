<?php

$username="system";
$password="Tiger02";
$dbname="localhost/XE";

$c=oci_connect($username , $password, $dbname);

if(!$c){
	echo "Failed";
}
else{
	echo "Successful";
}
?>

