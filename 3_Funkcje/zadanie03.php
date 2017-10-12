<?php

//
//          Money to coins
//

// test data

$data = [
    188 => [18,1,1,1],
    3200 => [320,0,0,0],
    15 => [1,1,0,0],
    79 => [7,1,2,0],
    3 => [0,0,1,1],
    24 => [2,0,2,0]
];

// function

function convertToCoins($money)
{
    $config = [10,5,2,1];

    $result = [];

    foreach($config as $base => $value) {
        $portion = (int) ($money / $value);
        $money -= $portion * $value;
        $result[] += $portion;
    }

    return $result;
}

// rendering output

echo "---------------------------------------\n";
echo "| money |  10 | 5 | 2 | 1 | agreement |\n";
echo "---------------------------------------\n";
foreach($data as $money => $coins) {
    echo vsprintf("| %5d | %3d | %d | %d | %d | %9s |\n",array_merge([$money],convertToCoins($money),[($coins===convertToCoins($money)?"true":"false")]));
}
echo "---------------------------------------\n";

//---------------------------------------
//| money |  10 | 5 | 2 | 1 | agreement |
//---------------------------------------
//|   188 |  18 | 1 | 1 | 1 |      true |
//|  3200 | 320 | 0 | 0 | 0 |      true |
//|    15 |   1 | 1 | 0 | 0 |      true |
//|    79 |   7 | 1 | 2 | 0 |      true |
//|     3 |   0 | 0 | 1 | 1 |      true |
//|    24 |   2 | 0 | 2 | 0 |      true |
//---------------------------------------

