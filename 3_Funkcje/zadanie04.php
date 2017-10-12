<?php

//
//      MAX 3
//

$data = [
    5 => [2,3,5],
    8 => [8,4,2],
    16 => [4,16,1],
    82 => [82,17,52],
    3 => [1,2,3],
    15 => [3,15,14]
];

function max2($a,$b)
{
    return $a>$b?$a:$b;
}

function max3($a,$b,$c)
{
    return max2($a,max2($b,$c));
}

// parameters, expected, obtained and agreement

echo "-------------------------------------\n";
echo "|   a |   b |   c | exp | cal | agr |\n";
echo "-------------------------------------\n";
foreach($data as $max => $input){
    $res = call_user_func_array('max3',$input);
    echo sprintf("| %3d | %3d | %3d | %3d | %3d | %5s |\n",$input[0],$input[1],$input[2],$max,$res,($max==$res)?"✓":"✗");
}
echo "-------------------------------------\n";

//-------------------------------------
//|   a |   b |   c | exp | cal | agr |
//-------------------------------------
//|   2 |   3 |   5 |   5 |   5 |   ✓ |
//|   8 |   4 |   2 |   8 |   8 |   ✓ |
//|   4 |  16 |   1 |  16 |  16 |   ✓ |
//|  82 |  17 |  52 |  82 |  82 |   ✓ |
//|   1 |   2 |   3 |   3 |   3 |   ✓ |
//|   3 |  15 |  14 |  15 |  15 |   ✓ |
//-------------------------------------
