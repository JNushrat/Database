<?php

$username = 'webuser';
$password = 'webuser12';
$connection_string='//localhost/XE';

$con = oci_connect($username, $password,$connection_string);

 if (!$con) {
      $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
 
?>