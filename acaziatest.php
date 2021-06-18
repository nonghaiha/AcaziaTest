<?php

$a = array(4,0,1,-2,3);
$b = array();

foreach ($a as $key => $value){
    $key === 0 ? $prev = 0 : $prev = $a[$key - 1];
    $key === (count($a) - 1) ? $next = 0 : $next = $a[$key + 1];

    $b[$key] = $prev + $a[$key] + $next;
}

print_r($b);