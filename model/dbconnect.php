<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=timecard','root', '');

}
catch (PDOException $e)
{
    print "Error : " . $e->getMessage() . "<br/>";
    die();
}
?>