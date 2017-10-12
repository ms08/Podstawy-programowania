<?php

//
//          TRIANGLE
//

$data = [
    [[1,1,1],3], // 3 equals
    [[4,4,4],3],
    [[2,2,3],2], // 2 equals
    [[4,4,1],2],
    [[2,3,4],1], // different
    [[5,3,6],1],
    [[1,3,2],0], // impossible
    [[6,1,3],0],
    [[1,1,2],0]
];

function codeToMessage($code)
{
    switch ($code)
    {
        case 0:
            return "Impossible";
        case 3:
            return "Isosceles";
        case 2:
            return "Equilateral";
        case 1:
            return "Unequal";
    }
}

function constructTriangle($a,$b,$c)
{
    $s = ($a+$b+$c) / 2;

    if($s <= $a || $s <= $b || $s <= $c)     { $code = 0; }
    elseif($a == $b && $b == $c)             { $code = 3; }
    elseif($a == $b || $b == $c || $a == $c) { $code = 2; }
    else                                     { $code = 1; }

    return codeToMessage($code);
}

// parameters, expected, obtained, agreement

echo "-------------------------------------------------\n";
echo "| a | b | c |    Expected |      Result | Agree |\n";
echo "-------------------------------------------------\n";
foreach($data as $config) {
    $a = $config[0][0];
    $b = $config[0][1];
    $c = $config[0][2];
    $exp = codeToMessage($config[1]);
    $res = constructTriangle($a,$b,$c);
    $agree = ($exp == $res)?"True":"False";
    echo sprintf("| %d | %d | %d | %11s | %11s | %5s |\n",
        $a,$b,$c,$exp,$res,$agree
    );
}
echo "-------------------------------------------------\n";

//-------------------------------------------------
//| a | b | c |    Expected |      Result | Agree |
//-------------------------------------------------
//| 1 | 1 | 1 |   Isosceles |   Isosceles |  True |
//| 4 | 4 | 4 |   Isosceles |   Isosceles |  True |
//| 2 | 2 | 3 | Equilateral | Equilateral |  True |
//| 4 | 4 | 1 | Equilateral | Equilateral |  True |
//| 2 | 3 | 4 |     Unequal |     Unequal |  True |
//| 5 | 3 | 6 |     Unequal |     Unequal |  True |
//| 1 | 3 | 2 |  Impossible |  Impossible |  True |
//| 6 | 1 | 3 |  Impossible |  Impossible |  True |
//| 1 | 1 | 2 |  Impossible |  Impossible |  True |
//-------------------------------------------------
