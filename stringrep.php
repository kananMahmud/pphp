<?php

include_once 'srtingm.php';

$sobj = new Stringm;


$see = "Bangladesh is our Homeland, Bangladesh Bangladesh Bangladesh";
$finals = $sobj->fine($see);
//echo fine($see);
echo $finals;
?>
