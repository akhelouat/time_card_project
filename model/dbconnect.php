<?php
$db = new PDO('mysql:host=localhost;dbname=timecard, , ,');
if ($db->connect_errno) {
    $errno=$db;
    $error=$db->connect_error;
    echo "Fail when connecting to MariaDB : (" . $errno . ")
   " . $error;
   }
?>