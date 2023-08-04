<?php
//$username='OE';
//$password='pw';

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
   "CREATE TABLE webuser.Catalog(CatalogId VARCHAR(25) PRIMARY KEY,
   Journal VARCHAR(25), Publisher Varchar(25), Edition VARCHAR(25),
   Title Varchar(45), Author Varchar(25))");
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

$sql = "INSERT INTO webuser.Catalog VALUES('catalog1', 'Oracle Magazine',
   'Oracle Publishing', 'Nov-Dec 2004', 'Database Resource Manager',
   'Kimberly Floss')";
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
$sql = "INSERT INTO webuser.Catalog VALUES('catalog2', 'Oracle Magazine',
   'Oracle Publishing', 'March-April 2005',
   'Starting with Oracle ADF ', 'Steve Muench')";

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