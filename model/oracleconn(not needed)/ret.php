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
$stmt = oci_parse($connection, "SELECT * from webuser.CATALOG
   WHERE JOURNAL=:journal");

$journal='Oracle Magazine';
oci_bind_by_name($stmt, ":journal", $journal);

$r = oci_execute($stmt);

$nrows = oci_fetch_all($stmt, $results);

if($nrows>0){
echo "<table border><tr><th>Catalog

Id</th><th>Journal</th><th>Publisher</th><th>Edition</th>
   <th>Title</th><th>Author</th></tr>";

for ($i = 0; $i < $nrows; $i++) {
   echo "<tr>n";
   foreach ($results as $data) {
      echo "<td>$data[$i]</td>n";
   }
   echo "</tr>n";
}

echo "</table>";

}

?>