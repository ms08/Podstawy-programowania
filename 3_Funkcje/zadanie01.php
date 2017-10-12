<?php

//
//          HOTEL
//

// Calculating cost of rent

// set of data to test

$data = [
    0 => 0,
    1 => 200,
    2 => 360,
    3 => 540,
    4 => 640,
    7 => 1070,
    8 => 1150,
    16 => 2300,
    100 => 14300
];

// body of function

function rentCost($days)
{
    // configuration of prices

    $config = [
        "0" => 200,
        "1" => 180,
        "2" => 160,
        "next" =>150,
        "discount" => 50
    ];

    // log of number of days with base 2 - it is parameter in pricing table
    $power = (int)log($days,2);

    // pricing table depends from number of days in logarithmic way, but after 15 day, this dependence is broken
    $priceByDay = isset($config[$power])?$config[$power]:$config["next"];

    // discount depend linear from number of full weeks
    $discount = ((int) ($days / 7))*$config["discount"];

    // calculating final price
    return $days*$priceByDay - $discount;
}

// rendering view of result

echo "----------------------------------------------\n";
echo "| days  | expected | calculated | accordance |\n";
echo "----------------------------------------------\n";
foreach ($data as $days => $price) {
    $mark = ($price==rentCost($days))?"✓":"✗";
    echo "| " . $days . "\t| " . $price . "\t   | " . rentCost($days) . "  \t| " . $mark . "\t     |\n";
}
echo "----------------------------------------------\n";

//----------------------------------------------
//| days  | expected | calculated | accordance |
//----------------------------------------------
//| 0     | 0        | 0          | ✓          |
//| 1     | 200      | 200        | ✓          |
//| 2     | 360      | 360        | ✓          |
//| 3     | 540      | 540        | ✓          |
//| 4     | 640      | 640        | ✓          |
//| 7     | 1070     | 1070       | ✓          |
//| 8     | 1150     | 1150       | ✓          |
//| 16    | 2300     | 2300       | ✓          |
//| 100   | 14300    | 14300      | ✓          |
//----------------------------------------------
