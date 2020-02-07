<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=timecard,root');

    $db = null;
   } catch (PDOException $e) {
    print "Error !: " . $e->getMessage() . "<br/>";
    die();
   }
?>