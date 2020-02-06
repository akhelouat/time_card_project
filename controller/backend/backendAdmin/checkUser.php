<?php

function userPseudo($nom, $prenom){
    $first = substr($prenom, 0, 1);
    return ("{$first}{$nom}");
}