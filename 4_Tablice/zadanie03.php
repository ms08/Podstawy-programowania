<?php

//
//          MAX IN TWO WAYS
//

$data = [
    1,2,4,5,6,56,76,3,5,2,8,17,21,675,3,43,5,6,7,345,67,57,465,4,3,54 // max = 675
];

function maxA($table) {
    $max = $table[0];

    foreach($table as $item) {
        $max = $item>$max?$item:$max;
    }

    return $max;
}

function maxB($table) {
    return max($table);
}

echo "| maxA : " . maxA($data) . " |\n";
echo "| maxB : " . maxB($data) . " |\n";

//| maxA : 675 |
//| maxB : 675 |
