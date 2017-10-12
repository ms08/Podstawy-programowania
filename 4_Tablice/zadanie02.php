<?php

$matrix = [
    [1,2,4,5,6],
    [6,5,4,3,2],
    [2,3,4,5,1],
    [2,2,4,1,2],
    [3,2,4,6,1]
];

function printMatrix($matrix) {
    foreach ($matrix as $row) {
        echo "| ";
        foreach($row as $value) {
            echo $value. " ";
        }
        echo "|\n";
    }
}

function trace($matrix) {
    $trace = 0;
    foreach($matrix as $nr => $row) {
        $trace += $row[$nr];
    }
    return $trace;
}

echo "-------------\n";
printMatrix($matrix);
echo "-------------\n";
echo "> trace: " . trace($matrix). " <\n";
echo "-------------\n";

//-------------
//| 1 2 4 5 6 |
//| 6 5 4 3 2 |
//| 2 3 4 5 1 |
//| 2 2 4 1 2 |
//| 3 2 4 6 1 |
//-------------
//> trace: 12 <
//-------------
