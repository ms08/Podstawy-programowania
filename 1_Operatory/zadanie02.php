<?php

//
//          PYTHAGOREAN TRIANGLE
//

$data = [
    [[1, 1, 1], 0],
    [[12,14,3], 0],
    [[10,4, 7], 0],
    [[3, 4, 5], 1],
    [[5, 12,13],1],
    [[8, 15,17],1]
];

function isPythagoreanTriple($sides)
{
    sort($sides, SORT_NUMERIC);
    $max = array_pop($sides);
    return ($max**2 == ($sides[0]**2 + $sides[1]**2));
}

echo "----------------------------------------------------\n";
echo "|  a |  b |  c |    Expected |      Result | Agree |\n";
echo "----------------------------------------------------\n";
foreach($data as $config) {
    $a = $config[0][0];
    $b = $config[0][1];
    $c = $config[0][2];
    $exp = $config[1]?"Yes":"Not";
    $res = isPythagoreanTriple([$a,$b,$c])?"Yes":"Not";
    $agree = ($exp == $res)?"True":"False";
    echo sprintf("| %2d | %2d | %2d | %11s | %11s | %5s |\n",
        $a,$b,$c,$exp,$res,$agree
    );
}
echo "----------------------------------------------------\n";


//----------------------------------------------------
//|  a |  b |  c |    Expected |      Result | Agree |
//----------------------------------------------------
//|  1 |  1 |  1 |         Not |         Not |  True |
//| 12 | 14 |  3 |         Not |         Not |  True |
//| 10 |  4 |  7 |         Not |         Not |  True |
//|  3 |  4 |  5 |         Yes |         Yes |  True |
//|  5 | 12 | 13 |         Yes |         Yes |  True |
//|  8 | 15 | 17 |         Yes |         Yes |  True |
//----------------------------------------------------
