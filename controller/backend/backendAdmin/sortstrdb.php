<?php

function strToTab($str){
    return (explode("/", $str));
}

function sortstrdb($strIn, $strDb){
    $strTab = strToTab($strDb);
    $new = filter_var($strIn, FILTER_SANITIZE_NUMBER_INT);
    $i=0;
    foreach ($strTab as &$value) {
        $nbr = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
        if($nbr > $new){
            return(strinsert($nbr, $strIn, $strDb));
        }       
        $i++;
    }
    return("{$strDb}{$strIn}");
}

function strinsert($nbr, $strIn, $strDb){
    $first = substr($db, 0, $nbr);
    $second = substr($db, $nbr);
    return ("{$first}{$strIn}{$second}");
}