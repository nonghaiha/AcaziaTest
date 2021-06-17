<?php

$a = array(5,3,2,0,1,7);
$b = array();

foreach ($a as $key => $value){
    $b[$key] = $a[$key - 1] + $a[$key] + $a[$key + 1];
}

print_r($b);