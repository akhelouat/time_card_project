<?php
require("../../../model/dbconnect.php");
function userPseudo($name, $firstName){
    $firstNameFirstLetter = substr($firstName, 0, 1);
    return ("{$firstNameFirstLetter}{$name}");
}