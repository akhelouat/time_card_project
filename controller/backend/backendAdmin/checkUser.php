<?php
require("../../../model/dbconnect.php");
function userPseudo($nom, $prenom){
    $firstLetter = substr($prenom, 0, 1);
    return ("{$firstLetter}{$nom}");
}