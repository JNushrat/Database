<?php
$username='metro';
$password='metro12';

$db='(DESCRIPTION =
   (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
   (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = ORCL)
   )
)';
$connection = oci_connect('webuser', 'webuser12', 'localhost/XE');
//$connection = oci_connect($username, $password, $db);

if (!$connection) {
   $e = oci_error();
   echo htmlentities($e['message']);
}

$stmt = oci_parse($connection,
   "CREATE TABLE webuser.Human(Phone NUMBER(20) PRIMARY KEY,
   Name VARCHAR(20),Pass VARCHAR(20),Email VARCHAR(50),HumanId VARCHAR(25))");
if (!$stmt) {
   $e = oci_error($connection);
   echo htmlentities($e['message']);
}
$r = oci_execute($stmt);
if (!$r) {
   $e = oci_error($stmt);
   echo htmlentities($e['message']);
}else{

   echo  " Created tablenn";
}

$sql = "INSERT INTO webuser.Human VALUES(''01715936614', 'Mumu', 'Mumu999', 'mumu@gmail.com','Human01')";
   $stmt = oci_parse($connection, $sql);
if (!$stmt) {
   $e = oci_error($connection);
   echo htmlentities($e['message']);
}

$r = oci_execute($stmt);
if (!$r) {
   $e = oci_error($stmt);
   echo htmlentities($e['message']);
}else{

   echo " Added a rownn";
}
$sql = "INSERT INTO webuser.Human VALUES(''01715936615', 'Nushrat', 'Nush1234', 'nush@email.com', 'Human02')";

   $stmt = oci_parse($connection, $sql);

if (!$stmt) {
   $e = oci_error($connection);
   echo htmlentities($e['message']);
}
$r = oci_execute($stmt);
if (!$r) {
   $e = oci_error($stmt);
   echo htmlentities($e['message']);
}else{

   echo " Added a rownn";
}

?>