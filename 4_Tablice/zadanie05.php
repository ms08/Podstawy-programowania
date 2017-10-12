<?php

$data = [
    [[1,2,3,4,5],3],
    [[1,2,3,4,5],7]
];

function isElemInArray($elem,$array) {
    return in_array($elem,$array);
}

echo "-----------------------------\n";
echo "| array     | elem | exists |\n";
echo "-----------------------------\n";
foreach($data as $config) {
    echo sprintf("| %s | %4d | %6s |\n",implode(',',$config[0]),$config[1],isElemInArray($config[1],$config[0])?"true":"false");
}
echo "-----------------------------\n";
