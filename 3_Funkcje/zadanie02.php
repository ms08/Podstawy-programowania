<?php

//
//      PERFECT NUMBER
//

// test data

$data = [
    1 => true,
    6 => true,
    28 => true,
    496 => true,
    8128 => true,
    33550336 => true,
    8589869056 => true,
    137438691328 => true,
//    2305843008139952128 => true,
    2 => false,
    3 => false,
    15 => false,
    31 => false,
    788 => false,
    512 => false,
    2532 => false,
    7543 => false
];

function isPerfect($n)
{
    $divisorsSum=1;
    $sqrt = sqrt($n);

    for($i=2; $i < $sqrt; $i++)
    {
        if($n % $i == 0) {
            $divisorsSum +=$i+$n/$i;
        }
    }

    $divisorsSum += ($sqrt == (int)$sqrt && $sqrt !=1)?$sqrt:0;

    return $divisorsSum == $n;
}

function boolToString($bool)
{
    return $bool?"✓":"✗";
}

echo "------------------------------------------------\n";
echo "| number       | expected | result | agreement |\n";
echo "------------------------------------------------\n";
foreach($data as $val => $perfect){
    echo sprintf( "| %12d | %-10s | %-8s | %-11s | \n"  , $val ,boolToString($perfect),boolToString(isPerfect($val)),boolToString($perfect==isPerfect($val)));
}
echo "------------------------------------------------\n";

//------------------------------------------------
//| number       | expected | result | agreement |
//------------------------------------------------
//|            1 | ✓        | ✓      | ✓         |
//|            6 | ✓        | ✓      | ✓         |
//|           28 | ✓        | ✓      | ✓         |
//|          496 | ✓        | ✓      | ✓         |
//|         8128 | ✓        | ✓      | ✓         |
//|     33550336 | ✓        | ✓      | ✓         |
//|   8589869056 | ✓        | ✓      | ✓         |
//| 137438691328 | ✓        | ✓      | ✓         |
//|            2 | ✗        | ✗      | ✓         |
//|            3 | ✗        | ✗      | ✓         |
//|           15 | ✗        | ✗      | ✓         |
//|           31 | ✗        | ✗      | ✓         |
//|          788 | ✗        | ✗      | ✓         |
//|          512 | ✗        | ✗      | ✓         |
//|         2532 | ✗        | ✗      | ✓         |
//|         7543 | ✗        | ✗      | ✓         |
//------------------------------------------------
