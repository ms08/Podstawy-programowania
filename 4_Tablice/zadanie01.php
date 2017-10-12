<?php

$data = [
    1,2,3,"a","b","c"
];

function printTable($array) {
    echo "---------------------\n";
    foreach($array as $key => $val) {
        echo "| key : " . $key . " | val : " . $val . " |\n";
    }
    echo "---------------------\n";
}

printTable($data);

//---------------------
//| key : 0 | val : 1 |
//| key : 1 | val : 2 |
//| key : 2 | val : 3 |
//| key : 3 | val : a |
//| key : 4 | val : b |
//| key : 5 | val : c |
//---------------------
