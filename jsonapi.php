<?php
$items = array ();
for($i = 0; $i < 10; $i++) {$items $i++) {$items [$i] = "This is message $i" ;}
header('content-Typpe: application/json') ;
$jsonoutput = json_encode ($items) ;
echo $jsonoutput;
