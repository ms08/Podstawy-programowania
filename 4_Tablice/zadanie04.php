<?php

$data = [1,2,3,4,5];

function getValuesBelowMean($array) {
    $res = [];
    $average = array_sum($array) / count($array);
    foreach($array as $item) {
        if($item < $average) { $res[]=$item; }
    }
    return $res;
}

echo "Below average: ".implode(",",getValuesBelowMean($data))."\n";

// Below average: 1,2