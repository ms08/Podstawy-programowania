<?php

//
//      Area and Circuit
//

$data = [
    [1,1,1,4],
    [2,6,12,16],
    [9,5,45,28]
];

function areaAndCircuit($a,$b)
{
    echo sprintf("| %d | %d | %2d | %2d |\n",$a,$b,$a*$b,2*($a+$b));
}

echo "-------------------\n";
echo "| a | b |  ▮ |  ▯ |\n";
echo "-------------------\n";
foreach($data as $config) {
    areaAndCircuit($config[0],$config[1]);
}
echo "-------------------\n";

//-------------------
//| a | b |  ▮ |  ▯ |
//-------------------
//| 1 | 1 |  1 |  4 |
//| 2 | 6 | 12 | 16 |
//| 9 | 5 | 45 | 28 |
//-------------------
